@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
            <form action="{{ route('vals.provals.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
          <div class="row">
            <input name="user_id" type="hidden" value="{{ auth()->user()->id }}">
            <!-- left column -->
            <div class="col-md-5 mx-auto">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Isi Form</h3>
                 </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                  <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">No Telp</label>
                        <p>Masukan Nomor Telepon anda....</p>
                          <input type="text" name="nomor" class="form-control" id="exampleInputEmail1" placeholder="085-..">
                          @error('nomor')
                            <small>{{ $message }}</small>
                          @enderror
                        </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Rekening</label>
                                <input type="text" name="rekening" class="form-control" id="exampleInputEmail1">
                                @error('rekening')
                                  <small>{{ $message }}</small>
                                @enderror
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Bukti</label>
                                <input type="file" name="image" class="form-control" id="exampleInputEmail1">
                                @error('image')
                                  <small>{{ $message }}</small>
                                @enderror
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Deskripsi</label>
                                <p>Deskripsi Transaksi</p>
                                  <input type="text" name="deskripsi" class="form-control" id="exampleInputEmail1" placeholder="..">
                                  @error('deskripsi')
                                    <small>{{ $message }}</small>
                                  @enderror
                                </div>
                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>


            </div>
            <!--/.col (left) -->

          </div>
            </form>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>

  </div>
@endsection
