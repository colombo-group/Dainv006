<script type="text/javascript">
    function  xoasanpham(){
        var conf=confirm("Bạn có muốn xóa không");
        return conf;

    }
    </script>
<link rel="stylesheet" href="css/danhsachuser.css">

<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
if(isset($_GET['id']))
{
$id=$_GET['id'];
}
// echo $id;

//phan trang
if(isset($_POST['submit']))
{
$show=input_post('show');
// ec
}else if(isset($_GET['show'])) {
	$show=$_GET['show'];
}else{
	$show=3;
}
if(isset($_GET['p']))
{
	$p=$_GET['p'];
}else{
	$p=1;
}

// $show=1;
// echo $show;
$per_row=$show*$p-$show;
// echo $per_row;
if(isset($_SESSION['user']))
{
	$sql="SELECT *FROM user ORDER BY id ASC LIMIT $per_row,$show ";
	$total_row=mysql_num_rows(mysql_query("SELECT *FROM user"));
	$query=mysql_query($sql);
}else if(isset($_SESSION['user1']))
{
	$sql="SELECT *FROM user WHERE level=2 OR level=3  ORDER BY id ASC LIMIT $per_row,$show";
	$total_row=mysql_num_rows(mysql_query("SELECT *FROM user WHERE level=2 OR level=3"));
	$query=mysql_query($sql);
	
}else{
	$sql="SELECT *FROM user WHERE level=3 ORDER BY id ASC LIMIT $per_row,$show ";
	$total_row=mysql_num_rows(mysql_query("SELECT *FROM user WHERE  level=3"));
	$query=mysql_query($sql);
	

}

$total_page=ceil($total_row/$show);
// echo $total_page;
$html="";
for($i=1;$i<=$total_page;$i++)
{
	if($p==$i)
    {
        $html .="<span>".$i."</span> ";
    }else{
        
        if(isset($id)){
        	$link="index.php?id=$id";
        	$html .="<a href='index.php?id=".$id."&show=".$show."&p=".$i."'>".  $i."</a> ";  
    	}else{
    		$link="index.php";
    		$html .="<a href='index.php?p=".$i."'>".  $i."</a> ";  
    	}
    }
}


 ?>

 <form class="show" action="<?php echo $link ?>" method="post">
<select name="show">
	<option value="10">10</option>
	<option value="5">5</option>
	<option value="20">20</option>
	<option value="50">50</option>
	<input type="submit" name="submit" value="Show">
</select></form>
<?php if(isset($_COOKIE['user1'])){
				echo '<h2 style="color:red;text-align:center;">Tài khoản của bạn đã bị khóa 2h </h2>';
			
			}
    ?>
<table id="prds" border="0" cellpadding="0" cellspacing="0" width="100%">
            	<tr id="prd-bar">
                	<td width="5%">ID</td>
                	<td width="15%">Ảnh mô tả</td>
                    <td width="20%">Tên </td>
                    <td width="15%">Giới tính</td>
                    <td width="15%">Email</td>
                    <td width="10%">Ngày sinh</td>
                    <td width="10%">Phone</td>
                    <?php if(isset($_SESSION['user'])||isset($_SESSION['user1'])){
                    	echo " <td width='5%''>Sửa</td>
                   			 <td width='5%'>Xóa</td> ";}
                   		else if(isset($id))
                   		{
                   			echo " <td width='5%''>Sửa</td>";
                   		}
                    ?>
                   
                </tr>
                <?php while ($row=mysql_fetch_array($query)) {
                	$iduser=$row['id'];
                 ?>
		<tr>
			<td><?php echo $row['id']; ?></td>
			<td><a href="index.php?id=<?php echo $id; ?>&page=chitietuser&iduser=<?php echo $row['id'] ?>"><img src="img/<?php echo $row['avatar'];?>" alt=""></a></td>
			<td><?php echo $row['fullname']; ?></td>
			<td><?php echo $row['gender']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['birthday']; ?></td>
			<td><?php echo $row['phone']; ?></td>
			<?php if(isset($_SESSION['user'])||isset($_SESSION['user1'])&&$row['level']==3){
                  echo " <td><a href='index.php?id=".$id."&page=suatv&iduser=".$iduser." '	>Sua</a></td>";
					  echo "<td><a onclick='return xoasanpham();'' href='index.php?id=".$id."&page=xoa&iduser=".$iduser."'>Xoa</a></td>";
              }else if(isset($id)&&$id==$row['id']) {
              	echo " <td><a href='index.php?id=".$id."&page=suatv&iduser=".$iduser." '	>Sua</a></td>";
              }?>
			
		</tr>
		<?php 
		} 
		
		?>


	</table>
	<div class="paging"> <?php echo $html; ?></div>