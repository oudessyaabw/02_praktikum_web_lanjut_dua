<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        echo "Selamat Datang";
    }

    function about()
    {
        $tampil = "";
        $tampil .= "<p>NIM : 1941720168</p>";
        $tampil .= "<p>Nama : Oudessya Balqist Wibowo</p>";
        $tampil .= "<p>Kelas : TI-2A</p>";
        echo $tampil;
    }
    public function articles($id)
    {
        echo "Halaman Artikel dengan id " . $id;
    }
}
