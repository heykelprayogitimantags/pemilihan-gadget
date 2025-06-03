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
    <title>TECH GADGET</title>
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
                    <img src="images/logos/logophone.png" width="50" height="30" style="margin-top: -5px;" alt="logophone">
                </a>
                <a class="navbar-brand page-scroll" href="index.php #page-top">TECH GADGET</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden"><a href="#page-top"></a></li>
                    <li><a class="page-scroll" href="index.php">Home</a></li>
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
                    <img class="img-responsive" src="images/galaxy.jpg" alt="slider">
                    <div class="slider-content">
                        <div class="col-md-12 text-center">
                            <h1><span><strong>Pemilihan</strong> Gadget</span></h1>
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
                        <h3>Rekomendasi Smartphone</h3>
                        <hr>
                        <h3>Berdasarkan pilihan yang anda pilih, anda menginginkan smartphone yang sudajh support 5G. Berikut kami sarankan beberapa smartphone sesuai kebutuhan anda :</h3>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="image-container" style="position: relative; overflow: hidden;">
                            <img src="images/smartphone/phone7.jpg" class="img-fluid" alt="phone10" style="width: 100%; height: auto;">
                            <div class="overlay" style="position: absolute; bottom: 0; background: rgba(0, 0, 0, 0.7); color: #fff; width: 100%; padding: 10px;">
                                <div class="overlay-text">
                                    <p style="margin: 0; font-size: 18px; font-weight: bold;">Oppo Reno 6</p>
                                    <h3 style="margin: 5px 0 10px; font-size: 16px;">Price: Rp4.200.000</h3>
                                    <ul style="list-style: none; padding: 0; margin: 0;">
                                        <li>RAM: 8GB</li>
                                        <li>Storage: 128GB</li>
                                        <li>Camera: 44MP</li>
                                        <li>Battery: 4220mAh</li>
                                        <li>Display: 6.4-inch</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="image-container" style="position: relative; overflow: hidden;">
                            <img src="images/smartphone/phone10.jpg" class="img-fluid" alt="phone10" style="width: 100%; height: auto;">
                            <div class="overlay" style="position: absolute; bottom: 0; background: rgba(0, 0, 0, 0.7); color: #fff; width: 100%; padding: 10px;">
                                <div class="overlay-text">
                                    <p style="margin: 0; font-size: 18px; font-weight: bold;">Samsung Galaxy A25</p>
                                    <h3 style="margin: 5px 0 10px; font-size: 16px;">Price: Rp3.200.000</h3>
                                    <ul style="list-style: none; padding: 0; margin: 0;">
                                        <li>RAM: 8GB</li>
                                        <li>Storage: 128GB</li>
                                        <li>Camera: 50MP</li>
                                        <li>Battery: 5000mAh</li>
                                        <li>Display: 6.5-inch</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="image-container" style="position: relative; overflow: hidden;">
                            <img src="images/smartphone/phone9.jpg" class="img-fluid" alt="phone10" style="width: 100%; height: auto;">
                            <div class="overlay" style="position: absolute; bottom: 0; background: rgba(0, 0, 0, 0.7); color: #fff; width: 100%; padding: 10px;">
                                <div class="overlay-text">
                                    <p style="margin: 0; font-size: 18px; font-weight: bold;">Realme Narzo 50</p>
                                    <h3 style="margin: 5px 0 10px; font-size: 16px;">Price: Rp3.299.000</h3>
                                    <ul style="list-style: none; padding: 0; margin: 0;">
                                        <li>RAM: 6GB</li>
                                        <li>Storage: 128GB</li>
                                        <li>Camera: 48MP</li>
                                        <li>Battery: 4300mAh</li>
                                        <li>Display: 6.5-inch</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <style>
                    .image-container {
                        position: relative;
                        overflow: hidden;
                        height: 500px;
                        /* Sesuaikan tinggi gambar */
                    }

                    .image-container img {
                        width: 100%;
                        height: auto;
                    }

                    .overlay {
                        position: absolute;
                        bottom: 0;
                        left: 0;
                        right: 0;
                        background-color: rgba(0, 0, 0, 0.5);
                        overflow: hidden;
                        width: 100%;
                        height: 0;
                        transition: .5s ease;
                    }

                    .image-container:hover .overlay {
                        height: 100%;
                    }

                    .overlay-text {
                        color: white;
                        font-size: 20px;
                        position: absolute;
                        top: 50%;
                        left: 50%;
                        transform: translate(-50%, -50%);
                        text-align: center;
                        width: 100%;
                        padding: 10px;
                        /* Tambahkan padding */
                    }
                </style>


                <style>
                    .gadget-description {
                        padding: 20px;
                        border: 1px solid #ccc;
                        border-radius: 5px;
                        font-family: Arial, sans-serif;
                        font-size: 16px;
                        line-height: 1.6;
                        color: #333;
                        margin-top: 30px;
                    }

                    .gadget-description p {
                        margin-bottom: 15px;
                    }

                    .gadget-description p:first-child {
                        margin-top: 0;
                    }

                    .gadget-description p:last-child {
                        margin-bottom: 0;
                    }

                    .gadget-description a {
                        color: #007bff;
                        text-decoration: none;
                    }

                    .gadget-description a:hover {
                        text-decoration: underline;
                    }
                </style>

                <div class="gadget-description">
                    <p>&nbsp;</p>
                    <p style="font-weight: bold;">Deskripsi Gadget Untuk Anda !!!</p>
                    <p>&nbsp;</p>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <p>
