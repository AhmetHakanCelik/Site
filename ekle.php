<?php
   include "veritabanı.php";

   session_start();
   
   if (isset($_SESSION['username']) && isset($_POST['Ad']) && isset($_POST['Soyad']) && isset($_POST['doktor']) && isset($_POST['Tarih']) && isset($_POST['Saat']) && isset($_POST['Klinik'])){
       extract($_POST);
       $kullanıcım=$_SESSION['username'];

       $sql3="INSERT INTO `randevubilgi` (kullanici_adi,Ad,Soyad,Klinik,Doktor_adı,Randevu_tarihi,saat)";
       $sql3 = $sql3 . "VALUES ('$kullanıcım','$Ad', '$Soyad','$Klinik', '$doktor','$Tarih', '$Saat')";
       $cevap3= mysqli_query($baglanti, $sql3);
       $sonucum3="SELECT Ad,Soyad,Klinik,Doktor_adı,Randevu_tarihi,saat FROM randevubilgi WHERE kullanici_adi='$kullanıcım' AND Ad='$Ad'AND Soyad='$Soyad'AND Klinik='$Klinik'AND Doktor_adı='$doktor'AND Randevu_tarihi='$Tarih'AND saat='$Saat'";
       
   }

       if($sonucum3){
         header("location:randevuekranı.php");
       }
   ?>