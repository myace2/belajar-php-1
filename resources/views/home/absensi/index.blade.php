@extends('layouts.master')
@section('title','kelola data absensi')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                    <h1>Halaman Kelola Data absensi</h1>
                    <a href="/absensi/tambah" class="btn btn-primary">Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <table id="example" class="table table-striped table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No/ID</th>
                                            <th>Jenis Absen</th>
                                            <th>Waktu Absen</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($absensi as $s)
                                        <tr>
                                            <td>{{ $s->id_absensi}}</td>
                                            <td>{{ $s->tanggal_absen}}</td>
                                            <td>{{ $s->jenis_absen}}</td>
                                        <td>
                                        <a href="/absensi/{{$s->id_absensi}}/edit" class="btn btn-warning">Edit</a>
                                        <a href="/absensi/{{$s->id_absensi}}/hapus" class="btn btn-danger" onClick="return confirm('ril kh?')">hapus</a>
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