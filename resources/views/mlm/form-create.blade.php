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
            <form action="{{ route('vals.form.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
          <div class="row">
            <input name="user_id" type="hidden" value="{{ auth()->user()->id }}">
            <!-- left column -->
            <div class="col-md-5 mx-auto">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Isi Join Parent</h3>
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
                            <label for="exampleInputEmail1">Mengapa kamu ingin menjadi SponsorShip?</label>
                            <p>Apa Alasanmu?</p>
                              <input type="text" name="Rank" class="form-control" id="exampleInputEmail1" placeholder="Alasan...">
                              @error('Rank')
                                <small>{{ $message }}</small>
                              @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">SponsorShip memiliki beberapa persyartan</label>
                                <p>Apa yang bisa kamu berikan?</p>
                                  <input type="text" name="choice" class="form-control" id="exampleInputEmail1" placeholder="Require...">
                                  @error('choice')
                                    <small>{{ $message }}</small>
                                  @enderror
                                </div>
                                <div class="form-group">
                                    <label for="sponsorship">Sponsorship memiliki keuntungan tinggi, namun kadang juga yang dirugikan</label>
                                    <p>Apakah anda sanggup dengan konsekuensi nya?</p>
                                    <div>
                                        <input type="radio" id="yes" name="code" value="yes">
                                        <label for="yes">Ya</label>
                                    </div>
                                    <div>
                                        <input type="radio" id="no" name="code" value="no">
                                        <label for="no">Tidak</label>
                                    </div>
                                    @error('code')
                                        <small>{{ $message }}</small>
                                    @enderror
                                </div>
                  </div>
                  <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
            </form>
        </div>
      </section>
  </div>
@endsection
