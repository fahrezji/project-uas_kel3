@extends('layout.main')
{{-- @include('notifikasi.pesan')
@include('notifikasi.menu') --}}
@yield('konten')

@section('title')
    Selamat Datang di Web UAS Kelompok 3
    @endsection

    @section('konten')

<div class="card">
    <div class="card-header">
      <h3 class="card-title">Anggota Kelompok : </h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
          <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
          <i class="fas fa-times"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      Aji Fahreza <br>
      Adilla Novira <br>
      Muni Nurhalisa
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      Fitria Ingriyani <br>
      Iqbal Al Farizi <br>
      Wisnu Triatmojo
    </div>
    <!-- /.card-footer-->
  </div>
  @endsection