5G phone adalah jenis smartphone yang dirancang untuk mendukung jaringan seluler generasi kelima, atau 5G, yang menawarkan kecepatan data yang jauh lebih tinggi, latensi yang lebih rendah, dan kapasitas jaringan yang lebih besar dibandingkan dengan generasi sebelumnya. Teknologi 5G membawa banyak peningkatan dan membuka berbagai kemungkinan baru untuk pengalaman pengguna. Berikut adalah beberapa karakteristik utama dari 5G phone:</p>
                            <li>
                                <ol>1. Kecepatan Data Super Cepat: Salah satu fitur paling menonjol dari 5G phone adalah kemampuannya untuk mengakses internet dengan kecepatan yang sangat tinggi, hingga beberapa gigabit per detik. Ini memungkinkan pengunduhan dan pengunggahan file besar dalam hitungan detik, streaming video berkualitas tinggi tanpa buffer, dan pengalaman bermain game online yang lebih lancar.</ol>
                                <ol>2. Latensi Rendah: 5G phone menawarkan latensi yang sangat rendah, biasanya di bawah 10 milidetik. Latensi rendah ini penting untuk aplikasi yang memerlukan respons waktu nyata, seperti game online, augmented reality (AR), virtual reality (VR), dan telemedis.</ol>
                                <ol>3. Kapasitas Jaringan Lebih Besar: Dengan teknologi 5G, lebih banyak perangkat dapat terhubung ke jaringan tanpa mengalami penurunan kinerja. Ini sangat penting di area dengan kepadatan tinggi seperti kota besar atau acara besar, di mana ribuan perangkat dapat terhubung secara bersamaan.</ol>
                                <ol>4. Desain dan Performa: 5G phone biasanya dilengkapi dengan prosesor terbaru dan paling kuat yang mendukung konektivitas 5G, seperti Qualcomm Snapdragon 8xx series atau chipset kelas atas dari MediaTek dan Samsung. Mereka juga memiliki RAM dan penyimpanan yang besar untuk memastikan kinerja yang optimal dalam berbagai tugas.</ol>
                                <ol>5. Layar Berkualitas Tinggi: Untuk mendukung pengalaman multimedia yang kaya, 5G phone sering kali dilengkapi dengan layar beresolusi tinggi (Full HD+ hingga 4K) dan teknologi tampilan canggih seperti OLED atau AMOLED dengan refresh rate tinggi (90Hz, 120Hz, atau lebih).</ol>
                            </li>
                        </div>
                    </div>
                </div><!-- /.container -->
    </section>
    <!-- End Expert System Section -->
    <!-- Start Footer -->
    <section>
        <footer class="style-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <span class="copyright">Copyright &copy; <a href="#">TECH GADGET</a> 2024</span>
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