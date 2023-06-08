@include('notifikasi.pesan')
@extends('layout.main')
@section('title')
   Data Daftar Tamu
    @endsection

    @section('konten')
<a href="/tamu/create" class="btn btn-primary"> +Tambah Data Daftar Tamu </a>

<table class="table">
<thead>
    <tr>
        <th> No </th>
        <th>Nama Tamu</th>
        <th>Alamat</th>
        <th>Email</th>
        <th>No Telepon</th>
        <th>Tujuan</th>
        <th>Tanggal</th>
        <th colspan="2">Aksi</th>
        {{-- <td>
            <a class='btn btn-secondary btn-sm' href='{{url('/mahasiswa/'.$item->nim_mhs)}}'> Detail </a>
            <a class='btn btn-warning btn-sm' href='{{url('/mahasiswa/'.$item->nim_mhs.'/edit')}}'> Edit </a>
        </td> --}}
    </tr>
</thead>
<tbody>
    @foreach ($data as $item )

    <tr>
        {{-- <td>
            @if ($item->gambar)
                <img style="max-width:50px;max-height:50px" src="{{ url('gambar').'/'.$item->gambar }}">
            @endif
        </td> --}}
        <th> </th>
        <th>{{ $item->nama_tamu}}</th>
        <th>{{ $item->alamat}}</th>
        <th>{{ $item->email}}</th>
        <th>{{ $item->telepon}}</th>
        <th>{{ $item->tujuan}}</th>
        <th>{{ $item->tanggal}}</th>

        <td>
            <a class='btn btn-secondary btn-sm' href='{{url('/tamu/'.$item->id)}}'> Detail </a>
            <a class='btn btn-warning btn-sm' href='{{url('/tamu/'.$item->id.'/edit')}}'> Edit </a>

            <form onsubmit="return confirm('Yakin Hapus Data Ini?')" class='d-inline' action="{{'/tamu/'.$item->id}}" method='post'>
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm" type="submit"> Hapus </button>
            </form>
        </td>
    </tr>

    @endforeach
</tbody>


</table>
{{$data->links()}}

<script type="text/javascript">
var addNumeration = function(cl){
  var table = document.querySelector('table.' + cl)
  var trs = table.querySelectorAll('tr')
  var counter = 1

  Array.prototype.forEach.call(trs, function(x,i){
    var firstChild = x.children[0]
    if (firstChild.tagName === 'TD') {
      var cell = document.createElement('td')
      cell.textContent = counter ++
      x.insertBefore(cell,firstChild)
    } else {
      firstChild.setAttribute('colspan',1)
    }
  })
}

addNumeration("table")
</script>
@endsection
