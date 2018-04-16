@extends('layouts.home_master')
@section('title', 'Halaman Home')

@section('content')

<h4>Halaman Home</h4>

<li><a href="/home/data_barang" title="">Data Barang</a></li>
<li><a href="/home/data_blogs" title="">Data Blogs</a></li>
<li><a href="/home/data_anak" title="">Data Anak</a></li>
<li><a href="/home/data_komentar" title="">Data Komentar</a></li>
<li><a href="/home/data_users" title="">Data User</a></li>

@endsection()