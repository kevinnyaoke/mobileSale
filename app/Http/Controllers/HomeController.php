<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phones;
use App\User;
use App\Customer;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phones=Phones::count();
        $customer=Customer::where('seller',auth()->user()->name)->count();
        return view('home',['phones'=>$phones,'customer'=>$customer]);
    }
}
