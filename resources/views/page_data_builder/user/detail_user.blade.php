@extends('layouts.home_master')
@section('title', 'Halaman Detail')
@section('content')
<a href="/home/data_users" title="">Back</a>
<hr>
<h4>Halaman Data Detail User</h4>
@foreach ($detail_user as $data)
    {{-- expr --}}
<h3>ID : {{ $data->id }}</h3>
<h3>USERNAME : {{ $data->username }}</h3>
<h3>PASSWORD : {{ md5($data->password) }}</h3>
@endforeach

@endsection()