@extends('master')


@section("title")
    Tambah Mahasiswa
@endsection

@section("judul")
    Tambah Mahasiswa
@endsection

@section("kontent")
<form action="">
    <div class="mb-3">
        <label for="nim" class="form-label">NIM</label>
        <input type="text" class="form-control" id="nim" name="nim">
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama">
    </div>
    <div class="mb-3">
        <label for="prodi" class="form-label">Prodi</label>
        <input type="text" class="form-control" id="prodi" name="prodi">
    </div>
    <div class="mb-3">
        <label for="prodi" class="form-label">Jenis Kelamin</label>
        <input type="text" class="form-control" id="prodi" name="jk">
    </div>
    <div class="mb-3">
        <label for="prodi" class="form-label">Email</label>
        <input type="text" class="form-control" id="prodi" name="email">
    </div>
    <div class="mb-3">
        <label for="prodi" class="form-label">No Handphone</label>
        <input type="text" class="form-control" id="prodi" name="nohp">
    </div>
    <div class="mb-3">
        <label for="prodi" class="form-label">Foto</label>
        <input type="file" name="foto" class="form-control" id="inputGroupFile02"> 
    </div>
    <hr>
    <a href="" class="btn btn-primary">Tambah</a>
    <a href="{{ url(path: '/mahasiswa') }}" class="btn btn-danger">Batal</a>
</form>
@endsection