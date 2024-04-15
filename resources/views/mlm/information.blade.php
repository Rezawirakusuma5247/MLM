@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Information</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Information</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>


    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h1 class="card-title font-weight-bold">MLM Website</h1>
                </div>
              </div>
              <div class="card-body">
                <div class="d-col">
                  <p class="d-flex flex-column font-weight-bold">
                    Pengertian:
                  </p>
                  <p>
                    Pemasaran berjenjang (Inggris: multi-level marketing, MLM) adalah strategi pemasaran di mana tenaga penjual
                    (sales) tidak hanya mendapatkan kompensasi atas penjualan yang mereka hasilkan, tetapi juga atas hasil penjualan
                    sales lain yang mereka rekrut.
                    Tenaga penjual yang direkrut tersebut dikenal dengan anggota "downline".
                  </p><p>
                        Istilah lain yang digunakan untuk MLM adalah
                    penjualan piramida,
                    pemasaran jaringan, dan pemasaran berantai. MLM menjadi salah satu metode menjual produk perusahaan
                    dengan menggunakan inovasi di bidang pemasaran dan distribusi, MLM berkaitan dengan bagaimana dapat menjual suatu produk dengan lebih
                    efisien ke pasar.
                </p>
                    <p>
                     Dengan membeli product dari kami, sebagai Downline/Upperline kalian meraup keuntungan sebanyak 20%
                     karna dengan membeli product kami kalian mendapatkan harga yang dibawah dari harga pasar,
                     semisal harga tupperware 1 box 690.000, namun karena kalian membeli dari sini, kalian meraup keuntungan 20%
                     alias 136.000, artinya kalian hanya perlu membeli dengan harga 564.000 untuk 1 box tupperware.
                  </p>
                  <p>
                    kalian juga bisa mendistribusikan product kami saat kalian menjual product ini kemana mana, alias kalian promosikan
                    dengan ini jika kalian menjadi UpperLine kalian meraup keuntungan sebanyak 30% yang artinya 207.000, alias kalian hanya perlu
                    membeli dengan harga 483.000 untuk satu box tupperware. dan juga untuk para DownLine/UpperLine jika User baru memasukan Code kalian
                    Kalian akan mendapatkan komisi sebesar 25.000 untuk per/User/id Nya
                  </p>
                </div>
                <!-- /.d-flex -->
              </div>
            </div>
            <!-- /.card -->

            <div class="card">
              <div class="card-header border-0">
                <h3 class="card-title">Products</h3>
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                  <thead>
                  <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Sales</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>
                      <img src="{{ asset('lte/dist/img/default-150x150.png') }}" alt="Product 1" class="img-circle img-size-32 mr-2">
                      Some Product
                    </td>
                    <td>???</td>
                    <td>
                      ???
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img src="{{ asset('lte/dist/img/default-150x150.png') }}" alt="Product 1" class="img-circle img-size-32 mr-2">
                      Another Product
                    </td>
                    <td>???</td>
                    <td>
                      ???
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img src="{{ asset('lte/dist/img/default-150x150.png') }}" alt="Product 1" class="img-circle img-size-32 mr-2">
                      Amazing Product
                    </td>
                    <td>???</td>
                    <td>
                      ???
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img src="{{ asset('lte/dist/img/default-150x150.png') }}" alt="Product 1" class="img-circle img-size-32 mr-2">
                      Perfect Item
                      <span class="badge bg-danger">NEW</span>
                    </td>
                    <td>???</td>
                    <td>
                      ???
                    </td>
                  </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title font-weight-bold">SOP</h3>
                </div>
              </div>
              <div class="card-body">
                <div class="">
                  <p class="">
                    Beberapa SOP yang perlu diperhatikan:
                  </p>
                  <p>
                    Beberapa informasi mengenai web yang terkait, terdapat:
                  </p>
                  <p>
                    <strong>Rank</strong>
                        Untuk Mengetahui kedudukan dari berbagai User, setiap rank memiliki kualifikasinya masing masing,
                    dan setiap user bisa menaikan rank mereka dengan melakukan transaksi antar pengguna/ menawarkan produk kepada orang lain.
                  </p>
                  <p>
                    <strong>Provals</strong>
                        Provals berguna unuk setiap user untuk menaikan ranknya. Provals adalah bukti transaksi yang dilakukan user.
                    setiap user melakukan transaksi diperlukan mengupload hasil transaksi di Provals, yang bertujuan untuk mendapatkan profit user
                    dan menaikan rank user.
                  </p>
                  <p>
                    <strong>Sponsorship</strong>
                        Berbeda dengan yang lain Sponsorship adalah, mereka yang mengajukan untuk menjadi sponsor untuk website terkait. keuntungan
                    yang didapat berupa, hasil dari pendapatan website banding 50 dengan sponsorship.
                  </p>
                </div>
                <!-- /.d-flex -->
                </div>
              </div>
              <div class="card">
                <div class="card-header border-0">
                  <h3 class="card-title font-weight-bold">Role User</h3>
                </div>
                <div class="card-body">
                  <div class="justify-content-between align-items-center border-bottom mb-3">
                      <span class="text-muted">Owner</span>
                    </p>
                    <div>
                        <p>Owner pemilik Website bebas melakukan apapun.</p>
                    </div>
                  </div>
                  <!-- /.d-flex -->
                  <div class="justify-content-between align-items-center border-bottom mb-4">
                    <p>
                      <span class="text-muted">SponsorShip</span>
                    </p>
                    <div>
                        <p>
                            SponsorShip adalah seseorang yang menginvestasikan dana nya kepada web terkait, mendapatkan keuntungan banding 50.
                        </p>
                    </div>
                  </div>
                  <!-- /.d-flex -->
                  <div class="justify-content-between align-items-center mb-0">
                    <p>
                      <span class="text-muted">UpperLine</span>
                    </p>
                    <div>
                        <p>UpperLine adalah Role User setelah DownLine yang meraup keuntungan lebih banyak, dimana
                            dia bisa merekrut DownLine lainnya untuk mendapatkan keuntungan lebih.</p>
                    </div>
                  </div>
                  <div class="justify-content-between align-items-center mb-2">
                    <p>
                      <span class="text-muted">DownLine</span>
                    </p>
                    <div>
                        <p>DownLine adalah Role User terendah, dimana semua user memulai.</p>
                    </div>
                  </div>
                  <!-- /.d-flex -->
                </div>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
    <!-- /.content -->
  </div>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  @yield('scripts')
  @endsection


