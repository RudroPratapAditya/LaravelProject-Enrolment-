<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class Faculty extends Controller
{
    public function search($faculty){
    	$students = DB::table('student_tbl')->where('student_faculty',$faculty)->get();
    	return view('admin.search_faculty')->withStudents($students)->withFaculty($faculty);
    }
}
