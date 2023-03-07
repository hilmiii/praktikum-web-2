<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <h1>Belanja Online</h1>
    <hr>
    <div class="container">
        <div class="card" style="width: 20rem; float:right;">
            <div class="card-header text-light bg-primary">
                Daftar Harga
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">TV : Rp.4.200.000,00</li>
                <li class="list-group-item">Kulkas : Rp.3.100.000,00</li>
                <li class="list-group-item">Mesin Cuci : Rp. 3.800.000,00</li>
            </ul>
            <div class="card-header text-light bg-primary">
                Harga dapat berubah setiap saat
            </div>
        </div>
        <form class="col-6" method="POST" action="form_belanja.php">
            <div class="form-group row">
                <label for="customer" class="col-3 col-form-label">Customer</label>
                <div class="col-9">
                    <div class="input-group">
                        <input id="customer" name="customer" placeholder="Nama Customer" type="text"
                            class="form-control" required="required">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-3">Pilih Produk</label>
                <div class="col-9">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="4200000"
                            required="required">
                        <label for="produk_0" class="custom-control-label">TV</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="3100000"
                            required="required">
                        <label for="produk_1" class="custom-control-label">Kulkas</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="3800000"
                            required="required">
                        <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="jumlah" class="col-3 col-form-label">Jumlah</label>
                <div class="col-9">
                    <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control"
                        required="required">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-3 col-9">
                    <button name="proses" id="proses" type="submit" class="btn btn-primary btn-success">Kirim</button>
                </div>
            </div>
        </form>
    </div>
    <hr>
</body>

</html>

<?php
if (isset($_POST['proses'])) {
$customer = $_POST['customer'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];

echo "Nama Customer : $customer <br>";
if ($produk == 4200000) {
  echo "Produk Pilihan : TV";
} elseif ($produk == 3100000) {
  echo "Produk Pilihan : Kulkas";
} elseif ($produk == 3800000) {
  echo "Produk Pilihan : Mesin Cuci";
} else {
  echo "Tidak ada Produk yang Di pilih";
}

echo "<br> Jumlah Beli : $jumlah <br>";
echo "Total Belanja : Rp." . number_format(($produk * $jumlah),2,',','.');
} else {
    echo "Tidak ada Data!";
}
?>