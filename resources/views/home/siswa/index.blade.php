@extends('layouts.master')
@section('title','kelola data siswa')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                    <h1>Halaman Kelola Data siswa</h1>
                    <a href="/siswa/tambah" class="btn btn-primary">Tambah Data Siswa</a>
                        </div>
                        <div class="card-body">
                            <table id="example" class="table table-striped table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>nis</th>
                                            <th>nama</th>
                                            <th>id kelas</th>
                                            <th>alamat</th>
                                            <th>no telp</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($siswa as $g)
                                        <tr>
                                            <td>{{ $g->nis}}</td>
                                            <td>{{ $g->nama}}</td>
                                            <td>{{ $g->Kelas->nama_kelas}}</td>
                                            <td>{{ $g->alamat}}</td>
                                            <td>{{ $g->no_telp}}</td>
                                            <td>{{ $g->created_at}}</td>
                                        <td>
                                        <a href="/siswa/{{$g->nis}}/edit" class="btn btn-warning">Edit</a>
                                        <a href="/siswa/{{$g->nis}}/hapus" class="btn btn-danger" onClick="return confirm('ril kh?')">hapus</a>
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