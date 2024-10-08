<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('theme_assets/vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('theme_assets/vendors/base/vendor.bundle.base.css') }}">

  <link rel="stylesheet" href="{{ asset('theme_assets/css/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('theme_assets/images/favicon.png') }}" />
</head>

<body>

    <div class="preloader">
        <div class="d-flex h-100 align-items-center justify-content-center">
            <img src="{{ asset('theme_assets/images/loading.gif') }}" class="img-fluid" alt="">
        </div>
    </div>

  <div class="container-scroller">


    @auth
   <!-- partial:partials -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo me-5" href="{{ url('/') }}">
            <img src="{{ asset('theme_assets/images/logo.svg') }}" class="me-2"
            alt="logo" /></a>

        <a class="navbar-brand brand-logo-mini" href="{{ url('/') }}"><img src="{{ asset('theme_assets/images/logo-mini.svg') }}" alt="logo" /></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="ti-view-list"></span>
        </button>

        <!-- search -->
        <!-- <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="ti-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now"
                aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul> -->
        <!-- search -->

        <ul class="navbar-nav navbar-nav-right">


          {{-- <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
              data-bs-toggle="dropdown">
              <i class="ti-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-success">
                    <i class="ti-info-alt mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-warning">
                    <i class="ti-settings mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-info">
                    <i class="ti-user mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li> --}}

          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
              <img src="{{ asset('theme_assets/images/faces/face28.jpg') }}" alt="profile" />
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">

              <a href="{{ route('user-setting') }}" class="dropdown-item">
                <i class="ti-settings text-primary"></i>
               User Settings
              </a>

              <a class="dropdown-item"
              href="{{ route('logout') }}"
              onclick="
              event.preventDefault();
              document.getElementById('logout-form').submit();
              ">
                <i class="ti-power-off text-primary"></i>
                Logout

              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            </div>
          </li>

        </ul>

        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
          data-toggle="offcanvas">
          <span class="ti-view-list"></span>
        </button>
      </div>
    </nav>

    @endauth



    <!-- partial -->
    <div class="container-fluid page-body-wrapper">

        @auth
        <x-menu_panel/>
        @endauth

      <div class="main-panel w-100">
        <div class="content-wrapper">


            @yield('content')


        </div>

        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <!-- <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <a
              > </a>2024</span>

          </div>
        </footer> -->
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->


  <!-- plugins:js -->
  <script src="{{ asset('theme_assets/vendors/base/vendor.bundle.base.js') }}"></script>

  <!-- Plugin js for this page-->
  <script src="{{ asset('theme_assets/js/jquery.cookie.js') }}" type="text/javascript"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{ asset('theme_assets/js/off-canvas.js') }}"></script>
  <script src="{{ asset('theme_assets/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('theme_assets/js/template.js') }}"></script>
  <!-- Custom js for this page-->


</body>

</html>
