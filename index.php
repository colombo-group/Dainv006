<?php session_start();
include('lib/database.php'); 
include('lib/helper.php');

if(isset($_GET['id']))
{
	$id=$_GET['id'];
}

// if(!(isset($_SESSION['user'])||isset($_SESSION['user1'])||isset($_SESSION['user2'])))
// {
//     header('location:index.php');
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>quanLy nhan vien</title>
	<link rel="stylesheet" href="css/index.css">
</head>
<body>
	<div class="big">
	<div class="nav">

		<h3><a href="index.php<?php if(isset($id)){
			echo'?id='.$id;
		} ?>">LOGO</a></h3>
		<div class="link">
		<?php if(isset($_SESSION['user'])&&isset($_SESSION['pass'])){echo'Xin chào: '.$_SESSION['user'];}else if(isset($_SESSION['user1'])){echo"Xin chào: <a href=''>".$_SESSION['user1']."</a>"; }else if(isset($_SESSION['user2'])){echo"Xin chào: <a href='index'>".$_SESSION['user2']."</a>";}
		else{echo"<a href='index.php?page=login'>Đăng nhập</a>";}
		  ?>
		<a href="controller/logout.php">Đăng xuất</a>
	</div>
	</div>
	<hr>
	<!-- main -->

	
	<?php 
	if(isset($_GET['page']))
	{
		switch ($_GET['page']) {
			case 'dangky':
				include('controller/dangky_controll.php');
				include('view/dangky.php');
				break;
			case 'chitietuser':
				include('view/chitietuser.php');
				break;
			case 'suatv':
				include('controller/suatv_controll.php');
				include('view/suatv.php');
				break;
			case 'xoa':
				include('controller/xoathanhvien.php');
			case 'login':
				// include('controller/login_controll.php');
				include('view/login.php');
				break;
		}
	}else{
		include('view/danhsachuser.php');
	} ?>
	<!-- end main -->
	</div>
</body>
</html>