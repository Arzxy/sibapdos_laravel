@extends('master')


@section("title")
    Edit Mahasiswa
@endsection

@section("judul")
    Edit Mahasiswa
@endsection

@section("kontent")
<form action="">
    <div class="mb-3">
        <label for="nim" class="form-label">NIM</label>
        <input type="text" class="form-control" id="nim" name="nim" value="202304001">
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" value="Eki">
    </div>
    <div class="mb-3">
        <label for="prodi" class="form-label">Prodi</label>
        <input type="text" class="form-control" id="prodi" name="prodi" value="TRPL">
    </div>
    <div class="mb-3">
        <label for="prodi" class="form-label">Jenis Kelamin</label>
        <input type="text" class="form-control" id="prodi" name="jk" value="Laki-laki">
    </div>
    <div class="mb-3">
        <label for="prodi" class="form-label">Email</label>
        <input type="text" class="form-control" id="prodi" name="email" value="eki@gmail.com">
    </div>
    <div class="mb-3">
        <label for="prodi" class="form-label">No Handphone</label>
        <input type="text" class="form-control" id="prodi" name="nohp" value="08123456789">
    </div>
    <div class="mb-3">
        <label for="prodi" class="form-label">Foto</label>
        <input type="file" name="foto" class="form-control" id="inputGroupFile02"> 
    </div>
    <hr>
    <a href="" class="btn btn-primary">Edit</a>
    <a href="{{ url(path: '/mahasiswa') }}" class="btn btn-danger">Batal</a>
</form>
@endsection