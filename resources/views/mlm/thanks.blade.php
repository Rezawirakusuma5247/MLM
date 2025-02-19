<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MLM Website</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('lte/plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('lte/dist/css/adminlte.min.css') }}">

</head>
<body class="hold-transition layout-top-nav">
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{ asset('lte/dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60">
      </div>
      <div class="card card-primary card-outline -mb-2" >
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="{{ route('admin.dashboard') }}" class="navbar-brand">
        <img src="{{ asset('lte/dist/img/AdminLTELogo.png') }}" alt="Admin MLM Logo" class="brand-image img-circle shadow-lg" style="opacity: .8">
        <span class="brand-text font-weight-light">MLM Website</span>
      </a>
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->

    <div class="content">
      <div class="container">
          <!-- /.col-md-6 -->
          <div class="col-10 mx-auto">
            <div class="card card-primary card-outline" >
              <div class="card-header">
                <h2 class=" text-lg-center font-weight-bold">Form Validation Sending</h2>
              </div>
              <div class="card-body">
                <h3 class="text-lg-center font-italic">Terima Kasih</h3>
                <h5 class="text-lg-center">Data telah diinput ke Website, tunggu beberapa saat untuk konfirmasi Owner</h4>
              </div>
                    </div>
                  </div>
              </div>
              </div>
              <a href="{{ route('admin.dashboard') }}" class="btn btn-block btn-primary col-md-2 mx-auto">Kembali</a>
        </div>
      </div>
    </div>




  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>MLM Robust CM Website.</strong> All rights reserved.
  </footer>
</div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('lte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('lte/dist/js/adminlte.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if($message = Session::get('failed'))
    <script>
        Swal.fire('{{ $message }}');
    </script>
   @endif

   @if($message = Session::get('sucses'))
    <script>
        Swal.fire('{{ $message }}');
    </script>
   @endif
</body>
</html>
