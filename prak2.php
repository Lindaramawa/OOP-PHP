<?php

interface infobahan {
  public function getLabel();
}
class bahansegar {
  public $nama = "nama",
         $warna = "warna";
  public static $jumlah;
  public static $harga;

  
  public function __destruct() {
    echo "Matur Suwun";
  }
  public function getLabel() {
    return "$this->nama|$this->warna";
  }
  public static function beli() {
    return "2";
  }
  public static function beli1() {
    return "3";
  }
  
}

class sayur extends bahansegar implements infobahan {
public function __construct($nama, $warna) {
    $this->nama = $nama;
    $this->warna = $warna;
    
  }
  public static function jual() {
    return "Jumlah :".self::beli(). "Harga :".self::$harga;
  }
}

class buah extends bahansegar implements infobahan {
public function __construct($nama, $warna) {
    $this->nama = $nama;
    $this->warna = $warna;
  }
  public static function jual1() {
    return "Jumlah :".self::beli1(). "Harga :".self::$harga;
  }
}

$bahansegar1 = new sayur("Cabai", "Merah");
$bahansegar2 = new buah("Apel", "Hijau");

bahansegar::$harga='6000';
bahansegar::$jumlah='2';



echo "Bahan Segar : " . $bahansegar1-> getLabel();
echo "<br>";
echo $bahansegar1->jual();
echo "<br>";
echo "Bahan Segar : " . $bahansegar2-> getLabel();
echo "<br>";
echo $bahansegar2->jual1();
echo "<br>";
?>