<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengirimanBarangController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.pengiriman_barang');
    }
}
