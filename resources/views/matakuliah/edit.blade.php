@extends('master')


@section("title")
    Edit Matakuliah
@endsection

@section("judul")
    Edit Matakuliah
@endsection

@section("kontent")
<form action="">
    <div class="mb-3">
        <label for="nim" class="form-label">Kode MK</label>
        <input type="text" class="form-control" id="nim" name="nim" value="PKAE134" disabled>
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label">Nama MK</label>
        <input type="text" class="form-control" id="nama" name="nama" value="Matematika">
    </div>
    <div class="mb-3">
        <label for="prodi" class="form-label">SKS</label>
        <input type="text" class="form-control" id="prodi" name="prodi" value="2">
    </div>
    <div class="mb-3">
        <label for="prodi" class="form-label">Dosen</label>
        <input type="text" class="form-control" id="prodi" name="jk" value="Bu Heti">
    </div>
    <hr>
    <a href="" class="btn btn-primary">Edit</a>
    <a href="{{ url(path: '/matakuliah') }}" class="btn btn-danger">Batal</a>
</form>
@endsection