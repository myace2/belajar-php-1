@extends('layouts.master')
@section('title', 'kelola data karyawan')
@section('content')
    <div class="content-wrapper">
        <br>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Form Tambah Data karyawan</h4>
                            </div>
                            <div class="card-body">
                                <form action="/karyawan/simpan" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="">ID Karyawan</label>
                                        <input type="text" class="form-control" name="id_karyawan" id=""
                                            placeholder="Masukan id_karyawan" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Nama</label>
                                        <input type="text" class="form-control" name="nama" id=""
                                            placeholder="Masukan Nama karyawan" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Jabatan</label>
                                        <select name="id_jabatan" class="form-control">
                                            @foreach ($jabatan as $jabatan)
                                                <option value="{{ $jabatan->id }}">{{ $jabatan->nama_jabatan }}</option>
                                            @endforeach
                                        </select> required>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Alamat</label>
                                        <input type="text" class="form-control" name="alamat" id=""
                                            placeholder="Masukan Alamat" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="">No Telp</label>
                                        <input type="number" class="form-control" name="no_telp" id=""
                                            placeholder="Masukan No Telp" required>
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
