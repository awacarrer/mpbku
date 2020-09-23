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
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Tracking</h6>
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
                        <form action="{{route('driver.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="nama_pengirim">Nama Pengirim</label>
                                <input type="text" class="form-control" name="nama_pengirim" id="nama_pengirim" value="{{old('nama_pengirim')}}" placeholder="Masukan Nama Pengirim" />
                            </div>
                            <div class="form-group">
                                <label for="lacak">Lacak</label>
                                <input type="text" class="form-control" name="lacak" id="lacak" value="{{old('lacak')}}" placeholder="Masukan + " />
                            </div>
                            <div class="form-group">
                                <label for="waktu">Waktu</label>
                                <input type="date" class="form-control" name="datetime" id="waktu" value="{{old('waktu')}}" placeholder="Masukan Waktu " />
                            </div>
                            <div class="form-group">
                                <label for="destinasi">Destinasi</label>
                                <input type="datetime" class="form-control" name="destinasi" id="destinasi" value="{{old('destinasi')}}" placeholder="Masukan Destinasi " />
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

<script>
    $("#datetime").datetimepicker();
</script>

@endsection