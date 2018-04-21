@extends('layouts.home_master')
@section('title', 'Data Komentar')

@section('content')

<h4>Data Komentar</h4>

<table border="1" cellpading="5" cespacing="1">
    <tr>
        <td>ID</td>
        <td>KOMENTAR</td>
        <td>OPSI</td>
    </tr>
    @foreach ($data_komentars as $data)
        {{-- expr --}}
    <tr>
        <td>{{ $data->id }}</td>
        <td>{{ $data->komentar }}</td>
        <td><a href="/home_eloquent/detail_komentar/{{ $data->id }}" title="">Detail</a></td>
    </tr>
    @endforeach
</table>
@endsection()