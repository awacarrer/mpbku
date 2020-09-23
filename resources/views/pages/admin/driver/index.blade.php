@extends('layouts.admin')

@section('content')

<!-- Begin Page Content -->
  <!-- Begin Page Content -->
  <div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tracking Driver</h6>
        </div>
        <div class="card-body">
        <a href="{{route('driver.create')}}" class="btn btn-sm btn-primary shadow-sm mb-3">
            <i class="fas fa-plus"></i> Tambah Tracking
        </a>
            <div class="table-responsive">
                <p>Destination Pengiriman<p>
                <table class="table table-striped text-center mt-3" style="font-size: 12px">
                    <thead>
                        <tr>
                            <th scope="col">Lacak</th>
                            <th scope="col">Nama Pengirim</th>
                            <th scope="col">Waktu</th>
                            <th scope="col">Destinasi</th>
                        </tr>
                    </thead>
                    <tbody>
                       @forelse ($items as $item)
                       <tr>
                           <td>{{$item->lacak}}</td>
                          <td>{{$item->nama_pengirim}}</td>
                          <td>{{$item->waktu}}</td>
                          <td>{{$item->destinasi}}</td>
                    </tr>
                       @empty
                           <tr>
                             <td colspan="3" class="text-center text-bold">
                               Data Kosong
                             </td>
                           </tr>
                       @endforelse
                    </tbody>
                </table>
                <button class="btn btn-secondary"><a href="{{route("pengiriman-barang.index")}}"
                    class="text-white">Kembali</a></button>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

@endsection