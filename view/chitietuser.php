<?php 
$idUser=$_GET['iduser'];
// echo $idUser;
$sql="SELECT *FROM user WHERE id=$idUser";
$query=mysql_query($sql);
$row=mysql_fetch_array($query);
// echo $row['level'];
if($row['level']==1)
{
    $level='administrator';
}else if($row['level']==2)
{
    $level='admod';
}else{
     $level='user';
}
$email=$row['email'];
$gioiTinh=$row['gender'];
$ngaySinh=$row['birthday'];
$phone=$row['phone'];
$username=$row['username'];
$sql1="SELECT *FROM user WHERE nguoiGT='$email'";
$query1=mysql_query($sql1);
// $row2=mysql_num_rows($query1);
// echo $row2;

?>
    <link rel="stylesheet" href="css/chitietuser.css">
    <h1>Chi tiết thành viên </h1>
            <div class="prd-only">
                	<div class="prd-img"><img width="50%" src="img/<?php echo $row['avatar']; ?>" /></div>	
                        <div class="prd-intro">
                        	<h3><?php echo $row['fullname']; ?></h3>
                            <?php if(isset($_SESSION['user'])||isset($_SESSION['user1'])||isset($_SESSION['user2']))
                            {
                                // echo $email;
                                 echo"<p>Email <span>".
                                      $email . "</span></p>";
                                echo "<table>
                                <tr>
                                    <td width='35%''><span>Tên đăng nhập:</span></td>
                                    <td>". $username." </td>
                                </tr>
                                <tr>
                                    <td width='35%''><span>Chức danh:</span></td>
                                    <td>". $level." </td>
                                </tr>
                                <tr>
                                    <td><span>Giới tính</span></td>
                                    <td> ".$gioiTinh." </td>
                                </tr>
                                <tr>
                                    <td><span>Ngày sinh</span></td>
                                    <td>". $ngaySinh." </td>
                                </tr>
                                <tr>
                                    <td><span>Số điện thoại</span></td>
                                    <td>". $phone."</td>
                                </tr>";
                                
                                   
                               
                                echo" <tr>
                                    <td><span>Những người được giới thiệu:</span></td>
                                    <td>";while ($row2=mysql_fetch_array($query1)) 
                                    { echo $row2['fullname'].","; }
                                    echo "</td>
                                </tr>";
                               
                            echo"</table>";
                            } else{
                                echo "<h2>Bạn hãy đăng nhập để xem đầy đủ thông tin</h2>";
                            } ?> 
                            

            
                            
                        </div>
                        
                        <div class="clear"></div>
            </div>
          