<?php
function volumeKerucut($jari_jari, $tinggi) {
    $volume = (1/3) * pi() * pow($jari_jari, 2) * $tinggi;
    return $volume;
?>