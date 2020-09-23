@extends('layouts.app')
@section('title','Tracking Area')

@section('content')
    
<div class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-7">
                <h3 style="margin-bottom: -15px;">Sistem</h3>
                <br />
                <h1>Monitoring Pengiriman Barang Sriwijaya Air</h1>
                <p style="font-style: italic;">
                    Selamat Datang di Sistem Monitoring Pengiriman Barang dari
                    Mahasiswa Universitas Muhammadiyah Tangerang
                </p>
                <a href="#" class="btn btn-warning text-white mt-3">Let's Get Start</a>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-5">
            <img src="{{url('frontend/img/BN.png')}}" style="height: 400px;" />
            </div>
        </div>
    </div>
</div>

<!-- akhit jumbotron -->

<!-- awal header -->

<header class="text-center">
    <h3>
        Tracking Area
    </h3>
    <hr style="width: 200px; margin-bottom: 50px;" />
</header>

<!-- akhir header -->

<!--awal Tracking Pengiriman Barang -->

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-5 col-lg-4">
                <h5>Tracking Pengiriman Barang</h5>
            </div>
            <div class="col-12">
                <table class="table table-hover text-center">
                    <thead>
                        <tr>
                            <th scope="col">No Resi</th>
                            <th scope="col">Kota Asal</th>
                            <th scope="col">Kota Tujuan</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($trackings as $tracking)
                        <tr>
                            <td>{{$tracking->resi}}</td>
                            <td>{{$tracking->kota_asal}}</td>
                            <td>{{$tracking->kota_tujuan}}</td>
                            <td>
                                <a href="{{url('status_pengiriman/'.$tracking->id)}}">
                                    <button class="btn btn-success">Check Lokasi</button>
                                </a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5">Data Kosong</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!--akhir Tracking Pengiriman Barang -->
@endsection