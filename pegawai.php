<?php

namespace App\Admin;

class Pegawai {
    public int $nip;
    public string $nama;
    protected int $no_hp;
    public string $alamat;

    public function cekIn(): bool {
        // Implementasi logika cek in
        return true;
    }

    public function cekOut(): bool {
        // Implementasi logika cek out
        return true;
    }

    public function getNoHp(): int {
        return $this->no_hp;
    }

    public function setNoHp(int $no_hp): void {
        $this->no_hp = $no_hp;
    }
}

class Dosen extends Pegawai {
    public string $nidn;

    public function mengajar(): void {
        echo "{$this->nama} sedang mengajar perkuliahan";
    }
}

class TenagaKependidikan extends Pegawai {
    public int $gaji_pokok;

    public function cuti(): void {
        // Implementasi logika cuti
    }
}
