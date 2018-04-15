@extends('layouts.home_master')
@section('title')
Detail Barang - 
@endsection()

@section('content')
<a href="/home/data_barang/" title="">Back Barang</a>
<hr>

<h1>Data Detail Barang</h1>

@foreach ($detail_barang as $data)
    {{-- expr --}}
<h3>Nama Barang : {{ $data->nama_barang }}</h3>
<h3>Harga Barang : {{ $data->harga_barang }}</h3>
<h3>Keterangan {{ $data->keterangan }}</h3>
@endforeach
@endsection()