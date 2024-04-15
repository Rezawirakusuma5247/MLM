@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Product</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Product</li>
            </ol>
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
            <div class="col-12 ">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Daftar Product</h3>
                  <div class="card-tools">
                    <form >
                        <div class="input-group input-group-sm" style="width: 150px;">
                          </div>
                    </form>

                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap">
                    <thead>
                      <tr>
                        <th>Images</th>
                        <th>Product</th>
                        <th>Harga</th>
                        <th>Jenis</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="{{ asset('lte/dist/img/Blossom 2L Pitcher.png') }}" alt="" width="100" height="100" class="rounded-circle"></td>
                            <td>Blossom 2L Pitcher</td>
                            <td>69.000</td>
                            <td>Tempat Minum</td>
                            <td>
                                <a href="{{ route('vals.proses') }}" class="btn btn-primary">Pesan Sekarang!</a>
                            </td>
                          </tr>
                          <tr>
                            <td><img src="{{ asset('lte/dist/img/Rounded Mosaic.png') }}" alt="" width="100" height="100" class="rounded-circle"></td>
                            <td>Rounded Mosaic</td>
                            <td>59.000</td>
                            <td>Tempat Makan</td>
                            <td>
                                <a href="{{ route('vals.proses') }}" class="btn btn-primary">Pesan Sekarang!</a>
                            </td>
                          </tr>
                          <tr>
                            <td><img src="{{ asset('lte/dist/img/tupperware.jpeg') }}" alt="" width="100" height="100" class="rounded-circle"></td>
                            <td>Mosaic Snak</td>
                            <td>69.000</td>
                            <td>Tempat Makan</td>
                            <td>
                                <a href="{{ route('vals.proses') }}" class="btn btn-primary">Pesan Sekarang!</a>
                            </td>
                          </tr>
                              <div class="modal-content">
                            <!-- /.modal-dialog -->
                          </div>
                          <!-- /.modal -->
                </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
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
