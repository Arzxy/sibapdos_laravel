@extends('dosen.master')

@section('nama')
Dosen
@endsection

@section('judul')
Data Absensi
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
                <label class="col-sm-2 col-form-label">Kode BAP</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="kd_bap" placeholder="Masukkan Kode BAP">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">NIK Mahasiswa</label>
                <div class="col-sm-10">
                    <input type="text" name="nik_mhs" class="form-control" placeholder="Masukkan NIK Mahasiswa">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tanggal Absensi</label>
                <div class="col-sm-10">
                    <input type="date" name="tgl_absensi" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Pertemuan Absensi</label>
                <div class="col-sm-10">
                    <input type="number" name="pertemuan_absensi" class="form-control" placeholder="Masukkan Pertemuan ke-">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Kehadiran</label>
                <div class="col-sm-10">
                    <select name="hadir_mhs" class="form-control">
                        <option value="">Pilih Status Kehadiran</option>
                        <option value="Hadir">Hadir</option>
                        <option value="Tidak Hadir">Tidak Hadir</option>
                        <option value="Izin">Izin</option>
                        <option value="Sakit">Sakit</option>
                    </select>
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
                <th>Kode BAP</th>
                <th>NIK Mahasiswa</th>
                <th>Tanggal Absensi</th>
                <th>Pertemuan</th>
                <th>Status Kehadiran</th>
                <th>Action</th>
            </tr>
            </thead>


            <tbody>
            <tr>
                <td>BAP001</td>
                <td>2023010001</td>
                <td>17-04-2025</td>
                <td>1</td>
                <td>Hadir</td>
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
