@extends('layouts.master')
@section('title','kelola data jabatan')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                    <h1>Halaman Kelola Data jabatan</h1>
                    <a href="/jabatan/tambah" class="btn btn-primary">Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <table id="example" class="table table-striped table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No/ID</th>
                                            <th>Nama jabatan</th>
                                            <th>Tanggal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($jabatan as $k)
                                        <tr>
                                            <td>{{ $k->id}}</td>
                                            <td>{{ $k->nama_jabatan}}</td>
                                            <td>{{ $k->created_at}}</td>
                                        <td>
                                        <a href="/jabatan/{{$k->id}}/edit" class="btn btn-warning">Edit</a>
                                        <a href="/jabatan/{{$k->id}}/hapus" class="btn btn-danger" onClick="return confirm('ril kh?')">hapus</a>
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