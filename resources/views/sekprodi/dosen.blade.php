@extends('sekprodi.master')

@section('nama')
Sekprodi
@endsection

@section('judul')
Dosen
@endsection

@section('kontent')
<div class="col-12">
    <div class="card-box">
        <p class="sub-header">
            Mohon pastikan semua <code>data</code> yang Anda masukkan sudah benar dan sesuai dengan format yang diminta. 
            Hal ini <code>penting</code> untuk memastikan proses berjalan dengan lancar tanpa kesalahan.
        </p>

        <form class="form-horizontal" method="POST" action="/sekprodi/dosen/store" enctype="multipart/form-data">
        @csrf
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Kode Dosen</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" disabled="" value="{{ $lastDosens }}" placeholder="Masukkan Kode Dosen" required>
                    <input type="hidden" class="form-control" name="Kd_Dosen" value="{{ $lastDosens }}">
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
                <label class="col-sm-2 col-form-label" for="Nidn_Dosen">NIDN Dosen</label>
                <div class="col-sm-10">
                    <input type="text" name="Nidn_Dosen" class="form-control" placeholder="Masukkan NIDN Dosen">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="Nm_Dosen">Nama Dosen</label>
                <div class="col-sm-10">
                    <input type="text" name="Nm_Dosen" class="form-control" placeholder="Masukkan Nama Dosen">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="Jk_Dosen">Jenis Kelamin</label>
                <div class="col-sm-10">
                    <select class="form-control" name="Jk_Dosen">
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="NoHp_Dosen">No Handphone</label>
                <div class="col-sm-10">
                    <input type="text" name="NoHp_Dosen" class="form-control" placeholder="Masukkan No Handphone">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="Email_Dosen">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="Email_Dosen" class="form-control" placeholder="Masukkan Email">
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
                <th>Kode Dosen</th>
                <th>Prodi</th>
                <th>NIDN Dosen</th>
                <th>Nama Dosen</th>
                <th>Jenis Kelamin</th>
                <th>No Handphone</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            </thead>


            <tbody>
            @foreach($dosen as $x)
            <tr>
                <td>{{ $x->Kd_Dosen }}</td>
                <td>{{ $x->	Kd_Prodi }}</td>
                <td>{{ $x->Nidn_Dosen }}</td>
                <td>{{ $x->	Nm_Dosen }}</td>
                <td>{{ $x->Jk_Dosen }}</td>
                <td>{{ $x->NoHp_Dosen }}</td>
                <td>{{ $x->Email_Dosen }}</td>
                <td>
                    <button type="button" class="btn btn-icon btn-warning waves-effect waves-light">Edit&ensp;<i class="mdi mdi-wrench"></i> </button>
                    <a href="/sekprodi/dosen/delete/{{ $x->Kd_Dosen }}" onclick="return confirm('Yakin Hapus Data Ini ?')" class="btn btn-danger">Delete&ensp;<i class="mdi mdi-close"></i> </a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div> <!-- end card-box -->
</div> <!-- end col -->
@endsection
