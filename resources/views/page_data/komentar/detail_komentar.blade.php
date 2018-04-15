@extends('layouts.home_master')
@section('title', 'Detail Komentar')
@section('content')

<h3>Data Detail Komentar</h3>
@foreach ($detail_komentar as $data)
    {{-- expr --}}
    <h4>{{ $data->id }}
    {{ $data->komentar }}</h4>
@endforeach

@endsection()