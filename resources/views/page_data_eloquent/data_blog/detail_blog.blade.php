@extends('layouts.home_master')
@section('title', 'Detail Blogs')

@section('content')

<h4>{{ $detail->title }}</h4><hr>
<p>{{ $detail->deskripsi }}</p>
<hr>
<a href="/home_eloquent/data_blog" title="">Back</a>

@endsection()