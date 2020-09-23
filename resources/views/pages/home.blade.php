@extends('layouts.app')

@section('title')
    E-Monitoring 
@endsection

@section('content')
  <!-- awal jumbotron -->

  <div class="jumbotron">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-7">
          <h3 style="margin-bottom: -15px;">Sistem</h3>
          <br />
          <h1 style="font-weight: bold;">Monitoring Pengiriman Barang Sriwijaya Air</h1>
          <p style="font-style: italic;">
            Selamat Datang di Sistem Monitoring Pengiriman Barang dari
            Mahasiswa Universitas Muhammadiyah Tangerang
          </p>
          <a href="/cek_barang" class="btn btn-warning text-white mt-3">Let's Get Start</a>
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
    <h1 style="font-weight: bold;">
      Monitoring
    </h1>
    <hr style="width: 200px; margin-bottom: 50px;" />
  </header>

  <!-- akhir header -->

  <!-- awal service -->

  <main>
    <div class="container">
      <div class="row">
        <div class="col-sm-10 col-md-5 col-lg-4" style="margin: auto;">
          <div class="card text-center" style="width: 18rem;">
          <img src="{{url('frontend/img/delivery.png')}}" class="card-img-top" />
            <div class="card-body"  style="font-family: roboto, sans-serif">
              <h5>Cek Barang</h5>
              <a href="/cek_barang" class="btn btn-primary" id="btn">
                
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-box-arrow-in-right" fill="currentColor"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M8.146 11.354a.5.5 0 0 1 0-.708L10.793 8 8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0z" />
              <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 1 8z" />
              <path fill-rule="evenodd"
                d="M13.5 14.5A1.5 1.5 0 0 0 15 13V3a1.5 1.5 0 0 0-1.5-1.5h-8A1.5 1.5 0 0 0 4 3v1.5a.5.5 0 0 0 1 0V3a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v10a.5.5 0 0 1-.5.5h-8A.5.5 0 0 1 5 13v-1.5a.5.5 0 0 0-1 0V13a1.5 1.5 0 0 0 1.5 1.5h8z" />
            </svg>  

              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-10 col-md-5 col-lg-4">
          <div class="card text-center" style="width: 18rem;">
          <img src="{{url('frontend/img/location.png')}}" class="card-img-top" />
            <div class="card-body">
              <h5 class="card-title"  style="font-family: roboto, sans-serif" >Tracking Area</h5>
              <a href="/tracking_area" class="btn btn-primary">
              
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-box-arrow-in-right" fill="currentColor"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M8.146 11.354a.5.5 0 0 1 0-.708L10.793 8 8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0z" />
              <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 1 8z" />
              <path fill-rule="evenodd"
                d="M13.5 14.5A1.5 1.5 0 0 0 15 13V3a1.5 1.5 0 0 0-1.5-1.5h-8A1.5 1.5 0 0 0 4 3v1.5a.5.5 0 0 0 1 0V3a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v10a.5.5 0 0 1-.5.5h-8A.5.5 0 0 1 5 13v-1.5a.5.5 0 0 0-1 0V13a1.5 1.5 0 0 0 1.5 1.5h8z" />
            </svg>

              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-10 col-md-5 col-lg-4">
          <div class="card text-center" style="width: 18rem;">
          <img src="{{url('frontend/img/survey.png')}}" class="card-img-top" />
            <div class="card-body">
              <h5 class="card-title" style="font-family: roboto, sans-serif">Informasi biaya</h5>
              <a href="/informasi_biaya" class="btn btn-primary">
              
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-box-arrow-in-right" fill="currentColor"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M8.146 11.354a.5.5 0 0 1 0-.708L10.793 8 8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0z" />
              <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 1 8z" />
              <path fill-rule="evenodd"
                d="M13.5 14.5A1.5 1.5 0 0 0 15 13V3a1.5 1.5 0 0 0-1.5-1.5h-8A1.5 1.5 0 0 0 4 3v1.5a.5.5 0 0 0 1 0V3a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v10a.5.5 0 0 1-.5.5h-8A.5.5 0 0 1 5 13v-1.5a.5.5 0 0 0-1 0V13a1.5 1.5 0 0 0 1.5 1.5h8z" />
            </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- akhir service -->
    
@endsection