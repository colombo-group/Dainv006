<?php 
if(isset($_POST['submit']))
{
    $email=input_post('email');
    $pass=input_post('pass');
    $repass=input_post('re-pass');
    $name=input_post('name');
    $gren=input_post('gren');
    $ngaysinh=input_post('ngaysinh');
    $phone=input_post('phone');
    $nguoiGT=input_post('nguoiGT');
    $username=input_post('username');
    if($_FILES['anh']['name']=='')
    {
        $erro_anh="<span style='color:red'>(*)</span>";
    }else{
        $anh=$_FILES['anh']['name'];
        $tmp_name=$_FILES['anh']['tmp_name'];
    }
    $sql2="SELECT *FROM user WHERE email='$nguoiGT'";

    $query2=mysql_query($sql2);
    $row2=mysql_num_rows($query2);
    // echo $row2['email'];
    if($repass!=$pass)
    {
        $erro="<span style='color:red'>Mật khẩu không khớp</span>";
    }else{
        $erro="<span style='color:lightblue'>V</span>";
      
   
    $sql="SELECT *FROM user WHERE email='$email'OR username='$username'";
    $query=mysql_query($sql);
    $row=mysql_num_rows($query);
    if($row==0)
    {
      if($row2!=0)
      {
        if(isset($email)&&isset($repass)&&isset($name)&&isset($gren)&&isset($ngaysinh)&&isset($phone)&&isset($anh)&&isset($nguoiGT))
        {
          $repass=md5($repass);
              $uploaded_file=move_uploaded_file($tmp_name, 'img/'.$anh);
              $sql1="INSERT INTO user(email,username,password,level,fullname,gender,birthday,phone,avatar,nguoiGT) VALUES('$email','$username','$repass',3,'$name','$gren','$ngaysinh','$phone','$anh','$nguoiGT')";
              echo $sql1;
             // $query1=mysql_query($sql1);
             // // echo $sql1;
             //  header('location:index.php');
        }
      }
      else{
        $erroNguoiGT="<span style='color:red'>Không có người này</span>";
      }
    }else{
        $errotk="<span style='color:red'>Tài khoản đã tồn tại</span>";
    }
    }

}
 ?>