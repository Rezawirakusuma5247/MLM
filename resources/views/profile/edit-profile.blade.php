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
          <div class="row">
            <!-- left column -->
            <div class="col-md-5 mx-auto">
              <!-- general form elements -->
              <div class="card card-primary ">
                <div class="card-header">
                  <h3 class="card-title">Form Edit User</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="POST" action="{{ route('writer.profile.update', ['id' => $data->id]) }}" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="PUT">
                    @csrf
                  <div class="card-body">
                    @if($data ->image)
                    <img src="{{ asset('storage/photo-user/'.$data->image) }}" width="50" height="50" class="rounded-circle">

                    @endif
                    <div class="form-group">
                        <label for="exampleInputEmail1">Photo Profile</label>
                        <input type="file" name="photo" class="form-control" id="exampleInputEmail1">
                        @error('photo')
                          <small>{{ $message }}</small>
                        @enderror
                      </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" name="email" class="form-control" value="{{ $data->email }}" id="exampleInputEmail1" placeholder="Enter email">
                      @error('email')
                        <small>{{ $message }}</small>
                      @enderror
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                      <input type="text" name="nama" class="form-control" value="{{ $data->name }}"  id="exampleInputEmail1" placeholder="Enter name">
                      @error('nama')
                        <small>{{ $message }}</small>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      @error('password')
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
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>

  </div>
@endsection
