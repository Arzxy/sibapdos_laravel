@extends('master')


@section("title")
    Lihat Nilai
@endsection

@section("judul")
    Nilai
@endsection

@section("kontent")
<a href="{{ url(path: '/nilai_insert') }}" class="btn btn-primary">Tambah Data</a>
<div class="card mb-4 mt-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Data Nilai
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Kode Nilai</th>
                    <th>Nama Matakuliah</th>
                    <th>NIM</th>
                    <th>Nilai</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>KDN0143</th>
                    <th>Matematika</th>
                    <th>202304001</th>
                    <th>100</th>
                    <td>
                        <a href="{{ url(path: '/nilai_edit') }}" class="btn btn-primary">Edit</a>
                        <a href="" onclick="return confirm('Yakin Hapus Data Ini ?')" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection