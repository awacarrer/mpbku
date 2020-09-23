@extends('layouts.admin')

@section('content')

<!-- Begin Page Content -->
  <!-- Begin Page Content -->
  <div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tracking Area</h6>
        </div>
        <div class="card-body">
            <a href="{{route('tracking-area.create')}}" class="btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-plus"></i> Tambah Tracking
            </a>
            <div class="table-responsive">
                <table class="table table-striped text-center mt-3" style="font-size: 12px">
                    <thead>
                        <tr>
                            <th scope="col">Resi</th>
                            <th scope="col">Email Pelanggan</th>
                            <th scope="col">Telepon</th>
                            <th scope="col">Kota Asal</th>
                            <th scope="col">Kota Tujuan</th>
                            <th scope="col">Alamat Pengirim</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       @forelse ($items as $item)
                       <tr>
                          <td>{{$item->resi}}</td>
                          <td>{{$item->email}}</td>
                          <td>{{$item->no_telpon}}</td>
                          <td>{{$item->kota_asal}}</td>
                          <td>{{$item->kota_tujuan}}</td>
                          <td>{{$item->alamat}}</td>
                                <td>
                                <a href="{{route('tracking-area.edit', $item->id)}}" class="btn btn-primary">
                                    <i class="fa fa-edit"></i>
                                </a>
                                    <form action="{{route('tracking-area.destroy', $item->id)}}" method="post"  onsubmit="return confirm('Yakin dihapus?')" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                    <a href="{{route('tracking-area.show', $item->id)}}" class="btn btn-success">
                                        <i class="fa fa-truck"></i>
                                    </a>
                                </td>
                            </td>
                        </tr>
                       @empty
                           <tr>
                             <td colspan="8" class="text-center">
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