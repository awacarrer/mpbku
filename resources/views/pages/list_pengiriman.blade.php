@extends('layouts.app')
@section('title', 'list_pengriman')

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
        <h4>
            History Pengiriman Barang
        </h4>
        <hr style="width: 200px; margin-bottom: 50px;" />
    </header>

    <!-- akhir header -->

    <!-- awal history pengiriman barang -->

    <section>
        <div class="container">
            <div class="row">
                <div class="col"></div>
                <div class="col-12">
                    <h6>Daftar Riwayat Pengiriman Yang Anda Lakukan</h6>
                    <table class="table table-hover text-center">
                        <thead>
                            <tr>
                                <th scope="col">No.Pengiriman</th>
                                <th scope="col">No.Resi</th>
                                <th scope="col">Tanggal Pengiriman</th>
                                <th scope="col">Nama Penerima</th>
                                <th scope="col">Tujuan Penerima</th>
                                <th scope="col">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1017</th>
                                <td>DYEG340392</td>
                                <td>16-07-2020</td>
                                <td>dimashudi</td>
                                <td>sriwijaya air </td>
                                <td>
                                    <button type="button" class="btn btn-primary text-white">
                                        <a href="/detail_pengiriman" class="text-white"><svg width="1em"
                                                height="1em" viewBox="0 0 16 16" class="bi bi-card-checklist"
                                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                                                <path fill-rule="evenodd"
                                                    d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z" />
                                            </svg></a>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">1018</th>
                                <td>DYEG340392</td>
                                <td>16-07-2020</td>
                                <td>dimashudi</td>
                                <td>sriwijaya air </td>
                                <td>
                                    <button type="button" class="btn btn-primary text-white">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-card-checklist"
                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                                            <path fill-rule="evenodd"
                                                d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- akhir history pengiriman barang -->
@endsection