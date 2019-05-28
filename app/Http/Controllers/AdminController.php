<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Phones;
use App\Admin;
use App\Customer;
class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth:admin');
    }
    public function index(){
        $users=User::count();
        $phones=Phones::count();
        $customer=Customer::count();
        return view('admin.home',['users'=>$users,'phones'=>$phones,'customer'=>$customer]);
    }
    function addemployee(){
        return view('admin.newuser');
}

    /**
     * @param Request $request
     */
    public  function submitemployee(Request $request){
$request->validate([
        'name'=>'required',
        'phone'=>'required',
        'email'=>'required|unique:Users',
    ]);
$name=$request->input('name');
$email=$request->input('email');
$gender=$request->input('gender');
$phone=$request->input('phone');
$password=Hash::make($request->input('phone'));
$commission=$request->input('commission');

User::create([
    'name'=>$name,
    'email'=>$email,
    'gender'=>$gender,
    'phone'=>$phone,
    'password'=>$password,
    'commission'=>$commission,
]);
return redirect()->back()->with('success','New user registered successfully');
}
public  function viewemployee(){
        $users=User::orderBy('id','asc')->paginate(100);
        return view('admin.viewemployee',['users'=>$users]);
}
public  function deleteuser(int $id){
$delete=User::find($id);
$delete->delete();

return redirect()->back()->with('success','User has been deleted');
}
public  function addphone(){
        return view('admin.addphone');
}
public  function submitphone(Request $request){
        $request->validate([
            'name'=>'required',
            'serial'=>'required|unique:Phones',
            'sellingprice'=>'required',
            'buyingprice'=>'required',
        ]);
        $name=$request->input('name');
        $serial=$request->input('serial');
        $buyingprice=$request->input('buyingprice');
        $sellingprice=$request->input('sellingprice');

        Phones::create([
            'name'=>$name,
            'serial'=>$serial,
            'buyingprice'=>$buyingprice,
            'sellingprice'=>$sellingprice,
        ]);
        return redirect()->back()->with('success','New Phone added successfully');
}
public  function viewphones(){
        $phones=Phones::orderBy('id','asc')->paginate(100);
        return view('admin.viewphones',['phones'=>$phones]);
}
public  function deletephone(int $id){
        $phone=Phones::find($id);
        $phone->delete();
        return redirect()->back()->with('success','Phone deleted');
}
public  function edituser(int $id){
        $user=User::find($id);
        return view('admin.edituser')->with('user',$user);

}
public  function updateuser(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
        ]);
      $id=$request->input('id');
      $name=$request->input('name');
      $email=$request->input('email');
      $phone=$request->input('phone');
      $gender=$request->input('gender');

      $user=User::find($id);
      if(!$user){
          return redirect()->back()->with('error','No such user');
      }
      $user->name=$name;
      $user->email=$email;
      $user->phone=$phone;
      $user->gender=$gender;
      $user->update();
      return redirect()->back()->with('success','User details updated successfully');
}
public  function editphone(int $id){
        $phone=Phones::find($id);
        return view('admin.editphone',['phone'=>$phone]);
}
public  function updatephone(Request $request){
        $request->validate([
            'name'=>'required',
            'serial'=>'required',
            'buyingprice'=>'required',
            'sellingprice'=>'required',
        ]);
        $id=$request->input('id');
        $name=$request->input('name');
        $serial=$request->input('serial');
        $buyingprice=$request->input('buyingprice');
        $sellingprice=$request->input('sellingprice');
        $phone=Phones::find($id);
        if(!$phone){
            return redirect()->back()->with('error','No such phone in the system');
        }
        $phone->name=$name;
        $phone->serial=$serial;
        $phone->buyingprice=$buyingprice;
        $phone->sellingprice=$sellingprice;
        $phone->update();
        return redirect()->back()->with('success','Phone updated!');
}
public  function resetpassword(){
        return view('admin.resetpassword');
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
    $currentUser = Admin::findOrFail($id);

    $currentUser->password = Hash::make($request->input('newpass'));
    $currentUser->save();
    return redirect()->back()->with('success','Password changed ,You must logout to login in with  new passowrd');
}
public function viewcustomer(){
    $customer=Customer::orderBy('id','desc')->paginate(10);
    
    return view('Admin.viewcustomer',['customer'=>$customer]);
}

}
