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
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="/suratmasuk/{{$suratmasuk->id}}/update" method="POST" enctype="multipart/form-data">
            <h3><i class="nav-icon fas fa-envelope-open-text my-1 btn-sm-1"></i> Edit Event Masuk</h3>
            <hr />
            {{csrf_field()}}
            <div class="row">
                <div class="col-6">
                    <label for="isisurat">Isi Ringkas</label>
                    <textarea name="isi" class="form-control bg-light" id="isisurat" rows="3"
                        placeholder="Isi Ringkas Surat Masuk" value="{{$suratmasuk->isi}}"
                        required>{{$suratmasuk->isi}}</textarea>
                    <label for="kode">Kode Klasifikasi</label>
                    <select name="kode" class="custom-select my-1 mr-sm-2 bg-light" id="kode"
                        value="{{$suratmasuk->kode}}" required>
                        <option selected>{{$suratmasuk->kode}}</option>
                        @foreach($data_klasifikasi as $klasifikasi)
                        <option value="{{$klasifikasi->kode}}">{{$klasifikasi->nama}} ( {{$klasifikasi->kode}} )
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-6">
                    <label for="tglsurat">Tanggal Event</label>
                    <input name="tgl_surat" type="date" class="form-control bg-light" id="tglsurat"
                        value="{{$suratmasuk->tgl_surat}}" required>
                    <label for="tglditerima">Tanggal Diterima</label>
                    <input name="tgl_terima" type="date" class="form-control bg-light" id="tglditerima"
                        value="{{$suratmasuk->tgl_terima}}" required>
                    <label for="keterangan">Keterangan</label>
                    <input name="keterangan" type="text" class="form-control bg-light" id="keterangan"
                        placeholder="Keterangan" value="{{$suratmasuk->keterangan}}" required>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">File</label>
                        <input name="filemasuk" type="file" class="form-control-file" id="exampleFormControlFile1"
                            value="{{$suratmasuk->filemasuk}}">
                        <small id="exampleFormControlFile1" class="text-warning">
                            Pastikan file anda ( jpg,jpeg,png,doc,docx,pdf ) !!!
                        </small>
                    </div>
                </div>
            </div>
            <hr>
            <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save"></i> SIMPAN</button>
            <a class="btn btn-danger btn-sm" href="/suratmasuk/index" role="button"><i class="fas fa-undo"></i>
                BATAL</a>
        </form>
    </div>
</section>
@endsection
