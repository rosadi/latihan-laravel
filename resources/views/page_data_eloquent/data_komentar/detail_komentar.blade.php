@extends('layouts.home_master')
@section('title', 'Detail')

@section('content')

<h3>{{ $detail->id }}</h3>
<h4>{{ $detail->komentar }}</h4>

@endsection()