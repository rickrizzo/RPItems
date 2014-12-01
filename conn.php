<?php

$conn = @mysql_connect('localhost', 'root', 'mysql44', 'rpitems');
if (!$conn){
    die("connection fail" . mysql_error());
}
mysql_select_db("test", $conn);

mysql_query("set character set 'gbk'");

mysql_query("set names 'gbk'");
?>