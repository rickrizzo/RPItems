<?php
session_start();


/*if($_GET['action'] == "logout"){
    unset($_SESSION['userid']);
    unset($_SESSION['username']);
    echo 'logout success, click here to <a href="login.html">login</a>';
    exit;
}*/


if(!isset($_POST['submit'])){
    exit('Error');
}
$username = htmlspecialchars($_POST['username']);
$password = MD5($_POST['password']);


include('conn.php');

$check_query = mysql_query("select uid from user where username='$username' and password='$password' 
limit 1");
if($result = mysql_fetch_array($check_query)){
    
    $_SESSION['username'] = $username;
    $_SESSION['userid'] = $result['uid'];
    echo $username,' Welcome! click here to <a href="profile.html">profile</a><br />';
    exit;
} else {
    exit('login fail! <a href="javascript:history.back(-1);">back</a> retry');
}
?>