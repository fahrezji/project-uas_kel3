@include('notifikasi.pesan')
@extends('layout.main')
@section('title')
    Tambah Data Daftar Tamu
    @endsection

    @section('konten')

<form method="post" action="/tamu" enctype="multipart/form-data">
    @csrf


    <div class="mb-3">
        <label for="nama_tamu" class="form-label"> Nama tamu </label>
        <input type="text" class="form-control" name='nama_tamu' id="nama_tamu">
    </div>

    <div class="mb-3">
        <label for="alamat" class="form-label"> Alamat </label>
        <input type="text" class="form-control" name='alamat' id="alamat">
    </div>

    <div class="mb-3">
        <label for="email" class="form-label"> Email </label>
        <input type="text" class="form-control" name='email' id="email">
    </div>

    <div class="mb-3">
        <label for="telepon" class="form-label"> No Telepon </label>
        <input type="text" class="form-control" name='telepon' id="telepon">
    </div>

    <div class="mb-3">
        <label for="tujuan" class="form-label"> Tujuan</label>
        <input type="text" class="form-control" name='tujuan' id="tujuan">
    </div>

    <div class="mb-3">
        <label for="tanggal" class="form-label"> Tanggal</label>
        <input type="date" class="form-control" name='tanggal' id="tanggal">
    </div>

    {{-- <div class="mb-3">
        <label for="gambar" class="form-label"> Gambar </label>
        <input type="file" class="form-control" name='gambar' id="gambar">
    </div> --}}




    <div>
        <button class="btn btn-secondary btn-sm" type="submit"> + Tambah Data </button>
    </div>
    </div>

@endsection
