@extends('layouts.master')
@section('title','kelola data spp')
@section('content')
<div class="content-wrapper">
    <br>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                    <h4>Form Edit Data SPP</h4>
                        </div>
                        <div class="card-body">
                            <form action="/spp/{{$spp->id}}/update" method="POST">
                                @csrf

                                <div class="form-group">
                                  <label for="">Keterangan</label>
                                  <input type="text" class="form-control"
                                    name="keterangan" value="{{$spp->keterangan}}"
                                     placeholder="Masukan Keterangan" required>
                                </div>

                                <div class="form-group">
                                    <label for="">Tahun</label>
                                    <input type="number" class="form-control"
                                      name="tahun" value="{{$spp->tahun}}" 
                                      placeholder="Masukan Tahun" required>
                                </div>

                                <div class="form-group">
                                    <label for="">Nominal</label>
                                    <input type="number" class="form-control"
                                      name="nominal" value="{{$spp->nominal}}" 
                                      placeholder="Masukan Nominal" required>
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