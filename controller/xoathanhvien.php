<?php 
session_start();
$iduser=$_GET['iduser'];
$id=$_GET['id'];

if(isset($_SESSION['user'])||isset($_SESSION['user1'])){
	
	$sql="DELETE FROM user WHERE  id=$iduser";
	$query=mysql_query($sql);
	header("location:index.php?id=".$id);
}else{
	header('location:index.php');
}
 ?>