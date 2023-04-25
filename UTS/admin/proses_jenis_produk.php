<!-- 
Nama : Rizky Hilmiawan Anggoro
Rombel : TI-10
NIM : 0110222140 
-->
<?php 
require_once '../dbkoneksi.php';
?>
<?php 
   $_nama = $_POST['nama'];
   $_proses_jenis_produk = $_POST['proses_jenis_produk'];

   // array data
$ar_data[] = $_nama; // ? 2

if ($_proses_jenis_produk == "Simpan") {
    // data baru
    $sql = "INSERT INTO jenis_produk (nama) VALUES (?)";
} else if ($_proses_jenis_produk == "Update") {
    $ar_data[] = $_POST['idedit']; // ? 8
    $sql = "UPDATE jenis_produk SET nama=? WHERE id=?";
}
if (isset($sql)) {
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
    
    // Memperbarui nama_produk di tabel pesanan jika terdapat relasi dengan kolom nama di tabel produk
    if ($_proses_jenis_produk == "Update" && isset($_POST['idedit'])) {
        $idedit = $_POST['idedit'];
        $nama = $_nama;
        $sql_update_jenis_produk = "UPDATE jenis_produk SET nama=? WHERE jenis_produk=?";
        $st_update_jenis_produk = $dbh->prepare($sql_update_jenis_produk);
        $st_update_jenis_produk->execute([$nama, $idedit]);
    }
}

header('location:jenis_produk.php');

?>