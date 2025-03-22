@extends('master')


@section("title")
    Edit Nilai
@endsection

@section("judul")
    Edit Nilai
@endsection

@section("kontent")
<form action="">
    <div class="mb-3">
        <label for="nim" class="form-label">Kode Nilai</label>
        <input type="text" class="form-control" id="nim" name="nim" value="KDN0143" disabled>
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label">Nama Matakuliah</label>
        <input type="text" class="form-control" id="nama" name="nama" value="Matematika">
    </div>
    <div class="mb-3">
        <label for="prodi" class="form-label">NIM</label>
        <input type="text" class="form-control" id="prodi" name="prodi" value="202304001">
    </div>
    <div class="mb-3">
        <label for="prodi" class="form-label">Nilai</label>
        <input type="text" class="form-control" id="prodi" name="jk" value="100">
    </div>
    <hr>
    <a href="" class="btn btn-primary">Edit</a>
    <a href="{{ url(path: '/nilai') }}" class="btn btn-danger">Batal</a>
</form>
@endsection