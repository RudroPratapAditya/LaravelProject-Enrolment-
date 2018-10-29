<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use App\Teacher;
use DB;
class TeacherController extends Controller
{
   public function allteachers(){

	$teachers = DB::table('teachers')->get();
  	return view('admin.allteachers')->withTeachers($teachers);
	}


	public function addForm(){


		return view('admin.add-teacher-form');
	}

	public function postTeacher(Request $request){


		$teacher = new Teacher;
		$teacher->teacher_name = $request->teacher_name;
		$teacher->teacher_designation = $request->teacher_designation;
		$teacher->teacher_email = $request->teacher_email;
		$teacher->teacher_address = $request->teacher_address;
		$teacher->teacher_faculty = $request->teacher_faculty;
		$teacher->teacher_phone = $request->teacher_phone;
		$teacher->teacher_department = 'cse';
		$image=$request->file('teacher_image');

    
    

			if($image){

			$teacher_image=str_random(20);
			$ext=strtolower($image->getClientOriginalExtension());
			$image_full_name=$teacher_image.'.'.$ext;
			$upload_path='image/';
			$image_url=$upload_path.$image_full_name;
			$success=$image->move($upload_path,$image_full_name);
			             
			}

			$teacher->teacher_image=$image_url;

					$teacher->save();
				
				return Redirect::to('/allteachers');
  	}

  	public function delete($id){

  		 Teacher::where('teacher_id',$id)->delete();

  		 return Redirect::back();
  	}

  	public function getEdit($id){

  		$teacher = Teacher::where('teacher_id',$id)->first();


  		return view('admin.edit-teacher')->withTeacher($teacher);
  	}

  	public function postEdit(Request $request, $id){

  		$data = array();

  		$data["teacher_name"]=$request->teacher_name;
  		$data["teacher_designation"]=$request->teacher_designation;
  		//$data["teacher_image"]=$request->teacher_image;
  		$data["teacher_faculty"]=$request->teacher_faculty;
  		$data["teacher_phone"]=$request->teacher_phone;
  		$data["teacher_address"]=$request->teacher_address;

  		$image=$request->file('teacher_image');

    
    

			if($image){

			$teacher_image=str_random(20);
			$ext=strtolower($image->getClientOriginalExtension());
			$image_full_name=$teacher_image.'.'.$ext;
			$upload_path='image/';
			$image_url=$upload_path.$image_full_name;
			$success=$image->move($upload_path,$image_full_name);
			$data["teacher_image"]=$image_url;
			             
			}


			

  		Teacher::where('teacher_id',$id)->update($data);


  		return Redirect::back();
  	}
  }

