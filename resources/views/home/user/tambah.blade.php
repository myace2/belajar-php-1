@extends('layouts.master')
@section('title','kelola data user')
@section('content')
<div class="content-wrapper">
    <br>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                    <h4>Form Tambah Data User</h4>
                        </div>
                        <div class="card-body">
                            <form action="/user/simpan" method="POST">
                                @csrf

                                <div class="form-group">
                                  <label for="">Nama Petugas</label>
                                  <input type="text" class="form-control"
                                    name="nama_petugas" id="" placeholder="Masukan Nama Petugas" required>
                                </div>

                                <div class="form-group">
                                    <label for="">Username</label>
                                    <input type="text" class="form-control"
                                      name="username" id="" placeholder="Masukan Username untuk Akun" required>
                                  </div>

                                  <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password" class="form-control"
                                      name="password" id="" placeholder="Masukan Password" required>

                                     
                                  </div>
                                  <div class="form-group">
                                    <label for="">Level</label>
                                    <input type="text" class="form-control"
                                      name="level" id="" placeholder="Masukan Level Anda" required>
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