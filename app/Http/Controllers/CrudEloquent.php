<?php

namespace App\Http\Controllers;
use \Support\Facades\DB;
use Illuminate\Http\Request;
use App\Crud\ModelBarang;

class CrudEloquent extends Controller
{
    //
    public function index()
    {
        return view('pages.home_crud_eloquent');
    }

    public function view_barang()
    {
        $data_barang = ModelBarang::all();
        return view('crud_eloquent.view_barang', ['data_barang' => $data_barang]);
    }

    public function add_barang()
    {
        // insert biasa
        $barang = new ModelBarang;
        $barang->nama_barang = 'barang M';
        $barang->harga_barang = '9012321';
        $barang->keterangan = 'ini adalah nilai dari barang M yang terbaru';
        $barang->save();
        return redirect('crud_eloquent/view_barang');
    }
}
