<!-- 
Nama : Rizky Hilmiawan Anggoro
Rombel : TI-10
NIM : 0110222140 
-->
<?php 
require_once 'dbkoneksi.php';
$_iddel=$_GET['iddel'];
$sql="DELETE FROM pelanggan WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$_iddel]);
header('location:list_pelanggan.php');
?>