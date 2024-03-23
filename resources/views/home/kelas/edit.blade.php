@extends('layouts.master')
@section('title','kelola data kelas')
@section('content')
<div class="content-wrapper">
    <br>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                    <h4>Form Edit Data Kelas</h4>
                        </div>
                        <div class="card-body">
                            <form action="/kelas{{$kelas->id}}/update" method="POST">
                                @csrf

                                
                                <div class="form-group">
                                  <label for="">Nama Kelas</label>
                                  <input type="text" class="form-control"
                                    name="nama_kelas" value="{{$kelas->nama_kelas}}"
                                     placeholder="Masukan Nama Kelas" required>
                                </div>

                                <div class="form-group">
                                    <label for="">Kompetensi Keahlian</label>
                                    <input type="text" class="form-control"
                                      name="kompetensi_keahlian" value="{{$kelas->kompetensi_keahlian}}" 
                                      placeholder="Masukan Kompetensi keahlian" required>
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