@extends('layouts.master')
@section('title','kelola data rekap')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                    <h1>Halaman Kelola Data rekap</h1>
                    <a href="/rekap/tambah" class="btn btn-primary">Tambah Data rekap</a>
                    <a href="/rekap/cetak" target="_blank" class="btn btn-success"><span class="fa fa-print"></span>Keseluruhan</a>
                        </div>
                        <div class="card-body">
                            <table id="example" class="table table-striped table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID rekap</th>
                                            <th>Nama Karyawan</th>
                                            <th>Nama User</th>
                                            <th>Tanggal Absensi</th>
                                            <th>Jabatan</th>
                                            <th>Tanggal Rekapan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($rekap as $p)
                                        <tr>
                                            <td>{{ $p->id_rekap}}</td>
                                            <td>{{ $p->karyawans->nama}}</td>
                                            <td>{{ $p->users->nama_user}}</td>
                                            <td>{{ $p->absensis->tanggal_absen}}</td>
                                            <td>{{ $p->jabatan->nama_jabatan}}</td>
                                            <td>{{ $p->tgl_rekap}}</td>
                                        <td>
                                        <a href="/rekap/{{$p->id_rekap}}/edit" class="btn btn-warning">Edit</a>
                                        <a href="/rekap/{{$p->id_rekap}}/struk" target="_blank" class="btn btn-sm btn-success"><span class="fa fa-print"></span>Cetak Struk</a>
                                        <a href="/rekap/{{$p->id_rekap}}/hapus" class="btn btn-danger" onClick="return confirm('ril kh?')">hapus</a>
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