<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CekBarangRequest;
use App\CekBarang;
use Illuminate\Http\Request;
use Illuminate\support\facades\DB;
use Illuminate\Support\str;

class CekBarangController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        // $user = auth()->user()->id;
        // dd($user)
        // $items= DB::table('pengiriman_barang')
        // ->select('*', 'pengiriman_barang.id as id')
        // ->join('pelanggan','pengiriman_barang.pelanggan_id','=','pelanggan.id')
        // ->join('users','pelanggan.users_id','=','users.id')
        // ->where('pengiriman_barang.pelanggan_id',$user)
        // ->get();
        // $items = DB::select("SELECT * FROM users 
        //     WHERE users.email = '$user'
        // ");

        $user = auth()->user()->email;
        
        $items = DB::select("SELECT * FROM users
        JOIN pelanggan
        ON users.id = pelanggan.users_id
        JOIN pengiriman_barang
        ON pelanggan.id = pengiriman_barang.pelanggan_id
        JOIN tracking_area
        ON pengiriman_barang.id = tracking_area.pengiriman_barang_id
        
        WHERE users.email = '$user' ");
        
        return view('pages.cek_barang', [
            'items' => $items
        ]);
    }
}
