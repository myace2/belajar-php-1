@extends('layouts.master')
@section('title','kelola data pembayaran')
@section('content')
<div class="content-wrapper">
    <br>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                    <h4>Form Edit Data pembayaran</h4>
                        </div>
                        <div class="card-body">
                            <form action="/pembayaran/{{$pembayaran->id}}/update" method="POST">
                                @csrf


                                <div class="form-group">
                                    <label for="">id pembayaran</label>
                                    <input type="number" class="form-control"
                                      name="id" value="{{$pembayaran->id}}"
                                       placeholder="Masukan id pembayaran" required>
                                  </div>


                                <div class="form-group">
                                  <label for="">Nis</label>
                                  <input type="text" class="form-control"
                                    name="nis" value="{{$pembayaran->nis}}"
                                     placeholder="Masukan nis" required>
                                </div>

                                <div class="form-group">
                                    <label for="">Tanggal bayar</label>
                                    <input type="date" class="form-control"
                                      name="tgl_bayar" value="{{$pembayaran->tgl_bayar}}" 
                                      placeholder="masukkan tgl_bayar" required>
                                </div>

                                <div class="form-group">
                                    <label for="">id spp</label>
                                    <input type="text" class="form-control"
                                      name="id_spp" value="{{$pembayaran->id_spp}}" 
                                      placeholder="masukkan id_spp" required>
                                </div>

                                <div class="form-group">
                                    <label for="">jumlah bayar</label>
                                    <input type="number" class="form-control"
                                      name="jumlah_bayar" value="{{$pembayaran->jumlah_bayar}}" 
                                      placeholder="masukkan jumlah bayar" required>
                                </div>

                                <div class="form-group">
                                    <label for="">keterangan</label>
                                    <input type="text" class="form-control"
                                      name="keterangan" value="{{$pembayaran->keterangan}}" 
                                      placeholder="keterangan" required>
                                </div>
                                <div class="form-group">
                                    <label for="">id petugas</label>
                                    <input type="number" class="form-control"
                                      name="id_user" value="{{$pembayaran->id_user}}" 
                                      placeholder="masukkan id petugas" required>
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