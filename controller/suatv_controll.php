<?php 
$id=$_GET['id'];
$idUser=$_GET['iduser'];
// echo $idUser;
$sql="SELECT *FROM user WHERE id=$idUser";
$query=mysql_query($sql);
$row=mysql_fetch_array($query);

if(isset($_POST['submit']))
{
$level1=$row['level'];
$email=input_post('email');
$level=input_post('level');
$gioitinh=input_post('gioitinh');
$pass=input_post('pass');
$repass=input_post('repass');
$ngaysinh=input_post('ngaysinh');
$phone=input_post('sdt');
$name=input_post('name');
$username=input_post('username');
// echo $repass;
if($_FILES['anh']['name']=='')
{
    $erro_anh="<span style='color:red'>(*)</span>";
    $anh=$_POST['anh'];
}else{
    $anh=$_FILES['anh']['name'];
    $tmp_name=$_FILES['anh']['tmp_name'];
}
// echo "abc".$anh;
if($repass!=$pass)
{
        $erro="<span style='color:red'>Mật khẩu không khớp</span>";
}else
{
        $erro="<span style='color:lightblue'>V</span>";
   
$sql2="SELECT *FROM user WHERE email='$email'  AND id!=$idUser OR username='$username' AND id!=$idUser";
echo "$sql2";
$query2=mysql_query($sql2);
$row2=mysql_num_rows($query2);
// echo $row2['email'];

if($row2==0)
{
    if(isset($email)&&isset($repass)&&isset($name)&&isset($gioitinh)&&isset($ngaysinh)&&isset($phone)&&isset($anh)&&isset($username))
        {
              $uploaded_file=move_uploaded_file($tmp_name, 'img/'.$anh);
              if(isset($_SESSION['user']))
              {
                $repass=md5($repass);
              $sql1="UPDATE user SET email='$email',username='$username', password='$repass',level=$level,fullname='$name',gender='$gioitinh',birthday='$ngaysinh',phone='$phone',avatar='$anh' WHERE id=$idUser";
            }
            else{
               $repass=md5($repass);
                  $sql1="UPDATE user SET email='$email',username='$username' , password=$repass',level=$level1,fullname='$name',gender='$gioitinh',birthday='$ngaysinh',phone='$phone',avatar='$anh' WHERE id=$idUser";
            }
            // echo $repass;
             $query1=mysql_query($sql1);
             header('location:index.php?id='.$id);

        }
    }else{
        $errotk="<span style='color:red'>Tài khoản đã tồn tại</span>";
    }
    }
}
 ?>