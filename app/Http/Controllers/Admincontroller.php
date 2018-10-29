<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();

class Admincontroller extends Controller
{

  public function admin_dashboard(){


  	return view('admin.dashboard');
  }
  

//profile
public function profile(){


    return view('admin.profile');
  }


//settings
public function settings(){


    return view('admin.settings');
  }

//logout part
 public function logout(){
 
Session::put('admin_name',null);
Session::put('admin_id',null);
return Redirect::to('/backend');
}



//login dashboard
  public function login_dashboard(Request $request)

       {
 //return view('admin.dashboard');
 // echo "hellow";
$email=$request->admin_email;
$password=md5($request->admin_password);
$result=DB::table('admin_tbl')
->where('admin_email',$email)
->where('admin_password',$password)
->first();

// echo "</pre";
// print_r($result);

if($result){
 
Session::put('admin_email',$result->admin_email);
Session::put('admin_password',$result->admin_password);
return Redirect::to('/admin_dashboard');
}


else {
     
    Session::put('exception','Email or Password Invalid');
	return Redirect::to('/backend');
}

       }



}