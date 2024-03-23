@extends('layouts.master')
@section('title','kelola data spp')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                    <h1>Halaman Kelola Data SPP</h1>
                    <a href="/spp/tambah" class="btn btn-primary">Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <table id="example" class="table table-striped table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No/ID</th>
                                            <th>Keterangan</th>
                                            <th>Tahun</th>
                                            <th>Nominal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($spp as $s)
                                        <tr>
                                            <td>{{ $s->id}}</td>
                                            <td>{{ $s->keterangan}}</td>
                                            <td>{{ $s->tahun}}</td>
                                            <td>{{ $s->nominal}}</td>
                                            <td>{{ $s->created_at}}</td>
                                        <td>
                                        <a href="/spp/{{$s->id}}/edit" class="btn btn-warning">Edit</a>
                                        <a href="/spp/{{$s->id}}/hapus" class="btn btn-danger" onClick="return confirm('ril kh?')">hapus</a>
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