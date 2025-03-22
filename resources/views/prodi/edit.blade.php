@extends('master')


@section("title")
    Edit Prodi
@endsection

@section("judul")
    Edit Prodi
@endsection

@section("kontent")
<form action="">
    <div class="mb-3">
        <label for="nim" class="form-label">Kode Prodi</label>
        <input type="text" class="form-control" id="nim" name="nim" value="202304001" disabled>
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label">Nama Prodi</label>
        <input type="text" class="form-control" id="nama" name="nama" value="Eki">
    </div>
    <hr>
    <a href="" class="btn btn-primary">Edit</a>
    <a href="{{ url(path: '/prodi') }}" class="btn btn-danger">Batal</a>
</form>
@endsection