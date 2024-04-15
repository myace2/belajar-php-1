@extends('layouts.master')
@section('title', 'kelola data rekap')
@section('content')
    <div class="content-wrapper">
        <br>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Form Tambah Data rekap</h4>
                            </div>
                            <div class="card-body">
                                <form action="/rekap/simpan" method="POST">
                                    @csrf


                                    <div class="form-group">
                                        <label for="">ID Rekap</label>
                                        <input type="text" class="form-control" name="id" id=""
                                            placeholder="Masukan Id rekap" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Nama Karyawan</label>
                                        <select name="id_karyawan" class="form-control">
                                            @foreach($karyawan as $karyawans)
                                                <option value="{{ $karyawans->id_karyawan }}">{{ $karyawans->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Nama User</label>
                                        <select name="id_user" class="form-control">
                                            @foreach($user as $user)
                                                <option value="{{ $user->id }}">{{ $user->nama_user }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Tanggal Absensi</label>
                                        <select name="id_absensi" class="form-control">
                                            @foreach($absensi as $absensi)
                                                <option value="{{ $absensi->id_absensi }}">{{ $absensi->tanggal_absen }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Nama Jabatan</label>
                                        <select name="id_jabatan" class="form-control">
                                            @foreach($jabatan as $jabatan)
                                                <option value="{{ $jabatan->id }}">{{ $jabatan->nama_jabatan }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Tanggal Rekap</label>
                                        <input type="date" class="form-control" name="tgl_rekap" id=""
                                            placeholder="Masukan tanggal rekapan" required>
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
