@extends('layouts.master')
@section('title','kelola data karyawan')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                    <h1>Halaman Kelola Data karyawan</h1>
                    <a href="/karyawan/tambah" class="btn btn-primary">Tambah Data karyawan</a>
                        </div>
                        <div class="card-body">
                            <table id="example" class="table table-striped table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID karyawan</th>
                                            <th>Nama</th>
                                            <th>Jabatan</th>
                                            <th>Alamat</th>
                                            <th>No Telepon</th>
                                            <th>Tanggal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($karyawan as $g)
                                        <tr>
                                            <td>{{ $g->id_karyawan}}</td>
                                            <td>{{ $g->nama}}</td>
                                            <td>{{ $g->jabatan->nama_jabatan}}</td>
                                            <td>{{ $g->alamat}}</td>
                                            <td>{{ $g->no_telp}}</td>
                                            <td>{{ $g->created_at}}</td>
                                        <td>
                                        <a href="/karyawan/{{$g->id_karyawan}}/edit" class="btn btn-warning">Edit</a>
                                        <a href="/karyawan/{{$g->id_karyawan}}/hapus" class="btn btn-danger" onClick="return confirm('ril kh?')">hapus</a>
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