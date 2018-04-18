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
        $blogs = DB::table('blogs')->get();
        return view('page_data.blogs.data_blogs', ['blogs' => $blogs]);
    }

    public function detail_blog($id)
    {
        $detail = DB::table('blogs')->where('id', $id)->get();
        return view('page_data.blogs.detail_blog', ['detail' => $detail]);
    }


    public function data_anak()
    {
        $anak = DB::table('data_anak')->get();
        return view('page_data.anak.data_anak', ['anak' => $anak]);
    }

    public function detail_anak($id_anak)
    {
        $data_anak = DB::table('data_anak')->where('id_anak', $id_anak)->get();
        return view('page_data.anak.detail_anak', ['data_anak' => $data_anak]);
    }

    public function data_komentar()
    {
        $data_komentar = DB::table('komentar')->get();
        return view('page_data.komentar.data_komentar', ['data_komentar' => $data_komentar]);
    }

    public function detail_komentar($id)
    {
        $detail_komentar = DB::table('komentar')->where('id', $id)->get();
        return view('page_data.komentar.detail_komentar', ['detail_komentar' => $detail_komentar]);
    }

    public function data_users()
    {
        $data_user = DB::table('users')->get();
        return view('page_data.user.data_user', ['data_user' => $data_user]);
    }

    public function detail_user($id)
    {
        $detail_user = DB::table('users')->where('id', $id)->get();
        return view('page_data.user.detail_user', ['detail_user' => $detail_user]);
    }

}
