<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TrackingAreaRequest;
use App\Http\Requests\Admin\TrackingAreaEditRequest;
use App\TrackingArea;
use App\StatusPengiriman;
use Illuminate\Http\Request;
use Illuminate\Support\str;
use Illuminate\Support\Facades\DB;

class TrackingAreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = DB::table('tracking_area')
                        ->select('*', 'tracking_area.id as id')
                        ->join('pengiriman_barang','pengiriman_barang.id','=','tracking_area.pengiriman_barang_id')
                        ->join('pelanggan','pengiriman_barang.pelanggan_id','=','pelanggan.id')
                        ->join('users','pelanggan.users_id','=','users.id')
                        ->get();

        return view('pages.admin.tracking-area.index', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pengiriman = DB::table('pengiriman_barang')
                        ->select('*', 'pengiriman_barang.id as id')
                        ->join('pelanggan','pengiriman_barang.pelanggan_id','=','pelanggan.id')
                        ->join('users','pelanggan.users_id','=','users.id')
                        ->get();
        return view('pages.admin.tracking-area.create',[
            'item' => $pengiriman
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TrackingAreaRequest $request)
    {
        // $data = $request->all();
        $data['slug'] = Str::slug($request->resi);

        // TrackingArea::create($data);

        TrackingArea::create([
            'id' => $request->id,
            'resi' => $request->resi,
            'kota_asal' => $request->kota_asal,
            'kota_tujuan' => $request->kota_tujuan,
            'alamat' => $request->alamat,
            'pengiriman_barang_id' => $request->pengiriman_barang_id,
          ]);

          StatusPengiriman::create([
            'id' => $request->id,
            'lacak' => $request->lacak,
            'waktu' => $request->waktu,
            'destinasi' => $request->destinasi,
            'tracking_area_id' => $request->id,
          ]);

        return redirect()->route('tracking-area.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $item = TrackingArea::with([
        //     'details', 'pelanggan', 'user'
        // ])->findOrFail($id);
        $item = DB::table('tracking_area')
                        ->select('*', 'tracking_area.id as id')
                        ->join('pengiriman_barang','pengiriman_barang.id','=','tracking_area.pengiriman_barang_id')
                        ->join('pelanggan','pengiriman_barang.pelanggan_id','=','pelanggan.id')
                        ->join('users','pelanggan.users_id','=','users.id')
                        ->where('tracking_area.id',$id)
                        ->first();
        $detail = StatusPengiriman::where('tracking_area_id',$id)->get();
        return view('pages.admin.tracking-area.detail', [
            'item' =>$item,
            'detail' => $detail
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = TrackingArea::findOrFail($id);
        $pengiriman = DB::table('pengiriman_barang')
        ->select('*', 'pengiriman_barang.id as id')
        ->join('pelanggan','pengiriman_barang.pelanggan_id','=','pelanggan.id')
        ->join('users','pelanggan.users_id','=','users.id')
        ->get();
        return view('pages.admin.tracking-area.edit', [
            'item' =>$item,
            'pengiriman' => $pengiriman
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TrackingAreaEditRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->resi);

        $item = TrackingArea::findOrFail($id);

        $item->update($data);

        return redirect()->route('tracking-area.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = TrackingArea::findOrFail($id);
        $item->delete();

        return redirect()->route('tracking-area.index');
    }
}
