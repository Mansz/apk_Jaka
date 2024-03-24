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
        @if(session('sukses'))
        <div class="alert alert-success" role="alert">
            {{session('sukses')}}
        </div>
        @endif
        <div class="row">
            <div class="col">
                <h3><i class="nav-icon fas fa-images my-1 btn-sm-1"></i> Galeri Event Masuk</h3>
                <hr />
            </div>
        </div>
        <div class="row">
            <div class="card-body">
                <div>
                    <div class="filter-container p-0 row">
                        <?php $no = 0;?>
                        @foreach($data_suratmasuk as $suratmasuk)
                        <?php $no++ ;?>
                        <div class="col-lg-2 col-6">
                            <!-- small box -->
                            <div class="small-box">
                                <div class="inner">
                                    <a href="{{URL::to('/')}}/dataeventmasuk/{{$suratmasuk->filemasuk}}"
                                        data-toggle="lightbox" data-title="Perbesar Gambar">
                                        <center>
                                            <img src="{{URL::to('/')}}/datasuratmasuk/{{$suratmasuk->filemasuk}}"
                                                width="100" height="150"
                                                alt="File .doc, .docx, atau .pdf tidak dapat ditampilkan, Silahkan klik Lihat Detail File">
                                        </center>
                                    </a>
                                </div>
                                <a href="/suratmasuk/{{$suratmasuk->id}}/tampil"
                                    class="small-box-footer bg-success">Lihat Detail File <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <small class="text-danger">
                    <b>Catatan : </b>File .doc, .docx, atau .pdf tidak dapat ditampilkan disini silahkan klik <b>Lihat
                        Detail File</b> !!!
                </small>
            </div>
        </div>
    </div>
    </div>
    @endsection
