@extends('layouts.master')
@section('title','kelola data karyawan')
@section('content')
<div class="content-wrapper">
    <br>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                    <h4>Form Edit Data karyawan</h4>
                        </div>
                        <div class="card-body">
                            <form action="/karyawan/{{$karyawan->id_karyawan}}/update" method="POST">
                                @csrf


                                <div class="form-group">
                                    <label for="">id_karyawan</label>
                                    <input type="text" class="form-control"
                                      name="id_karyawan" value="{{$karyawan->id_karyawan}}"
                                       placeholder="Masukan id_karyawan" required>
                                  </div>


                                <div class="form-group">
                                  <label for="">Nama</label>
                                  <input type="text" class="form-control"
                                    name="nama" value="{{$karyawan->nama}}"
                                     placeholder="Masukan Nama" required>
                                </div>

                                <div class="form-group">
                                    <label for="">Jabatan</label>
                                    <select name="id_jabatan" class="form-control" value="{{$karyawan->nama_jabatan}}">
                                        @foreach ($jabatan as $jabatan)
                                            <option value="{{ $jabatan->id }}">{{ $jabatan->nama_jabatan }}</option>
                                        @endforeach
                                    </select> required>
                                </div>

                                <div class="form-group">
                                    <label for="">alamat</label>
                                    <input type="text" class="form-control"
                                      name="alamat" value="{{$karyawan->alamat}}" 
                                      placeholder="masukkan alamat" required>
                                </div>

                                <div class="form-group">
                                    <label for="">no Telp</label>
                                    <input type="number" class="form-control"
                                      name="no_telp" value="{{$karyawan->no_telp}}" 
                                      placeholder="masukkan no telp" required>
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