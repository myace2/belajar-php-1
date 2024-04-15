@extends('layouts.master')
@section('title','kelola data absensi')
@section('content')
<div class="content-wrapper">
    <br>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                    <h4>Form Edit Data absensi</h4>
                        </div>
                        <div class="card-body">
                            <form action="/absensi/{{$absensi->id_absensi}}/update" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="">Tanggal Absen</label>
                                    <input type="date" class="form-control" name="tanggal_absen" id=""
                                        placeholder="Masukan tanggal Absen" value="{{$absensi ->tanggal_absen}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Jenis Absen</label>
                                    <input type="text" class="form-control" name="jenis_absen" id=""
                                        placeholder="Hadir/Alpa/Sakit" value="
                                        {{$absensi ->jenis_absen}}" required>
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