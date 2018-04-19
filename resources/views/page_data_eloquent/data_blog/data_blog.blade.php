@extends('layouts.home_master')
@section('title', 'Data Blog')

@section('content')

<h4>Data Blog</h4>
@foreach ($blogs as $data)
    {{-- expr --}}
    <h4><li><a href="/home_eloquent/detail_blog/{{ $data->id }}" title="">{{ $data->title }}</a></li></h4>
@endforeach
@endsection()