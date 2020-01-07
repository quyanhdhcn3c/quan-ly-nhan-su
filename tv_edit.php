<?php
include ("ketnoi.inc");
if(isset($_GET["username"]))
{
	$username = $_GET["username"];
	$kq = mysql_query("SELECT * FROM thongtinnhanvien JOIN user ON ( thongtinnhanvien.MaNV = user.MaNV ) where username = '$username'",$link);
	if($kq)
	{
		$i = mysql_fetch_row($kq);
		$MaNV = $i[0];
		$Hoten = $i[1];
		$Ngaysinh = $i[2];
		$Noisinh = $i[3];
		$Nguyenquan = $i[4];
		$Quoctich = $i[5];
		$Dantoc = $i[6];
		$Tongiao = $i[7];
		$Tinhtranghonnhan = $i[8];
		$Tinhtrangsuckhoe = $i[9];
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<center><h1>Thay đổi thông tin người dùng</h1></center>
<form id="form1" name="form1" method="post" action="tv_process_edit.php" >
  <table width="100%" border="0" height="100%">
    <tr>
      <td colspan="5"><a href="index.php">Quay trở lại trang chủ</a></td>
    </tr>
    <tr>
      <td width="16%" rowspan="15">&nbsp;</td>
      <td width="9%" rowspan="15">&nbsp;</td>
      <td width="23%"><div align="left">MaNV</div></td>
      <td width="33%"><label>
        <input name="txtmanv" type="text" id="txtmanv" size="30" readonly="readonly" value="<?php echo $MaNV; ?>" />
      </label> 
      &nbsp;(*)</td>
      <td width="16%" rowspan="15">&nbsp;</td>
    </tr>
    <tr>
      <td><div align="left">Họ tên </div></td>
      <td><label>
        <input name="txthoten" type="text" id="txthoten" size="30" value="<?php echo $Hoten; ?>" /> 
(*)      </label></td>
    </tr>
    <tr>
      <td><div align="left">Ngày sinh </div></td>
      <td><label>
        <input name="txtngaysinh" type="text" id="txtngaysinh" size="10" maxlength="10" value="<?php echo $Ngaysinh; ?>" />
      </label></td>
    </tr>
    <tr>
      <td><div align="left">Nơi sinh</div></td>
      <td><label>
        <input name="txtnoisinh" type="text" id="txtnoisinh" size="30" value="<?php echo $Noisinh;?>" />
      </label>
      <label></label></td>
    </tr>
    <tr>
      <td><div align="left">Nguyên quán</div></td>
      <td><label>
        <input name="txtngquan" type="text" id="txtngquan" size="30" value="<?php echo $Nguyenquan; ?>" />
      </label></td>
    </tr>
    <tr>
      <td><div align="left">Quốc tịch</div></td>
      <td><label>
        <input name="txtqtich" type="text" id="txtqtich" size="30" value="<?php echo $Quoctich; ?>" />
      </label></td>
    </tr>
    <tr>
      <td><div align="left">Dân tộc</div></td>
      <td><label>
        <input name="txtdantoc" type="text" id="txtdantoc" size="30"  value="<?php echo $Dantoc; ?>" />
      </label></td>
    </tr>
	<tr>
		<td><center>
		  <div align="left">Tôn giáo</div>
		</center></td>
		<td><input name="txttongiao" type="text" id="txttongiao" size="30"  value="<?php echo $Tongiao; ?>" /></td>
	</tr>
    <tr>
      <td><div align="left">Tình trạng hôn nhân</div></td>
      <td><input name="txttthonnhan" type="text" id="txttthonnhan" size="30"  value="<?php echo $Tinhtranghonnhan; ?>" /></td>
      <td width="1%">&nbsp;</td>
      <td width="1%">&nbsp;</td>
      <td width="1%">&nbsp;</td>
    </tr>
    <tr>
      <td><div align="left">Tình trạng sức khỏe</div></td>
      <td><input name="txtttsuckhoe" type="text" id="txtttsuckhoe" size="30"  value="<?php echo $Tinhtrangsuckhoe; ?>" /></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="5">&nbsp;</td>
    </tr>
    <tr>
      <td><input name="btnsua" type="submit" id="btnsua" value="    Sửa   " /></td>
      <td><input name="btnsua2" type="reset" id="btnsua2" value="Làm lại" /></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>

