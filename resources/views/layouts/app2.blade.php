<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('adminlte/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/summernote/summernote-bs4.min.css')}}">
  <!-- Toastr css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
  <!-- Sweetalert css-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.8/sweetalert2.css">
  <!-- Custom css -->
  <link rel="stylesheet" href="{{asset('adminlte/custom/style.css') }}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('adminlte/dist/img/bx_loader.gif')}}" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li><a target="_blank" href="{{ route('index') }}" class="btn btn-outline-danger" class="nav-link">View Website</a></li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li> -->

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{asset('adminlte/dist/img/user1-128x128.jpg')}}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{asset('adminlte/dist/img/user8-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{asset('adminlte/dist/img/user3-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
     <!--  <li class="nav-item">
        <a class="nav-link"  href="#">
          <span><img class="avater_user" src="{{ asset(Auth::user()->profile->avater) }}" alt=""></span></a>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="#">
          <span>Hellow! {{ Auth::user()->name }}</span></a>
        </a>
      </li> -->
      <li class="nav-item">
        <form method="POST" action="{{ route('logout') }}">
                @csrf
          <a class="nav-link" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                          this.closest('form').submit();">
                         <i class="fas fa-sign-out-alt"></i>
              {{ __('Log Out') }}
          </a>
        </form>
      </li>
      <!-- Notifications Dropdown Menu -->
     <!--  <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li> -->
    <!--   <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li> -->
      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li> -->
    </ul>
  </nav>
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a target="_blank" href="{{ route('index') }}" class="brand-link">
      <img  src="{{ asset('adminlte/dist/img/logo.PNG')}}" class="img-fluid" alt="Logo" style="opacity: .8">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset(Auth::user()->profile->avater) }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><span>Hellow! {{ Auth::user()->name }}</span></a></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{ route('dashboard') }}" class="nav-link @yield('dashboard')">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link @yield('category')">
              <i class="far fa-gem"></i>
              <p>Category<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('create.category') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('all.category') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Category</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link @yield('post')">
              <i class="fas fa-plus-square"></i>
              <p>Post <i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('create.post') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Post</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('all.post') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Post</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('trashed.post') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Trashed Post</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link @yield('tag')">
              <i class="fas fa-tags"></i>
              <p>Tag <i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('create.tag') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Tag</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('all.tag') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Tag</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link @yield('user')">
              <i class="fas fa-users"></i>
              <p>User <i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('create.user') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('all.user') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('password.change') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Password Change</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link @yield('setting')">
              <i class="fas fa-cogs"></i>
              <p>General <i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('create.setting') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Site Info</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('all.setting') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Site Info</p>
                </a>
              </li>
            </ul>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  @yield('content')
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- counter up -->
<script src="{{asset('adminlte/plugins/jquery/jquery.counterup.js')}}"></script>
<script src="{{asset('adminlte/plugins/jquery/jquery.waypoints.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('adminlte/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- counterup -->
<script src="{{asset('adminlte/plugins/jquery/counter.up.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('adminlte/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('adminlte/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('adminlte/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('adminlte/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('adminlte/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('adminlte/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('adminlte/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('adminlte/dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('adminlte/dist/js/pages/dashboard.js')}}"></script>
<!-- OPTIONAL SCRIPTS -->
<script src="{{asset('adminlte/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Toastr js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<!-- Sweetalert js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('adminlte/dist/js/pages/dashboard3.js') }}"></script>
<script type="text/javascript">
  // Category Section Start //
  @if(Session::has('success'))
    toastr.success("{{Session::get('success')}}");
  @endif
  @if(Session::has('info'))
    toastr.info("{{Session::get('info')}}");
  @endif
  @if(Session::has('warning'))
    toastr.warning("{{Session::get('warning')}}");
  @endif
  @if(Session::has('error'))
    toastr.info("{{Session::get('error')}}");
  @endif
</script>
<!-- skummernote -->
<script type="text/javascript">
  $(document).ready(function(){
    $('#content').summernote({
      placeholder: 'Please some content here'
    });
  });
</script>
<!-- fade show -->
<script type="text/javascript">
  $(document).ready(function(){
    $('.post_show').fadeToggle(5000);
  });

  $(document).ready(function(){
    $('.tag_show').fadeToggle(5000);
  });
</script>
<!-- disqus -->
<script id="dsq-count-scr" src="//magazine-13.disqus.com/count.js" async></script>
<!-- show file img -->
<script>
    $(document).ready(function(){
        $('#image').change(function(event){
            
            var reader = new FileReader();
            
            reader.onload = function(event){
                $('#showImage').attr('src',event.target.result);
            }
            
            reader.readAsDataURL(event.target.files['0']);
        });
    });
</script>
<!-- counter up -->

<script>
  $('.counter').counterUp({
    delay: 10,
    time: 2000
});
</script>
</body>
</html>
