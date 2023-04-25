<!-- 
Nama : Rizky Hilmiawan Anggoro
Rombel : TI-10
NIM : 0110222140 
-->
<?php
require_once '../dbkoneksi.php';
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
                                        <li><a href="index.php" class="btn btn-danger text-light"><b>KEMBALI</b></a>
                                        </li>
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
require_once '../dbkoneksi.php';
?>
    <div class="container p-5">
    </div>
    <div class="container p-5">
    </div>

    <div class="container" style="display: grid; place-items: center">
        <div class="col-8 card mb-5">
            <div class="card-header">
                <h2>TAMBAH PRODUK</h2>
            </div>
            <div class="card-body">
                <form method="POST" action="proses.php" class="px-3">
                    <div class="form-group row">
                        <label for="kode" class="col-2 col-form-label">Kode</label>
                        <div class="col-10">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <input id="kode" name="kode" type="text" class="form-control" value="">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-2 col-form-label">Nama</label>
                        <div class="col-10">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <input id="nama" name="nama" type="text" class="form-control" value="">
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="harga" class="col-2 col-form-label">Harga</label>
                        <div class="col-10">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <input id="harga" name="harga" type="number" class="form-control" value="">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="stok" class="col-2 col-form-label">Stok</label>
                        <div class="col-10">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <input id="stok" name="stok" type="number" class="form-control" value="">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jenis" class="col-2 col-form-label">Jenis Produk</label>
                        <div class="col-10">
                            <?php 
                                $sqljenis = "SELECT * FROM jenis_produk";
                                $rsjenis = $dbh->query($sqljenis);
                            ?>
                            <select id="jenis_produk" name="jenis_produk" class="custom-select">
                                <?php 
                                    foreach($rsjenis as $rowjenis){
                                ?>
                                <option value="<?=$rowjenis['id']?>"><?=$rowjenis['nama']?></option>
                                <?php
                                }
                            ?>

                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="gambar" class="col-2 col-form-label">Gambar</label>
                        <div class="col-10">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <input id="gambar" name="gambar" type="file" class="form-control" value="">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-8">
                            <input type="submit" name="proses" type="submit" class="btn btn-primary" value="Simpan" />
                        </div>
                    </div>
                </form>
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