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


    public function __construct($jari_jari) {
        $this->jari_jari = $jari_jari;
    }

    public function volume() : float {
        return (4/3) * self::PHI * pow($this->jari_jari, 3);
    }
}

class Tabung
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;


    public function __construct($jari_jari, $tinggi) {
        $this->jari_jari = $jari_jari;
        $this->tinggi = $tinggi;
    }

    public function volume() : float {
        return self::PHI * pow($this->jari_jari, 2) * $this->tinggi;
    }
}

class Kerucut
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    public function __construct($jari_jari, $tinggi) {
        $this->jari_jari = $jari_jari;
        $this->tinggi = $tinggi;
    }


    public function volume() : float {
        return (1/3) * self::PHI * pow($this->jari_jari, 2) * $this->tinggi;
    }
}

// Membuat objek dari kelas Kerucut
$jari_jari = 4; // dalam cm
$tinggi = 10; // dalam cm
$nasi_tumpeng = new Kerucut($jari_jari, $tinggi);
// Contoh penggunaan Lingkaran
$lingkaran = new Lingkaran(7); // jari-jari 7 cm
echo "Luas Lingkaran: " . $lingkaran->luas() . " cm²\n";
echo "Keliling Lingkaran: " . $lingkaran->keliling() . " cm\n";

// Contoh penggunaan Bola
$bola = new Bola(5); // jari-jari 5 cm
echo "Volume Bola: " . $bola->volume() . " cm³\n";

// Menghitung volume
$volume_nasi_tumpeng = $nasi_tumpeng->volume();
// Contoh penggunaan Tabung
$tabung = new Tabung(4, 10); // jari-jari 4 cm, tinggi 10 cm
echo "Volume Tabung: " . $tabung->volume() . " cm³\n";

// Menampilkan hasil/
echo "Volume kerucut nasi tumpeng adalah {$volume_nasi_tumpeng} cm³\n";
// Contoh penggunaan Kerucut
$kerucut = new Kerucut(4, 10); // jari-jari 4 cm, tinggi 10 cm
echo "Volume Kerucut: " . $kerucut->volume() . " cm³\n";