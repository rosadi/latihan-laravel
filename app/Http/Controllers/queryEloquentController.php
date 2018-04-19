<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Model\ModelBarang;
use App\Model\ModelBlogs;
use App\Model\ModelAnak;


class queryEloquentController extends Controller
{
    //
    public function index()
    {
        return view('pages.home_eloquent');
    }

    public function data_barang()
    {
        $barang = ModelBarang::all();
        return view('page_data_eloquent.data_barang.data_barang', ['barang' => $barang]);
    }

    public function detail_barang($id_barang)
    {
        $detail_barang = ModelBarang::where('id_barang', $id_barang)->first();
        return view('page_data_eloquent.data_barang.detail_barang', ['detail_barang' => $detail_barang]);
    }

    public function data_blog()
    {
        $blogs = ModelBlogs::all();
        return view('page_data_eloquent.data_blog.data_blog', ['blogs' => $blogs]);
    }

    public function detail_blog($id)
    {
        $detail = ModelBlogs::find($id);
        return view('page_data_eloquent.data_blog.detail_blog', ['detail' => $detail]);
    }

    public function data_anak()
    {
        $data_anak = ModelAnak::all();
        return view('page_data_eloquent.data_anak.data_anak', ['data_anak' => $data_anak]);
    }

    public function detail_anak($id_anak)
    {
        $detail_anak = ModelAnak::where('id_anak', $id_anak)->get();
        return view('page_data_eloquent.data_anak.detail_anak', ['detail_anak' => $detail_anak]);
    }


}
