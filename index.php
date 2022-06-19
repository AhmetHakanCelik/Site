
<html>
   <head>
   
   <style>
     .renk{   
        background: #36D1DC;  
        background: -webkit-linear-gradient(to right, #5B86E5, #36D1DC);  
        background: linear-gradient(to right, #5B86E5, #36D1DC); 

     }

    
    </style>

    <meta charset="UTF-8">
   <link rel="stylesheet"
   href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   
   <script
   src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

   <script
   src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

   <meta name="viewport"content="width=device-width, initial-scale=1">

   

   </head>

    <body class="renk">
    <h3 class="text-center">İSTANBUL DİŞ HEKİMLİĞİ </h3>
    <h3 class="text-center">RANDEVU GİRİŞ EKRANI</h3>
        <img src="logo1.jpg" class="img-circle" style="position:relative; top:80px ; left:720px"  > 




        <div class="container">
            <div class=row>
            <div class="col-md-4"></div>
                    <div class="col-md-4">
           <form align="center" name="kayıtformu" style="position:relative;  top:100px"  action="deger.php" method="POST" >
           <h3 class="text-center">Kullanıcı Adı</h3>
            <input type="text" autocomplete="off" name="username" class="form-control" style="border-radius:10px">
            <h3 class="text-center">Şifre</h3>
            <input type="text" autocomplete="off" name="password" class="form-control" style="border-radius:10px"><br> 
            <input type="submit" value="Giriş"  class="btn btn-info">
            <input type="submit"  class="btn btn-info konum" value="Kayıt" onClick="kayıt.php">  
          </form>   
          
             
       </div>
       </div>
     </div>
    </body>

</html>

