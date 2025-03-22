<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SiBapDos</title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="Coderthemes" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assetss/images/favicon.ico">

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="assetss/css/bootstrap.min.css" type="text/css">

        <!--Material Icon -->
        <link rel="stylesheet" type="text/css" href="assetss/css/materialdesignicons.min.css" />

        <!-- pe-7 Icon -->
        <link rel="stylesheet" type="text/css" href="assetss/css/pe-icon-7-stroke.css" />

        <!-- owl carousel css -->
        <link rel="stylesheet" type="text/css" href="assetss/css/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="assetss/css/owl.theme.css">
        <link rel="stylesheet" type="text/css" href="assetss/css/owl.transitions.css">

        <!-- Custom  sCss -->
        <link rel="stylesheet" type="text/css" href="assetss/css/style.css" />
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        
        <style>
            .custom-nav-item {
                margin-right: 20px; /* Adjust the value as needed */
            }
        </style>
    </head>

    <body>

        <!--Navbar Start-->
        <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark">
            <div class="container-fluid">
                <!-- LOGO -->
                <a class="logo text-uppercase" href="">
                    <img src="assetss/images/logo-light.png" alt="" class="logo-light" height="34" style="height: 34px!important;" />
                    <img src="assetss/images/logo-dark.png" alt="" class="logo-dark" height="34" style="height: 34px!important;" />
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mx-auto navbar-center" id="mySidenav">
                        <li class="nav-item active custom-nav-item">
                            <a href="#home" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item custom-nav-item">
                            <a href="#services" class="nav-link">Jadwal</a>
                        </li>
                        <li class="nav-item custom-nav-item">
                            <a href="#contact" class="nav-link">Bantuan</a>
                        </li>
                    </ul>
                    <a target="_blank" href="login.php" class="btn btn-sm btn-primary btn-rounded navbar-btn">Login</a>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->


        <!-- home start -->
        <section class="bg-home bg-gradient" id="home">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="home-title text-white">
                            <h4 class="mb-3 text-white-50">Selamat Datang!</h4>
                            <h1 class="text-white mb-4">Portal Berita Acara Perkuliahan</h1>
                            <p class="text-white-50 mb-5">SiBapDos adalah website yang dirancang untuk memudahkan pengelolaan berita acara perkuliahan dan absensi perkuliahan. Dengan SiBapDos, Anda dapat dengan mudah mengakses jadwal matakuliah, mencatat kehadiran, dan mendapatkan informasi terkait perkuliahan lainnya.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1">
                        <div class="home-img mt-5 mt-lg-0">
                            <img src="assetss/images/home-img.png" alt="" class="img-fluid mx-auto d-block">
                        </div>
                    </div>
                </div>
                <!-- row end -->
            </div>
            <!-- container-fluid end -->
            <div class="bg-pattern-effect">
                <img src="assetss/images/bg-pattern.png" alt="">
            </div>

        </section>
        <!-- home end -->
        
        <!-- Services start -->
        <section class="section" id="services">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="title text-center mb-4">
                            <h3 class="mb-3">Jadwal Data Matakuliah</h3>
                            <p>Di sini Anda dapat melihat jadwal matakuliah dan informasi terkait lainnya.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div id="toggleDiv" class="card services-box" style="cursor: pointer;">
                            <div class="card-body pt-2 pb-2 pl-4 pr-4" style="display: flex; justify-content: space-between;">
                                <div>
                                    Lihat Jadwal Matakuliah
                                </div>
                                <div>
                                    <i id="arrowIcon" class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                        </div>
                        <div id="contentDiv" class="card services-box" style="display: none;">
                            <div class="card-body p-4">
                                <div style="overflow-x: auto;">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center;">No</th>
                                                <th style="text-align: center;">Semester</th>
                                                <th style="text-align: center;">Waktu</th>
                                                <th style="text-align: center;">SKS</th>
                                                <th style="text-align: center;">Kode MK</th>
                                                <th style="text-align: center;">Mata Kuliah</th>
                                                <th style="text-align: center;">Dosen</th>
                                                <th style="text-align: center;">Ruang</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th style="text-align: center; background: #9cd394;" colspan="8">Senin</th>
                                            </tr>
                                            <tr>
                                                <th style="text-align: center;">1</th>
                                                <th style="text-align: center;">2 </th>
                                                <th style="text-align: center;">08.00 - 09.40</th>
                                                <th style="text-align: center;">2</th>
                                                <th style="text-align: center;">TRPL204</th>
                                                <th style="text-align: center;">Pengantar Rekayasa Perangkat Lunak</th>
                                                <th style="text-align: center;">Ricak Agus Setiawan, M.SI</th>
                                                <th style="text-align: center;">B4</th>
                                            </tr>
                                            <tr>
                                                <th style="text-align: center; background: #9cd394;" colspan="8">Selasa</th>
                                            </tr>
                                            <tr>
                                                <th style="text-align: center;">1</th>
                                                <th style="text-align: center;">2 </th>
                                                <th style="text-align: center;">08.00 - 09.40</th>
                                                <th style="text-align: center;">2</th>
                                                <th style="text-align: center;">TRPL204</th>
                                                <th style="text-align: center;">Pengantar Rekayasa Perangkat Lunak</th>
                                                <th style="text-align: center;">Ricak Agus Setiawan, M.SI</th>
                                                <th style="text-align: center;">B4</th>
                                            <tr>
                                                <th style="text-align: center;">2</th>
                                                <th style="text-align: center;">2 </th>
                                                <th style="text-align: center;">08.00 - 09.40</th>
                                                <th style="text-align: center;">2</th>
                                                <th style="text-align: center;">TRPL204</th>
                                                <th style="text-align: center;">Pengantar Rekayasa Perangkat Lunak</th>
                                                <th style="text-align: center;">Ricak Agus Setiawan, M.SI</th>
                                                <th style="text-align: center;">B4</th>
                                            </tr>
                                            <tr>
                                                <th style="text-align: center;">3</th>
                                                <th style="text-align: center;">2 </th>
                                                <th style="text-align: center;">08.00 - 09.40</th>
                                                <th style="text-align: center;">2</th>
                                                <th style="text-align: center;">TRPL204</th>
                                                <th style="text-align: center;">Pengantar Rekayasa Perangkat Lunak</th>
                                                <th style="text-align: center;">Ricak Agus Setiawan, M.SI</th>
                                                <th style="text-align: center;">B4</th>
                                            </tr>
                                            <tr>
                                                <th style="text-align: center;">4</th>
                                                <th style="text-align: center;">2 </th>
                                                <th style="text-align: center;">08.00 - 09.40</th>
                                                <th style="text-align: center;">2</th>
                                                <th style="text-align: center;">TRPL204</th>
                                                <th style="text-align: center;">Pengantar Rekayasa Perangkat Lunak</th>
                                                <th style="text-align: center;">Ricak Agus Setiawan, M.SI</th>
                                                <th style="text-align: center;">B4</th>
                                            </tr>
                                            </tr>
                                            <tr>
                                                <th style="text-align: center; background: #9cd394;" colspan="8">Rabu</th>
                                            </tr>
                                            <tr>
                                                <th style="text-align: center;">1</th>
                                                <th style="text-align: center;">2 </th>
                                                <th style="text-align: center;">08.00 - 09.40</th>
                                                <th style="text-align: center;">2</th>
                                                <th style="text-align: center;">TRPL204</th>
                                                <th style="text-align: center;">Pengantar Rekayasa Perangkat Lunak</th>
                                                <th style="text-align: center;">Ricak Agus Setiawan, M.SI</th>
                                                <th style="text-align: center;">B4</th>
                                            <tr>
                                                <th style="text-align: center;">2</th>
                                                <th style="text-align: center;">2 </th>
                                                <th style="text-align: center;">08.00 - 09.40</th>
                                                <th style="text-align: center;">2</th>
                                                <th style="text-align: center;">TRPL204</th>
                                                <th style="text-align: center;">Pengantar Rekayasa Perangkat Lunak</th>
                                                <th style="text-align: center;">Ricak Agus Setiawan, M.SI</th>
                                                <th style="text-align: center;">B4</th>
                                            </tr>
                                            <tr>
                                                <th style="text-align: center;">3</th>
                                                <th style="text-align: center;">2 </th>
                                                <th style="text-align: center;">08.00 - 09.40</th>
                                                <th style="text-align: center;">2</th>
                                                <th style="text-align: center;">TRPL204</th>
                                                <th style="text-align: center;">Pengantar Rekayasa Perangkat Lunak</th>
                                                <th style="text-align: center;">Ricak Agus Setiawan, M.SI</th>
                                                <th style="text-align: center;">B4</th>
                                            </tr>
                                            </tr>
                                            <tr>
                                                <th style="text-align: center; background: #9cd394;" colspan="8">Kamis</th>
                                            </tr>
                                            <tr>
                                                <th style="text-align: center;">1</th>
                                                <th style="text-align: center;">2 </th>
                                                <th style="text-align: center;">08.00 - 09.40</th>
                                                <th style="text-align: center;">2</th>
                                                <th style="text-align: center;">TRPL204</th>
                                                <th style="text-align: center;">Pengantar Rekayasa Perangkat Lunak</th>
                                                <th style="text-align: center;">Ricak Agus Setiawan, M.SI</th>
                                                <th style="text-align: center;">B4</th>
                                            <tr>
                                                <th style="text-align: center;">2</th>
                                                <th style="text-align: center;">2 </th>
                                                <th style="text-align: center;">08.00 - 09.40</th>
                                                <th style="text-align: center;">2</th>
                                                <th style="text-align: center;">TRPL204</th>
                                                <th style="text-align: center;">Pengantar Rekayasa Perangkat Lunak</th>
                                                <th style="text-align: center;">Ricak Agus Setiawan, M.SI</th>
                                                <th style="text-align: center;">B4</th>
                                            </tr>
                                            </tr>
                                            <tr>
                                                <th style="text-align: center; background: #9cd394;" colspan="8">Jumat</th>
                                            </tr>
                                            <tr>
                                                <th style="text-align: center;">1</th>
                                                <th style="text-align: center;">2 </th>
                                                <th style="text-align: center;">08.00 - 09.40</th>
                                                <th style="text-align: center;">2</th>
                                                <th style="text-align: center;">TRPL204</th>
                                                <th style="text-align: center;">Pengantar Rekayasa Perangkat Lunak</th>
                                                <th style="text-align: center;">Ricak Agus Setiawan, M.SI</th>
                                                <th style="text-align: center;">B4</th>
                                            </tr>
                                            <tr>
                                                <th style="text-align: center;">2</th>
                                                <th style="text-align: center;">2 </th>
                                                <th style="text-align: center;">08.00 - 09.40</th>
                                                <th style="text-align: center;">2</th>
                                                <th style="text-align: center;">TRPL204</th>
                                                <th style="text-align: center;">Pengantar Rekayasa Perangkat Lunak</th>
                                                <th style="text-align: center;">Ricak Agus Setiawan, M.SI</th>
                                                <th style="text-align: center;">B4</th>
                                            </tr>
                                            <tr>
                                                <th style="text-align: center;">3</th>
                                                <th style="text-align: center;">2 </th>
                                                <th style="text-align: center;">08.00 - 09.40</th>
                                                <th style="text-align: center;">2</th>
                                                <th style="text-align: center;">TRPL204</th>
                                                <th style="text-align: center;">Pengantar Rekayasa Perangkat Lunak</th>
                                                <th style="text-align: center;">Ricak Agus Setiawan, M.SI</th>
                                                <th style="text-align: center;">B4</th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row end -->
            </div>
            <!-- container-fluid end -->
        </section>
        <!-- Services end -->

        <!-- contact us start -->
        <section class="section pb-lg-0 bg-light"  id="contact">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="title text-center mb-4">
                            <h3>Support</h3>
                            <p>Jika Anda mengalami kendala dalam menggunakan website ini, silakan hubungi dukungan kami melalui contact support.</p>
                        </div>
                    </div>
                </div>
                <!-- row end -->
                <div class="row align-items-end">
                    <div class="col-lg-6">
                        <div class="contact-img d-none d-lg-block">
                            <img src="assetss/images/contact-us.svg" alt="" class="img-fluid mx-auto d-block">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card contact-form mb-lg-0">
                            <div class="custom-form p-5">
                                
                                <div id="message"></div>
                                <form method="post" action="php/contact.php" name="contact-form" id="contact-form">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input name="name" id="name" type="text" class="form-control" placeholder="Nim Mahasiswa">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input name="email" id="email" type="email" class="form-control" placeholder="Nama Mahasiswa">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end row -->

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Pesan"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end row -->

                                    <div class="row">
                                        <div class="col-lg-12 text-right">
                                            <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary btn-rounded" value="Laporkan">
                                            <div id="simple-msg"></div>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                </form>
                            </div>
                            <!-- end custom-form -->
                
                        </div>
                    </div>

                </div>
                <!-- row end -->
            </div>
            <!-- container-fluid end -->
        </section>
        <!-- contact us end -->

        <!-- footer start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <img src="assetss/images/logo-light.png" alt="" height="20">
                        </div>
                        <p>SiBapDos adalah website yang dirancang untuk memudahkan pengelolaan berita acara perkuliahan dan absensi perkuliahan. Dengan SiBapDos, Anda dapat dengan mudah mengakses jadwal matakuliah, mencatat kehadiran, dan mendapatkan informasi terkait perkuliahan lainnya.</p>
                        <div class="pt-1">
                            <div class="float-left mr-2">
                                <i class="pe-7s-phone h4 text-white"></i>
                            </div>
                            <p class="text-white-50 overflow-hidden">(123) 456-7890</p>
                        </div>
                        <div>
                            <div class="float-left mr-2">
                                <i class="pe-7s-mail h4 text-white"></i>
                            </div>
                            <p class="text-white-50 overflow-hidden mb-0">example@abc.com</p>
                        </div>
                    </div>
                </div>
                <!-- row end -->
                <div class="row">
                    <div class="col-md-12 text-center">
                        Copyright © 2025 SiBapDos
                    </div>
                </div>
            </div>
            <!-- container-fluid end -->
        </footer>
        <!-- footer end -->

        <!-- Javascript -->
        <script src="assetss/js/jquery.min.js"></script>
        <script src="assetss/js/bootstrap.bundle.min.js"></script>
        <script src="assetss/js/jquery.easing.min.js"></script>
        <script src="assetss/js/scrollspy.min.js"></script>

        <!-- owl-carousel -->
        <script src="assetss/js/owl.carousel.min.js"></script>

        <!-- custom js -->
        <script src="assetss/js/app.js"></script>

        <script>
            $(document).ready(function(){
                $("#toggleDiv").click(function(){
                    $("#contentDiv").slideToggle();
                    $("#arrowIcon").toggleClass("fa-chevron-down fa-chevron-up");
                });
            });
        </script>
    </body>

</html>