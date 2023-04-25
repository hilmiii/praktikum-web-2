tanggal
<!-- 
Nama : Rizky Hilmiawan Anggoro
Rombel : TI-10
NIM : 0110222140 
-->
<?php 
require_once '../dbkoneksi.php';
?>
<?php 
   $_kode = $_POST['kode'];
   $_nama = $_POST['nama'];
   $_harga = $_POST['harga'];
   $_stok = $_POST['stok'];
   $_jenis_produk = $_POST['jenis_produk'];
   $_gambar = $_POST['gambar'];

   $_proses = $_POST['proses'];

   // array data
$ar_data[] = $_kode; // ? 1
$ar_data[] = $_nama; // ? 2
$ar_data[] = $_harga; // 3
$ar_data[] = $_stok;
$ar_data[] = $_jenis_produk;
$ar_data[] = $_gambar;

if ($_proses == "Simpan") {
    // data baru
    $sql = "INSERT INTO produk (kode, nama, harga, stok, jenis_produk, gambar) VALUES (?,?,?,?,?,?)";
} else if ($_proses == "Update") {
    $ar_data[] = $_POST['idedit']; // ? 8
    $sql = "UPDATE produk SET kode=?, nama=?, harga=?, stok=?, jenis_produk=?, gambar=? WHERE id=?";
}
if (isset($sql)) {
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
    
    // Memperbarui nama_produk di tabel pesanan jika terdapat relasi dengan kolom nama di tabel produk
    if ($_proses == "Update" && isset($_POST['idedit'])) {
        $idedit = $_POST['idedit'];
        $nama_produk = $_nama;
        $sql_update_pesanan = "UPDATE pesanan SET nama_produk=? WHERE nama_produk=?";
        $st_update_pesanan = $dbh->prepare($sql_update_pesanan);
        $st_update_pesanan->execute([$nama_produk, $idedit]);
    }
}

header('location:index.php');

?>