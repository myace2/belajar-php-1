@extends('layouts.master')
@section('title','kelola data pembayaran')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                    <h1>Halaman Kelola Data pembayaran</h1>
                    <a href="/pembayaran/tambah" class="btn btn-primary">Tambah Data pembayaran</a>
                        </div>
                        <div class="card-body">
                            <table id="example" class="table table-striped table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>id pembayaran</th>
                                            <th>nis</th>
                                            <th>tanggal bayar</th>
                                            <th>id spp</th>
                                            <th>jumlah bayar</th>
                                            <th>keterangan</th>
                                            <th>id petugas</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pembayaran as $p)
                                        <tr>
                                            <td>{{ $p->id}}</td>
                                            <td>{{ $p->nis}}</td>
                                            <td>{{ $p->tgl_bayar}}</td>
                                            <td>{{ $p->id_spp}}</td>
                                            <td>{{ $p->jumlah_bayar}}</td>
                                            <td>{{ $p->keterangan}}</td>
                                            <td>{{ $p->id_user}}</td>
                                        <td>
                                        <a href="/pembayaran/{{$p->id}}/edit" class="btn btn-warning">Edit</a>
                                        <a href="/pembayaran/{{$p->id}}/hapus" class="btn btn-danger" onClick="return confirm('ril kh?')">hapus</a>
                                        </td>
                                        </tr>  
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection