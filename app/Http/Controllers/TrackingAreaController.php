<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\DB;

class TrackingAreaController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $user = auth()->user()->email;
        
        $trackings = DB::select("SELECT * FROM users
        JOIN pelanggan
        ON users.id = pelanggan.users_id
        JOIN pengiriman_barang
        ON pelanggan.id = pengiriman_barang.pelanggan_id
        JOIN tracking_area
        ON pengiriman_barang.id = tracking_area.pengiriman_barang_id
        
        WHERE users.email = '$user' ");
        return view('pages.tracking_area', compact('trackings'));
    }
}
