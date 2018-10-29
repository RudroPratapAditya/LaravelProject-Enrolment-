@extends('layout')
@section('content')

<div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                        <h2 class="card-title">Add Teacher</h2>

                        <p class="alert-success"><?php
                            $exception=Session::get('exception');

                                  if($exception){
                                   echo $exception;

                                Session::put('exception',null); 
                                      }
                               ?></p>
                      <form class="forms-sample" method="post" action="{{ route('post.teacher') }}" enctype="multipart/form-data">
                          	{{ csrf_field() }}

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Teacher Name</label>
                                  <input type="text" class="form-control p-input" name="teacher_name" aria-describedby="emailHelp" placeholder="Enter name">
                              </div>
                              
                             

                              

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Address</label>
                                  <input type="text" class="form-control p-input" name="teacher_address" placeholder="Enter address">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Mobile Number</label>
                                  <input type="text" class="form-control p-input" name="teacher_phone" placeholder="Enter mobile number">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Email</label>
                                  <input type="text" class="form-control p-input" name="teacher_email" placeholder="Enter email">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Designation</label>
                                  <input type="text" class="form-control p-input" name="teacher_designation" placeholder="Enter designation">
                              </div>
                              

                              <div class="form-group">
                                   <label>Upload Image</label>
                                     <div class="row">
                                    <div class="col-12">
                                      <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Image</label>
                                      <input type="file" class="form-control-file" name="teacher_image" id="exampleInputFile2" aria-describedby="fileHelp">
                                      <small id="fileHelp" class="form-text text-muted">Choose image</small>
                                    </div>
                                  </div>
                              </div>

                                <div class="form-group">
                                  <label for="exampleInputPassword1">Faculty</label>
                                  <select  class="form-control p-input" name="teacher_faculty">
                                  	<option value="1">Agriculture</option>
                                  	<option value="2">CSE</option>
                                  	<option value="3">BAM</option>
                                  	<option value="4">ANSVM</option>
                                  	<option value="5">Fisheries</option>
                                  	<option value="6">DM</option>
                                  	<option value="7">NFS</option>
                                  	<option value="8">LM</option>
                                    <option value="9">New faculty</option>
                                  </select>
                                </div>

                              <button type="submit" class="btn btn-success btn-block">Submit</button>
                          </form>
                      </div>
                  </div>
              </div>
@endsection