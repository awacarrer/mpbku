<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Pelanggan;
use App\PengirimanBarang;
use App\TrackingArea;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $user = User::count();
        $pelanggan = Pelanggan::count();
        $pengiriman_barang = PengirimanBarang::count();
        $tracking_area = TrackingArea::count();
        return view('pages.admin.dashboard', compact('user','pelanggan','pengiriman_barang','tracking_area'));
    }
}
