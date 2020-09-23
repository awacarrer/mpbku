@extends('layouts.app')
@section('title', 'Profile')

@section('content')


    <!-- awal jumbotron -->

    <div class="jumbotron">
        <div class="container" style="height: 350px">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-7">
                    <h3 style="margin-bottom: -15px;">Company Profile</h3>
                    <br />
                    <h1>Sistem Monitoring Pengiriman Barang Sriwijaya Air</h1>
                    <p style="font-style: italic;">
                        Selamat Datang di Sistem Monitoring Pengiriman Barang dari
                        Mahasiswa Universitas Muhammadiyah Tangerang
                    </p>
                    <a href="#" class="btn btn-warning text-white mt-3">Let's Get Start</a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-5">
                <img src="{{url('frontend/img/banner.png')}}" style="height: 150px;" />
                </div>
            </div>
        </div>
    </div>
       <!-- awal header -->

       <header class="text-center">
        <h2>
            Company Profile
        </h2>
        <hr style="width: 200px; margin-bottom: 50px;" />
    </header>

    <!-- akhir header -->

    <!-- awal company profile -->

    <section class="profile mt-5">
        <div class="container">
            <div class="row py-5">
                <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                <img src="{{url('frontend/img/sri.png')}}" height="230px">
                </div>
                <div class="col-9 col-sm-6 col-md-5 offset-md-1 col-lg-5">
                    <h3 style="font-family: sans-serif; font-weight: bold">Our Profile</h3>
                    <p style="text-align: justify; font-family: roboto;">Bisnis utama Sriwijaya Air adalah menyediakan transportasi penumpang dan barang baik di wilayah nasional maupun regional. Sejak didirikan pada 10 November 2003, Sriwijaya Air telah mencapai semua tujuan yang telah ditetapkan dalam misi dan visinya seperti: memberikan layanan berkualitas tinggi, menjadi maskapai penerbangan yang kompetitif secara nasional dan regional, bersiap untuk mengembangkan industri Sriwijaya Air ke kelas dunia.</p>
                    <a href="#" class="btn btn-primary">Views</a>
                </div>
            </div>
            <div class="row py-5">
                <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                    <h3 style="font-family: sans-serif; font-weight: bold;">Our Mission</h3>
                    <p style="text-align: justify; font-family: roboto;">We acknowledge that nowadays everyone can fly, however we fly them with pride and prestige by implementing our quality of services before flight, in flight and after flight. We assure that our flights are affordable yet comfortable.</p>
                    <a href="#" class="btn btn-primary mb-3">Views</a>
                </div>
                <div class="col-9 col-sm-6 col-md-5 offset-md-1 col-lg-4">
                    <img src="{{url('frontend/img/jaya.png')}}" height="240px">
                </div>
            </div>
        </div>
    </section>

    <!-- akhir company profile -->
@endsection