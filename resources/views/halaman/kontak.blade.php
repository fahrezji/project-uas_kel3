@extends('layout/project')
@section('konten')
<h1> {{ $judul }} </h1>
<p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat explicabo necessitatibus placeat 
    voluptatem minima, molestias vel eaque cum dolorum harum totam officia dolor maiores omnis quos. Ut natus qui neque. </p>
    <p>
        <ul>
            <li> Email: {{ $kontak['email']}} </li>
            <li> Youtube: {{ $kontak['youtube']}} </li>
</ul>
</p>
@endsection