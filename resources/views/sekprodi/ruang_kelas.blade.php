@extends('sekprodi.master')

@section('nama')
Sekprodi
@endsection

@section('judul')
Ruang Kelas
@endsection

@section('kontent')
<div class="col-12">
    <div class="card-box">
        <p class="sub-header">
            Mohon pastikan semua <code>data</code> yang Anda masukkan sudah benar dan sesuai dengan format yang diminta. 
            Hal ini <code>penting</code> untuk memastikan proses berjalan dengan lancar tanpa kesalahan.
        </p>

        <form class="form-horizontal" method="POST" action="/sekprodi/ruang_kelas/store" enctype="multipart/form-data">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Kode Ruangan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" disabled="" value="{{ $lastRuangs }}" placeholder="Masukan Kode Ruangan" required>
                    <input type="hidden" class="form-control" name="Kd_Ruangan" value="{{ $lastRuangs }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="Nm_Ruangan">Nama Ruangan</label>
                <div class="col-sm-10">
                    <input type="text" name="Nm_Ruangan" class="form-control" placeholder="Masukan Nama Ruangan">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="Jml_Kapasitas">Jumlah Kapasitas</label>
                <div class="col-sm-10">
                    <input type="text" name="Jml_Kapasitas" class="form-control" placeholder="Masukan Jumlah Ruangan">
                </div>
            </div>
            <div class="form-group mb-0 justify-content-end row">
                <div class="p-1">
                    <button type="submit" class="btn btn-info waves-effect waves-light">Buat</button>
                </div>
                <div class="p-1">
                    <a href="/sekprodi/ruang_kelas" class="btn btn-secondary waves-effect waves-light">Batal</a>
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
                <th>Kode Ruangan</th>
                <th>Nama Ruangan</th>
                <th>Jumlah Kapasitas</th>
                <th>Action</th>
            </tr>
            </thead>


            <tbody>
            @foreach($ruang as $x)
            <tr>
                <td>{{ $x->Kd_Ruangan }}</td>
                <td>{{ $x->Nm_Ruangan }}</td>
                <td>{{ $x->Jml_Kapasitas }}</td>
                <td>
                    <button type="button" class="btn btn-icon btn-warning waves-effect waves-light">Edit&ensp;<i class="mdi mdi-wrench"></i> </button>
                    <a href="/sekprodi/ruang_kelas/delete/{{ $x->Kd_Ruangan }}" onclick="return confirm('Yakin Hapus Data Ini ?')" class="btn btn-danger">Delete&ensp;<i class="mdi mdi-close"></i> </a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div> <!-- end card-box -->
</div> <!-- end col -->
@endsection
