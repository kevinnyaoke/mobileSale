<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Phones;
use App\User;
use App\Customer;

class UserController extends Controller
{
public  function viewphones(){
     $phones=Phones::orderBy('created_at','asc')->paginate(100);
     return view('user.viewphones',['phones'=>$phones]);
}
public  function resetpassword(){
    return view('user.resetpassword');
}
public  function updatepassword(Request $request){
    // Validate the request
    $this->validate($request, [
        'currentpass' => 'required|min:3',
        'newpass' => 'required|min:3',
        'repass' => 'required|min:3',
    ]);
    //Get the current authenticated user password
    $currentpass = auth()->user()->password;
    //Check if passwords match
    if (!Hash::check($request['currentpass'], $currentpass)) {
        return redirect()->back()->with('error', 'Sorry the entered current password is wrong.');
    } elseif ($request->input('newpass') !== $request->input('repass')) {

        return redirect()->back()->with('error', 'Sorry the new passwords don\'t match.');
    }
//Update password
    $id = auth()->user()->id;
    $currentUser = User::findOrFail($id);

    $currentUser->password = Hash::make($request->input('newpass'));
    $currentUser->save();
    return redirect()->back()->with('success','Password changed ,You must logout to login in with  new passoword');
}
public  function  sell(int $id){
    $phone=Phones::find($id);
    return view('user.sell',['phone'=>$phone]);
}
public  function phonesubmit(Request $request){
    $request->validate([
        'cash'=>'required',
        'amount'=>'required',
        'serial'=>'required|unique:customers',
        'name'=>'required',
        'phonenumber'=>'required',
    ]);
    $cash=$request->input('cash');
    $amount=$request->input('amount');
    $buyingprice=$request->input('buyingprice');
    $sellingprice=$request->input('sellingprice');
    $commission=$request->input('commission');
    $userid=$request->input('userid');
    $phoneid=$request->input('phoneid');
    $seller=$request->input('seller');
    $name=$request->input('name');
    $phonenumber=$request->input('phonenumber');
    $item=$request->input('item');
    $serial=$request->input('serial');
if($amount>$cash){
    return redirect()->back()->with('error','Amount cannot be greater than cash');
}
if($amount<$sellingprice){
    return redirect()->back()->with('error','Amount cannot be less than min selling price');
}

    $balance=$cash-$amount;
    $profit=$amount-$buyingprice;
    $portion=(20/100) * $profit;
    $newcommission=$portion+$commission;
    
$phone=Phones::find($phoneid);
$user=User::find($userid);
if (!$phone){
    return redirect()->back()->with('error','No such phone in the system');
}


$user->commission=$newcommission;
$user->update();

Customer::create([
    'name'=>$name,
    'phone'=>$phonenumber,
    'item'=>$item,
    'serial'=>$serial,
    'buyingprice'=>$buyingprice,
    'sellingprice'=>$sellingprice,
    'seller'=>$seller,
    'amount'=>$amount,
    'cash'=>$cash,
    'change'=>$balance,
]);
$phone->delete();
$customer=Customer::where('serial',$serial)->first();
return view('user.print',['customer'=>$customer]);
}
public function viewcustomer(){
    $customer=Customer::orderBy('id','desc')->paginate(10);
    return view('User.viewcustomer',['customer'=>$customer]);
}
}
