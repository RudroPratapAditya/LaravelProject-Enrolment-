@extends('layout')
@section('content')

<div class="">
              <div class="card">
                <div class="card-body">
                  <a class="nav-link" href="{{URL::to('/allstudent')}}"><h2 class="card-title">All Students</h2></a>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-1" class="card-float-chart"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <a class="nav-link" href="{{URL::to('/allteachers')}}"><h2 class="card-title">All teachers</h2></a>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-2" class="card-float-chart"></div>
                </div>
              </div>
            </div>
  
@endsection
