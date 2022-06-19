<?php
    session_start(); 
    if(!isset($_SESSION['login'])) { 
      header("index.php");  
	  die(); 
    }

   
    ?>

<!DOCTYPE html>
<html>
<head>
<style>
     .renk{   
        background: #36D1DC;  
        background: -webkit-linear-gradient(to right, #5B86E5, #36D1DC);  
        background: linear-gradient(to right, #5B86E5, #36D1DC);
     }
     
     .container{
      background:white;
      height:800px;  
     }

     select {
      line-height: 1.5em;
      padding: 0.5em 3.5em ;
      margin: 0;      
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;     
}

.link{
  padding: 14px 25px;
  text-align: center;
  border-radius:20px;
  background-color: #f44336;
  color: white;
  padding: 14px 25px;
  text-decoration: none;
  display: inline-block;
}


    </style>


  <link rel="stylesheet"
  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script
  src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script
src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<meta name="viewport"content="width=device-width, initial-scale=1">
</head>

<body class="renk">

<div class="container">
      <div class="row ">
    <nav class="nav collapse.navbar-collapse">
     <ul class="nav navbar-nav">
     <li class="active"><a href="randevuekranı.php">Ana Sayfa</a></li>
     <li class="active"><a href="randevularım.php">Randevular</a></li>
     <li><a href="randevusilme.php">Randevu Silme</a></li>
     <li><a href="randevudüzenle.php">Randevu Düzenleme</a></li>
     </ul>
  </nav>
  </div>
  <div class="row">
      <div class="col-md-3">
  <h3 class="text-left">RANDEVU DÜZENLE</h3>

  <?php

include("veritabanı.php");
    
$veri=$_SESSION['username'];

$sql4 = "SELECT * FROM randevubilgi WHERE kullanici_adi='$veri'";
$cevap4 = mysqli_query($baglanti,$sql4);

echo "<html>";

echo "<meta http-equiv='Content-Type' ";
echo "content='text/html; charset=UTF-8'
/>";
echo "<table  width='800' height='150'>";
echo "<tr>";
echo "<th>Adınız</th>";
echo "<th>Soyadınız</th>";
echo "<th>Klinik</th>";
echo "<th>Doktor Adı</th>";
echo "<th>Randevu Tarihi</th>";
echo "<th>Randevu Saati</th>";
echo "</tr>";
while($data=mysqli_fetch_array($cevap4))
{  
echo "<tr><td>".$data['Ad']."</td> ";
echo "<td>".$data['Soyad']."</td>";
echo "<td>".$data['Klinik']."</td>";
echo "<td>".$data['Doktor_adı']."</td>";
echo "<td>".$data['Randevu_tarihi']."</td>";
echo "<td>".$data['saat']."</td>";
echo "<td><a class=link  href=düzenle.php";
echo ">DÜZENLE</a></td></tr>";
$_SESSION['isim']=$data['Ad'];
$_SESSION['soyisim']=$data['Soyad'];
$_SESSION['klinik']=$data['Klinik'];
$_SESSION['doktor']=$data['Doktor_adı'];
$_SESSION['randevutarihi']=$data['Randevu_tarihi'];
$_SESSION['randevusaati']=$data['saat'];
}

echo "</table>";
echo "</html>";

  ?>
  
  </div>
 </body>
</html>