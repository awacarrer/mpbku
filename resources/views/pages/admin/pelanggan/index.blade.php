@extends('layouts.admin')

@section('content')

<!-- Begin Page Content -->
  <!-- Begin Page Content -->
  <div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Pelanggan</h6>
        </div>
        <div class="card-body">
        <a href="{{route('pelanggan.create')}}" class="btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus"></i> Tambah pelanggan
        </a>
            <div class="table-responsive">
                <table class="table table-striped text-center mt-3" style="font-size: 12px">
                    <thead>
                        <tr>
                            <th scope="col">Foto</th>
                            {{-- <th scope="col">Pelanggan_id</th> --}}
                            <th scope="col">Nama</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Telepon</th>
                            <th scope="col">Email</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       @forelse ($customers as $customer)
                       <tr>
                          <td>
                            <img src="/img/{{$customer->foto == '' ? 'default.png' : $customer->foto}}" alt="" style="width: 60px">
                          </td>
                          <td>{{$customer->users->name}}</td>
                          <td>{{$customer->jenis_kelamin}}</td>
                          <td>{{$customer->no_telpon}}</td>
                          <td>{{$customer->users->email}}</td>
                          <td>{{$customer->alamat}}</td>
                            <td>
                              <a href="{{route('pelanggan.edit', $customer->id)}}" class="btn btn-primary">
                                  <i class="fa fa-edit"></i>
                              </a>
                          <form action="{{route('pelanggan.destroy', $customer->id)}}" method="post"  onsubmit="return confirm('Yakin dihapus?')" class="d-inline">
                              @csrf
                              @method('delete')
                              <button class="btn btn-danger">
                                  <i class="fa fa-trash"></i>
                              </button>
                          </form>
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