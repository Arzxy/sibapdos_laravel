@extends('sekprodi.master')

@section('nama')
Sekprodi
@endsection

@section('judul')
Hari
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
                <label class="col-sm-2 col-form-label">Kode Hari</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" disabled="" value="123456">
                    <input type="hidden" class="form-control" name="id_hari" value="123456">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="example-time">Nama Hari</label>
                <div class="col-sm-10">
                    <input type="text" name="nama_hari" class="form-control" placeholder="Masukan Nama Hari" required>
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
                <th>Kode Hari</th>
                <th>Nama Hari</th>
                <th>Action</th>
            </tr>
            </thead>


            <tbody>
            <tr>
                <td>HR001</td>
                <td>Senin</td>
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
