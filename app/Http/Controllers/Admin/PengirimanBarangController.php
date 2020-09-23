<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PengirimanBarangRequest;
use App\PengirimanBarang;
use App\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\str;
use Illuminate\Support\Facades\DB;

class PengirimanBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $pengiriman = PengirimanBarang::all();
        // $items = PengirimanBarang::with([
        //     'details','pelanggan','user'
        // ])->get();
        $pengiriman = DB::table('pengiriman_barang')
                        ->select('*', 'pengiriman_barang.id as id')
                        ->join('pelanggan','pengiriman_barang.pelanggan_id','=','pelanggan.id')
                        ->join('users','pelanggan.users_id','=','users.id')
                        ->get();
        return view('pages.admin.pengiriman-barang.index', compact ('pengiriman'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pelanggan = Pelanggan::all();
        return view('pages.admin.pengiriman-barang.create', compact ('pelanggan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$data = $request->all();
        // $data['slug'] = Str::slug($request->nama_penerima);
        PengirimanBarang::create([
            'tanggal_pengiriman' => $request->tanggal_pengiriman,
            'nama_penerima' => $request->nama_penerima,
            'organisasi_penerima' => $request->organisasi_penerima,
            'alamat_penerima' => $request->alamat_penerima,
            'email_penerima' => $request->email_penerima,
            'nama_barang' => $request->nama_barang,
            'biaya' => $request->biaya,
            'berat_barang' => $request->berat_barang,
            'pelanggan_id' => $request->pelanggan_id
          ]);
        //PengirimanBarang::create($data);
        return redirect()->route('pengiriman-barang.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $item = PengirimanBarang::with([
        //     'details', 'pengiriman_barang', 'user'
        // ])->findOrFail($id);
        
        $item = DB::table('pengiriman_barang')
                        ->select('*', 'pengiriman_barang.id as id')
                        ->join('pelanggan','pengiriman_barang.pelanggan_id','=','pelanggan.id')
                        ->join('users','pelanggan.users_id','=','users.id')
                        ->where('pengiriman_barang.id',$id)
                        ->first();
        return view('pages.admin.pengiriman-barang.detail', [
            'item' =>$item
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
        $item = PengirimanBarang::findOrFail($id);
        $pelanggan = Pelanggan::all();
        return view('pages.admin.pengiriman-barang.edit', [
            'item' =>$item,
            'pelanggan' => $pelanggan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PengirimanBarangRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->nama_penerima);

        $item = PengirimanBarang::findOrFail($id);

        $item->update($data);

        return redirect()->route('pengiriman-barang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = PengirimanBarang::findOrFail($id);
        $item->delete();

        return redirect()->route('pengiriman-barang.index');
    }
}
