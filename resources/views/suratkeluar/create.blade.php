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
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="/suratkeluar/tambah" method="POST" enctype="multipart/form-data">
            <h3><i class="nav-icon fas fa-calendar my-1 btn-sm-1"></i> Tambah Data Event Keluar</h3>
            <hr>
            {{csrf_field()}}
            <div class="row">
                <div class="col-6">
                    <label for="nomorsurat">Nomor Event</label>
                    <input value="{{old('no_surat')}}" name="no_surat" type="text" class="form-control" id="nomorsurat"
                        placeholder="Nomor Event" required>
                    <label for="asalsurat">Tujuan Event</label>
                    <input value="{{old('tujuan_surat')}}" name="tujuan_surat" type="text" class="form-control bg-light"
                        id="tujuansurat" placeholder="Tujuan Event" required>
                    <label for="isisurat">Isi Ringkas</label>
                    <textarea name="isi" class="form-control bg-light" id="isisurat" rows="3"
                        placeholder="Isi Ringkas Event Keluar" required>{{old('isi')}}</textarea>
                    <label for="kode">Kode Klasifikasi</label>
                    <select name="kode" class="custom-select my-1 mr-sm-2 bg-light" id="inlineFormCustomSelectPref"
                        required>
                        <option value="">-- Pilih Klasifikasi Event --</option>
                        @foreach($data_klasifikasi as $klasifikasi)
                        <option value="{{$klasifikasi->kode}}">{{$klasifikasi->nama}} ( {{$klasifikasi->kode}} )
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-6">
                    <label for="tglsurat">Tanggal Event</label>
                    <input value="{{old('tgl_surat')}}" name="tgl_surat" type="date" class="form-control bg-light"
                        id="tglsurat" required>
                    <label for="tglcatat">Tanggal Catat</label>
                    <input value="{{old('tgl_catat')}}" name="tgl_catat" type="date" class="form-control bg-light"
                        id="tglcatat" required>
                    <label for="keterangan">Keterangan</label>
                    <input value="{{old('keterangan')}}" name="keterangan" type="text" class="form-control bg-light"
                        id="keterangan" placeholder="Keterangan" required>
                    <div class="custom-file">
                        <label for="exampleFormControlFile1">File</label>
                        <input name="filekeluar" type="file" class="form-control-file" id="validatedCustomFile"
                            required>
                        <small id="validatedCustomFile" class="text-danger">
                            Pastikan file anda ( jpg,jpeg,png,doc,docx,pdf ) !!!
                        </small>
                    </div>
                </div>
            </div>
            <hr>
            <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save"></i> SIMPAN</button>
            <a class="btn btn-danger btn-sm" href="index" role="button"><i class="fas fa-undo"></i> BATAL</a>
        </form>
    </div>
    </div>
</section>
@endsection
