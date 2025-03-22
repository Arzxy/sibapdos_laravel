@extends('master')


@section("title")
    Tambah Prodi
@endsection

@section("judul")
    Tambah Prodi
@endsection

@section("kontent")
<form action="">
    <div class="mb-3">
        <label for="nim" class="form-label">Kode Prodi</label>
        <input type="text" class="form-control" id="nim" name="nim" disabled>
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label">Nama Prodi</label>
        <input type="text" class="form-control" id="nama" name="nama">
    </div>
    <hr>
    <a href="" class="btn btn-primary">Tambah</a>
    <a href="{{ url(path: '/prodi') }}" class="btn btn-danger">Batal</a>
</form>
@endsection