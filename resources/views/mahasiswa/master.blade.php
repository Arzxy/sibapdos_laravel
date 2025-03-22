<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>SiBapDos - Sekprodi</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

        <!-- jvectormap -->
        <link href="{{ asset('assets/libs/jqvmap/jqvmap.min.css') }}" rel="stylesheet" />

        <!-- DataTables -->
        <link href="{{ asset('assets/libs/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('assets/libs/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css"/>        

        <!-- App css -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <!-- Navigation Bar-->
        <header id="topnav">

            <!-- Topbar Start -->
            <div class="navbar-custom">
                <div class="container-fluid">
                    <ul class="list-unstyled topnav-menu float-right mb-0">

                        <li class="dropdown notification-list">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle nav-link">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </li>
                        
                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="dripicons-bell noti-icon"></i>
                                <span class="badge badge-info noti-icon-badge">21</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-lg">
    
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="m-0">
                                        <span class="float-right">
                                            <a href="" class="text-dark">
                                                <small>Clear All</small>
                                            </a>
                                        </span>Notification
                                    </h5>
                                </div>
    
                                <div class="slimscroll noti-scroll">
    
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                        <div class="notify-icon bg-warning"><i class="mdi mdi-comment-account-outline"></i> </div>
                                        <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">1 min ago</small></p>
                                    </a>
    
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-info"><i class="mdi mdi-account-plus"></i></div>
                                        <p class="notify-details">New user registered.<small class="text-muted">5 hours ago</small></p>
                                    </a>
    
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon">
                                            <img src="{{ asset('assets/images/users/avatar-2.jpg') }}" class="img-fluid rounded-circle" alt="" /> </div>
                                        <p class="notify-details">Cristina Pride</p>
                                        <p class="text-muted mb-0 user-msg">
                                            <small>Hi, How are you? What about our next meeting</small>
                                        </p>
                                    </a>
    
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-danger"><i class="mdi mdi-comment-account-outline"></i></div>
                                        <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">4 days ago</small></p>
                                    </a>
    
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon">
                                            <img src="{{ asset('assets/images/users/avatar-4.jpg') }}" class="img-fluid rounded-circle" alt="" /> </div>
                                        <p class="notify-details">Karen Robinson</p>
                                        <p class="text-muted mb-0 user-msg">
                                            <small>Wow that's great</small>
                                        </p>
                                    </a>
    
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-primary">
                                            <i class="mdi mdi-heart"></i>
                                        </div>
                                        <p class="notify-details">Carlos Crouch liked
                                            <b>Admin</b>
                                            <small class="text-muted">13 days ago</small>
                                        </p>
                                    </a>
                                </div>
    
                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                    View all
                                    <i class="fi-arrow-right"></i>
                                </a>
    
                            </div>
                        </li>
    
                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="{{ asset('assets/images/users/avatar-4.jpg') }}" alt="user-image" class="rounded-circle">
                                <span class="pro-user-name ml-1">
                                    Agnes K <i class="mdi mdi-chevron-down"></i> 
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h6 class="m-0">
                                        Welcome !
                                    </h6>
                                </div>
    
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="dripicons-user"></i>
                                    <span>My Account</span>
                                </a>
    
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="dripicons-gear"></i>
                                    <span>Settings</span>
                                </a>
    
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="dripicons-help"></i>
                                    <span>Support</span>
                                </a>
    
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="dripicons-lock"></i>
                                    <span>Lock Screen</span>
                                </a>
    
                                <div class="dropdown-divider"></div>
    
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="dripicons-power"></i>
                                    <span>Logout</span>
                                </a>
    
                            </div>
                        </li>
    
                    </ul>
    
                    <ul class="list-unstyled menu-left mb-0">
                        <li class="float-left logo-box">
                            <a href="index.php" class="logo">
                                <span class="logo-lg">
                                    <img src="{{ asset('assets/images/logo-light.png') }}" alt="" height="22">
                                </span>
                                <span class="logo-sm">
                                    <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="24">
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- end Topbar -->

            <div class="topbar-menu">
                <div class="container-fluid">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">

                            <li class="has-submenu">
                                <a href="index.php">
                                    <i class="dripicons-meter"></i>Dashboard
                                </a>
                            </li>

                            <li class="has-submenu">
                                <a href="#">
                                    <i class="dripicons-menu"></i>Data Master <div class="arrow-down"></div></a>
                                <ul class="submenu">
                                    <li>
                                        <a href="alokasi_waktu.php">Data Alokasi Waktu</a>
                                    </li>
                                    <li>
                                        <a href="hari.php">Data Hari</a>
                                    </li>
                                    <li>
                                        <a href="ruang_kelas.php">Data Ruang Kelas</a>
                                    </li>
                                    <li>
                                        <a href="krs.php">Data KRS</a>
                                    </li>
                                    <li>
                                        <a href="mahasiswa.php">Data Mahasiswa</a>
                                    </li>
                                    <li>
                                        <a href="dosen.php">Data Dosen</a>
                                    </li>
                                    <li>
                                        <a href="matakuliah.php">Data Matakuliah</a>
                                    </li>
                                    <li>
                                        <a href="prodi.php">Data Prodi</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#">
                                    <i class="dripicons-menu"></i>Data Transaksi <div class="arrow-down"></div></a>
                                <ul class="submenu">
                                    <li>
                                        <a href="dosen_pengampu.php">Data Dosen Pengampu</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#">
                                    <i class="dripicons-menu"></i>Data Laporan <div class="arrow-down"></div></a>
                                <ul class="submenu">
                                    <li>
                                        <a href="laporan_mahasiswa.php">Laporan Data Mahasiswa</a>
                                    </li>
                                    <li>
                                        <a href="laporan_dosen.php">Laporan Data Dosen</a>
                                    </li>
                                    <li>
                                        <a href="laporan_matakuliah.php">Laporan Data Matakuliah</a>
                                    </li>
                                    <li>
                                        <a href="laporan_dosen_pengampu.php">Laporan Data Dosen Pengampu</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!-- End navigation menu -->

                        <div class="clearfix"></div>
                    </div>
                    <!-- end #navigation -->
                </div>
                <!-- end container -->
            </div>
            <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="wrapper">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="page-title-alt-bg"></div>
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Sekprodi</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Dashboard</h4>
                </div> 
                <!-- end page title -->

                <div class="row">
                    <div class="col-xl-4">

                        <div class="card-box">
                            <div class="dropdown float-right">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-horizontal"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Download</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Upload</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                </div>
                            </div>
                            <h4 class="header-title">Daily Sales</h4>
                            <p class="text-muted">March 26 - April 01</p>
                            <div class="mb-3 mt-4">
                                <div class="float-right d-none d-xl-block">
                                    <img src="{{ asset('assets/images/cards/visa.png') }}" alt="user-card" height="28" />
                                    <img src="{{ asset('assets/images/cards/master.png') }}" alt="user-card" height="28" />
                                    <img src="{{ asset('assets/images/cards/american-express.png') }}" alt="user-card" height="28" />
                                </div>
                                <h2 class="font-weight-light">$8,459.56</h2>
                            </div>
                            <div class="chartjs-chart dash-sales-chart">
                                <canvas id="sales-chart"></canvas>
                            </div>
                        </div><!-- end card-box-->

                        <div class="card-box widget-chart-one gradient-success bx-shadow-lg">
                            <div class="float-left" dir="ltr">
                                <input data-plugin="knob" data-width="80" data-height="80" data-linecap=round
                                        data-fgColor="#ffffff" data-bgcolor="rgba(255,255,255,0.2)" value="49" data-skin="tron" data-angleOffset="180"
                                        data-readOnly=true data-thickness=".1"/>
                            </div>
                            <div class="widget-chart-one-content text-right">
                                <p class="text-white mb-0 mt-2">Statistics</p>
                                <h3 class="text-white">$714</h3>
                            </div>
                        </div> <!-- end card-box-->

                    </div> <!-- end col -->

                    <div class="col-xl-4">
                        <div class="card-box">
                            <div class="dropdown float-right">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-horizontal"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Download</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Upload</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                </div>
                            </div>
                            <h4 class="header-title mb-3">Statistics</h4>
                            <div class="row text-center">
                                <div class="col-sm-4 mb-3">
                                    <h3 class="font-weight-light">4,335</h3>
                                    <p class="text-muted text-overflow">Total Sales</p>
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <h3 class="font-weight-light">874</h3>
                                    <p class="text-muted text-overflow">Open Compaign</p>
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <h3 class="font-weight-light">2,548</h3>
                                    <p class="text-muted text-overflow">Total Sales</p>
                                </div>
                            </div>
                            <div class="chartjs-chart high-performing-product">
                                <canvas id="high-performing-product"></canvas>    
                            </div>            
                        </div> <!-- end card-box-->
                    </div> <!-- end col -->

                    <div class="col-xl-4">
                        <div class="card-box">
                            <div class="dropdown float-right">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-horizontal"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Download</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Upload</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                </div>
                            </div>
                            <h4 class="header-title mb-3">Total Revenue</h4>
                            <div class="row text-center">
                                <div class="col-6 mb-3">
                                    <h3 class="font-weight-light">8,459</h3>
                                    <p class="text-muted text-overflow">Total Sales</p>
                                </div>
                                <div class="col-6 mb-3">
                                    <h3 class="font-weight-light">584</h3>
                                    <p class="text-muted text-overflow">Open Compaign</p>
                                </div>
                            </div>
                            <div class="chartjs-chart conversion-chart">
                                <canvas id="conversion-chart"></canvas>
                            </div>
                        </div>  <!-- end card-box-->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-xl-3">
                        <div class="card-box">
                            <div class="dropdown float-right">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-horizontal"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Download</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Upload</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                </div>
                            </div>
                            <h4 class="header-title">My Wallets</h4>
                            <div class="my-4">
                                <h2 class="font-weight-normal mb-2">$6,584.22 <i class="mdi mdi-arrow-up text-success"></i></h2>
                                <p class="text-muted">March 26 - April 01</p>
                            </div>

                            <div class="mb-3 chartjs-chart dash-doughnut">
                                <canvas id="doughnut"></canvas>
                            </div>

                            <div>
                                <p><i class="mdi mdi-stop-circle-outline text-success"></i> Wallet Ballance <span class="float-right font-weight-normal">$825.25</span></p>
                                <p><i class="mdi mdi-stop-circle-outline text-danger"></i> Travels <span class="float-right font-weight-normal">$1,254</span></p>
                                <p class="mb-0"><i class="mdi mdi-stop-circle-outline"></i> Foods & Drinks <span class="float-right font-weight-normal">$89.66</span></p>
                            </div>
                        </div> <!-- end card-box -->
                    </div> <!-- end col -->

                    <div class="col-xl-6">
                        <div class="card-box">
                            <div class="dropdown float-right">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-horizontal"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Download</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Upload</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                </div>
                            </div>
                            <h4 class="header-title mb-4">Transaction History</h4>

                            
                            <div class="table-responsive">
                                <table class="table table-centered table-hover mb-0" id="datatable">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">Name</th>
                                            <th class="border-top-0">Card</th>
                                            <th class="border-top-0">Date</th>
                                            <th class="border-top-0">Amount</th>
                                            <th class="border-top-0">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <img src="{{ asset('assets/images/users/avatar-2.jpg') }}" alt="user-pic" class="rounded-circle avatar-sm bx-shadow-lg" />
                                                <span class="ml-2">Imelda J. Stanberry</span>
                                            </td>
                                            <td>
                                                <img src="{{ asset('assets/images/cards/visa.png') }}" alt="user-card" height="24" />
                                                <span class="ml-2">**** 3256</span>
                                            </td>
                                            <td>27.03.2018</td>
                                            <td>$345.98</td>
                                            <td><span class="badge badge-pill badge-danger">Failed</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{ asset('assets/images/users/avatar-3.jpg') }}" alt="user-pic" class="rounded-circle avatar-sm bx-shadow-lg" />
                                                <span class="ml-2">Francisca S. Lobb</span>
                                            </td>
                                            <td>
                                                <img src="{{ asset('assets/images/cards/master.png') }}" alt="user-card" height="24" />
                                                <span class="ml-2">**** 8451</span>
                                            </td>
                                            <td>28.03.2018</td>
                                            <td>$1,250</td>
                                            <td><span class="badge badge-pill badge-success">Paid</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{ asset('assets/images/users/avatar-1.jpg') }}" alt="user-pic" class="rounded-circle avatar-sm bx-shadow-lg" />
                                                <span class="ml-2">James A. Wert</span>
                                            </td>
                                            <td>
                                                <img src="{{ asset('assets/images/cards/amazon.png') }}" alt="user-card" height="24" />
                                                <span class="ml-2">**** 2258</span>
                                            </td>
                                            <td>28.03.2018</td>
                                            <td>$145</td>
                                            <td><span class="badge badge-pill badge-success">Paid</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{ asset('assets/images/users/avatar-4.jpg') }}" alt="user-pic" class="rounded-circle avatar-sm bx-shadow-lg" />
                                                <span class="ml-2">Dolores J. Pooley</span>
                                            </td>
                                            <td>
                                                <img src="{{ asset('assets/images/cards/american-express.png') }}" alt="user-card" height="24" />
                                                <span class="ml-2">**** 6950</span>
                                            </td>
                                            <td>29.03.2018</td>
                                            <td>$2,005.89</td>
                                            <td><span class="badge badge-pill badge-danger">Failed</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{ asset('assets/images/users/avatar-5.jpg') }}" alt="user-pic" class="rounded-circle avatar-sm bx-shadow-lg" />
                                                <span class="ml-2">Karen I. McCluskey</span>
                                            </td>
                                            <td>
                                                <img src="{{ asset('assets/images/cards/discover.png') }}" alt="user-card" height="24" />
                                                <span class="ml-2">**** 0021</span>
                                            </td>
                                            <td>31.03.2018</td>
                                            <td>$24.95</td>
                                            <td><span class="badge badge-pill badge-success">Paid</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{ asset('assets/images/users/avatar-6.jpg') }}" alt="user-pic" class="rounded-circle avatar-sm bx-shadow-lg" />
                                                <span class="ml-2">Kenneth J. Melendez</span>
                                            </td>
                                            <td>
                                                <img src="{{ asset('assets/images/cards/visa.png') }}" alt="user-card" height="24" />
                                                <span class="ml-2">**** 2840</span>
                                            </td>
                                            <td>27.03.2018</td>
                                            <td>$345.98</td>
                                            <td><span class="badge badge-pill badge-success">Paid</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{ asset('assets/images/users/avatar-7.jpg') }}" alt="user-pic" class="rounded-circle avatar-sm bx-shadow-lg" />
                                                <span class="ml-2">Sandra M. Nicholas</span>
                                            </td>
                                            <td>
                                                <img src="{{ asset('assets/images/cards/master.png') }}" alt="user-card" height="24" />
                                                <span class="ml-2">**** 2015</span>
                                            </td>
                                            <td>28.03.2018</td>
                                            <td>$1,250</td>
                                            <td><span class="badge badge-pill badge-danger">Failed</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{ asset('assets/images/users/avatar-8.jpg') }}" alt="user-pic" class="rounded-circle avatar-sm bx-shadow-lg" />
                                                <span class="ml-2">Ronald S. Taylor</span>
                                            </td>
                                            <td>
                                                <img src="{{ asset('assets/images/cards/amazon.png') }}" alt="user-card" height="24" />
                                                <span class="ml-2">**** 0325</span>
                                            </td>
                                            <td>28.03.2018</td>
                                            <td>$145</td>
                                            <td><span class="badge badge-pill badge-success">Paid</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{ asset('assets/images/users/avatar-9.jpg') }}" alt="user-pic" class="rounded-circle avatar-sm bx-shadow-lg" />
                                                <span class="ml-2">Beatrice L. Iacovelli</span>
                                            </td>
                                            <td>
                                                <img src="{{ asset('assets/images/cards/discover.png') }}" alt="user-card" height="24" />
                                                <span class="ml-2">**** 9058</span>
                                            </td>
                                            <td>29.03.2018</td>
                                            <td>$6,542.32</td>
                                            <td><span class="badge badge-pill badge-success">Paid</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{ asset('assets/images/users/avatar-10.jpg') }}" alt="user-pic" class="rounded-circle avatar-sm bx-shadow-lg" />
                                                <span class="ml-2">Sylvia H. Parker</span>
                                            </td>
                                            <td>
                                                <img src="{{ asset('assets/images/cards/discover.png') }}" alt="user-card" height="24" />
                                                <span class="ml-2">**** 2577</span>
                                            </td>
                                            <td>31.03.2018</td>
                                            <td>$24.95</td>
                                            <td><span class="badge badge-pill badge-danger">Failed</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div> <!-- end card-box-->
                    </div> <!-- end col-->

                    <div class="col-xl-3">
                        <div class="card-box gradient-danger bx-shadow-lg pb-0">
                            <h4 class="header-title text-white">Daily Sales</h4>
                            <p class=" text-white">March 26 - April 01</p>
                            <div class="mb-3 mt-4">
                                <h2 class="font-weight-light  text-white">$3,558.48</h2>
                            </div>

                            <div class="pull-in">
                                <canvas id="lineChart" height="115"></canvas>
                            </div>
                        </div> <!-- end card-box-->

                        <div class="card-box">
                            <div class="media">
                                <img class="mr-3 rounded-circle bx-shadow-lg" src="{{ asset('assets/images/users/avatar-4.jpg') }}" alt="Generic placeholder image" height="80">
                                <div class="media-body">
                                    <h5 class="mt-0">Louis P. Wheeler</h5>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, at, tempus viverra turpis.
                                </div>
                            </div>
                            <a href="" class="btn btn-info btn-block mt-3">Follow</a>
                        </div> <!-- end card-box-->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-xl-8">
                        <div class="card-box">
                            <div class="dropdown float-right">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-horizontal"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Download</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Upload</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                </div>
                            </div>
                            <h4 class="header-title mb-4">Visitor Traffics</h4>
                            <div class="row">
                                <div class="col-md-8">
                                    <div id="usa" class="dash-usa-map"></div>
                                </div> <!-- end col -->
                                <div class="col-md-4">
                                    <h5 class="mb-1 mt-0">1,12,540 <small class="text-muted ml-2">www.getbootstrap.com</small></h5>
                                    <div class="progress-w-percent">
                                        <span class="progress-value font-weight-bold">72% </span>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar" role="progressbar" style="width: 72%;" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                    <h5 class="mb-1 mt-0">51,480 <small class="text-muted ml-2">www.youtube.com</small></h5>
                                    <div class="progress-w-percent">
                                        <span class="progress-value font-weight-bold">39% </span>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 39%;" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                    <h5 class="mb-1 mt-0">45,760 <small class="text-muted ml-2">www.dribbble.com</small></h5>
                                    <div class="progress-w-percent">
                                        <span class="progress-value font-weight-bold">61% </span>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 61%;" aria-valuenow="61" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                    <h5 class="mb-1 mt-0">98,512 <small class="text-muted ml-2">www.behance.net</small></h5>
                                    <div class="progress-w-percent">
                                        <span class="progress-value font-weight-bold">52% </span>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 52%;" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                    <h5 class="mb-1 mt-0">2,154 <small class="text-muted ml-2">www.vimeo.com</small></h5>
                                    <div class="progress-w-percent">
                                        <span class="progress-value font-weight-bold">28% </span>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 28%;" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row-->
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
                                    <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Download</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Upload</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                </div>
                            </div>
                            <h4 class="header-title mb-4">Data Uses</h4>

                            <div class="row text-center">
                                <div class="col-6 mb-3">
                                    <h3 class="font-weight-light"> <i class="mdi mdi-cloud-download text-info"></i> 79%</h3>
                                    <p class="text-muted text-overflow">Downloads</p>
                                </div> <!-- end col -->
                                <div class="col-6 mb-3">
                                    <h3 class="font-weight-light"> <i class="mdi mdi-cloud-upload text-danger"></i> 23%</h3>
                                    <p class="text-muted text-overflow">Uploads</p>
                                </div> <!-- end col -->
                            </div> <!-- end row-->

                            <div class="chartjs-chart datauses-area">
                                <canvas id="datauses-area-1"></canvas>
                            </div>
                        </div> <!-- end card-box-->
                    </div> <!-- end col-->

                </div>
                <!-- end row -->
                
            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 text-center">
                        Copyright © 2025 SiBapDos
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

        <!-- Vendor js -->
        <script src="{{ asset('assets/js/vendor.min.js') }}"></script>

        <!-- KNOB JS -->
        <script src="{{ asset('assets/libs/jquery-knob/jquery.knob.min.js') }}"></script>
        <!-- Chart JS -->
        <script src="{{ asset('assets/libs/chart-js/Chart.bundle.min.js') }}"></script>

        <!-- Jvector map -->
        <script src="{{ asset('assets/libs/jqvmap/jquery.vmap.min.js') }}"></script>
        <script src="{{ asset('assets/libs/jqvmap/jquery.vmap.usa.js') }}"></script>
        
        <!-- Datatable js -->
        <script src="{{ asset('assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>
        
        <!-- Dashboard Init JS -->
        <script src="{{ asset('assets/js/pages/dashboard.init.js') }}"></script>
        
        <!-- App js -->
        <script src="{{ asset('assets/js/app.min.js') }}"></script>
        
    </body>
</html>