@extends('sekprodi.master')

@section('nama')
Sekprodi
@endsection

@section('judul')
Mahasiswa
@endsection

@section('kontent')
<div class="col-12">
    <div class="card-box">
        <p class="sub-header">
            Mohon pastikan semua <code>data</code> yang Anda masukkan sudah benar dan sesuai dengan format yang diminta. 
            Hal ini <code>penting</code> untuk memastikan proses berjalan dengan lancar tanpa kesalahan.
        </p>
        <form class="form-horizontal" method="POST" action="/sekprodi/mahasiswa/store" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="NIK_Mhs">NIM</label>
            <div class="col-sm-10">
                <input type="text" name="NIK_Mhs" class="form-control" placeholder="Masukkan NIM Mahasiswa">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="Nm_Mhs">Nama Mahasiswa</label>
            <div class="col-sm-10">
                <input type="text" name="Nm_Mhs" class="form-control" placeholder="Masukkan Nama Lengkap Mahasiswa">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="JK_Mhs">Jenis Kelamin</label>
            <div class="col-sm-10">
                <select class="form-control" name="JK_Mhs">
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="tmptlahir_Mhs">Tempat Lahir</label>
            <div class="col-sm-10">
                <input type="text" name="tmptlahir_Mhs" class="form-control" placeholder="Masukkan Tempat Lahir">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="TglLahir_Mhs">Tanggal Lahir</label>
            <div class="col-sm-10">
                <input type="date" name="TglLahir_Mhs" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="Alamat_Mhs">Alamat</label>
            <div class="col-sm-10">
                <input type="text" name="Alamat_Mhs" class="form-control" placeholder="Masukkan Alamat Lengkap">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="Kd_Prodi">Prodi</label>
            <div class="col-sm-10">
                <select class="form-control" name="Kd_Prodi">
                    @foreach($prodi as $prod)
                        <option value="{{ $prod->Kd_Prodi }}">{{ $prod->Nm_Prodi }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="Status_Mhs">Status Mahasiswa</label>
            <div class="col-sm-10">
                <select class="form-control" name="Status_Mhs">
                    <option value="Aktif">Aktif</option>
                    <option value="Tidak Aktif">Tidak Aktif</option>
                    <option value="Cuti">Cuti</option>
                    <option value="Dropout">Dropout</option>
                </select>
            </div>
        </div>
            <div class="form-group mb-0 justify-content-end row">
                <div class="p-1">
                    <button type="submit" class="btn btn-info waves-effect waves-light">Buat</button>
                </div>
                <div class="p-1">
                    <a href="/sekprodi/mahasiswa" class="btn btn-secondary waves-effect waves-light">Batal</a>
                </div>
            </div>
        </form>

    </div> <!-- end card-box -->
</div><!-- end col -->
<div class="col-12">
    <div class="card-box">
        <table id="datatable" class="table table-bordered dt-responsive nowrap responsive-table-plugin" style="width: 100%">
            <thead>
            <tr>
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>Jenis Kelamin</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Prodi</th>
                <th>Status Mahasiswa</th>
                <th>Action</th>
            </tr>
            </thead>

            <tbody>
            @foreach($mahasiswa as $x)
            <tr>
                <td>{{ $x->NIK_Mhs }}</td>
                <td>{{ $x->Nm_Mhs }}</td>
                <td>{{ $x->JK_Mhs }}</td>
                <td>{{ $x->tmptlahir_Mhs }}</td>
                <td>{{ $x->TglLahir_Mhs }}</td>
                <td>{{ $x->Alamat_Mhs }}</td>
                <td>{{ $x->Kd_Prodi }}</td>
                <td>{{ $x->Status_Mhs }}</td>
                <td>
                    <button type="button" class="btn btn-icon btn-warning waves-effect waves-light">Edit&ensp;<i class="mdi mdi-wrench"></i> </button>
                    <a href="/sekprodi/mahasiswa/delete/{{ $x->NIK_Mhs }}" onclick="return confirm('Yakin Hapus Data Ini ?')" class="btn btn-danger">Delete&ensp;<i class="mdi mdi-close"></i> </a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div> <!-- end card-box -->
</div> <!-- end col -->
@endsection
