@extends('layout')
@section('content')

<div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                        <h2 class="card-title">Edit Teacher</h2>

                        <p class="alert-success"><?php
                            $exception=Session::get('exception');

                                  if($exception){
                                   echo $exception;

                                Session::put('exception',null); 
                                      }
                               ?></p>
                      <form class="forms-sample" method="post" action="{{ route('post.teacher.edit',$teacher->teacher_id) }}" enctype="multipart/form-data">
                          	{{ csrf_field() }}

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Teacher Name</label>
                                  <input type="text" class="form-control p-input" name="teacher_name" aria-describedby="emailHelp" placeholder="Enter name" value="{{ $teacher->teacher_name }}">
                              </div>
                              
                             

                              

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Address</label>
                                  <input type="text" class="form-control p-input" name="teacher_address" placeholder="Enter address" value="{{ $teacher->teacher_address }}">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Mobile Number</label>
                                  <input type="text" class="form-control p-input" name="teacher_phone" placeholder="Enter mobile number" value="{{ $teacher->teacher_phone }}">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Email</label>
                                  <input type="text" class="form-control p-input" name="teacher_email" placeholder="Enter email" value="{{ $teacher->teacher_email }}">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Designation</label>
                                  <input type="text" class="form-control p-input" name="teacher_designation" placeholder="Enter college name" value="{{ $teacher->teacher_designation }}">
                              </div>
                              

                              

                                <div class="form-group">
                                  <label for="exampleInputPassword1">Faculty</label>
                                  <select  class="form-control p-input" name="teacher_faculty" value="{{ $teacher->teacher_faculty }}">
                                  	
                                    <option @if($teacher->teacher_faculty == 1) {{ 'selected =  selected' }} @endif  value="1">Agriculture</option>
                                  	<option @if($teacher->teacher_faculty == 2) {{ 'selected =  selected' }} @endif value="2">CSE</option>
                                  	<option @if($teacher->teacher_faculty == 3) {{ 'selected =  selected' }} @endif value="3">BAM</option>
                                  	<option @if($teacher->teacher_faculty == 4) {{ 'selected =  selected' }} @endif value="4">ANSVM</option>
                                  	<option @if($teacher->teacher_faculty == 5) {{ 'selected =  selected' }} @endif value="5">Fisheries</option>
                                  	<option @if($teacher->teacher_faculty == 6) {{ 'selected =  selected' }} @endif value="6">DM</option>
                                  	<option @if($teacher->teacher_faculty == 7) {{ 'selected =  selected' }} @endif value="7">NFS</option>
                                  	<option @if($teacher->teacher_faculty == 8) {{ 'selected =  selected' }} @endif value="8">LM</option>
                                    <option @if($teacher->teacher_faculty == 9) {{ 'selected =  selected' }} @endif value="9">New faculty</option>
                                  

                                  </select>
                                </div>

                              <button type="submit" class="btn btn-success btn-block">Update</button>
                          </form>
                      </div>
                  </div>
              </div>
@endsection