<?php
if (isset($_POST['submit'])) {
$nama = $_POST['nama'];
$matkul = $_POST['matkul'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];
$praktikum = $_POST['praktikum'];
$ratarata = round(($uts + $uas + $praktikum) / 3, 0);

echo "Nama : $nama <br>";
echo "Mata Kuliah : $matkul <br>";
echo "UTS : $uts <br>";
echo "UAS : $uas <br>";
echo "Praktikum : $praktikum <br>";
echo "Rata-Rata Nilai : $ratarata <br>";
} else {
    echo "Tidak ada Data!";
}

if ($ratarata >= 0 AND $ratarata <= 55) {
    echo "Status : Tidak Lulus<br>";
} elseif ($ratarata >= 55 AND $ratarata <= 100) {
    echo "Status : Lulus<br>";
} else {
    echo "Error<br>";
}

if ($ratarata >= 0 AND $ratarata <= 35) {
    echo "Nilai Akhir : E";
} elseif ($ratarata >= 35 AND $ratarata <= 55) {
    echo "Nilai Akhir : D";
} elseif ($ratarata >= 56 AND $ratarata <= 69) {
    echo "Nilai Akhir : C";
} elseif ($ratarata >= 70 AND $ratarata <= 84) {
    echo "Nilai Akhir : B";
} elseif ($ratarata >= 85 AND $ratarata <= 100) {
    echo "Nilai Akhir : A";
} else {
    echo "Nilai Akhir : I";
}
?>