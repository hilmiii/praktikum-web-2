<!-- 
Nama : Rizky Hilmiawan Anggoro
Rombel : TI-10
NIM : 0110222140 
-->
<?php
require_once 'dbkoneksi.php';

$_nama_produk = $_POST['nama_produk'];
// $_harga = $_POST['harga'];
$_qty = $_POST['qty'];
$_tanggal = $_POST['tanggal'];
$_total_harga = $_POST['harga'] * $_POST['qty'];
$_nama_pemesan = $_POST['nama_pemesan'];
$_alamat_pemesan = $_POST['alamat_pemesan'];

$_proses = $_POST['proses'];

// array data
$ar_data[] = $_nama_produk; // ? 1
// $ar_data[]=$_harga; // ? 2
$ar_data[] = $_qty; // ? 2
$ar_data[] = $_tanggal; // ? 3
$ar_data[] = $_total_harga; // ? 4
$ar_data[] = $_nama_pemesan; // ? 5
$ar_data[] = $_alamat_pemesan; // ? 6

if ($_proses == "Simpan") {
    // data baru
    $sql = "INSERT INTO pesanan (nama_produk, qty, tanggal, total_harga, nama_pemesan, alamat_pemesan) VALUES (?,?,?,?,?,?)";
} else if ($_proses == "Update") {
    $ar_data[] = $_POST['idedit'];// ? 7
    $sql = "UPDATE pesanan SET nama_produk=?, qty=?, tanggal=?, total_harga=?, nama_pemesan=?, alamat_pemesan=? WHERE id=?";
}
if (isset($sql)) {
    $st = $dbh->prepare($sql);
    $st->execute($ar_data); //line 38
}

header('location:success.php');
?>