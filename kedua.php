<?php


function luasLingkaran($jari) : float {
    $luas = 3.14*$jari*$jari;
    return $luas;
}
function kelilingLingkaran($jari_jari) {
    $keliling = 2 * pi() * $jari_jari;
    return $keliling;
}

function volumeBola($jari_jari) {
    $volume = (4/3) * pi() * pow($jari_jari, 3);
    return $volume;
}

function volumeTabung($jari_jari, $tinggi) {
    $volume = pi() * pow($jari_jari, 2) * $tinggi;
    return $volume;
}

function volumeKerucut($jari_jari, $tinggi) {
    $volume = (1/3) * pi() * pow($jari_jari, 2) * $tinggi;
    return $volume;
}

$luas_tanah = luasLingkaran(45);
echo "Luas tanah budi adalah {$luas_tanah}";