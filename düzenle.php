<?php
    session_start(); 
    if(!isset($_SESSION['login'])) { 
      header("location:index.php");  
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
<li class="active"><a href="#">Ana Sayfa</a></li>
<li class="active"><a href="randevularım.php">Randevular</a></li>
<li><a href="randevusilme.php">Randevu Silme</a></li>
<li><a href="giriş.php">Randevu Düzenleme</a></li>
</ul>

</nav>
    </div>
      <div class="row">
      <div class="col-md-3">
      <h3 class="text-left">DÜZENLE</h3><br>
        <form action="hesapla.php" method="POST">
          <label for="Adı">Adınız</label>
        <input type="text" name="Ad1" class="form-control" style="border-radius:10px"><br>
        <label for="Soyadı">Soyadınız</label>
        <input type="text" name="Soyad1" class="form-control" style="border-radius:10px"><br>
   
        <label for="doktor">Diş Hekimi</label>
        <select name="doktor1" class="col-md-12 mx-auto"   style="border-radius:10px " >
          <option  value="Mahmut Yılmaz">Doçent Dr.Mahmut Yılmaz</option>
          <option  value="Ayşegül Kaya">Uzman Doktor Ayşegül Kaya</option>
          <option  value="Semih Su">Doçent Dr. Semih Su</option>
          <option  value="Fatih Çelik">Doçent Dr. Fatih Çelik</option>
        </select>

        <br><br><br><br>
  
        <label for="Tarih">Randevu Tarihi</label>
        <input type="text" name="Tarih1" class="form-control" placeholder="GG.AA.YY" style="border-radius:10px"><br>
        <label for="Saat">Randevu Saati</label>
        <input type="text" name="Saat1" class="form-control" placeholder="SS:DD" style="border-radius:10px"><br>
        <label for="Klinik">Klinik</label>
        <input type="text" name="Klinik1" class="form-control" style="border-radius:10px"><br>
        <input type="submit" value="Kaydet"  class="btn btn-info  ">
    </form>
      </div>
      
    </div>
      </div>
    
</body>



</html>
