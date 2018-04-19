@extends('layouts.home_master')
@section('title', 'Data Blog')

@section('content')

<h4>Data Blogs</h4>

<table border="1" cellpadding="5" cellspacing="1">
    <tr>
        <td>ID</td>
        <td>TITLE</td>
        <td>DESKRIPSI</td>
        <td>OPSI</td>
    </tr>
    @foreach ($blogs as $data)
        {{-- expr --}}
    <tr>
        <td>{{ $data->id }}</td>
        <td>{{ $data->title }}</td>
        <td>{{ $data->deskripsi }}</td>
        <td><a href="/home/detail_blog/{{ $data->id }}" title="">Detail</a></td>
    </tr>
    @endforeach
</table>

@endsection()