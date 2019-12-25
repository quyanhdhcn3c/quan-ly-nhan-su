<?php 
include("ketnoi.inc");
$str = "select distinct MaNV,Hoten,Ngaysinh,Noisinh,Nguyenquan,Quoctich,Dantoc,Tongiao,Tinhtranghonnhan,Tinhtrangsuckhoe,Anh from Thongtinnhanvien";
$kq = mysql_query($str,$link);
$num_row = mysql_num_rows($kq);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body> 
<table width="100%" border="0">
    <tr>
      <td colspan="8"></td>
    </tr>
    <tr>
      <td width="17%"><a href="index.php"><h4>Quay lại trang chủ</h4></a></td>
      <td width="3%">&nbsp;</td>
      <td width="11%">&nbsp;</td>
      <td width="11%">&nbsp;</td>
      <td width="11%">&nbsp;</td>
      <td width="11%">&nbsp;</td>
      <td width="11%">&nbsp;</td>
      <td width="25%"><?php include("phanquyen.php");?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><?php

	  if(isset($_SESSION["s_user"]))
	  {
	  	if($_SESSION["s_phanquyen"] == "1")
	  	{
	  		print '<div align="right"><a href="sp_add.php">Thêm cán bộ mới</a></div>';
	 	}
	  	else
	  	{
	  		echo " ";
	  	}
	  }
	  else
	  {
	  	echo "";
	  } 
	  ?>	</td>
    </tr>
    <tr>
      <td colspan="8"> </td>
    </tr>
</table>
<div align="center"><h1>Danh mục các cán bộ</h1></div>
<table width="100%" border="1">
    <tr>
      <td width="6%" bordercolor="#0000FF">Mã NV</td>
      <td width="13%" bordercolor="#0000FF">Họ tên</td>
      <td width="9%" bordercolor="#0000FF">Ngày sinh</td>
      <td width="9%" bordercolor="#0000FF">Nơi sinh</td>
      <td width="8%" bordercolor="#0000FF">Nguyên quán</td>
      <td width="7%" bordercolor="#0000FF">Quốc tịch</td>
      <td width="6%" bordercolor="#0000FF">Dân tộc</td>
	  <td width="6%" bordercolor="#0000FF">Tôn giáo</td>
      <td width="6%" bordercolor="#0000FF">Tình trạng hôn nhân</td>
      <td width="6%" bordercolor="#0000FF">Tình trạng sức khỏe</td>
      <td width="16%" bordercolor="#0000FF">Ảnh</td>
       <td width="8%" bordercolor="#0000FF">Thao tác</td>
    </tr>
	<?php
	$max_row = 5;
	$cur_page = 1;
	if(isset($_GET["cur_page"]))
	{
		if($_GET["cur_page"] == "")
		{
			$cur_page = 1;
		}
		else
		{
			$cur_page = $_GET["cur_page"];
		}
	}
	$start = ($cur_page - 1)*$max_row;
	$end = $start + $max_row;
	$count = 0;
	while($i = mysql_fetch_array($kq))
	{
	$count = $count + 1;
	if(($count > $start)&&($count <= $end))
	{
	?>
    <tr>
      <td height="80"><?php echo $i[0];?></td>
      <td><?php echo $i[1];?></td>
      <td><?php echo $i[2];?></td>
      <td><?php echo $i[3];?></td>
      <td><?php echo $i[4];?></td>
      <td><?php echo $i[5];?></td>
      <td><?php echo $i[6];?></td>
      <td><?php echo $i[7];?></td>
      <td><?php echo $i[8];?></td>
      <td><?php echo $i[9];?></td>
      <td><img width="148" height="71" src="<?php echo $i[10];?>" /></td>
      
	  <td width="8%">
	  <?php
	  if(isset($_SESSION["s_user"]))
	  {
	  	if($_SESSION["s_phanquyen"] == "1")
	  	{
	  		print '<a href="tv_edit1.php?MaNV='.$i["MaNV"].'">Sửa</a>'; 
			print ' | ';?>
		<a href="sp_process_delete.php?MaNV=<?php echo $i["MaNV"];?>" onclick="return confirm('Bạn có muốn xoa hay không');">Xóa</a>
	 <?php
	 	}
	  	else
	  	{
	  		echo " ";
	  	}
	  }
	  else
	  {
	  	echo "";
	  } 
	  ?>	  
	  </td>
    </tr>
	<?php
	}
	}
	?>
</table>
<div align="center">
<?php
if($num_row>$max_row)
	{
		$total_page=ceil($num_row/$max_row);
		for($m=1;$m<=$total_page;$m++)
		{
			if($m!=$cur_page)
			echo "<a href='tv_danhmuc.php?cur_page=$m'>$m</a> &nbsp;&nbsp;";
			else
			echo "<span>$m</span> &nbsp;&nbsp;";
		}
	}
?>
</div>
</body>
</html>
