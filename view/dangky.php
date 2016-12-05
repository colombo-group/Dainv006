
	<!-- main -->
	   <link rel="stylesheet" href="css/dangky.css">
        
		<div id="main">
			  <h2>Đăng ký</h2>
        	<form method="post" enctype="multipart/form-data">
        	<table id="add-prd" border="0" cellpadding="0" cellspacing="0">
                <?php if(isset($errotk)){ echo $errotk;} ?>
            	<tr>
                	<td><label>Email</label><br /><input type="email" name="email" value="<?php if(isset($_POST['email'])){echo $_POST['email'];} ?>" required/><td>
                </tr>
                <tr>
                    <td><label>Tên đăng nhập</label><br /><input type="text" name="username" value="<?php if(isset($_POST['username'])){echo $_POST['username'];} ?>" required/><td>
                </tr>
                <tr>
                	<td><label>Ảnh Đai diẹn</label><br /><input type="file" name="anh"  required><?php if(isset($erro_anh)){echo $erro_anh;} ?></td>
                </tr>
                
                <tr>
                	<td><label>Mật khẩu</label><br /><input type="password" name="pass" value="<?php if(isset($_POST['password'])){echo $_POST['password'];} ?>" required/></td>
                </tr>
                <tr>
                	<td><label>Nhập lại mật khẩu</label><br /><input type="password" name="re-pass" value="<?php if(isset($_POST['re-pass'])){echo $_POST['re-pass'];} ?>" required /><?php if(isset($erro)){echo $erro;} ?></td>
                </tr>
                <tr>
                	<td><label>Full name</label><br /><input type="text" name="name" value="<?php if(isset($_POST['name'])){echo $_POST['name'];} ?>" required ></td>
                </tr>
                <tr>
                	<td><label>Giơi tính</label><br /><input type="text" name="gren" value="<?php if(isset($_POST['gren'])){echo $_POST['gren'];} ?>" required></td>
                </tr>
                <tr>
                	<td><label>Ngày sinh</label><br /><input type="date" name="ngaysinh" value="<?php if(isset($_POST['ngaysinh'])){echo $_POST['ngaysinh'];} ?>" required></td>
                </tr>
                <tr>

                	<td><label>Phone</label><br /><input type="text" name="phone" value="<?php if(isset($_POST['phone'])){echo $_POST['phone'];} ?>" required/></td>
                </tr>
                <tr>

                    <td><label>Người giới thiệu</label><br /><input type="email" name="nguoiGT" value="<?php if(isset($_POST['nguoiGT'])){echo $_POST['nguoiGT'];} ?>" /><?php if(isset($erroNguoiGT)){echo $erroNguoiGT;} ?></td>
                </tr>

               
                <tr>
                	<td><input type="submit" name="submit" value="Thêm mới" /> <input type="reset" name="reset" value="Làm mới" /></td>
                </tr>
            </table>
            </form>
    	</div>
	<!-- end main -->
