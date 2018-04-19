@extends('layouts.home_master')
@section('title', 'Halaman Data User')
@section('content')

<h4>Halaman Data User</h4>
<table border="1" cellpadding="5" cellspacing="1">
    <tr>
        <td>ID</td>
        <td>USERNAME</td>
        <td>PASSWORD</td>
        <td>OPSI</td>
    </tr>
    @foreach ($data_user as $data)
        {{-- expr --}}
    <tr>
        <td>{{ $data->id }}</td>
        <td>{{ $data->username }}</td>
        <td>{{ $data->password }}</td>
        <td><a href="/home/detail_user/{{ $data->id }}" title="">Detail</a></td>
    </tr>
    @endforeach
</table>

@endsection()