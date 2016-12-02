
	<link rel="stylesheet" href="css/chitietuser.css">

	<!-- main -->
	<div id="main">
		<h1>Sửa Thành viên:</h1>
        	<form method="post" enctype="multipart/form-data">
            <div class="prd-only">
                    <div class="prd-img"><img width="50%" src="img/<?php echo $row['avatar']; ?>" />
                    <input type="file" name="anh" id='anh' >
                    <input type="hidden" name="anh" value="<?php echo $row['avatar']; ?>"> </div>

                        <div class="prd-intro">
                            <?php if(isset($errotk)){
                                echo $errotk;
                            } ?>
                            <h3><?php echo $row['fullname']; ?></h3>

                            <table>
                                <tr>
                                <td><span>Email</span></td>
                                <td><span><input type="email" name="email" value="<?php if(isset($_POST['email'])){echo $_POST['email'];}else{ echo $row['email'];} ?>"required></span></td>
                            </tr>
                            <tr>
                                    <td><span>Tên đăng nhập</span></td>
                                    <td><input type="text" name="username" value="<?php if(isset($_POST['username'])){echo $_POST['username'];}else{ echo $row['username']; }?>"required> </td>
                                </tr>
                            <?php if(isset($_SESSION['user'])) {
                                echo" <tr>
                                    <td width='30%''><span>Chức danh:</span></td>
                                    <td><select name='level'>
                                       
                                        <option value='2'>admod</option>
                                        <option value='3'>user</option>
                                    </select></td>
                                </tr>";
                            }?>
                               
                                <tr>
                                    <td><span>Giới tính</span></td>
                                    <td><input type="text" name="gioitinh" value="<?php if(isset($_POST['gioitinh'])){echo $_POST['gioitinh'];}else{ echo $row['gender']; }?>"required> </td>
                                </tr>
                                  <tr>
                                    <td><span>Mật khẩu</span></td>
                                    <td><input type="password" name="pass" value="<?php if(isset($_POST['pass'])){echo $_POST['pass'];}else{ echo $row['password']; }?>"required> </td>
                                </tr>
                                  <tr>
                                    <td><span>Nhập lại mật khẩu</span></td>
                                    <td><input type="password" name="repass" value="<?php if(isset($_POST['repass'])){echo $_POST['repass'];}else{ echo $row['password']; }?>"required> <?php if(isset($erro)){echo $erro;} ?></td>
                                </tr>
                                <tr>
                                    <td><span>Ngày sinh</span></td>
                                    <td><input type="date" name="ngaysinh"value="<?php if(isset($_POST['ngaysinh'])){echo $_POST['ngaysinh'];}else{ echo $row['birthday']; }?>"required> </td>
                                </tr>
                                <tr>
                                    <td><span>Số điện thoại</span></td>
                                    <td><input type="text" name="sdt"value="<?php if(isset($_POST['sdt'])){echo $_POST['sdt'];}else{ echo $row['phone']; }?>"required></td>
                                </tr>
                                <tr>
                                    <td><span>Tên đầy đủ:</span></td>
                                    <td><input type="text" name="name"value="<?php if(isset($_POST['name'])){echo $_POST['name'];}else{ echo $row['fullname'];} ?>"required></td>
                                </tr>
                               
                            </table>
                            
                        </div>
                        
                        <div class="clear"><input type="submit" name="submit" value="Lưu"></div>
            </div>
            </form>
    	</div>
        <script type="text/javascript">
        var anh=document.getElementById("anh").value;
        console.log("abc"+anh);
        </script>


