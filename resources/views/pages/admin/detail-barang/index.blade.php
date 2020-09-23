@extends('layouts.admin')

@section('content')

<!-- Begin Page Content -->
  <!-- Begin Page Content -->
  <div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Barang</h6>
        </div>
        <div class="card-body">
            <div class="card-body">
                <a href="{{route('detail-barang.create')}}" class="btn btn-sm btn-primary shadow-sm">
                    <i class="fas fa-plus"></i> Tambah Barang
                </a>
            <div class="table-responsive">
                <table class="table table-striped text-center mt-3" style="font-size: 12px">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Berat Barang</th>
                            <th scope="col">Biaya Pengiriman</th>
                        </tr>
                    </thead>
                    <tbody>
                       @forelse ($items as $item)
                       <tr>
                          <td>{{$item->no_pengiriman}}</td>
                          <td>{{$item->nama_barang}}</td>
                          <td>{{$item->berat_barang}} / Kg</td>
                          <td>Rp. {{$item->biaya}}.00,-</td>
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
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

@endsection