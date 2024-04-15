@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="flex-col">
            <div class="col-12">
              <div class="card">

                <div class="card-header">
                  <h3 class="card-title font-weight-bold">Profile Setting</h3>
                  </div>

                </div>
                <!-- /.card-header -->

                <div class="content">
                    <div class="container">
                      <div class="row">
                        <div class="col-lg-9">
                            <div class="card card-primary card-outline">
                            <div class="card-header font-weight-bold">
                                <thead><tr><th>Name</th></tr></thead>
                            </div>
                            <div class="card-body ">
                              <tbody><tr><td>{{ $data->name }}</td></tr></tbody>
                            </div>
                          </div>

                          <div class="card card-primary card-outline">
                            <div class="card-header font-weight-bold">
                                <thead><tr><th>Email</th></tr></thead>
                            </div>
                            <div class="card-body ">
                                <tbody><tr><td>{{ $data->email }}</td></tr></tbody>
                            </div>
                          </div>
                          <div class="card card-primary card-outline">
                            <div class="card-header font-weight-bold">
                                <thead><tr><th>Rank</th></tr></thead>
                            </div>
                            <div class="card-body ">
                                <tbody><tr><td>{{ $data->rank }}</td></tr></tbody>
                            </div>
                        </div>

                        <a href="{{ route('writer.profile.edit',['id' => $data->id]) }}" class="btn btn-block btn-primary col-lg-2 row-cols-3">Edit Profie!</a><!-- /.card -->
                        <br>
                    </div>
                        <!-- /.col-md-6 -->
                        <div class="col-lg-3">
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h3 class="text-lg-center font-weight-bold">Photo</h3>
                                </div>
                                <div class="card-body d-flex justify-content-center align-items-center">
                                    <img src="{{ asset('storage/photo-user/'.$data->image) }}" alt="" width="160" height="150" class="rounded-circle" style="margin-top: -10px;">
                                </div>
                            </div>
                        </div>


                            </div>
                          </div>
                        <!-- /.col-md-6 -->
                      </div>

                      <!-- /.row -->
                    </div><!-- /.container-fluid -->
                  </div>

                  <!-- /.content -->
                </div>



                </div>
                <!-- /.card-body -->

              <!-- /.card -->
            </div>
          </div>

          <!-- Left col -->

          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->

          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection
