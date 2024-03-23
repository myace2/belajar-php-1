@extends('layouts.master')
@section('title','kelola data siswa')
@section('content')
<div class="content-wrapper">
    <br>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                    <h4>Form Edit Data siswa</h4>
                        </div>
                        <div class="card-body">
                            <form action="/siswa/{{$siswa->nis}}/update" method="POST">
                                @csrf


                                <div class="form-group">
                                    <label for="">Nis</label>
                                    <input type="text" class="form-control"
                                      name="nis" value="{{$siswa->nis}}"
                                       placeholder="Masukan Nis" required>
                                  </div>


                                <div class="form-group">
                                  <label for="">Nama</label>
                                  <input type="text" class="form-control"
                                    name="nama" value="{{$siswa->nama}}"
                                     placeholder="Masukan Nama" required>
                                </div>

                                <div class="form-group">
                                    <label for="">id Kelas</label>
                                    <input type="text" class="form-control"
                                      name="id_kelas" value="{{$siswa->id_kelas}}" 
                                      placeholder="masukkan id Kelas" required>
                                </div>

                                <div class="form-group">
                                    <label for="">alamat</label>
                                    <input type="text" class="form-control"
                                      name="alamat" value="{{$siswa->alamat}}" 
                                      placeholder="masukkan alamat" required>
                                </div>

                                <div class="form-group">
                                    <label for="">no Telp</label>
                                    <input type="number" class="form-control"
                                      name="no_telp" value="{{$siswa->no_telp}}" 
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