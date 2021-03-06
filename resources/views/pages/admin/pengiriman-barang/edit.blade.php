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
                    <h6 class="m-0 font-weight-bold text-primary">Edit Pengiriman Barang [ {{$item->nama_pengirim}} ]</h6>
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
                        <form action="{{route('pengiriman-barang.update', $item->id)}}" method="post">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="tanggal_pengiriman">Tanggal Pengiriman</label>
                                <input type="date" class="form-control" name="tanggal_pengiriman" id="tanggal_pengiriman" value="{{$item->tanggal_pengiriman}}"
                                    placeholder="Tanggal Pengiriman" />
                            </div>
                            <div class="form-group">
                                <label for="pelanggan_id">Pengirim</label>
                                <select name="pelanggan_id" id="pelanggan_id" class="form-control">
                                    @foreach($pelanggan as $p)
                                        <option value="{{ $p->id }}" 
                                            @if($item->pelanggan_id == $p->id)
                                                @php 
                                                    echo "selected"; 
                                                @endphp
                                            @endif
                                            >
                                            {{ $p->users->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="email_penerima">Email Penerima</label>
                                <input type="text" class="form-control" name="email_penerima" id="email_penerima" value="{{$item->email_penerima}}"
                                    placeholder="Nama Penerima" />
                            </div>
                            <div class="form-group">
                                <label for="nama_penerima">Nama Penerima</label>
                                <input type="text" class="form-control" name="nama_penerima" id="nama_penerima" value="{{$item->nama_penerima}}"
                                    placeholder="Nama Penerima" />
                            </div>
                            <div class="form-group">
                                <label for="organisasi_penerima">Organisasi Penerima</label>
                                <input type="text" class="form-control" name="organisasi_penerima" id="organisasi_penerima" value="{{$item->organisasi_penerima}}"
                                    placeholder="Organisasi Penerima" />
                            </div>
                            <div class="form-group">
                                <label for="nama_barang">Nama Barang</label>
                                <input type="text" class="form-control" name="nama_barang" id="nama_barang" value="{{$item->nama_barang}}" placeholder="Masukan Nama"/>
                            </div>
                            <div class="form-group">
                                <label for="berat_barang">Berat Barang</label>
                                <input type="number" class="form-control" name="berat_barang" id="berat_barang" value="{{$item->berat_barang}}" />
                            </div>
                            <div class="form-group">
                                <label for="biaya">Biaya</label>
                                <input type="text" class="form-control" name="biaya" id="biaya" value="{{$item->biaya}}" />
                            </div>
                            <div class="form-group">
                                <label for="alamat_penerima">Alamat Penerima</label>
                                <textarea name="alamat_penerima" rows="10" class="d-block w-100 form-control">{{$item->alamat_penerima}}</textarea>
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