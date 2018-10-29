@extends('layout')
@section('content')

 <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:50%;">
                    <thead>
                      <tr>
                          <th>Teacher Name</th>
                          <th>Faculty</th>
                          <th>Designation</th>
                          <th>Email</th>
                          <th>Image</th>
                          <th>Phone</th>
                          <th>Address</th>
                          <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>


                      @foreach($teachers as $v_teacher)
                      <tr>
                          <td>{{$v_teacher->teacher_name}}</td>
                          <td>
                            
                            @if($v_teacher->teacher_faculty==1)
                            <span class="label label-success">{{'Agriculture'}}</span>
                            @elseif($v_teacher->teacher_faculty==2)
                            <span class="label label-success">{{'CSE'}}</span>
                            @elseif($v_teacher->teacher_faculty==3)
                            <span class="label label-success">{{'BAM'}}</span>
                             @elseif($v_teacher->teacher_faculty==4)
                             <span class="label label-success">{{'ANSVM'}}</span>
                            @elseif($v_teacher->teacher_faculty==5)
                            <span class="label label-success">{{'Fisheries'}}</span>
                            @elseif($v_teacher->teacher_faculty==6)
                            <span class="label label-success">{{'DM'}}</span>
                            @elseif($v_teacher->teacher_faculty==7)
                            <span class="label label-success">{{'NFS'}}</span>
                            @elseif($v_teacher->teacher_faculty==8)
                            <span class="label label-success">{{'LM'}}</span>
                            @elseif($v_teacher->teacher_faculty==9)
                            <span class="label label-success">{{'New faculty'}}</span>
                            @else
                            <span class="label label-success">{{'Not defines'}}</span>
                            @endif
                          </td>
                          <td>{{$v_teacher->teacher_designation}}</td>
                          <td>{{$v_teacher->teacher_email}}</td>
                          <td><img src="{{URL::to($v_teacher->teacher_image)}}"   height="50" width="40" style="border-radius: 50%;" ></td>
                          
                          <td>{{$v_teacher->teacher_phone}}</td>
                          <td>{{$v_teacher->teacher_address}}</td>
                          
                          <td>
                            @include('experiment.teacher_action')
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>

@endsection