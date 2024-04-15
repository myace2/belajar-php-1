@extends('layouts.master')
@section('title','kelola data user')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                    <h1>Halaman Kelola Data User</h1>
                    <a href="/user/tambah" class="btn btn-primary">Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <table id="example" class="table table-striped table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No/ID</th>
                                            <th>Nama Petugas</th>
                                            <th>Username</th>
                                            <th>Jabatan</th>
                                            <th>Alamat</th>
                                            <th>No Telepon</th>
                                            <th>Tanggal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($user as $u)
                                        <tr>
                                            <td>{{ $u->id}}</td>
                                            <td>{{ $u->nama_user}}</td>
                                            <td>{{ $u->username}}</td>
                                            <td>{{ $u->Jabatan->nama_jabatan}}</td>
                                            <td>{{ $u->alamat}}</td>
                                            <td>{{ $u->no_telepon}}</td>
                                            <td>{{ $u->created_at}}</td>
                                        <td>
                                        <a href="/user/{{$u->id}}/edit" class="btn btn-warning">Edit</a>
                                        <a href="/user/{{$u->id}}/hapus" class="btn btn-danger" onClick="return confirm('ril kh?')">hapus</a>
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