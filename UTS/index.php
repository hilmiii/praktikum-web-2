<!-- 
Nama : Rizky Hilmiawan Anggoro
Rombel : TI-10
NIM : 0110222140 
-->
<?php
require_once 'dbkoneksi.php';
$sql = "SELECT * FROM produk";
$rs = $dbh->query($sql);
?>
<!DOCTYPE html>
<html class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>RizAirsoft</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="shortcut icon" href="images/icon.png">
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>
    window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')
    </script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
    new WOW().init();
    </script>

    <script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-57708809-1', 'auto');
    ga('send', 'pageview');
    </script>

</head>

<body>


    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-xs-4 col-sm-2 mt-0">
                    <a href="index.php" class="logo">
                        <img src="images/icon.png" alt="" style="max-width:25%;">
                    </a>
                </div>
                <div class="col-md-6 col-xs-6 col-sm-6">
                    <div class="menu">
                        <nav class="navbar navbar-default" role="navigation">
                            <div class="container-fluid">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                        data-target="#bs-example-navbar-collapse-1">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                        <ul class="nav navbar-nav">
                                            <li><a href="#home">Home</a></li>
                                            <li><a href="#services">Pelayanan</a></li>
                                            <li><a href="#products">Produk</a></li>
                                            <li><a href="admin/index.php">Admin</a></li>
                                        </ul>
                                    </div><!-- /.navbar-collapse -->
                                </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->

                            </div><!-- /.container-fluid -->
                        </nav>
                    </div>
                </div>
                <!-- <div class="col-md-3 col-xs-12 col-sm-3">
                    <ul class="social-info">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div> -->
            </div>
        </div>
    </header>


    <section id="home">
        <div class="container">

            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                </ol>


                <div class="carousel-inner" role="listbox">

                    <div class="item active">
                        <div class="carousel-caption">
                            <div class="row">
                                <div class="col-md-4 col-sm-6">
                                    <div class="block">
                                        <img class="app-img img-responsive" src="images/slider/guns.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-md-offset-1 col-sm-6">
                                    <div class="block">
                                        <h1>
                                            Toko Airsoft Gun Terbaik<br> se-Indonesia.
                                        </h1>
                                        <p>
                                            Dapatkan BB Gratis Setiap Anda Membeli Produk Baru Dari Kita! dan Kami
                                            Menjamin Anda Akan Mendapatkan Servis Unit Gratis 3 Kali Setelah Pembelian
                                            Unit Anda!
                                        </p>

                                        <ul class="download-btn">
                                            <li>
                                                <a href="#products" class="btn btn-default btn-red"><i
                                                        class="fa fa-arrow-down"></i>SELEBIHNYA</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item">
                        <div class="carousel-caption">
                            <div class="row">
                                <div class="col-md-4 col-sm-6">
                                    <div class="block">
                                        <img class="app-img img-responsive" src="images/slider/arena.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-md-offset-1 col-sm-6">
                                    <div class="block">
                                        <h1>
                                            Bersiaplah!<br> Arena Airsoft Indoor Terbaik!
                                        </h1>
                                        <p>
                                            Coba Bermain di Arena Airsoft Indoor Kami! Bermain Gratis Untuk Kunjungan
                                            Pertama!
                                        </p>

                                        <ul class="download-btn">
                                            <li>
                                                <a href="#products" class="btn btn-default btn-red"><i
                                                        class="fa fa-arrow-down"></i>SELEBIHNYA</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <h1 class="title">PELAYANAN</h1>
            <hr class="divider" style="width:50%;border-color:#CCC;">
            <p class="text-center">Berikut Adalah Pelayanan Yang Kami Seidakan</p>
            <div class="service-wrapper">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="block wow fadeInRight" data-wow-delay="1s">
                            <div class="icon">
                                <i class="fa fa-truck"></i>
                            </div>

                            <h3>Layanan Pengiriman</h3>
                            <p>Kami Dapat Mengirim Barang Anda Langsung ke Rumah Anda, Jadi Anda Tidak Perlu Repot-Repot
                                Pergi ke Luar Rumah Untuk Membeli Produk Kami.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="block wow fadeInRight" data-wow-delay="1.3s">
                            <div class="icon">
                                <i class="fa  fa-list"></i>
                            </div>
                            <h3>Produk Berkualitas</h3>
                            <p>Kami Menjual Produk-Produk Mainan Airsoft Gun Yang Sangat Berkualitas, Tetapi Harga Juga
                                Tetap Ramah.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="block wow fadeInRight" data-wow-delay="1.6s">
                            <div class="icon">
                                <i class="fa  fa-shopping-cart"></i>
                            </div>
                            <h3>Toko Online</h3>
                            <p>Anda Bisa Membeli Produk Kami Hanya Dengan Sentuhan Jari ke Layar Smartphone Anda</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="block wow fadeInRight" data-wow-delay="1.9s">
                            <div class="icon">
                                <i class="fa  fa-cc-visa"></i>
                            </div>
                            <h3>Menerima Semua Kartu</h3>
                            <p>Menerima Semua Kartu untuk Pembayaran, Jadi Anda Tidak Perlu Khawatir.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="products">
        <div class="container">
            <h1 class="title">PRODUK</h1>
            <hr class="divider" style="width:50%;">
            <p class="text-center">Berikut Adalah Produk-Produk Berkualitas Yang Kami Pasarkan</p>
            <div class="row" style="margin-top:40px;">
                <?php
                $nomor = 1;
                foreach ($rs as $row) {
                ?>
                <div class="col-sm-3 wow fadeInLeft product" data-wow-delay=".8s">
                    <img src="images/products/<?=$row['gambar']?>" alt="<?=$row['nama']?>" class="img-responsive">
                    <div class="product-info">
                        <div class="col-sm-8">
                            <h4><?=$row['nama']?></h4>
                        </div>
                        <br>
                        <div class="col-sm-2 price">
                            Rp.<?=number_format($row['harga'], 0, ',', '.')?>
                        </div>
                        <div class="clear"></div>
                        <ul class="product-btns">
                            <li>
                                <a href="details.php?iddetails=<?=$row['id']?>" class="btn btn-default btn-grey"> <i
                                        class="fa fa-list"></i> Details</a>
                            </li>
                            <li>
                                <a href="create_pesanan.php?idnew=<?=$row['id']?>" class="btn btn-default btn-red-o"><i
                                        class="fa fa-shopping-cart"></i>
                                    BUY!</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <?php
                $nomor++;
                }
                ?>
            </div>
        </div>
    </section>

    </div>
    </div>
    </section>

    <footer class="wow fadeInUp" data-wow-delay=".8s">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-12">
                    <p>Copyright © 2023 Rizky Hilmiawan Anggoro</p>

                </div>
            </div>
        </div>
    </footer>

</body>

</html>