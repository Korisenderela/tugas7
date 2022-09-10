<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{

    function showTemplate()
    {
        return view('template.base');
    }


    function showKategori()
    {
        return view('admin.kategori');
    }


    function showPelanggan()
    {
        return view('admin.pelanggan');
    }

    function showSuppliyer()
    {
        return view('admin.suppliyer');
    }

    function showProduk()
    {
        return view('admin.produk');
    }

    function showBeranda()
    {
        return view('admin.beranda');
    }

    function showPromo()
    {
        return view('admin.promo');
    }
}
