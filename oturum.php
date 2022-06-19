<?php
    session_start(); 
    if(isset($_SESSION['login'])) { 
      header('location:index.php'); 
	  die(); 
    }
    else{
        header('location:randevuekranı.php'); 
        die();  
    }
?>