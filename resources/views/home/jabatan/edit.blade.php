@extends('layouts.master')
@section('title','kelola data jabatan')
@section('content')
<div class="content-wrapper">
    <br>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                    <h4>Form Edit Data jabatan</h4>
                        </div>
                        <div class="card-body">
                            <form action="/jabatan/{{$jabatan->id}}/update" method="POST">
                                @csrf

                                
                                <div class="form-group">
                                  <label for="">Nama jabatan</label>
                                  <input type="text" class="form-control"
                                    name="nama_jabatan" value="{{$jabatan->nama_jabatan}}"
                                     placeholder="Masukan Nama jabatan" required>
                                </div>

                                  <button type="submit" class="btn btn-primary">Simpan</button>
                                  <button type="reset" class="btn btn-secondary">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection