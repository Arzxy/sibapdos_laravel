@extends('master')


@section("title")
    Tambah Matakuliah
@endsection

@section("judul")
    Tambah Matakuliah
@endsection

@section("kontent")
<form action="">
    <div class="mb-3">
        <label for="nim" class="form-label">Kode MK</label>
        <input type="text" class="form-control" id="nim" name="nim" disabled>
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label">Nama MK</label>
        <input type="text" class="form-control" id="nama" name="nama">
    </div>
    <div class="mb-3">
        <label for="prodi" class="form-label">SKS</label>
        <input type="text" class="form-control" id="prodi" name="prodi">
    </div>
    <div class="mb-3">
        <label for="prodi" class="form-label">Dosen</label>
        <input type="text" class="form-control" id="prodi" name="jk">
    </div>
    <hr>
    <a href="" class="btn btn-primary">Tambah</a>
    <a href="{{ url(path: '/matakuliah') }}" class="btn btn-danger">Batal</a>
</form>
@endsection