<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\InformasiBiayaRequest;
use App\InformasiBiaya;
use Illuminate\Http\Request;
use Illuminate\support\facades\DB;


class InformasiBiayaController extends Controller
{
    public function index(Request $request)
    {
        $items = InformasiBiaya::all();
        return view('pages.informasi_biaya', [
            'items' => $items
        ]);
        return view('pages.informasi_biaya');
    }
}