<?php

class Lingkaran
{
    const PHI = 3.14;
    public $jari_jari;

    public function __construct($jari_jari) {
        $this->jari_jari = $jari_jari;
    }

    public function luas() : float {
        return self::PHI * $this->jari_jari * $this->jari_jari;
    }

    public function keliling() : float {
        return 2 * self::PHI * $this->jari_jari;
    }
}

class Bola
{
    const PHI = 3.14;
    public $jari_jari;

    // Konstruktor
    public function __construct($jari_jari) {
        $this->jari_jari = $jari_jari;
    }

    // Metode untuk menghitung volume
    public function volume() : float {
        return (4/3) * self::PHI * pow($this->jari_jari, 3);
    }
@@ -38,11 +22,13 @@ class Tabung
    public $jari_jari;
    public $tinggi;

    // Konstruktor
    public function __construct($jari_jari, $tinggi) {
        $this->jari_jari = $jari_jari;
        $this->tinggi = $tinggi;
    }

    // Metode untuk menghitung volume
    public function volume() : float {
        return self::PHI * pow($this->jari_jari, 2) * $this->tinggi;
    }
@@ -54,31 +40,28 @@ class Kerucut
    public $jari_jari;
    public $tinggi;

    // Konstruktor
    public function __construct($jari_jari, $tinggi) {
        $this->jari_jari = $jari_jari;
        $this->tinggi = $tinggi;
    }

    // Metode untuk menghitung volume
    public function volume() : float {
        return (1/3) * self::PHI * pow($this->jari_jari, 2) * $this->tinggi;
    }
}

// Contoh penggunaan Lingkaran
$lingkaran = new Lingkaran(7); // jari-jari 7 cm
echo "Luas Lingkaran: " . $lingkaran->luas() . " cm²\n";
echo "Keliling Lingkaran: " . $lingkaran->keliling() . " cm\n";

// Contoh penggunaan Bola
// Membuat objek dari kelas Bola
$bola = new Bola(5); // jari-jari 5 cm
echo "Volume Bola: " . $bola->volume() . " cm³\n";
echo "Volume Bola dengan jari-jari {$bola->jari_jari} cm: " . $bola->volume() . " cm³\n";

// Contoh penggunaan Tabung
$tabung = new Tabung(4, 10); // jari-jari 4 cm, tinggi 10 cm
echo "Volume Tabung: " . $tabung->volume() . " cm³\n";
// Membuat objek dari kelas Tabung
$tabung = new Tabung(3, 10); // jari-jari 3 cm, tinggi 10 cm
echo "Volume Tabung dengan jari-jari {$tabung->jari_jari} cm dan tinggi {$tabung->tinggi} cm: " . $tabung->volume() . " cm³\n";

// Contoh penggunaan Kerucut
// Membuat objek dari kelas Kerucut
$kerucut = new Kerucut(4, 10); // jari-jari 4 cm, tinggi 10 cm
echo "Volume Kerucut: " . $kerucut->volume() . " cm³\n";
echo "Volume Kerucut dengan jari-jari {$kerucut->jari_jari} cm dan tinggi {$kerucut->tinggi} cm: " . $kerucut->volume() . " cm³\n";

?>