@extends('dosen.master')

@section('nama')
Dosen
@endsection

@section('judul')
Dashboard
@endsection

@section('kontent')
<div class="col-xl-4">
    <div class="card-box">
        <div class="dropdown float-right">
            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-dots-horizontal"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item">Lihat</a>
            </div>
        </div>
        <h4 class="header-title mb-3">Total Mahasiswa</h4>
        <div class="row text-center">
            <div class="col-6 mb-3">
                <h3 class="font-weight-light">15</h3>
                <p class="text-muted text-overflow">Total Mahasiswa</p>
            </div>
            <div class="col-6 mb-3">
                <h3 class="font-weight-light">10</h3>
                <p class="text-muted text-overflow">Aktif</p>
            </div>
            <div class="col-6 mb-3">
                <h3 class="font-weight-light">5</h3>
                <p class="text-muted text-overflow">Non Aktif</p>
            </div>
            <div class="col-6 mb-3">
                <h3 class="font-weight-light">5</h3>
                <p class="text-muted text-overflow">Belum KRS</p>
            </div>
        </div>
    </div>  <!-- end card-box-->
</div> <!-- end col -->
<div class="col-xl-4">
    <div class="card-box">
        <div class="dropdown float-right">
            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-dots-horizontal"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item">Lihat</a>
            </div>
        </div>
        <h4 class="header-title mb-3">Total Dosen</h4>
        <div class="row text-center">
            <div class="col-6 mb-3">
                <h3 class="font-weight-light">16</h3>
                <p class="text-muted text-overflow">Total Dosen</p>
            </div>
            <div class="col-6 mb-3">
                <h3 class="font-weight-light">15</h3>
                <p class="text-muted text-overflow">Sudah Mengampu</p>
            </div>
            <div class="col-6 mb-3">
                <h3 class="font-weight-light">1</h3>
                <p class="text-muted text-overflow">Belum Mengampu</p>
            </div>
        </div>
    </div>  <!-- end card-box-->
</div> <!-- end col -->
<div class="col-xl-4">
    <div class="card-box">
        <div class="dropdown float-right">
            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-dots-horizontal"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item">Lihat</a>
            </div>
        </div>
        <h4 class="header-title mb-3">Total Matakulliah</h4>
        <div class="row text-center">
            <div class="col-6 mb-3">
                <h3 class="font-weight-light">15</h3>
                <p class="text-muted text-overflow">Total Matakulliah</p>
            </div>
            <div class="col-6 mb-3">
                <h3 class="font-weight-light">5</h3>
                <p class="text-muted text-overflow">Sedang Aktif</p>
            </div>
            <div class="col-6 mb-3">
                <h3 class="font-weight-light">5</h3>
                <p class="text-muted text-overflow">Tidak Aktif</p>
            </div>
        </div>
    </div>  <!-- end card-box-->
</div> <!-- end col -->
@endsection
