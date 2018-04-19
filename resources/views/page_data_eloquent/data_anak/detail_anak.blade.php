@extends('layouts.home_master')
@section('title', 'Detail Anak')

@section('content')
<a href="/home_eloquent/data_anak" title="">Back</a>
<hr>

<h4>Data Detail Anak</h4>

@foreach ($detail_anak as $data)
    {{-- expr --}}
    <h3>ID ANAK {{ $data->id_anak }}</h3>
    <h3>NAMA ANAK : {{ $data->nama_anak }}</h3>
    <h3>ANAK SIAPA : {{ $data->anak_siapa }}</h3>
    <h3>KETERANGAN : {{ $data->keterangan }}</h3>
@endforeach

@endsection()