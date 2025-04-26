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
                    <input type="text" name="Kd_Matkuliah" class="form-control" placeholder="Masukkan Kode Matakuliah">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="example-time">Nama Matakuliah</label>
                <div class="col-sm-10">
                    <input type="text" name="Nm_Matakuliah" class="form-control" placeholder="Masukkan Nama Matakuliah">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="example-time">SKS</label>
                <div class="col-sm-10">
                    <select class="form-control" name="Sks_Matakuliah">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="example-time">SKS Teori</label>
                <div class="col-sm-10">
                    <input type="text" name="Teori_Matkuliah" class="form-control" placeholder="Masukkan SKS Teori">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="example-time">SKS Praktek</label>
                <div class="col-sm-10">
                    <input type="text" name="Praktek_Matkuliah" class="form-control" placeholder="Masukkan SKS Praktek">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="example-time">Semester</label>
                <div class="col-sm-10">
                    <input type="text" name="Smester_Matakuliah" class="form-control" placeholder="Masukkan Semester">
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
            @foreach($matakuliah as $x)
            <tr>
                <td>{{ $x->Kd_Matkuliah }}</td>
                <td>{{ $x->Nm_Matakuliah }}</td>
                <td>{{ $x->Sks_Matakuliah }}</td>
                <td>{{ $x->Teori_Matkuliah }}</td>
                <td>{{ $x->Praktek_Matkuliah }}</td>
                <td>{{ $x->Smester_Matakuliah }}</td>
                <td>
                    <button type="button" class="btn btn-icon btn-warning waves-effect waves-light">Edit&ensp;<i class="mdi mdi-wrench"></i> </button>
                    <a href="/sekprodi/matakuliah/delete/{{ $x->Kd_Matkuliah }}" onclick="return confirm('Yakin Hapus Data Ini ?')" class="btn btn-danger">Delete&ensp;<i class="mdi mdi-close"></i> </a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div> <!-- end card-box -->
</div> <!-- end col -->
@endsection
