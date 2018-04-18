@extends('layouts.home_master')
@section('title')
@section('content')
<a href="{{ route('data_blogs') }}" title="">Data Blogs</a>
<hr>
<h3>Detail Blog</h3>

@foreach ($detail as $data)
    {{-- expr --}}
    <h3>ID BLOGS : {{ $data->id }}</h3>
    <h3>TITLE : {{ $data->title }}</h3>
    <h3>DESKRIPSI : {{ $data->deskripsi }}</h3>
@endforeach
@endsection()