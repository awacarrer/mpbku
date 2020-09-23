<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListPengirimanController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.list_pengiriman');
    }
}
