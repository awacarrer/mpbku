@extends('layouts.admin')

@section('content')

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Tracking Area [ {{$item->email}} ]</h6>
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
                        <table class="table table-bordered">
                            <tr>
                                <th>Resi</th>
                                <td>{{ $item->resi }}</td>
                            </tr>
                            <tr>
                                <th>Nama Pengirim</th>
                                <td>{{ $item->name}}</td>
                            </tr>
                            <tr>
                                <th>Email Pengirim</th>
                                <td>{{ $item->email}}</td>
                            </tr>
                            <tr>
                                <th>Email Penerima</th>
                                <td>{{ $item->email_penerima}}</td>
                            </tr>
                            <tr>
                                <th>Telepon</th>
                                <td>{{ $item->no_telpon}}</td>
                            </tr>
                            <tr>
                                <th>Kota Asal</th>
                                <td>{{ $item->kota_asal }}</td>
                            </tr>
                            <tr>
                                <th>Kota Tujuan</th>
                                <td>{{ $item->kota_tujuan }}</td>
                            </tr>
                            <tr>
                                <th>Tracking Area</th>
                                <td>
                                    <table border="1" class="text-center">
                                        <tr>
                                            <th>Lacak</th>
                                            <th>Waktu</th>
                                            <th>Destinasi</th>
                                        </tr>
                                        @foreach ($detail as $d)
                                            <tr>
                                                <td>{{ $d->lacak}}</td>
                                                <td>{{ $d->waktu }}</td>
                                                <td>{{ $d->destinasi }}</td>
                                            </tr>
                                        @endforeach
                                        
                                    </table>
                                    <a href="/admin/tracking-area" class="btn btn-sm btn-secondary shadow-sm mt-2">
                                        <i class="fas fa-back"></i>Kembali
                                    </a>
                                   
                                    <a href="{{url('admin/detail-barang/create',$item->id)}}" class="btn btn-sm btn-success shadow-sm mt-2">
                                        <i class="fas fa-plus"></i> Tambah Destinasi
                                    </a>
                                </td>
                                
                            </tr>
                            
                        </table>
                    </div>

@endsection