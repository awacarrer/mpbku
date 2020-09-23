@extends('layouts.app')
@section('title','status pengiriman')

@section('content')
  <!-- awal jumbotron -->

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
        Status Pengiriman
    </h3>
    <hr style="width: 200px; margin-bottom: 50px;" />
</header>

<!-- akhir header -->

<!--awal Tracking Pengiriman Barang -->

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Status Pengiriman Barang</h6>
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped text-center mt-3" style="font-size: 12px">
                                <thead>
                                    <tr>
                                        <th scope="col">Lacak</th>
                                       
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Destinasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @forelse ($items as $item)
                                   <tr>
                                       <td>{{$item->lacak}}</td>
                                      <td>{{$item->waktu}}</td>
                                      <td>{{$item->destinasi}}</td>
                                    </tr>
                                   @empty
                                       <tr>
                                         <td colspan="4" class="text-center">
                                           Data Kosong
                                         </td>
                                       </tr>
                                   @endforelse
                                </tbody>
                            </table>
                            <span style="font-style: italic;">*Lokasi Barang Anda Pada Saat Ini Update List Paling Bawah, Terimakasih*</span>
                        </div>
                        <button class="btn btn-secondary"><a href="/tracking_area"
                                class="text-white">Kembali</a></button>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
</div>

<!--akhir Tracking Pengiriman Barang -->

@endsection