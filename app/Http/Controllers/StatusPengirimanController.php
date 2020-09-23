<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StatusPengirimanRequest;
use App\StatusPengiriman;
use Illuminate\Http\Request;
use Illuminate\support\facades\DB;

class StatusPengirimanController extends Controller
{
    public function index($id)
    {
        $items = StatusPengiriman::where('tracking_area_id',$id)->get();

        return view('pages.status_pengiriman', [
            'items' => $items
        ]);
        // return view('pages.status_pengiriman');
    }
}
