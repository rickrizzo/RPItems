<?php
  if(!isset($_POST['submit'])){
    exit('Error');
  }
  $username = $_POST['username'];
  $password = $_POST['password'];
  $firstname = $_POST['firstName'];
  $lastname = $_POSt['lastname'];

  include('conn.php');

  $check_query = mysql_query("select uid from user where username='$username' limit 1");
  if(mysql_fetch_array($check_query)){
    echo 'Error: Username:',$username,' exist<a href="javascript:history.back(-1);">back</a>';
    exit;
  }

  $password = MD5($password);
  $regdate = time();
  $sql = "INSERT INTO user(username,password,firstname,lastname,regdate)VALUES('$username','$password','$firstname', '$lastname'$regdate)";
  if(mysql_query($sql,$conn)){
    exit('Sign up Success, click here to <a href="login.html">login</a>');
  } else {
      echo 'Sorry：Sign up fail',mysql_error(),'<br />';
      echo 'click <a href="javascript:history.back(-1);">back</a> retry';
  }
?>
