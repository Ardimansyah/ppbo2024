<?php
function volumeTabung($jari_jari, $tinggi) {
    $volume = pi() * pow($jari_jari, 2) * $tinggi;
    return $volume;
?>