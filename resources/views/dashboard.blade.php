
<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/adminlte/fontawesome-free/css/all.min.css">
    <!-- Ekko Lightbox -->
    <link rel="stylesheet" href="/adminlte/plugins/ekko-lightbox/ekko-lightbox.css">
    <!-- Ionicons -->
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/adminlte/css/adminlte.min.css">
    <!-- DataTable -->
    <link rel="stylesheet" href="/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
@extends('layouts.master')
@section('content')
<section class="content card" style="padding: 10px 10px 10px 10px ">
    <div class="box">
        <div class="row">
            <div class="col">
                <center>
                    <h3 class="font-weight-bold">SELAMAT DATANG DI BERANDA SIJAKA</h3>
                    <hr />
                </center>
                <br>
            </div>
        </div>

        <div class="row">
            <div class="card-body">
                <!-- Small boxes (Stat box) -->
                <div class="filter-container p-0 row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-blue">
                            <div class="inner">
                                <h3>{{DB::table('suratmasuk')->count()}}</h3>
                                <p>Event Masuk</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon fas fa-calendar"></i>
                            </div>
                            <a href="/suratmasuk/index" class="small-box-footer bg-gray">Lihat Detail <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-blue">
                            <div class="inner">
                                <h3>{{DB::table('suratkeluar')->count()}}</h3>
                                <p>Event Keluar</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon fas fa-calendar"></i>
                            </div>
                            <a href="/suratkeluar/index" class="small-box-footer bg-gray">Lihat Detail <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-blue">
                            <div class="inner">
                                <h3>{{DB::table('klasifikasi')->count()}}</h3>
                                <p>Klasifikasi</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon fas fa-layer-group"></i>
                            </div>
                            <a href="/klasifikasi/index" class="small-box-footer bg-gray">Lihat Detail <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    @if (auth()->user()->role == 'admin')
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-blue">
                            <div class="inner">
                                <h3>{{DB::table('users')->count()}}</h3>
                                <p>Pengguna</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon fas fa-user"></i>
                            </div>
                            <a href="{{ route('pengguna.index') }}" class="small-box-footer bg-gray">Lihat Detail <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    @endif
                    <!-- ./col -->
                </div>
            </div>
        </div>
        
    </div>
    
</section>
@endsection
