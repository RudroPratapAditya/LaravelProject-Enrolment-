<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
use File;


class AllstudentsController extends Controller
{
    public function allstudent(){

$allstudent_info=DB::table('student_tbl')

                    ->get();

 $manage_student =view('admin.allstudent')
                   ->with('all_student_info',$allstudent_info);


   return view('layout')
          ->with('allstudent',$manage_student) ;                                


  	//return view('admin.allstudent');
	}

	public function delete($singleStudent){
		DB::table('student_tbl')->where('student_id',$singleStudent)->delete();
		return Redirect::back();
	}

	public function getEdit($id){
		$student = DB::table('student_tbl')->where('student_id',$id)->first();

		//return $student;
		return view('edit_students')->withStudent($student);
	}

	public function postEdit(Request $request, $id){
		
	$data=array();
    $row = DB::table('student_tbl')->where('student_id',$id)->first();
    
  	$data['student_name']=$request->student_name;
  
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
    	File::delete('image/'.$row->student_image);
        $data['student_image']=$image_url;
        //$row->student_image=$image_url;
}
}
		DB::table('student_tbl')->where('student_id',$id)->update($data);
		Session::put('exception','student updated successfully!!!');
		return Redirect::to('/student/'.$id.'/edit');



	}
}
