@extends('layouts.home_master')
@section('title', 'Data Barang')

@section('content')

<h4>Halaman Data Barang</h4>
<table border="1" cellpadding="5" cellspacing="1">
    <tr>
        <td>ID BARANG</td>
        <td>NAMA BARANG</td>
        <td>HARGA BARANG</td>
        <td>KETERANGAN</td>
        <td>OPSI</td>
    </tr>
    @foreach ($barang as $data)
        {{-- expr --}}
    <tr>
        <td>{{ $data->id_barang }}</td>
        <td>{{ $data->nama_barang }}</td>
        <td>{{ $data->harga_barang }}</td>
        <td>{{ $data->keterangan }}</td>
        <td><a href="/home/detail_barang/{{ $data->id_barang }}" title="">DETAIL</a></td>
    </tr>
    @endforeach
</table>

@endsection()