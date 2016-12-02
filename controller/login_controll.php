	<?php 
	if(isset($_POST['submit']))
	{
		$error=  array();
		// echo "abc";
		$user=input_post('email');
		$pass=input_post('pass');
		if(empty($user))
		{
			 $error['user'] = 'Bạn chưa nhập tên đăng nhập';
		}
		if(empty($pass))
		{
			 $error['pass'] = 'Bạn chưa nhập mật khẩu';
		}
		$dem=0;
		if(isset($user)&&isset($pass))
		{
			$pass=md5($pass);
			$sql1="SELECT *FROM user WHERE username='$user' AND password='$pass' OR email='$user' AND password='$pass' ";
			// echo $sql1;
			$query1=mysql_query($sql1);
			$rows=mysql_fetch_array($query1);
			if($rows['level']==1){
				login($rows['level'],$user,$pass);
				$_SESSION['user']=$user;
				$_SESSION['pass']=$pass;
			header('location:../index.php?id='.$rows['id']);
			}else if($rows['level']==2){
				login($rows['level'],$user,$pass);
				$_SESSION['user1']=$user;
				$_SESSION['pass1']=$pass;
			header('location:../index.php?id='.$rows['id']);
			}else if($rows['level']==3){
				login($rows['level'],$user,$pass);
				$_SESSION['user2']=$user;
				$_SESSION['pass2']=$pass;
			header('location:../index.php?id='.$rows['id']);
			}else{
				 setcookie('user', 'thehalfheart', time() + 36);
				$error['err']="Tài Khoản mật khẩu không hơp lệ";
				if(isset($_COOKIE['user'])){
					setcookie('user1', 'thehalfheart1', time() + 36);
				}if(isset($_COOKIE['user1'])&&isset($_COOKIE['user1']))
				{
					setcookie('user2', 'thehalfheart2', time() + 36);
					header('location:../index.php');
				}				
				// echo $_COOKIE['username'];
			}

			}
			ECho $dem;

	 }
	 function login($lv,$user,$pass){
	 	$sql="SELECT *FROM user WHERE email='$user' AND password=md5($pass)AND level=$lv OR username='$user' AND password=md5($pass)AND level=$lv ";
	 	$query=mysql_query($sql);
	 	// $row=mysql_num_rows($query);
	 	$rows=mysql_fetch_array($query);
	 	 setcookie('user', 'thehalfheart', time() - 36);
	 	
	 		
	 		
	 	
	 }
	 ?>