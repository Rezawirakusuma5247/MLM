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
            <form action="{{ route('vals.form.product') }}" method="POST" enctype="multipart/form-data">
                @csrf
          <div class="row">
            <input name="user_id" type="hidden" value="{{ auth()->user()->id }}">
            <!-- left column -->
            <div class="ccol-md-5 mx-auto">
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
                          <input type="text" name="number" class="form-control" id="exampleInputEmail1" placeholder="085-..">
                          @error('number')
                            <small>{{ $message }}</small>
                          @enderror
                        </div>
                    <div class="form-group">
                        <label for="exampleSelectBorder">Product</label>
                        <p>Pilih Product yang akan dipesan..</p>
                        <select class="custom-select form-control-border" id="exampleSelectBorder" name="product">
                            <option>Pilih Barang</option>
                          <option>Blossom 2L Pitcher</option>
                          <option>Rounded Mosaic</option>
                          <option>Mosaic Snak</option>
                        </select>
                        @error('product')
                          <small>{{ $message }}</small>
                        @enderror
                      </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">DownLine Code<small>(Khusus DownLine)</small></label>
                    <p>Berapa Box yang anda perlukan></p>
                      <input type="text" name="box" class="form-control" id="exampleInputEmail1" placeholder="...boxes">
                      @error('box')
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
