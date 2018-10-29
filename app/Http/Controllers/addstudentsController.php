<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use APP\HTTP\Requests;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
Session_start();

class addstudentsController extends Controller
{
    public function addstudent(){


  	return view('admin.addstudent');
  }
  //end of addstudent function
  

//start savestudent dunction

  public function savestudent(Request $request){

  	$data=array();

  	$data['student_name']=$request->student_name;
  	$data['student_id']=$request->student_id;
  	$data['student_reg']=$request->student_reg;

  	$data['student_address']=$request->student_address;
  	$data['student_mobile']=$request->student_mobile;
  	$data['student_email']=$request->student_email;
  	$data['student_college']=$request->student_college;
  	$data['student_father']=$request->student_father;
  	$data['student_mother']=$request->student_mother;
  	$data['student_dob']=$request->student_dob;
  	$data['student_session']=$request->student_session;
  	$data['student_level']=$request->student_level;
    $data['student_semister']=$request->student_semister;
    $data['student_faculty']=$request->student_faculty;
  	
    $image=$request->file('student_image');

    
    

if($image){

$student_image=str_random(20);
$ext=strtolower($image->getClientOriginalExtension());
$image_full_name=$student_image.'.'.$ext;
$upload_path='image/';
$image_url=$upload_path.$image_full_name;
$success=$image->move($upload_path,$image_full_name);
             
    if($success){
         $data['student_image']=$image_url;
		DB::table('student_tbl')->insert($data);
		Session::put('exception','student added successfully!!!');
		return Redirect::to('/addstudent');
}
}

          $data['student_image']=$image_url;
          DB::table('student_tbl')->insert($data);
		  Session::put('exception','student added successfully');
		 return Redirect::to('/addstudent');
	   
      DB::table('student_tbl')->insert($data);
		 Session::put('exception','student added successfully');
		 return Redirect::to('/addstudent');

  
  }
}
