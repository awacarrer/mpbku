<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PelangganRequest;
use App\Http\Requests\Admin\UpdatePelangganRequest;
use App\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\str;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Pelanggan::all();
        return view('pages.admin.pelanggan.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.pelanggan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PelangganRequest $request)
    {
        $nama = $request->nama;
        $foto = $request->file('foto');
        $extension = $foto->extension();
        $nama_foto = "";

        if(!empty($foto)){
            $nama_foto = time()."_".$nama.".".$extension;
            $nama_folder = 'img';
            $foto->move($nama_folder,$nama_foto);
        }
       
        Pelanggan::create([
            'nama' => $request->nama,
            'pelanggan_id' => $request->pelanggan_id,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'email' => $request->email,
            'foto' => $nama_foto
        ]);
        return redirect()->route('pelanggan.index');
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
    public function update(UpdatePelangganRequest $request, $id)
    {
        $item = Pelanggan::findOrFail($id);

       
        $nama_foto = "";
        
        if(!empty($foto)){
            $foto = $request->file('foto');
            $extension = $foto->extension();
            $nama_foto = time().".".$extension;
            $nama_folder = 'img';
            $foto->move($nama_folder,$nama_foto);
        }
       
        // $item->nama = $request->nama;
        // $item->pelanggan_id = $request->pelanggan_id;
        // $item->jenis_kelamin = $request->jenis_kelamin;
        // $item->alamat = $request->alamat;
        // $item->telepon = $request->telepon;
        // $item->email = $request->email;
        // $item->foto = $nama_foto;

        $data = $request->all();
        $data['slug'] = Str::slug($request->resi);

        $item = Pelanggan::findOrFail($id);

        $item->update($data);

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
