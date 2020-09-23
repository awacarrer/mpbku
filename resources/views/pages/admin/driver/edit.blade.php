@extends('layouts.admin')

@section('content')

<!-- Begin Page Content -->
  <!-- Begin Page Content -->
  <div class="container-fluid">
    <div class="row">
        <div class="col">
                    <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Edit Pelanggan {{$item->nama}}</h6>
                </div>

                @if ($errors->any())

                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($erros->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    
                @endif
                
                <div class="card-body">
                    <div class="table-responsive">
                        <form action="{{route('pelanggan.update', $item->id)}}" method="post"  enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="foto">Profile</label>
                                <input type="file" class="form-control" name="foto" id="foto" accept=".jpeg,.png,.jpg"/>
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" name="nama" id="nama" value="{{$item->nama}}" placeholder="Masukan Nama" />
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                <option>Pria</option>
                                <option>Prempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="telepon">Telepon</label>
                                <input type="number" class="form-control" name="telepon" id="telepon" value="{{$item->telepon}}" placeholder="Masukan Telepon" />
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="text" class="form-control" name="email" id="email" value="{{$item->email}}"
                                    placeholder="Masukan Email" />
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea name="alamat" rows="10" class="d-block w-100 form-control">{{$item->alamat}}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

@endsection