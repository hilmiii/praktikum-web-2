<?php
if (isset($_POST['submit'])) {

    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $prodi = $_POST['prodi'];
    $skills = $_POST['skill'];
    $domisili = $_POST['domisili'];
    $email = $_POST['email'];
    
    
    function skor_skill($skills)
    {
        $skills_list = [
            'HTML' => 10,
            'CSS' => 10,
            'JavaScript' => 20,
            'RWD Bootstrap' => 30,
            'PHP' => 30,
            'Python' => 30,
            'Java' => 50
        ];
        $result = 0;
        foreach ($skills as $skill) {
            $result = $result + $skills_list[$skill];
        }
        return $result;
    }

    function kategori_skill($skor) {
          if ($skor== 0) {
                $predikat = "Tidak Memadai";
            } elseif ($skor >= 1 AND $skor <= 40) {
                $predikat = "Kurang";
            } elseif ($skor >= 41 AND $skor <= 60) {
                $predikat =  "Cukup";
            } elseif ($skor >= 61 AND $skor <= 100) {
                $predikat = "Baik";
            } elseif ($skor >= 101 AND $skor <= 150) {
                $predikat = "Sangat Baik";
            } else {
                $predikat = "Error";
            }

        return $predikat;
    }
   
    echo "NIM: $nim";
    echo "<br> Nama : $nama";
    echo "<br> Jenis Kelamin : $gender";
    echo "<br> Program Studi : $prodi";
    echo "<br> Skill Programming : ";
    foreach ($skills as $skill) {
        echo ' ' . $skill;
    }
    echo "<br> Tempat Domisili : $domisili";
    echo "<br> Skor Skill : " . skor_skill($skills);
    $nilai = skor_skill($skills);
    $predikat = kategori_skill($nilai);
    echo '<br>Kategori Skill : ' . $predikat;
    echo "<br> E-Mail : $email";
}
?>