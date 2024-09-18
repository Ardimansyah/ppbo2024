<?php
class GuestHomePage
{
    function tampil() : void {
        echo "Halaman depan guest";
    }
}


class AdminHomePage
{
    function tampil() : void {
        echo "Halaman depan admin";
    }
}


$Guesthp = new GuestHomePage();
$Guesthp->tampil();

$Adminhp = new AdminHomePage();
$Adminhp->tampil();