@extends('sekprodi.master')

@section('nama')
Sekprodi
@endsection

@section('judul')
Matakuliah
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
                <label class="col-sm-2 col-form-label">Kode Matakuliah</label>
                <div class="col-sm-10">
                    <input type="text" name="example-email" class="form-control" placeholder="...">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="example-time">Nama Matakuliah</label>
                <div class="col-sm-10">
                    <input type="text" name="example-email" class="form-control" placeholder="...">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="example-time">SKS</label>
                <div class="col-sm-10">
                    <input type="text" name="example-email" class="form-control" placeholder="...">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="example-time">SKS Teori</label>
                <div class="col-sm-10">
                    <input type="text" name="example-email" class="form-control" placeholder="...">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="example-time">SKS Praktek</label>
                <div class="col-sm-10">
                    <input type="text" name="example-email" class="form-control" placeholder="...">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="example-time">Semester</label>
                <div class="col-sm-10">
                    <input type="text" name="example-email" class="form-control" placeholder="...">
                </div>
            </div>
            <div class="form-group mb-0 justify-content-end row">
                <div class="p-1">
                    <button type="submit" class="btn btn-info waves-effect waves-light">Buat</button>
                </div>
                <div class="p-1">
                    <button type="submit" class="btn btn-secondary waves-effect waves-light">Batal</button>
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
                <th>Kode Matakuliah</th>
                <th>Nama Matakuliah</th>
                <th>SKS</th>
                <th>SKS Teori</th>
                <th>SKS Praktek</th>
                <th>Semester</th>
                <th>Action</th>
            </tr>
            </thead>


            <tbody>
            <tr>
                <td>MKK101</td>
                <td>Pengantar Manufaktur Tekstil</td>
                <td>1</td>
                <td>1</td>
                <td>0</td>
                <td>4</td>
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
