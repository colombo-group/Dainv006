<?php 
// Biến lưu trữ kết nối
$dbHost='localhost';
$dbUser='root';
$dbPass='';
$dbName='train006';
$dbConnect=mysql_connect($dbHost,$dbUser,$dbPass);
$dbSelected=mysql_select_db($dbName,$dbConnect);
$set_lang = mysql_query('SET NAMES "utf8"');
?>