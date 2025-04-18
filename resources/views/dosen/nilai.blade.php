@extends('dosen.master')

@section('nama')
Dosen
@endsection

@section('judul')
Data Nilai
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
                <label class="col-sm-2 col-form-label">NIK Mahasiswa</label>
                <div class="col-sm-10">
                    <input type="text" name="nik_mhs" class="form-control" placeholder="Masukkan NIK Mahasiswa">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nomor Tugas</label>
                <div class="col-sm-10">
                    <input type="number" name="no_tugas" class="form-control" placeholder="Masukkan Nomor Tugas">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nilai Tugas</label>
                <div class="col-sm-10">
                    <input type="number" name="nilai_tugas" class="form-control" placeholder="Masukkan Nilai Tugas" step="0.01">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Keterangan Tugas</label>
                <div class="col-sm-10">
                    <textarea name="ket_tugas" class="form-control" placeholder="Masukkan Keterangan Tugas" rows="3"></textarea>
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
                <th>NIK Mahasiswa</th>
                <th>Nomor Tugas</th>
                <th>Nilai Tugas</th>
                <th>Keterangan</th>
                <th>Action</th>
            </tr>
            </thead>


            <tbody>
            <tr>
                <td>TGS001</td>
                <td>2023010001</td>
                <td>1</td>
                <td>85.5</td>
                <td>Tugas dikumpulkan tepat waktu</td>
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
