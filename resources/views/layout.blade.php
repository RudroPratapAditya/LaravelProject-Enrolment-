<!DOCTYPE html>
<html lang="en">


<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Aditya Admin</title>
  
  <link rel="stylesheet" href="{{asset('node_modules/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css')}}">
  
  <link rel="stylesheet" href="{{asset('node_modules/rickshaw/rickshaw.min.css')}}" />
  <link rel="stylesheet" href="{{asset('bower_components/chartist/dist/chartist.min.css')}}" />
 <link rel="stylesheet" href="{{asset('css/style.css')}}">
  
  <link rel="shortcut icon" href="{{asset('images/favicon.html')}}" />
</head>
<body class="sidebar-dark">
  
 
  
  
  <div class="container-scroller">
  
    <nav class="navbar navbar-light col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="{{URL::to('/admin_dashboard')}}"><img src="" alt="Welcome"></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="btn-group d-none d-sm-block">
         
        </div>
        <form class="form-inline mt-2 ml-3 mt-md-0 d-none d-sm-block">
          <div class="input-group solid">
            <span class="input-group-addon"><i class="mdi mdi-magnify"></i></span>
            <input type="text" class="form-control" placeholder="">
          </div>
        </form>
        <ul class="navbar-nav ml-lg-auto">
          
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator" id="MailDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-message-outline"></i>
              <span class="count bg-danger">4</span>
            </a>
            <div class="dropdown-menu navbar-dropdown mail-notification" aria-labelledby="MailDropdown">
              <a class="dropdown-item" href="{{asset('https://web.facebook.com/adityachakmaa')}}">
                <div class="sender-img">
                  <img src="http://via.placeholder.com/47x47" alt="">
                 
                </div>
                <div class="sender">
                  <p href="{{asset('https://web.facebook.com/adityachakmaa')}}" class="Sende-name">View Profile</p>
                  
                </div>
              </a>
              <a class="dropdown-item" href="{{URL::to('/logout')}}">
                <div class="sender-img">
                  <img src="http://via.placeholder.com/47x47" alt="">
                  
                </div>
                <div class="sender">
                  <p class="Sende-name">Logout</p>
                  
                </div>
              </a>
              
            
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
    
    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <div class="user-info">
            <div class="profile">
              <img src="http://via.placeholder.com/47x47" alt="">
            </div>
            <div class="details">
              <p class="user-name">Aditya Chakma</p>
              <p class="designation">Developer</p>
            </div>
          </div>
          <ul class="nav">
            
            <li class="nav-item nav-category">
              <span class="nav-link">Main</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{URL::to('/allstudent')}}">
                <i class="mdi mdi-gauge menu-icon"></i>
                <span class="menu-title">All Students</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{URL::to('/addstudent')}}">
                <i class="mdi mdi-puzzle menu-icon"></i>
                <span class="menu-title">Add Students</span>
                <span class="badge badge-danger badge-pill ml-auto">New</span>
              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#sidebar_layouts" aria-expanded="false" aria-controls="sidebar_layouts">
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                <span class="menu-title">Faculties</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="sidebar_layouts">
                @include('experiment.navbar')
              </div>
            </li>
           
            
            </li>
            
          
          
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#advancedSubmenu" aria-expanded="false" aria-controls="advancedSubmenu">
                <i class="mdi mdi-repeat menu-icon"></i>
                <span class="menu-title">Teachers</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="advancedSubmenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/addteacher')}}">Add Teachers</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/allteachers')}}">All Teachers</a>
                  </li>
                  
                </ul>
              </div>
            </li>
            
      

          </ul>
        </nav>
        
        <div class="content-wrapper">
          <div class="row">
            @yield('content')
          </div>
        </div>
     
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="float-right">
                <a href="#">Aditya Chakma</a> &copy; 2018
            </span>
          </div>
        </footer>
       
      </div>
      
    </div>
   
  </div>
  

  
  <script src="{{asset('node_modules/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('node_modules/popper.js/dist/umd/popper.min.js')}}"></script>
  <script src="{{asset('node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
  
  <script src="{{asset('node_modules/flot/jquery.flot.js')}}"></script>
  <script src="{{asset('node_modules/flot/jquery.flot.resize.js')}}"></script>
  <script src="{{asset('node_modules/flot/jquery.flot.categories.js')}}"></script>
  <script src="{{asset('node_modules/flot/jquery.flot.pie.js')}}"></script>
  <script src="{{asset('node_modules/rickshaw/vendor/d3.v3.js')}}"></script>
  <script src="{{asset('node_modules/rickshaw/rickshaw.min.js')}}"></script>
  <script src="{{asset('bower_components/chartist/dist/chartist.min.js')}}"></script>
  <script src="{{asset('node_modules/chartist-plugin-legend/chartist-plugin-legend.js')}}"></script>
  <script src="{{asset('node_modules/chart.js/dist/Chart.min.js')}}"></script>
  <script src="{{asset('node_modules/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
  

  
 <script src="{{asset('node_modules/datatables.net/js/jquery.dataTables.js')}}"></script>
 <script src="{{asset('node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{asset('js/data-table.js')}}"></script>

  <script src="{{asset('js/off-canvas.js')}}"></script>
  <script src="{{asset('js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('js/misc.js')}}"></script>
  <script src="{{asset('js/settings.js')}}"></script>
  
  <script src="js/dashboard_1.js"></script>
  
