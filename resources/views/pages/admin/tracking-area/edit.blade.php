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
                    <h6 class="m-0 font-weight-bold text-primary">Edit Tracking Area [ {{$item->email}} ]</h6>
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
                        <form action="{{route('tracking-area.update', $item->id)}}" method="post">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="resi">Resi</label>
                                <input type="text" class="form-control" name="resi" id="resi" value="{{$item->resi}}"
                                    placeholder="Edit Resi" />
                            </div>
                           
                            <div class="form-group">
                                <label for="pengiriman_barang_id">Pengirim</label>
                                <select name="pengiriman_barang_id" id="pengiriman_barang_id" class="form-control">
                                    @foreach($pengiriman as $p)
                                        <option value="{{ $p->id }}">{{ $p->name }} [ {{ $p->tanggal_pengiriman }} ]</option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="kota_asal">Kota Asal</label>
                                <input type="text" class="form-control" name="kota_asal" id="kota_asal" value="{{$item->kota_asal}}"
                                    placeholder="Kota Asal" />
                            </div>
                            <div class="form-group">
                                <label for="kota_tujuan">Kota Tujuan</label>
                                <input type="text" class="form-control" name="kota_tujuan" id="kota_tujuan" value="{{$item->kota_tujuan}}"
                                    placeholder="Kota Tujuan" />
                            </div>
                           
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea name="alamat" rows="10" class="d-block w-100 form-control">{{$item->alamat}}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

@endsection