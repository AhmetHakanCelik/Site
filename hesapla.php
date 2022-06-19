<?php
session_start();

include "veritabanı.php";

if(isset($_POST['Ad1']) && isset($_POST['Soyad1']) && isset($_POST['doktor1']) && isset($_POST['Tarih1']) && isset($_POST['Saat1']) && isset($_POST['Klinik1'])){

$Ad1=$_POST['Ad1'];
$Soyad1=$_POST['Soyad1'];
$Klinik1=$_POST['Klinik1'];
$doktor1=$_POST['doktor1'];
$Tarih1=$_POST['Tarih1'];
$Saat1=$_POST['Saat1'];

$datam1=$_SESSION['isim'];
$datam2=$_SESSION['soyisim'];
$datam3=$_SESSION['klinik'];
$datam4=$_SESSION['doktor'];
$datam5=$_SESSION['randevutarihi'];
$datam6=$_SESSION['randevusaati'];



$sql6="UPDATE randevubilgi SET Ad='$Ad1',Soyad='$Soyad1',Klinik='$Klinik1',Doktor_adı='$doktor1',Randevu_tarihi='$Tarih1',saat='$Saat1' WHERE Ad='$datam1'AND Soyad='$datam2' AND Klinik='$datam3' AND Doktor_adı='$datam4' AND Randevu_tarihi='$datam5' AND saat='$datam6'";
$olay=mysqli_query($baglanti,$sql6);

if($olay){
    header("Location:randevudüzenle.php");
}


}



?>