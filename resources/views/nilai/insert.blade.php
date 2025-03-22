@extends('master')


@section("title")
    Tambah Nilai
@endsection

@section("judul")
    Tambah Nilai
@endsection

@section("kontent")
<form action="">
    <div class="mb-3">
        <label for="nim" class="form-label">Kode Nilai</label>
        <input type="text" class="form-control" id="nim" name="nim" disabled>
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label">Nama Matakuliah</label>
        <input type="text" class="form-control" id="nama" name="nama">
    </div>
    <div class="mb-3">
        <label for="prodi" class="form-label">NIM</label>
        <input type="text" class="form-control" id="prodi" name="prodi">
    </div>
    <div class="mb-3">
        <label for="prodi" class="form-label">Nilai</label>
        <input type="text" class="form-control" id="prodi" name="jk">
    </div>
    <hr>
    <a href="" class="btn btn-primary">Tambah</a>
    <a href="{{ url(path: '/nilai') }}" class="btn btn-danger">Batal</a>
</form>
@endsection