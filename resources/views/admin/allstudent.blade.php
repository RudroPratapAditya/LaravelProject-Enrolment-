@extends('layout')
@section('content')


           
            
              <div class="row">
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
                          <th>Department</th>
                          <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>


                      @foreach($all_student_info as $v_student)
                      <tr>
                          <td>{{$v_student->student_id}}</td>
                          <td>{{$v_student->student_name}}</td>
                          <td>{{$v_student->student_mobile}}</td>
                          <td><img src="{{URL::to($v_student->student_image)}}"   height="50" width="40" style="border-radius: 50%;" ></td>
                          <td>{{$v_student->student_email}}</td>
                          <td>{{$v_student->student_address}}</td>
                          <td>
                            
                            @if($v_student->student_faculty==1)
                            <span class="label label-success">{{'Agriculture'}}</span>
                            @elseif($v_student->student_faculty==2)
                            <span class="label label-success">{{'CSE'}}</span>
                            @elseif($v_student->student_faculty==3)
                            <span class="label label-success">{{'BAM'}}</span>
                             @elseif($v_student->student_faculty==4)
                             <span class="label label-success">{{'ANSVM'}}</span>
                            @elseif($v_student->student_faculty==5)
                            <span class="label label-success">{{'Fisheries'}}</span>
                            @elseif($v_student->student_faculty==6)
                            <span class="label label-success">{{'DM'}}</span>
                            @elseif($v_student->student_faculty==7)
                            <span class="label label-success">{{'NFS'}}</span>
                            @elseif($v_student->student_faculty==8)
                            <span class="label label-success">{{'LM'}}</span>
                             @elseif($v_student->student_faculty==9)
                            <span class="label label-success">{{'New faculty'}}</span>
                            @else
                            <span class="label label-success">{{'Not defines'}}</span>
                            @endif
                          </td>
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