@extends('layouts.admin')

@section('content')

<!-- Begin Page Content -->
  <!-- Begin Page Content -->
  <div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">User</h6>
        </div>
        <div class="card-body">
        <a href="{{route('user.create')}}" class="btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus"></i> Tambah user
        </a>
            <div class="table-responsive">
                <table class="table table-striped text-center mt-3" style="font-size: 12px">
                    <thead>
                        <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       @forelse ($items as $item)
                       <tr>
                          <td>{{$item->name}}</td>
                          <td>{{$item->email}}</td>
                          <td>{{$item->roles}}</td>
                            <td>
                              <a href="{{route('user.edit', $item->id)}}" class="btn btn-primary">
                                  <i class="fa fa-edit"></i>
                              </a>
                          <form action="{{route('user.destroy', $item->id)}}" method="post"  onsubmit="return confirm('Yakin dihapus?')" class="d-inline">
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