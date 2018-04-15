@extends('layouts.home_master')
@section('title', 'Data Anak')

@section('content')

<h4>Data Anak</h4>
<table border="1" cellpadding="5" cellspacing="1">
    <tr>
        <td>ID</td>
        <td>NAMA ANAK</td>
        <td>ANAK SIAPA</td>
        <td>KETERANGAN</td>
        <td>OPSI</td>
    </tr>
    @foreach ($anak as $data)
        {{-- expr --}}
    <tr>
        <td>{{ $data->id_anak }}</td>
        <td>{{ $data->nama_anak }}</td>
        <td>{{ $data->anak_siapa }}</td>
        <td>{{ $data->keterangan }}</td>
        <td><a href="/home/detail_anak/{{ $data->id_anak }}" title="">Detail</a></td>
    </tr>
    @endforeach
</table>

@endsection()