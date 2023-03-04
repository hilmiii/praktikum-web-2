<?php
if (isset($_POST['submit'])) {
$nama = $_POST['nama'];
$matkul = $_POST['matkul'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];
$praktikum = $_POST['praktikum'];

echo "Nama : $nama <br>";
echo "Matkul : $matkul <br>";
echo "UTS : $uts <br>";
echo "UAS : $uas <br>";
echo "Praktikum : $praktikum <br>";
echo "Rata-Rata Nilai : " . round(($uts + $uas + $praktikum) / 3, 2);
} else {
    echo "Tidak ada Data!";
}
?>