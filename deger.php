<?php
include "veritabanı.php";

session_start();

if (isset($_POST['username']) && isset($_POST['password'])){
    extract($_POST);

    $_SESSION['username']=$_POST['username'];

    $sonucum1="SELECT kullanici_adi,şifre FROM kisiler WHERE kullanici_adi='$username' AND şifre='$password'";
    $cevap1= mysqli_query($baglanti,$sonucum1);
    
}

 
if (mysqli_num_rows($cevap1)>0) {
    $_SESSION['login'] = true;
    header("Location: randevuekranı.php");
}
else {
    header("Location: kayıt.php");
    die();
}

?>