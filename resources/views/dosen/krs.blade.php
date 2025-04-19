@extends('dosen.master')

@section('nama')
Dosen
@endsection

@section('judul')
Data KRS
@endsection

@section('kontent')
<div class="col-12">
    <div class="card-box">
        <p class="sub-header">
            Mohon pastikan semua <code>data</code> yang Anda masukkan sudah benar dan sesuai dengan format yang diminta. 
            Hal ini <code>penting</code> untuk memastikan proses berjalan dengan lancar tanpa kesalahan.
        </p>

        <form class="form-horizontal">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">NIK Mahasiswa</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="NIK_Mhs" placeholder="Masukkan NIK Mahasiswa">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Kode Matakuliah</label>
                <div class="col-sm-10">
                    <input type="text" name="Kd_Matakuliah" class="form-control" placeholder="Masukkan Kode Matakuliah">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tahun Ajaran</label>
                <div class="col-sm-10">
                    <input type="text" name="Tahun_ajaran" class="form-control" placeholder="Masukkan Tahun Ajaran (contoh: 2024/2025)">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nilai Matakuliah</label>
                <div class="col-sm-10">
                    <input type="text" name="Nilai_Matkul" class="form-control" placeholder="Masukkan Nilai Matakuliah">
                </div>
            </div>
            <div class="form-group mb-0 justify-content-end row">
                <div class="p-1">
                    <button type="submit" class="btn btn-info waves-effect waves-light">Simpan</button>
                </div>
                <div class="p-1">
                    <button type="reset" class="btn btn-secondary waves-effect waves-light">Batal</button>
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
                <th>NIK Mahasiswa</th>
                <th>Kode Matakuliah</th>
                <th>Tahun Ajaran</th>
                <th>Nilai Matakuliah</th>
                <th>Action</th>
            </tr>
            </thead>


            <tbody>
            <tr>
                <td>2023010001</td>
                <td>MK001</td>
                <td>2024/2025</td>
                <td>A</td>
                <td>
                    <button type="button" class="btn btn-icon btn-warning waves-effect waves-light">Edit&ensp;<i class="mdi mdi-wrench"></i> </button>
                    <button type="button" class="btn btn-icon btn-danger waves-effect waves-light">Delete&ensp;<i class="mdi mdi-close"></i> </button>
                </td>
            </tr>
            </tbody>
        </table>
    </div> <!-- end card-box -->
</div> <!-- end col -->
@endsection
