@extends('master')


@section("title")
    Lihat Mahasiswa
@endsection

@section("judul")
    Mahasiswa
@endsection

@section("kontent")
<a href="{{ url(path: '/mahasiswa_insert') }}" class="btn btn-primary">Tambah Data</a>
<div class="card mb-4 mt-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Data Mahasiswa
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Prodi</th>
                    <th>Jenis Kelamin</th>
                    <th>Email</th>
                    <th>No Handphone</th>
                    <th>Foto</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>202304001</td>
                    <td>Eki</td>
                    <td>TRPL</td>
                    <td>Laki-laki</td>
                    <td>eki@gmail.com</td>
                    <td>08123456789</td>
                    <td style="display: flex; justify-content: center; align-items: center;"><img style="border-radius: 50%;" src="" width="50" height="50" alt="Profile"></td>
                    <td>
                        <a href="{{ url(path: '/mahasiswa_edit') }}" class="btn btn-primary">Edit</a>
                        <a href="" onclick="return confirm('Yakin Hapus Data Ini ?')" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection