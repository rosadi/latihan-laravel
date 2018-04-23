@extends('layouts.home_master')
@section('title', 'View Barang')

@section('content')
<a href="{{ route('crud_eloquent') }}" title="">Home Crud</a>
<hr>
<h4>Data Barang</h4>

<a href="/crud_eloquent/add_barang/" title="">+ ADD BARANG</a><br><br>
<table border="1" cellpadding="5" cellspacing="1">
    <tr>
        <td>ID BARANG</td>
        <td>NAMA BARANG</td>
        <td>HARGA BARANG</td>
        <td>KETEARANGAN</td>
        <td>OPSI</td>
    </tr>
    @foreach ($data_barang as $data)
        {{-- expr --}}
    <tr>
        <td>{{ $data->id_barang }}</td>
        <td>{{ $data->nama_barang }}</td>
        <td>{{ $data->harga_barang }}</td>
        <td>{{ $data->keterangan }}</td>
        <td>
            <a href="/home_eloquent/edit_barang/{{ $data->id_barang }}" title="">EDIT </a> |
            <a href="/home_eloquent/delete_barang/{{ $data->id_barang }}" title="">DELETE</a>
        </td>
    </tr>
    @endforeach
</table>

@endsection()