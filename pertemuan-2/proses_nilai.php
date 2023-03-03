<?php
if (isset($_GET['submit'])) {
$nama = $_GET['nama'];
$matkul = $_GET['matkul'];
$uts = $_GET['uts'];
$uas = $_GET['uas'];
$praktikum = $_GET['praktikum'];

echo "Nama : $nama <br>";
echo "matkul : $matkul <br>";
echo "uts : $uts <br>";
echo "uas : $uas <br>";
echo "praktikum : $praktikum <br>";
echo "Rata-Rata Nilai : " . round(($uts + $uas + $praktikum) / 3, 2);
} else {
    echo "Tidak ada Data!";
}
?>