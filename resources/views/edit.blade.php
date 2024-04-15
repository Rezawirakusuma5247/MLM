@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
              <li class="breadcrumb-item active">Edit User </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="card card-primary ">
                <div class="card-header">
                  <h3 class="card-title">Form Edit User</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="POST" action="{{ route('admin.user.update', ['id' => $data->id]) }}" enctype="multipart/form-data">
                @csrf
                    @method('put')
                  <div class="card-body">
                    <div class="form-group">
                        <label for="exampleSelectBorder">Rank</label>
                        <select name="rank" class="custom-select form-control-border" id="exampleSelectBorder">
                            <option value="Owner" {{ $data->rank === 'Owner' ? 'selected' : '' }}>Owner</option>
                            <option value="Sponsorship" {{ $data->rank === 'Sponsorship' ? 'selected' : '' }}>Sponsorship</option>
                            <option value="Upperline" {{ $data->rank === 'Upperline' ? 'selected' : '' }}>Upperline</option>
                            <option value="Downline" {{ $data->rank === 'Downline' ? 'selected' : '' }}>Downline</option>
                        </select>
                        @error('rank')
                            <small>{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Codes</label>
                        <input type="text" name="codes" class="form-control" id="exampleInputEmail1">
                        @error('codes')
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
