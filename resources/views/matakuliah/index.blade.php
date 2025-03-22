@extends('master')


@section("title")
    Lihat Matakuliah
@endsection

@section("judul")
    Matakuliah
@endsection

@section("kontent")
<a href="{{ url(path: '/matakuliah_insert') }}" class="btn btn-primary">Tambah Data</a>
<div class="card mb-4 mt-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Data Matakuliah
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Kode Matakuliah</th>
                    <th>Nama Matakuliah</th>
                    <th>SKS</th>
                    <th>Dosen</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>PKAE134</th>
                    <th>Matematika</th>
                    <th>2</th>
                    <th>Bu Heti</th>
                    <td>
                        <a href="{{ url(path: '/matakuliah_edit') }}" class="btn btn-primary">Edit</a>
                        <a href="" onclick="return confirm('Yakin Hapus Data Ini ?')" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection