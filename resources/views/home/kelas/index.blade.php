@extends('layouts.master')
@section('title','kelola data kelas')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                    <h1>Halaman Kelola Data kelas</h1>
                    <a href="/kelas/tambah" class="btn btn-primary">Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <table id="example" class="table table-striped table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No/ID</th>
                                            <th>Nama Kelas</th>
                                            <th>Kompetensi Keahlian</th>
                                            <th>Tanggal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kelas as $k)
                                        <tr>
                                            <td>{{ $k->id}}</td>
                                            <td>{{ $k->nama_kelas}}</td>
                                            <td>{{ $k->kompetensi_keahlian}}</td>
                                            <td>{{ $k->created_at}}</td>
                                        <td>
                                        <a href="/kelas/{{$k->id}}/edit" class="btn btn-warning">Edit</a>
                                        <a href="/kelas/{{$k->id}}/hapus" class="btn btn-danger" onClick="return confirm('ril kh?')">hapus</a>
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