<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Absensi BPN</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('assets/dist/css/adminlte.min.css')}}">
      <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('assets/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('assets/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('assets/plugins/summernote/summernote-bs4.min.css')}}">
</head>
<body class="hold-transition login-page">
    <div class="login-box">
        <!--/.login-logo -->
        <div class="card">
            <div class="card-body login-card-body ">

                <center>

                    <img src="{{ asset('logo/smkn3depok.png') }}" alt="" style="width: 200px;">

                </center>

                <p class="login-box-msg">Login</p>
                <center>
                <img src="{{asset('assets/img/bpn.jpg')}}" height="190" width="250" class="brand-image img-circle elevation-3" style="opacity: .8">
                </center>
                <form action="/PostLogin" method="post">

                    {{ csrf_field() }}

                    <div class="input-group mb-3">

                        <input type="username" class="form-control" placeholder="Username" name="username">

                        <div class="input-group-append">

                            <div class="input-group-text">

                                <span class="fas fa-envelope"></span>

                            </div>

                        </div>

                    </div>

                    <div class="input-group mb-3">

                        <input type="password" class="form-control" placeholder="Password" name="password">

                        <div class="input-group-append">

                            <div class="input-group-text">

                                <span class="fas fa-lock"></span>

                            </div>

                        </div>

                    </div>

                    <div class="row">

                        <div class="col-12">

                            <button type="submit" class="btn btn-primary btn-block">Login</button>

                        </div>

                    </div>

                </form>

                <br>

                @if (session('error'))
                    <div class="alert alert-danger">

                        {{ session('error') }}

                    </div>
                @endif

            </div>

        </div>

    </div>

    <!--/.login-box -->

    <!-- jQuery -->

    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap 4 -->

    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- AdminLTE App -->

    <script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>

</body>

</html>
