<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $butuh_kinerja_tinggi                    = isset($_POST["butuh_kinerja_tinggi"]) ? $_POST["butuh_kinerja_tinggi"] : "";
    $butuh_daya_tahan_baterai_lama           = isset($_POST["butuh_daya_tahan_baterai_lama"]) ? $_POST["butuh_daya_tahan_baterai_lama"] : "";
    $butuh_kualitas_kamera_bagus             = isset($_POST["butuh_kualitas_kamera_bagus"]) ? $_POST["butuh_kualitas_kamera_bagus"] : "";
    $butuh_layar_besar                       = isset($_POST["butuh_layar_besar"]) ? $_POST["butuh_layar_besar"] : "";
    $butuh_harga_terjangkau                  = isset($_POST["butuh_harga_terjangkau"]) ? $_POST["butuh_harga_terjangkau"] : "";
    $butuh_ponsel_tahan_air                  = isset($_POST["butuh_ponsel_tahan_air"]) ? $_POST["butuh_ponsel_tahan_air"] : "";
    $butuh_penyimpanan_besar                 = isset($_POST["butuh_penyimpanan_besar"]) ? $_POST["butuh_penyimpanan_besar"] : "";
    $butuh_konektivitas_5G                   = isset($_POST["butuh_konektivitas_5G"]) ? $_POST["butuh_konektivitas_5G"] : "";
    $butuh_ponsel_ringan                     = isset($_POST["butuh_ponsel_ringan"]) ? $_POST["butuh_ponsel_ringan"] : "";
    $butuh_penggunaan_multimedia             = isset($_POST["butuh_penggunaan_multimedia"]) ? $_POST["butuh_penggunaan_multimedia"] : "";
    $butuh_pelindung_gorilla_glass           = isset($_POST["butuh_pelindung_gorilla_glass"]) ? $_POST["butuh_pelindung_gorilla_glass"] : "";
    $butuh_pemindai_sidik_jari               = isset($_POST["butuh_pemindai_sidik_jari"]) ? $_POST["butuh_pemindai_sidik_jari"] : "";

    if ($butuh_kinerja_tinggi == "yes" && $butuh_kualitas_kamera_bagus == "yes" && $butuh_layar_besar == "yes" && $butuh_konektivitas_5G == "yes" && $butuh_pelindung_gorilla_glass == "yes") {
        $output = shell_exec('swipl -s rules_pemilihan.pl -g "gadget(high_end_smartphone), write(\'Anda membutuhkan High end smartphone\'), nl." -t halt');
        header('Location: high_end_smartphone.php');
        exit;
    } elseif ($butuh_harga_terjangkau == "yes" && $butuh_kinerja_tinggi == "yes" && $butuh_daya_tahan_baterai_lama == "yes" && $butuh_layar_besar == "yes") {
        $output = shell_exec('swipl -s rules_pemilihan.pl -g "gadget(budget_smartphone), write(\'Anda membutuhkan smartphone dengan harga terjangkau\'), nl." -t halt');
        header('Location: budget_smartphone.php');
        exit;
    } elseif ($butuh_kualitas_kamera_bagus == "yes" && $butuh_layar_besar == "yes" && $butuh_penyimpanan_besar == "yes"  && $butuh_pemindai_sidik_jari == "yes") {
        $output = shell_exec('swipl -s rules_pemilihan.pl -g "gadget(camera_phone), write(\'Anda membutuhkan smartphone dengan kualitas kamera bagus\'), nl." -t halt');
        header('Location: camera_phone.php');
        exit;
    } else if ($butuh_daya_tahan_baterai_lama == "yes" && $butuh_ponsel_ringan == "yes" && $butuh_penggunaan_multimedia == "yes") {
        $output = shell_exec('swipl -s rules_pemilihan.pl -g "gadget(battery_life_phone), write(\'Anda membutuhkan smartphone dengan daya tahan baterai lama\'), nl." -t halt');
        header('Location: battery_life_phone.php');
        exit;
    } else if ($butuh_konektivitas_5G == "yes" && $butuh_kinerja_tinggi == "yes" && $butuh_layar_besar == "yes") {
        $output = shell_exec('swipl -s rules_pemilihan.pl -g "gadget(5G_phone), write(\'Anda membutuhkan smartphone yang mendukung konektivitas 5G\'), nl." -t halt');
        header('Location: 5G_phone.php');
        exit;
    } else if ($butuh_penggunaan_multimedia == "yes" && $butuh_layar_besar == "yes" && $butuh_penyimpanan_besar == "yes") {
        $output = shell_exec('swipl -s rules_pemilihan.pl -g "gadget(multimedia_phone), write(\'Anda membutuhkan smartphone yang mendukung penggunaan multimedia\'), nl." -t halt');
        header('Location: multimedia_phone.php');
        exit;
    } else {
        $output = "Tidak ada saran yang bisa kami berikan.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>TECH | Pemilihan Gadget</title>
    <link href="css/index.css" rel="stylesheet">
    <!-- Bootstrap Core CSS -->
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Animate CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Owl-Carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!-- iCheck -->
    <link rel="stylesheet" href="asset/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Colors CSS -->
    <link rel="stylesheet" type="text/css" href="css/color/green.css">
    <!-- Colors CSS -->
    <link rel="stylesheet" type="text/css" href="css/color/green.css" title="green">
    <link rel="stylesheet" type="text/css" href="css/color/light-red.css" title="light-red">
    <link rel="stylesheet" type="text/css" href="css/color/blue.css" title="blue">
    <link rel="stylesheet" type="text/css" href="css/color/light-blue.css" title="light-blue">
    <link rel="stylesheet" type="text/css" href="css/color/yellow.css" title="yellow">
    <link rel="stylesheet" type="text/css" href="css/color/light-green.css" title="light-green">
</head>

<body class="index">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <a class="navbar-brand" href="index.php #page-top">
                    <img src="images/logos/logophone.jpg" width="50" height="30" style="margin-top: -5px;" alt="motocycle">
                </a>
                <a class="navbar-brand page-scroll" href="index.php #page-top">TECH Gadget</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="page-scroll" href="index.php #page-top">Home</a></li>
                    <li><a class="page-scroll" href="#layanan">Layanan</a></li>
                    <li><a class="page-scroll" href="#team">Team</a></li>
                    <li><a class="page-scroll" href="#contact">Contact</a></li>
                    <li><a class="page-scroll" href="sistem_pakar.php">Pemilihan Gadget</a></li>
                    <!--<li><a class="slider btn btn-primary btn-min-block" href="#login">Login</a></li>-->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Start Home Page Slider -->
    <section id="page-top">
        <!-- Carousel -->
        <div id="main-slide" class="carousel slide" data-ride="carousel">
            <!-- Carousel inner -->
            <div class="carousel-inner">
                <div class="item active">
                    <img class="img-responsive" src="images/Background4.jpg" alt="slider">
                    <div class="slider-content">
                        <div class="col-md-12 text-center">
                            <h1><span><strong>Pemilihan </strong> Gadget</span></h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carousel inner end-->
        </div>
        <!-- /carousel -->
    </section>
    <!-- End Home Page Slider -->

    <!-- Start Expert System Section -->
    <section id="deteksi-kerusakan" class="about-us-section-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-title">
                        <h3>Berikan pilihan anda</h3>
                        <hr>
                        <p>Silahkan pilih pertanyaan-pertanyaan yang telah disiapkan oleh pakar mengenai pemilihan gadget.</p>
                        <h4><?= $output ?? '' ?></h4>
                    </div>
                </div>
            </div>
            <form action="" method="post">
                <div class="welcome-section">
                    <h4>Silahkan Pilih Pertanyaan Anda!</h4>
                    <input type="checkbox" id="box-1" name="butuh_kinerja_tinggi" value="yes">
                    <label for="box-1">Apakah anda butuh kinerja tinggi?</label>
                    <input type="checkbox" id="box-2" name="butuh_daya_tahan_baterai_lama" value="yes">
                    <label for="box-2">Apakah anda butuh daya tahan baterai lama?</label>
                    <input type="checkbox" id="box-3" name="butuh_kualitas_kamera_bagus" value="yes">
                    <label for="box-3">Apakah anda butuh kualitas kamera bagus</label>
                    <input type="checkbox" id="box-4" name="butuh_layar_besar" value="yes">
                    <label for="box-4">Apakah anda butuh layar besar?</label>
                    <input type="checkbox" id="box-5" name="butuh_harga_terjangkau" value="yes">
                    <label for="box-5">Apakah anda butuh harga yang terjangkau?</label>
                    <input type="checkbox" id="box-7" name="butuh_penyimpanan_besar" value="yes">
                    <label for="box-7">Apakah anda butuh penyimpanan besar?</label>
                    <input type="checkbox" id="box-8" name="butuh_konektivitas_5G" value="yes">
                    <label for="box-8">Apakah anda butuh konektivitas 5G?</label>
                    <input type="checkbox" id="box-9" name="butuh_ponsel_ringan" value="yes">
                    <label for="box-9">Apakah anda butuh ponsel ringan?</label>
                    <input type="checkbox" id="box-10" name="butuh_penggunaan_multimedia" value="yes">
                    <label for="box-10">Apakah anda butuh penggunaan multimedia?</label>
                    <input type="checkbox" id="box-11" name="butuh_pelindung_gorilla_glass" value="yes">
                    <label for="box-11">Apakah anda butuh pelindung gorilla glass?</label>
                    <input type="checkbox" id="box-12" name="butuh_pemindai_sidik_jari" value="yes">
                    <label for="box-12">Apakah anda butuh yang sudah support pemindai sidik jari?</label>
                </div>
                <input class="slider btn btn-primary btn-min-block" type="submit" value="Cek Hasil Diagnosa">
            </form>
        </div><!-- /.container -->
    </section>
    <!-- End Expert System Section -->
    <!-- Start Footer -->
    <section>
        <footer class="style-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <span class="copyright">Copyright &copy; <a href="#">TECH Gadget</a> 2024-2026</span>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="footer-social text-center">
                            <ul>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="footer-link">
                            <ul class="pull-right">
                                <li><a href="#">Privacy Policy</a>
                                </li>
                                <li><a href="#">Terms of Use</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </section>
    <!-- End Footer -->

    <div id="loader">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>
    <!-- jQuery Version 2.1.1 -->
    <script src="js/jquery-2.1.1.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="asset/js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/count-to.js"></script>
    <script src="js/jquery.appear.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.fitvids.js"></script>
    <script src="js/styleswitcher.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/script.js"></script>
</body>

</html>