@extends('layouts.home_master')
@section('title', 'Detail Anak')

@section('content')

<a href="/home/data_anak" title="">Data Anak</a>
<hr>

@foreach ($data_anak as $data)
    {{-- expr --}}
    <h4>ID ANAK : {{ $data->id_anak }}</h4>
    <h4>NAMA ANAK : {{ $data->nama_anak }}</h4>
    <h4>ANAK SIAPA : {{ $data->anak_siapa }}</h4>
    <h4>KETERANGAN : {{ $data->keterangan }}</h4>
@endforeach

@endsection()