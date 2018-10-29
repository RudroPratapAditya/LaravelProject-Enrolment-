@extends('layout')
@section('content')
	
	@php
$f = "";
switch($faculty){
	case "1":
	$f = "Agriculture";
	break;

	case "2":
	$f = "Computer Science and Engineering";
	break;

	case "3":
	$f = "BAM";
	break;

	case "4":
	$f = "ANSVM";
	break;

	case "5":
	$f = "Fisheries";
	break;

	case "6":
	$f = "DM";
	break;

	case "7":
	$f = "NFS";
	break;

	case "8":
	$f = "LMA";
	break;
}

@endphp



<div class="row">
	<h1 class="text-center">{{ $f }}</h1>
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:50%;">
                    <thead>
                      <tr>
                          <th>Student Roll</th>
                          <th>Student Name</th>
                          <th>Phone</th>
                          <th>Image</th>
                          <th>Email</th>
                          <th>Address</th>
                          
                          <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>


                      @foreach($students as $v_student)
                      <tr>
                          <td>{{$v_student->student_id}}</td>
                          <td>{{$v_student->student_name}}</td>
                          <td>{{$v_student->student_mobile}}</td>
                          <td><img src="{{URL::to($v_student->student_image)}}"   height="50" width="40" style="border-radius: 50%;" ></td>
                          <td>{{$v_student->student_email}}</td>
                          <td>{{$v_student->student_address}}</td>
                          
                          <td>
                            @include('experiment.student_action')
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>

@endsection