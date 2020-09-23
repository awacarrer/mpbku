@extends('layouts.admin')

@section('content')

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Pengiriman Barang [ {{$item->tanggal_pengiriman}} ]</h6>
        </div>
        @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    
                @endif
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>Nama Pengirim</th>
                                <td>{{ $item->name }}</td>
                            </tr>
                            <tr>
                                <th>Nama Penerima</th>
                                <td>{{ $item->nama_penerima }}</td>
                            </tr>
                            <tr>
                                <th>Tanggal Pengiriman</th>
                                <td>{{ $item->tanggal_pengiriman }}</td>
                            </tr>
                            <tr>
                                <th>ID Pengirim</th>
                                <td>{{ $item->pelanggan_id}}</td>
                            </tr>
                            <tr>
                                <th>Email Penerima</th>
                                <td>{{ $item->email_penerima}}</td>
                            </tr>
                            <tr>
                                <th>Organisasi Penerima</th>
                                <td>{{ $item->organisasi_penerima }}</td>
                            </tr>
                            <tr>
                                <th>Alamat Penerima</th>
                                <td>{{ $item->alamat_penerima}}</td>
                            </tr>
                            <tr>
                                <th>Detail Barang</th>
                                <td>
                                    <table border="1" class="text-center">
                                        <tr>
                                            <th>ID Pelanggan</th>
                                            <th>Nama Barang</th>
                                            <th>Berat Barang</th>
                                            <th>Biaya Pengiriman</th>
                                        </tr>
                                        <tr>
                                            <td>{{ $item->id}}</td>
                                            <td>{{ $item->nama_barang }}</td>
                                            <td>{{ $item->berat_barang }} /Kg</td>
                                            <td>Rp. {{ $item->biaya }},-</td>
                                        </tr>
                                    </table>
                                    <a href="/admin/pengiriman-barang" class="btn btn-sm btn-secondary shadow-sm mt-2">
                                        <i class="fas fa-back"></i>Kembali
                                    </a>
                                    
                                </td>
                            </tr>
                        </table>
                    </div>

@endsection