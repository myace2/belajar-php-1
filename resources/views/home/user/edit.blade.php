@extends('layouts.master')
@section('title', 'kelola data user')
@section('content')
    <div class="content-wrapper">
        <br>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Form Edit Data User</h4>
                            </div>
                            <div class="card-body">
                                <form action="/user/{{ $user->id }}/update" method="POST">
                                    @csrf

                                    <div class="form-group">
                                        <label for="">Nama User</label>
                                        <input type="text" class="form-control" name="nama_user"
                                            value="{{ $user->nama_user }}" placeholder="Masukan Nama User" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Username</label>
                                        <input type="text" class="form-control" name="username"
                                            value="{{ $user->username }}" placeholder="Masukan Username untuk Akun"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Password</label>
                                        <input type="password" class="form-control" name="password"
                                            value="{{ $user->password }}" placeholder="Masukan Password" required>

                                    </div>

                                    <div class="form-group">
                                        <label for="">Jabatan</label>
                                        <select name="id_jabatan" class="form-control" value="{{$user->nama_jabatan}}">
                                            @foreach ($jabatan as $jabatan)
                                                <option value="{{ $jabatan->id }}">{{ $jabatan->nama_jabatan }}</option>
                                            @endforeach
                                        </select> required>
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
