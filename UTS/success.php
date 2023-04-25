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
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="index.php">Pelayanan</a></li>
                                            <li><a href="index.php">Produk</a></li>
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

    <?php
require_once 'dbkoneksi.php';
$sql = "SELECT * FROM pesanan";
$rs = $dbh->query($sql);
?>


    <div class="container p-5">
    </div>

    <div class="container mt-5" style="display: grid; place-items: center">
        <div class="col-8 card mb-5">
            <div class="card-header">
                <h2>DETAILS</h2>
            </div>
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <?php
                                    $nomor = 1;
                                    if (!empty($rs)) {
                                    // Mengambil data terakhir dari objek PDOStatement
                                    $rows = $rs->fetchAll(PDO::FETCH_ASSOC);
                                    $row = end($rows);
                                    if ($row) {
                                    // Mendapatkan data produk
                                    $nama_produk = $row['nama_produk'];
                                    $qty = $row['qty'];
                                    $tanggal = date('Y-m-d'); // Format YYYY-MM-DD
                                    $total_harga = $row['total_harga'];
                                    $alamat_pemesan = $row['alamat_pemesan'];
                                    $harga = $total_harga / $qty ;
                                    // Menampilkan info pesanan dalam div col-sm-3
                                    ?>
                                    <div class="jumbotron">
                                        <h1>
                                            PEMESANAN ANDA BERHASIL!
                                        </h1>
                                        <h2>
                                            <?= $nama_produk ?>
                                        </h2>
                                        <h3>Jumlah : <?= $qty ?></h3>
                                        <p>
                                            Tanggal Pemesanan : <?= $tanggal ?>
                                        </p>
                                        <p>
                                            Total Harga : Rp. <?=number_format($total_harga, 0, ',', '.')?>
                                        </p>
                                        <p>
                                            Nama Pemesan : <?= $row['nama_pemesan'] ?>
                                        </p>
                                        <p>
                                            Alamat Pemesan : <?= $alamat_pemesan ?>
                                        </p>
                                        <p>
                                            Harga Satuan : Rp. <?=number_format($harga, 0, ',', '.')?>
                                        </p>
                                        <p></p>
                                        <p>
                                            <a class="btn btn-primary btn-large" href="index.php">Home</a>
                                        </p>
                                    </div>
                                    <?php
                                    } else {
                                        echo "Data tidak ditemukan.";
                                    }
                                }
                                ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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