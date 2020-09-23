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
                    <h6 class="m-0 font-weight-bold text-primary">Edit User [ {{$item->name}} ]</h6>
                </div>

                @if ($errors->any())

                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    
                @endif
                
                <div class="card-body">
                    <div class="table-responsive">
                        <form action="{{route('user.update', $item->id)}}" method="post">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="namw">Nama</label>
                                <input type="text" class="form-control" name="name" id="name" value="{{$item->name}}" placeholder="Edit nama" />
                            </div>
                            <div class="form-group">
                                <label for="email">email</label>
                                <input type="text" class="form-control" name="email" id="email" value="{{$item->email}}" placeholder="Edit Email" />
                            </div>
                            <div class="form-group">
                                <label for="roles">Status</label>
                                <select class="form-control" name="roles" id="roles" value={{$item->roles}}>
                                    <option>ADMIN</option>
                                    <option>USER</option>
                                </select>
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