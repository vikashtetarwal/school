<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>School Admin Dashboard</title>
  <link rel="stylesheet" href="{{asset('backend/admin/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('backend/admin/vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{asset('backend/admin/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('backend/admin/vendors/css/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{asset('backend/admin/vendors/font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('backend/admin/vendors/mdi/css/materialdesignicons.min.css')}}">

  <!-- <link rel="stylesheet" href="{{asset('backend/admin/vendors/datatables.net-bs5/dataTables.bootstrap5.css')}}"> -->
  <link rel="stylesheet" href="{{asset('backend/admin/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('backend/admin/js/select.dataTables.min.css')}}">
</head>
<style>
        .nav-class-first {
          width: 20%;
        }

        .main-content {
          width: 80%;
          margin-top: 40px;
        }
      </style>

<body>
  <div class="container-scroller">
    <div class="row p-0 m-0 proBanner" id="proBanner">
      <div class="col-md-12 p-0 m-0">
        <div class="card-body card-body-padding px-3 d-flex align-items-center justify-content-between">
          <div>
            <div class="d-flex align-items-center justify-content-between">
              <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
              <a href="https://www.bootstrapdash.com/product/skydash-admin-template" target="_blank" class="btn me-2 buy-now-btn border-0">Buy Now</a>
            </div>
          </div>
          <div class="d-flex align-items-center justify-content-between">
            <a href="https://www.bootstrapdash.com/product/skydash-admin-template/"><i class="ti-home me-3 text-white"></i></a>
            <button id="bannerClose" class="btn border-0 p-0">
              <i class="ti-close text-white"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
    
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <a class="navbar-brand brand-logo me-5" href="{{Url('dashboard')}}"><img src="{{asset('backend/admin/images/logo.svg')}}" class="me-2" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="{{Url('dashboard')}}"><img src="{{asset('backend/admin/images/logo-mini.svg')}}" alt="logo" /></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
              <i class="icon-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="ti-info-alt mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted"> Just now </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="ti-settings mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted"> Private message </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="ti-user mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted"> 2 days ago </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
              <img src="{{asset('backend/admin/images/faces/face28.jpg')}}" alt="profile" />
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-settings text-primary"></i> Settings </a>
                <a class="dropdown-item" href="{{route('admin-profile-change')}}">
                <i class="ti-settings text-primary"></i> Change Profile </a>
                <a class="dropdown-item" href="{{route('admin-user-changepassword')}}">
                <i class="ti-settings text-primary"></i> Change Password </a>
              <a class="dropdown-item" href="{{route('user-logout')}}">
                <i class="ti-power-off text-primary"></i> Logout </a>
            </div>
          </li>
          <li class="nav-item nav-settings d-none d-lg-flex">
            <a class="nav-link" href="#">
              <i class="icon-ellipsis"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>

    <div class="container-fluid page-body-wrapper">

      
      <div class="nav-class-first">

        @include('admin.sidebar')
      </div>
      <div class="main-content">
        @yield('main-content')
      </div>



    </div>
  </div>


  <script src="{{asset('backend/admin/vendors/js/vendor.bundle.base.js')}}"></script>
  <script src="{{asset('backend/admin/vendors/chart.js/chart.umd.js')}}"></script>
  <script src="{{asset('backend/admin/vendors/datatables.net/jquery.dataTables.js')}}"></script>
  <script src="{{asset('backend/admin/vendors/datatables.net-bs5/dataTables.bootstrap5.js')}}"></script>
  <script src="{{asset('backend/admin/js/dataTables.select.min.js')}}"></script>
  <script src="{{asset('backend/admin/js/off-canvas.js')}}"></script>
  <script src="{{asset('backend/admin/js/template.js')}}"></script>
  <script src="{{asset('backend/admin/js/settings.js')}}"></script>
  <script src="{{asset('backend/admin/js/todolist.js')}}"></script>
  <script src="{{asset('backend/admin/js/jquery.cookie.js')}}" type="text/javascript"></script>
  <script src="{{asset('backend/admin/js/dashboard.js')}}"></script>
</body>

</html>