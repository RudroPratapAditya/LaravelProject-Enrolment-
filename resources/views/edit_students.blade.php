@extends('layout')
@section('content')


<div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                        <h2 class="card-title">Edit Students</h2>

                      
                      <form class="forms-sample" method="post" action="{{ route('post.student.edit',$student->student_id) }}" enctype="multipart/form-data">
                          	{{ csrf_field() }}

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Name</label>
                                  <input type="text" class="form-control p-input" name="student_name" aria-describedby="emailHelp" placeholder="Enter student name" value="{{ $student->student_name }}">
                              </div>
                              
                              

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Registration Number</label>
                                  <input type="text" class="form-control p-input" name="student_reg" placeholder="Enter registration number" value="{{ $student->student_reg }}" >
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Address</label>
                                  <input type="text" class="form-control p-input" name="student_address" placeholder="Enter address"  value="{{ $student->student_address }}">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Mobile Number</label>
                                  <input type="text" class="form-control p-input" name="student_mobile" placeholder="Enter mobile number" value="{{ $student->student_mobile }}">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Email</label>
                                  <input type="email" class="form-control p-input" name="student_email" placeholder="Enter email"  value="{{ $student->student_email }}">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputPassword1">College</label>
                                  <input type="text" class="form-control p-input" name="student_college" placeholder="Enter college name"  value="{{ $student->student_college }}">
                              </div>
                              
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Father's Name</label>
                                  <input type="text" class="form-control p-input" name="student_father" placeholder="Enter father's name" value="{{ $student->student_father }}">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Mother's Name</label>
                                  <input type="text" class="form-control p-input" name="student_mother" placeholder="Enter mother's name" value="{{ $student->student_mother }}">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Date of Birth</label>
                                  <input type="date" class="form-control p-input" name="student_dob" placeholder="Enter date of birth" value="{{ $student->student_dob }}">
                              </div>

                               <div class="form-group">
                                  <label for="exampleInputPassword1">Session</label>
                                  <input type="text" class="form-control p-input" name="student_session" placeholder="Enter session" value="{{ $student->student_session }}">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Level</label>
                                  <input type="text" class="form-control p-input" name="student_level" placeholder="Enter level"  value="{{ $student->student_level }}">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputPassword1"> Semester </label>
                                  <input type="text" class="form-control p-input" name="student_semister" placeholder="Enter semester"  value="{{ $student->student_semister }}">
                              </div>

                              <div class="form-group">
                                   <label>Upload Image</label>
                                     <div class="row">
                                    <div class="col-12">
                                      <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Image</label>
                                      <input type="file" class="form-control-file" name="student_image" id="exampleInputFile2" aria-describedby="fileHelp">
                                      <small id="fileHelp" class="form-text text-muted">Choose image</small>
                                    </div>
                                  </div>
                              </div>

                                <div class="form-group">
                                  <label for="exampleInputPassword1">Faculty</label>
                                  <select  class="form-control p-input" name="student_faculty"  value="{{ $student->student_faculty }}">
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

                              <button type="submit" class="btn btn-success btn-block">Update</button>
                          </form>
                      </div>
                  </div>
              </div>
@endsection