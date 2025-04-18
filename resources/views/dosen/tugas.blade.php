@extends('dosen.master')

@section('nama')
Dosen
@endsection

@section('judul')
Data Tugas
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
                <label class="col-sm-2 col-form-label">Kode Tugas</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="kd_tugas" placeholder="Masukkan Kode Tugas">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Kode Dosen</label>
                <div class="col-sm-10">
                    <input type="text" name="kd_dosen" class="form-control" placeholder="Masukkan Kode Dosen">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Kode Matakuliah</label>
                <div class="col-sm-10">
                    <input type="text" name="kd_matakuliah" class="form-control" placeholder="Masukkan Kode Matakuliah">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tanggal Tugas</label>
                <div class="col-sm-10">
                    <input type="date" name="tgl_tugas" class="form-control">
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
                <th>Kode Tugas</th>
                <th>Kode Dosen</th>
                <th>Kode Matakuliah</th>
                <th>Tanggal Tugas</th>
                <th>Action</th>
            </tr>
            </thead>


            <tbody>
            <tr>
                <td>TGS001</td>
                <td>DSN001</td>
                <td>MK001</td>
                <td>18-04-2025</td>
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
