<?php
include "veritabanı.php";

session_start();

if (isset($_POST['kullanici']) && isset($_POST['sifre'])){
    extract($_POST);
    

    $sql="INSERT INTO `kisiler` (kullanici_adi, şifre)";
    $sql = $sql . "VALUES ('$kullanici', '$sifre')";
    $cevap = mysqli_query($baglanti, $sql);
    $sonucum2="SELECT kullanici_adi,şifre FROM kisiler WHERE kullanici_adi='$kullanici' AND şifre='$sifre'";
}

 
if ($sonucum2){
    header("Location:index.php");
    die();
}
session_destroy();
?>