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
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Pengiriman Barang</h6>
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
                        <form action="{{route('tracking-area.store')}}" method="post">
                            @csrf
                            <!-- Resi -->
                            <div class="form-group">
                                <label for="resi">Resi</label>
                                <input type="text" class="form-control" name="resi" id="resi" value="{{old('resi')}}"
                                    placeholder="nomor resi" />
                                <input type="hidden" class="form-control" name="id" id="id"  value="{{ date('dmYhis') }}"
                            placeholder="nomor id"/>
                            </div>
                            <!-- Email -->
                            <div class="form-group">
                                <label for="pengiriman_barang_id">Pengirim</label>
                                <select name="pengiriman_barang_id" id="pengiriman_barang_id" class="form-control">
                                    @foreach($item as $p)
                                        <option value="{{ $p->id }}">{{ $p->name }} [ {{ $p->tanggal_pengiriman }} ]</option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- Telepon -->
                            <div class="form-group">
                                <label for="telepon">Telepon</label>
                                <input type="number" class="form-control" name="telepon" id="telepon" value="{{old('telepon')}}"
                                    placeholder="Masukan Nomor Telepon" />
                            </div>
                            <!-- Kota Asal -->
                            <div class="form-group">
                                <label for="kota_asal">Kota Asal</label>
                                <select class="form-control" name="kota_asal" id="kota_asal">
                                <option>Tangerang</option>
                                </select>
                            </div>
                            <!-- Kota Tujuan-->
                            <div class="form-group">
                                <label for="kota_tujuan">Kota Tujuan</label>
                                <select class="form-control" name="kota_tujuan" id="kota_tujuan" value="{{old('kota_tujuan')}}">
                                <option>Jakarta Pusat</option>
                                <option>Jakarta Barat</option>
                                <option>Jakarta Timur</option>
                                <option>Jakarta Selatan</option>
                                </select>
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
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea name="alamat" rows="6" class="d-block w-100 form-control">{{old('alamat')}}</textarea>
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