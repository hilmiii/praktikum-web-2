<!-- 
Nama : Rizky Hilmiawan Anggoro
Rombel : TI-10
NIM : 0110222140 
-->
<?php
require_once '../dbkoneksi.php';
$sql = "SELECT * FROM pesanan";
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
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="shortcut icon" href="../images/icon.png">
    <script src="../js/vendor/modernizr-2.6.2.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>
    window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')
    </script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/plugins.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/wow.min.js"></script>
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
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav">
                                        <li><a href="../index.php" class="btn btn-primary text-light"><b>HOME</b></a>
                                        <li>
                                            <p class="mx-2"></p>
                                        </li>
                                        <li><a href="index.php" class="btn btn-danger text-light"><b>BACK</b></a></li>
                                    </ul>

                                </div><!-- /.navbar-collapse -->
                            </div><!-- /.container-fluid -->
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="products">
        <div class="container">
            <h1 class="title">DAFTAR PESANAN</h1>
            <hr class="divider" style="width:50%;">
            <div class="row" style="margin-top:40px;">
                <?php
            $nomor = 1;
            foreach ($rs as $row) {
                // Mendapatkan data produk
                $nama_produk = $row['nama_produk'];
                $nama_pemesan = $row['nama_pemesan'];
                $qty = $row['qty'];
                $tanggal = date('Y-m-d'); // Format YYYY-MM-DD
                $total_harga = $row['total_harga'];
                $alamat_pemesan = $row['alamat_pemesan'];
                $harga = $total_harga / $qty;
                $format_uang = number_format($total_harga, 0, ',', '.');
                $format_harga = number_format($harga, 0, ',', '.');

                // Menampilkan info pesanan dalam div col-sm-3
                ?>
                <div class="col-sm-3 wow fadeInLeft product" data-wow-delay=".8s">
                    <div class="card">
                        <div class="card-header">
                            <h4><?php echo $nama_produk; ?></h4>
                        </div>
                        <div class="card-body">
                            <p>Nama Pemesan : <?php echo $nama_pemesan ?></p>
                            <p>Jumlah Beli: <?php echo $qty; ?></p>
                            <p>Total Harga: Rp. <?php echo $format_uang; ?></p>
                            <p>Alamat: <?php echo $alamat_pemesan; ?></p>
                            <p>Tanggal Pemesanan : <?php echo $tanggal; ?></p>
                            <p>Harga Satuan: Rp. <?php echo $format_harga; ?></p>
                            <a href="delete_pesanan.php?iddel=<?=$row['id']?>"
                                onclick="if(!confirm('Anda Yakin Akan Membatalkan pesanan? <?=$row['nama_produk']?>?')) {return false}"
                                class="btn btn-default btn-red-o"><i class="fa fa-shopping-cart"></i> Batalkan
                                Pesanan</a>
                        </div>
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