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
      <a href="{{ route('welcome') }}" class="navbar-brand">
        <img src="{{ asset('lte/dist/img/AdminLTELogo.png') }}" alt="Admin MLM Logo" class="brand-image img-circle shadow-lg" style="opacity: .8">
        <span class="brand-text font-weight-light">MLM Website</span>
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>



      <!-- Right navbar links -->

      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto" id="go">
        <li class="nav-item">
            <a href="{{ route('login') }}" class="nav-link">Login</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('register') }}" class="nav-link">Register</a>
          </li>
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Top Income <small>BY</small></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Home</a></li>
              <li class="breadcrumb-item active">Top Income</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->

    <div class="content">
      <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="card card-primary card-outline" >
                    <div class="card">
                        <div class="card-header border-0">
                          <div class="d-flex justify-content-between">
                            <h3 class="card-title">Parent Id</h3>
                            <a href="{{ route('register') }}"></a>
                          </div>
                        </div>
                        <div class="card-body">
                          <div class="d-flex">
                            <p class="d-flex flex-column">
                              <span class="text-bold text-lg">820</span>
                              <span>Visitors Over Time</span>
                            </p>
                            <p class="ml-auto d-flex flex-column text-right">
                              <span class="text-success">
                                <i class="fas fa-arrow-up"></i> 12.5%
                              </span>
                              <span class="text-muted">Since last year</span>
                            </p>
                          </div>

                          <div class="d-flex">
                              <p class="d-flex flex-column">
                                <span class="text-bold text-lg">102</span>
                                <span>Workers Over Time</span>
                              </p>
                              <p class="ml-auto d-flex flex-column text-right">
                                <span class="text-success">
                                  <i class="fas fa-arrow-up"></i> 5.6%
                                </span>
                                <span class="text-muted">Since last year</span>
                              </p>
                            </div>

                            <div class="d-flex">
                              <p class="d-flex flex-column">
                                <span class="text-bold text-lg">3</span>
                                <span>Sponsorship Over Time</span>
                              </p>
                              <p class="ml-auto d-flex flex-column text-right">
                                <span class="text-success">
                                  <i class="fas fa-arrow-up"></i> 45.75%
                                </span>
                                <span class="text-muted">Since last year</span>
                              </p>
                            </div>

                          <!-- /.d-flex -->

                          <div class="position-relative mb-4">
                            <canvas id="visitors-chart" height="25"></canvas>
                          </div>

                          <div class="d-flex flex-row justify-content-end">
                            <span class="mr-2">
                              <i class="fas fa-square text-primary"></i> This Last Year
                            </span>
                          </div>
                        </div>
                      </div>
                </div>

                <!-- /.card -->
                <div class="card card-primary card-outline" >
                    <div class="card">
                        <div class="card-header border-0">
                          <h3 class="card-title">Products</h3>
                          <div class="card-tools">
                            <a href="{{ route('login') }}" class="btn btn-tool btn-sm">
                              <i class="fas fa-bars"></i>
                            </a>
                          </div>
                        </div>
                        <div class="card-body table-responsive p-0">
                          <table class="table table-striped table-valign-middle">
                            <thead>
                            <tr>
                              <th>Product</th>
                              <th>Price</th>
                              <th>Sales</th>
                              <th>More</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                              <td>
                                <img src="{{ asset('lte/dist/img/default-150x150.png') }}" alt="Product 1" class="img-circle img-size-32 mr-2">
                                Canister Tupperware
                              </td>
                              <td>$69.000 Rp</td>
                              <td>
                                <small class="text-success mr-1">
                                  <i class="fas fa-arrow-up"></i>
                                  12%
                                </small>
                                12,000 Sold
                              </td>
                              <td>
                                <a href="{{ route('login') }}" class="text-muted">
                                  <i class="fas fa-search"></i>
                                </a>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <img src="{{ asset('lte/dist/img/default-150x150.png') }}" alt="Product 1" class="img-circle img-size-32 mr-2">
                                Tupperware Lunch Set
                              </td>
                              <td>$99.000 Rp</td>
                              <td>
                                <small class="text-warning mr-1">
                                  <i class="fas fa-arrow-down"></i>
                                  0.5%
                                </small>
                                123,234 Sold
                              </td>
                              <td>
                                <a href="{{ route('login') }}" class="text-muted">
                                  <i class="fas fa-search"></i>
                                </a>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <img src="{{ asset('lte/dist/img/default-150x150.png') }}" alt="Product 1" class="img-circle img-size-32 mr-2">
                                Tupperware Crystal Bowl
                              </td>
                              <td>$50.000 Rp</td>
                              <td>
                                <small class="text-danger mr-1">
                                  <i class="fas fa-arrow-down"></i>
                                  3%
                                </small>
                                198 Sold
                              </td>
                              <td>
                                <a href="{{ route('login') }}" class="text-muted">
                                  <i class="fas fa-search"></i>
                                </a>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <img src="{{ asset('lte/dist/img/default-150x150.png') }}" alt="Product 1" class="img-circle img-size-32 mr-2">
                                Tupperware Eco-Bottle
                                <span class="badge bg-danger">NEW</span>
                              </td>
                              <td>$39.000 Rp</td>
                              <td>
                                <small class="text-success mr-1">
                                  <i class="fas fa-arrow-up"></i>
                                  63%
                                </small>
                                87 Sold
                              </td>
                              <td>
                                <a href="{{ route('login') }}" class="text-muted">
                                  <i class="fas fa-search"></i>
                                </a>
                              </td>
                            </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                </div>

                <!-- /.card -->
              </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-6">

            <div class="card card-primary card-outline" >
              <div class="card-header">
                <h5 class="card-title m-0">Featured</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Spesial Recruitmen</h6>

                <p class="card-text">Dengan banyak penawaran spesial yang bisa kamu dapatkan!</p>
                <a href="{{ route('login') }}" class="btn btn-block btn-primary col-md-4">Get Started!</a>
              </div>

            </div>
            <div class="card card-primary card-outline" >
                <div class="card">
                    <div class="card-header border-0">
                      <h3 class="card-title">Online Store Overview</h3>
                      <div class="card-tools">
                        <a href="#" class="btn btn-sm btn-tool">
                          <i class="fas fa-bars"></i>
                        </a>
                      </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                          <p class="text-success text-xl">
                            <i class="ion ion-ios-refresh-empty"></i>
                          </p>
                          <p class="d-flex flex-column text-right">
                            <span class="font-weight-bold">
                              <i class="ion ion-android-arrow-up text-success"></i> 12%
                            </span>
                            <span class="text-muted">CONVERSION RATE</span>
                          </p>
                        </div>
                        <!-- /.d-flex -->
                        <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                          <p class="text-warning text-xl">
                            <i class="ion ion-ios-cart-outline"></i>
                          </p>
                          <p class="d-flex flex-column text-right">
                            <span class="font-weight-bold">
                              <i class="ion ion-android-arrow-up text-warning"></i> 0.8%
                            </span>
                            <span class="text-muted">SALES RATE</span>
                          </p>
                        </div>
                        <!-- /.d-flex -->
                        <div class="d-flex justify-content-between align-items-center mb-0">
                          <p class="text-danger text-xl">
                            <i class="ion ion-ios-people-outline"></i>
                          </p>
                          <p class="d-flex flex-column text-right">
                            <span class="font-weight-bold">
                              <i class="ion ion-android-arrow-down text-danger"></i> 1%
                            </span>
                            <span class="text-muted">REGISTRATION RATE</span>
                          </p>
                        </div>
                        <!-- /.d-flex -->
                      </div>
            </div>

              </div>
              <div class="card card-primary card-outline" >
                <div class="card direct-chat direct-chat-primary">
                    <div class="card-header">
                      <h3 class="card-title">Direct Chat</h3>


                      </div>
                      <div class="card-body">
                        <!-- Conversations are loaded here -->
                        <div class="direct-chat-messages">
                          <!-- Message. Default to the left -->
                          <div class="direct-chat-msg">
                            <div class="direct-chat-infos clearfix">
                              <span class="direct-chat-name float-left">Wirakusuma</span>
                              <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                            </div>
                            <!-- /.direct-chat-infos -->
                            <img class="direct-chat-img" src="{{ asset('lte/dist/img/user1-128x128.jpg') }}" alt="message user image">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                              Gimana Menurut kamu Aplikasi MLM ini?
                            </div>
                            <!-- /.direct-chat-text -->
                          </div>
                          <!-- /.direct-chat-msg -->

                          <!-- Message to the right -->
                          <div class="direct-chat-msg right">
                            <div class="direct-chat-infos clearfix">
                              <span class="direct-chat-name float-right">Sarah</span>
                              <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                            </div>
                            <!-- /.direct-chat-infos -->
                            <img class="direct-chat-img" src="{{ asset('lte/dist/img/user3-128x128.jpg') }}" alt="message user image">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                              Iya gk nyangka Benefit nya gede banget!
                            </div>
                            <!-- /.direct-chat-text -->
                          </div>
                          <!-- /.direct-chat-msg -->

                          <!-- Message. Default to the left -->
                          <div class="direct-chat-msg">
                            <div class="direct-chat-infos clearfix">
                              <span class="direct-chat-name float-left">Wirakusuma</span>
                              <span class="direct-chat-timestamp float-right">23 Jan 5:37 pm</span>
                            </div>
                            <!-- /.direct-chat-infos -->
                            <img class="direct-chat-img" src="{{ asset('lte/dist/img/user1-128x128.jpg') }}" alt="message user image">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                              Ya kan kata aku juga apaan hehe
                            </div>
                            <!-- /.direct-chat-text -->
                          </div>
                          <!-- /.direct-chat-msg -->

                          <!-- Message to the right -->
                          <div class="direct-chat-msg right">
                            <div class="direct-chat-infos clearfix">
                              <span class="direct-chat-name float-right">Sarah</span>
                              <span class="direct-chat-timestamp float-left">23 Jan 6:10 pm</span>
                            </div>
                            <!-- /.direct-chat-infos -->
                            <img class="direct-chat-img" src="{{ asset('lte/dist/img/user3-128x128.jpg') }}" alt="message user image">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                              Iya makasih yaa buat sarannya!
                            </div>
                            <!-- /.direct-chat-text -->
                          </div>
                          <!-- /.direct-chat-msg -->

                        </div>
                        <!--/.direct-chat-messages-->

                        <!-- Contacts are loaded here -->

                        <!-- /.direct-chat-pane -->
                      </div>
                      <div class="card-footer">
                        <div class="input-group">
                          <span class="input-group-append">
                            <a href="#go"><button type="button" class="btn btn-primary">Go Try</button></a>

                          </span>
                        </div>
                    </div>
                    </div>

                  </div>
              </div>
              </div>

        </div>
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
