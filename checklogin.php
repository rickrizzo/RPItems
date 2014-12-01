<?php  
session_start();  
if($_SESSION[username]==""){  
    echo "<script>alert('Please Login!');window.location.href='login.html';</script>";  
  }  
?> 