@extends('sekprodi.master')

@section('nama')
Sekprodi
@endsection

@section('judul')
Hari
@endsection

@section('kontent')
<div class="col-12">
    <div class="card-box">
        <p class="sub-header">
            Mohon pastikan semua <code>data</code> yang Anda masukkan sudah benar dan sesuai dengan format yang diminta. 
            Hal ini <code>penting</code> untuk memastikan proses berjalan dengan lancar tanpa kesalahan.
        </p>

        <form class="form-horizontal">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Kode Hari</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" disabled="" value="123456">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="example-time">Nama Hari</label>
                <div class="col-sm-10">
                    <input type="text" name="example-email" class="form-control" placeholder="...">
                </div>
            </div>
            <div class="form-group mb-0 justify-content-end row">
                <div class="p-1">
                    <button type="submit" class="btn btn-info waves-effect waves-light">Buat</button>
                </div>
                <div class="p-1">
                    <button type="submit" class="btn btn-secondary waves-effect waves-light">Batal</button>
                </div>
            </div>
        </form>

    </div> <!-- end card-box -->
</div><!-- end col -->
@endsection
