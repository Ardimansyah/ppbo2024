<?php
date_default_timezone_set("Asia/Jakarta");
$nama = readline('Masukkan nama Anda: ');
$jam = date('h');
$menit = date('i');
echo "Halo {$nama} sekarang pukul {$jam}:{$menit}\n";