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
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Destinasi </h6>
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
                        <form action="{{route('detail-barang.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="tracking_area_id">Tracking Area ID</label>
                                <input type="text" class="form-control" name="tracking_area_id" id="tracking_area_id" value="{{ $tracking_area_id }}"
                                    placeholder="contoh +" readonly/>
                            </div>
                            <div class="form-group">
                                <label for="lacak">Lacak</label>
                                <input type="text" class="form-control" name="lacak" id="lacak" value="{{old('nama_pengirim')}}"
                                    placeholder="contoh +" />
                            </div>
                            <div class="form-group">
                                <label for="waktu">Tanggal</label>
                                <input type="datetime-local" class="form-control" name="waktu" id="waktu" value="{{old('waktu')}}"
                                    placeholder="Masukan Waktu" />
                            </div>
                            <div class="form-group">
                                <label for="destinasi">Destinasi</label>
                                <input type="text" class="form-control" name="destinasi" id="destinasi" value="{{old('destinasi')}}"
                                    placeholder="Masukan Destinasi Wilayah" />
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