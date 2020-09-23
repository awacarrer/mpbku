@extends('layouts.app')
@section('title','Pengiriman Barang')

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
    <h1>
      Pengiriman Barang
    </h1>
    <hr style="width: 200px; margin-bottom: 50px;" />
  </header>

  <!-- akhir header -->

  <!-- awal table pengiriman barang -->

  <div class="section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-sm-10 col-md-8 col-lg-6">
          <small>Opsi :<a href="/list_pengiriman">Lihat Riwayat Permintaan Pengiriman Barang</a></small>
          <form>
            <div class="form-group mt-2">
              <label for="exampleInputEmail1">Tanggal Pengiriman</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Tanggal Pengiriman" />
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Kota Asal</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>--Pilih Asal Kota--</option>
                <option>Tangerang</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Kota Tujuan</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>--Pilih Asal Kota--</option>
                <option>Tangerang</option>
                <option>Jakarta Pusat</option>
                <option>Jakarta Barat</option>
                <option>Jakarta Selatan</option>
                <option>Jakarta Timur</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Penerima</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Nama Penerima" />
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Organisasi Penerima</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Organisasi Penerima" />
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Alamat Pengirim</label>
              <textarea type="text" placeholder="Masukan Alamat Pengirim" name="measseges" id="alamat" cols="74"
                rows="5" class="form-control" id="measseges"></textarea>
            </div>
            <button type="submit" class="btn btn-warning text-white">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-bar-left" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M5.854 4.646a.5.5 0 0 0-.708 0l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L3.207 8l2.647-2.646a.5.5 0 0 0 0-.708z" />
                <path fill-rule="evenodd"
                  d="M10 8a.5.5 0 0 0-.5-.5H3a.5.5 0 0 0 0 1h6.5A.5.5 0 0 0 10 8zm2.5 6a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 1 0v11a.5.5 0 0 1-.5.5z" />
              </svg>
            </button>
            <button type="submit" class="btn btn-primary">
              <a href="/detail_pengiriman" class="text-white">Next<svg width="1em" height="1em" viewBox="0 0 16 16"
                  class="bi bi-arrow-bar-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                    d="M10.146 4.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L12.793 8l-2.647-2.646a.5.5 0 0 1 0-.708z" />
                  <path fill-rule="evenodd"
                    d="M6 8a.5.5 0 0 1 .5-.5H13a.5.5 0 0 1 0 1H6.5A.5.5 0 0 1 6 8zm-2.5 6a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 1 0v11a.5.5 0 0 1-.5.5z" />
                </svg></a>
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- akhir table pengiriman barang -->
@endsection