@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <div class="mt-3 pb-3 mb-3 d-flex align-items-center">
                <div class="card rounded-circle p-1">
                    <img src="{{ asset('storage/photo-user/' . auth()->user()->image) }}" class="rounded-circle" width="100" height="100">
                </div>
                <div class="pl-2">
                    <p class="mb-1">Selamat Datang</p>
                    <h1 class="mb-0">{{ auth()->user()->name }}</h1>
                </div>
            </div>
          <div class="col-sm6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h4>Information</h4>

                <p>Come take a look at:</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{ route('vals.information') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h4>Rank</h4>

                <p>Come take a look at:</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{ route('admin.user') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h4>SponsorShip</h4>

                <p>Wanna Join?</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>

              <a href="{{ route('vals.form.create') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h4>Provals</h4>

                <p>Come take a look at: </p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="{{ route('vals.provals.create') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <div class="card card-primary card-outline col-lg-6 " >
            <div class="card-header">
              <h5 class="card-title m-0 font-weight-bold">Products</h5>
            </div>
            <div class="card-body">
              <h6 class="card-title">Sudah tertarik?</h6>

              <p class="card-text">Belilah Product untuk dijual lagi ke konsumen!</p>
              <a href="{{ route('vals.product') }}" class="btn btn-block btn-primary col-md-4">Get Started!</a>
            </div>
          </div>
        <!-- /.row -->
        <!-- Main row -->
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  @endsection
