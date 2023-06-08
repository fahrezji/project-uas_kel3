@include('notifikasi.pesan')
@extends('layout.main')
@section('title')
    Edit Data Daftar Tamu
    @endsection

    @section('konten')
<a href='/tamu' class="btn btn-secondary"> << Kembali </a>

    <form method="post" action="{{'/tamu/'.$data->id}}" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-5 mt-5">
        <div class="mb-3">
            <h1> Nama Tamu : {{$data->nama_tamu}}</h1>
        </div>

        <div class="mb-3">
            <label for="nama_tamu" class="form-label"> Nama Tamu </label>
            <input type="text" class="form-control" name='nama_tamu' id="nama_tamu" value="{{$data->nama_tamu}}">
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label"> Alamat </label>
            <input type="text" class="form-control" name='alamat' id="alamat" value="{{$data->alamat}}">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label"> Email </label>
            <input type="text" class="form-control" name='email' id="email" value="{{$data->email}}">
        </div>

        <div class="mb-3">
            <label for="telepon" class="form-label"> No Telpon </label>
            <input type="text" class="form-control" name='telepon' id="telepon" value="{{$data->telepon}}">
        </div>

        <div class="mb-3">
            <label for="tujuan" class="form-label"> Tujuan </label>
            <input type="text" class="form-control" name='tujuan' id="tujuan" value="{{$data->tujuan}}">
        </div>

        <div class="mb-3">
            <label for="tanggal" class="form-label"> tanggal </label>
            <input type="date" class="form-control" name='tanggal' id="tanggal" value="{{$data->tanggal}}">
        </div>

        {{-- @if ($data->gambar)
        <div class="mb-3">
            <img style="max-width:50px;max-height:50px" src="{{ url('gambar') . '/' .$data->gambar }}">
        </div>
        @endif
       <div class="mb-3">
        <label for="gambar" class="form-label"> Gambar </label>
        <input type="file" class="form-control" name="gambar" id="gambar">
       </div> --}}


<div>
    <button class="btn btn-secondary btn-sm" type="submit"> Edit Data </button>
</div>
        </div>
    </form>
@endsection
