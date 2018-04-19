@extends('layouts.home_master')
@section('title', 'Data Komentar')
@section('content')

    <h4>Data Komentar</h4>
    <table  border="1" cellpadding="5" cellspacing="1">
        <tr>
            <td>ID</td>
            <td>KOMENTAR</td>
            <td>OPSI</td>
        </tr>
        @foreach ($data_komentar as $data)
            {{-- expr --}}
        <tr>
            <td>{{ $data->id }}</td>
            <td>{{ $data->komentar }}</td>
            <td><a href="detail_komentar/{{ $data->id }}" title="">Detail</a></td>
        </tr>
        @endforeach
    </table>

@endsection()