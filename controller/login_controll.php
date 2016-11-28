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
			$sql="SELECT *FROM user WHERE email='$user' AND password='$pass'AND level=1 OR username='$user' AND password='$pass'AND level=1";
			$query=mysql_query($sql);
			$rows=mysql_num_rows($query);
			$rowsd1=mysql_fetch_array($query);
			
			if($rows <=0){
				$error['err']="Tài Khoản mật khẩu không hơp lệ";
				$dem++;
			}else{
				$_SESSION['user']=$user;
				$_SESSION['pass']=$pass;
				 header("location:../index.php?id=".$rowsd1['id']);
			}
		
        	$sql1="SELECT *FROM user WHERE email='$user' AND password='$pass'AND level=2 OR username='$user' AND password='$pass'AND level=2 ";
        	$query1=mysql_query($sql1);
        	$rows1=mysql_num_rows($query1);
        		$rowsd=mysql_fetch_array($query1);
			 
        	if($rows1 <=0){
				$error['err']="Tài Khoản mật khẩu không hơp lệ";
				$dem++;
			}else{
				$_SESSION['user1']=$user;
				$_SESSION['pass1']=$pass;
				header('location:../index.php?id='.$rowsd['id']);
			}
			$sql2="SELECT *FROM user WHERE email='$user' AND password='$pass'AND level=3 OR username='$user' AND password='$pass'AND level=3 ";
        	$query2=mysql_query($sql2);
        	$rows2=mysql_num_rows($query2);
        	$rowsd1=mysql_fetch_array($query2);
        	if($rows2 <=0){
				$error['err']="Tài Khoản mật khẩu không hơp lệ";
				$dem++;
			}else{
				$_SESSION['user2']=$user;
				$_SESSION['pass2']=$pass;
				header('location:../index.php?id='.$rowsd1['id']);
			}
        }
    
   
	 }
	 ?>