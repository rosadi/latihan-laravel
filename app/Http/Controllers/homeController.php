<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {   
        return view('pages.home');
    }

    public function data_barang()
    {
        $barang = DB::table('barang')->get();
        return view('page_data.barang.data_barang', ['barang' => $barang]);
    }

    public function detail_barang($id_barang)
    {
        $detail_barang = DB::table('barang')->where('id_barang', $id_barang)->get();
        return view('page_data.barang.detail_barang', ['detail_barang' => $detail_barang]);
    }

    public function data_blogs()
    {
        
    }
}
