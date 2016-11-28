<?php
session_start();
if($_SESSION['user']&&$_SESSION['pass']||$_SESSION['user1']&&$_SESSION['pass1']||
	$_SESSION['user2']&&$_SESSION['pass2']){
session_destroy();
header('location:../index.php');}

else{
header('location:../index.php');
}
?>