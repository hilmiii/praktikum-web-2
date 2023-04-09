<!-- 
Nama : Rizky Hilmiawan Anggoro
Rombel : TI-10
NIM : 0110222140 
-->
<?php
class motor
 
// Variabel class motor
{
    public $merk;
    public $bensin = 0;
    public $topSpeed;
    public $cc;

// Construct dari class motor    
    public function __construct($merk, $bensin, $topSpeed, $cc)
    {
        $this->merk = $merk;
        $this->bensin = $bensin;
        $this->topSpeed = $topSpeed;
        $this->cc = $cc;
    }

// Mengambil value dari variabel class motor
    public function getInfo()
    {
        echo "<hr>Merk : ". $this->merk;
        echo "<br>Bensin :" . $this->bensin;
        echo "<br>Top Speed :" . $this->topSpeed;
        echo "<br>CC :" . $this->cc;
    }

// Menghitung Penggunaan Bensin    
  public function jalan($jarak) {
    $perlu_bensin = $jarak / 30;
    
    if ($perlu_bensin > $this->bensin) {
      echo "Bensin tidak cukup.";
      return;
    }
    
    $this->bensin -= $perlu_bensin;
    
    echo "Jarak : " . $jarak . " Km";
    echo "<br>";
    echo "Sisa Bensin : " . $this->bensin . " Liter";
  }
}


// Masukkan Value
$motor1 = new motor("Yamaha", 4, 105, 125);

$motor1->getInfo();

echo "<br>";
$motor1->getInfo();
echo "<br>";

// Masukkan anda ingin jalan berapa Kilometer
$motor1->jalan(60);