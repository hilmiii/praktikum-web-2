<?php
class Hero
{
    public $nama;
    public $health;
    public $damage;
    public $level = 1;
    public $xp = 0;

    public function __construct($nama, $health, $damage)
    {
        $this->nama = $nama;
        $this->health = $health;
        $this->damage = $damage;
    }


    public function getInfo()
    {
        echo "<hr>Nama : ". $this->nama;
        echo "<br>HP :" . $this->health;
        echo "<br>Damage :" . $this->damage;
        echo "<br>XP :" . $this->xp;
        echo "<br>Level:" . $this->level;
    }

    public function levelUp()
    {       
            $this->level = $this->level + 1;
            $this->health = $this->health + 150;
            $this->damage = $this->damage + 45;
            
            $this->xp = $this->xp - 100;      
    }
    public function farming()
    {
        $this->xp = $this->xp + 55;
        echo "<br> -----$this->nama Telah Melakukan Farming-----";
        
        if ($this->xp >= 100) {
            $this->levelUp();
        }
    }
    public function attack($target)
    {
        $target->health = $target->health - $this->damage;
    }
}



$hero1 = new Hero("Alucard", 3200, 250);
$hero2 = new Hero("Franco", 5000, 50);

// $hero1->nama = "Alucard";
// $hero1->health = "3200";
// $hero1->damage = "250";

// $hero2->nama = "Franco";
// $hero2->health = "5000";
// $hero2->damage = "50";

$hero1->getInfo();
$hero2->getInfo();

$hero2->farming();

$hero1->farming();
$hero1->farming();
$hero1->farming();
$hero1->farming();
$hero1->farming();
$hero1->farming();
$hero1->farming();
$hero1->farming();

$hero1->attack($hero2);

echo "<br>";
$hero1->getInfo();
$hero2->getInfo();