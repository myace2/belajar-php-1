@extends('layouts.master')
@section('title', 'kelola data pembayaran')
@section('content')
    <div class="content-wrapper">
        <br>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Form Tambah Data pembayaran</h4>
                            </div>
                            <div class="card-body">
                                <form action="/pembayaran/simpan" method="POST">
                                    @csrf


                                    <div class="form-group">
                                        <label for="">Id Pembayaran</label>
                                        <input type="text" class="form-control" name="id" id=""
                                            placeholder="Masukan Id Pembayaran" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Nis</label>
                                        <select name="nis" class="form-control" name="nis">
                                            @foreach($siswa as $siswa)
                                                <option value="{{ $siswa->nis }}">{{ $siswa->nama_siswa }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Tanggal Bayar</label>
                                        <input type="date" class="form-control" name="tgl_bayar" id=""
                                            placeholder="Masukan Tanggal Bayar" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="">id spp</label>
                                        <input type="text" class="form-control" name="id_spp" id=""
                                            placeholder="Masukan Id Spp" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="">jumlah Bayar</label>
                                        <input type="number" class="form-control" name="jumlah_bayar" id=""
                                            placeholder="Masukan jumlah bayar" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="">keterangan</label>
                                        <input type="text" class="form-control" name="keterangan" id=""
                                            placeholder="Masukan keterangan" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">id Petugas</label>
                                        <input type="text" class="form-control" name="id_user" id=""
                                            placeholder="Masukan id Petugas" required>
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
