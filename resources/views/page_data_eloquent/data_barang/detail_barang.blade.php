@extends('layouts.home_master')
@section('title', 'Halaman Detail')

@section('content')
<a href="/home_eloquent/data_barang/" title="">Back</a>
<hr>

<h4>Halaman Data Detail Barang</h4>

<h3>ID BARANG : {{ $detail_barang->id_barang }}</h3>
<h3>NAMA BARANG : {{ $detail_barang->nama_barang }} </h3>
<h3>HARGA BARANG : {{ $detail_barang->harga_barang }}</h3>
<h3>KETERANGAN : {{ $detail_barang->keterangan }}</h3>

@endsection()