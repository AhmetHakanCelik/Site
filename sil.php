<?php

session_start();
include("veritabanı.php");

$mydata1=$_SESSION['isim'];
$mydata2=$_SESSION['soyisim'];
$mydata3=$_SESSION['klinik'];
$mydata4=$_SESSION['doktor'];
$mydata5=$_SESSION['randevutarihi'];
$mydata6=$_SESSION['randevusaati'];


$sql5= "DELETE FROM randevubilgi WHERE Ad='$mydata1' AND Soyad='$mydata2' AND Klinik='$mydata3' AND Doktor_adı='$mydata4' AND Randevu_tarihi='$mydata5' AND saat='$mydata6'";
$cevap6= mysqli_query($baglanti,$sql5);

if($cevap6){
    header("Location:randevusilme.php");
}

mysqli_close($baglanti);
?>