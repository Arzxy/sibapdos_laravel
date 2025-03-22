@extends('master')


@section("title")
    Lihat Prodi
@endsection

@section("judul")
    Prodi
@endsection

@section("kontent")
<a href="{{ url(path: '/prodi_insert') }}" class="btn btn-primary">Tambah Data</a>
<div class="card mb-4 mt-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Data Prodi
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Kode Prodi</th>
                    <th>Nama Prodi</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>202304001</td>
                    <td>Eki</td>
                    <td>
                        <a href="{{ url(path: '/prodi_edit') }}" class="btn btn-primary">Edit</a>
                        <a href="" onclick="return confirm('Yakin Hapus Data Ini ?')" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection