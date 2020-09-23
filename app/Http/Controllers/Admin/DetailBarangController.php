<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\DetailBarangRequest;
use App\DetailBarang;
use App\StatusPengiriman;
use Illuminate\Http\Request;
use Illuminate\Support\str;

class DetailBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = DetailBarang::all();

        return view('pages.admin.detail-barang.index', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        // $id = Input::get
        return view('pages.admin.detail-barang.create',['tracking_area_id' => $id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // $data['slug'] = Str::slug($request->no_pengirim);

        StatusPengiriman::create($data);
        
        return redirect('/admin/tracking-area/'. $request->tracking_area_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Pelanggan::findOrFail($id);

        return view('pages.admin.pelanggan.edit', [
            'item' =>$item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PelangganRequest $request, $id)
    {
        $item = Pelanggan::findOrFail($id);

        $nama = $request->nama;
        $foto = $request->file('foto');
        $extension = $foto->extension();
        $nama_foto = "";

        if(!empty($foto)){
            $nama_foto = time()."_".$nama.".".$extension;
            $nama_folder = 'img';
            $foto->move($nama_folder,$nama_foto);
        }
       
        $item->nama = $request->nama;
        $item->jenis_kelamin = $request->jenis_kelamin;
        $item->alamat = $request->alamat;
        $item->telepon = $request->telepon;
        $item->email = $request->email;
        $item->foto = $nama_foto;
        $item->save();
        return redirect()->route('pelanggan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Pelanggan::findOrFail($id);
        $item->delete();

        return redirect()->route('pelanggan.index');
    }
}
