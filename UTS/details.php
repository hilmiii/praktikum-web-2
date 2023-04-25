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
                <div class="col-md-3 col-xs-4 col-sm-4 mt-0">
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
                                    <button type="button" class="navbar-toggle collapsed btn-sm" data-toggle="collapse"
                                        data-target="#bs-example-navbar-collapse-1">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                </div>
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav">
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="index.php">Pelayanan</a></li>
                                        <li><a href="index.php">Produk</a></li>
                                        <li><a href="admin/index.php">Admin</a></li>
                                    </ul>
                                </div><!-- /.navbar-collapse -->
                            </div><!-- /.container-fluid -->
                        </nav>
                    </div>
                </div>

            </div>
        </div>
    </header>

    <?php 
require_once 'dbkoneksi.php';

$_iddetails = $_GET['iddetails'];
if(!empty($_iddetails)){
    $sql = "SELECT * FROM produk WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_iddetails]);
    $row = $st->fetch();
}else{
    $row = [];
}
// Mengambil nilai jenis_produk dari hasil query
$jenis_produk_id = $row['jenis_produk'];

// Query untuk mengambil nama jenis_produk dari tabel jenis_produk
$sql_jenis_produk = "SELECT nama FROM jenis_produk WHERE id = ?";
$st_jenis_produk = $dbh->prepare($sql_jenis_produk);
$st_jenis_produk->execute([$jenis_produk_id]);
$row_jenis_produk = $st_jenis_produk->fetch();
$jenis_produk = $row_jenis_produk['nama'];
?>

    <div class="container p-5">
    </div>

    <div class="container mt-5" style="display: grid; place-items: center">
        <div class="col-12 card mb-5">
            <div class="card-header">
                <h2>DETAILS</h2>
            </div>
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="images/products/<?=$row['gambar']?>" alt="<?=$row['nama']?>"
                                        class="img-responsive">
                                </div>
                                <div class="col-md-8">
                                    <div class="jumbotron">
                                        <h2>
                                            <?php if (is_array($row)) {
                                            // Akses offset-nya
                                            echo $row['nama'];
                                        } else {
                                            // Tindakan yang akan diambil jika $row bukan array
                                        }
                                        ?>
                                        </h2>
                                        <h3> Rp.<?=number_format($row['harga'], 0, ',', '.')?></h3>
                                        <p>
                                            Kode Produk : <?=$row['kode']?>
                                        </p>
                                        <p>
                                            Stok : <?=$row['stok']?>
                                        </p>
                                        <p>
                                            Jenis Produk: <?php echo $jenis_produk; ?>
                                        </p>
                                        <p></p>
                                        <p>
                                            Airsoftgun adalah replika dari senjata api jenis genggam atau laras panjang
                                            yang dibuat menjadi sebuah alat permainan yang biasa kita sebut airsoftgun.
                                            Airsoftgun dapat melontarkan benda yang berbentuk bola plastik (ball
                                            bullet/BB) berukuran 6 mm, menggunakan tekanan udara ataupun gas sebagai
                                            tenaga pendorongnya.
                                        </p>
                                        <p>
                                            <a class="btn btn-primary btn-large"
                                                href="create_pesanan.php?idnew=<?=$row['id']?>">Pesan</a>
                                        </p>
                                    </div>
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