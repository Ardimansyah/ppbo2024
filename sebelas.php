<?php

class Dosen {
    public $nama;
    public $nip;
    public $no_hp;
    public $alamat;
    public $nidn;

    public function mengajar() {
        echo "{$this->nama} sedang mengajar.\n";
    }
}

$dian = new Dosen();

$dian->nama = "Dian Prawira";
$dian->nip = "198411132015041001";
$dian->no_hp = "62111111";
$dian->alamat = "Jln Purnama";
$dian->nidn = "0013118405";

$dian->mengajar();
?>
