<?php
include ("ketnoi.inc");
if(isset($_GET["MaNV"]))
{
	$MaNV = $_GET["MaNV"];
	$kq = mysql_query("SELECT * FROM chucvu where MaNV = '$MaNV'",$link);
	if($kq)
	{
		$i = mysql_fetch_row($kq);
		$MaNV = $i[0];
		$MaPB = $i[1];
		$TenPB = $i[2];
		$MaCV = $i[3];
		$TenCV = $i[4];
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
<center>
  <h1>Thay đổi chức vụ</h1></center>
<form id="form1" name="form1" method="post" action="tv_process_edit2.php" >
  <table width="100%" border="0" height="100%">
    <tr>
      <td colspan="5"><h4><a href="chucvu.php">Danh mục chức vụ</a></h4>
      <h4><a href="index.php">Quay trở lại trang chủ</a></h4></td>
    </tr>
    <tr>
      <td width="16%" rowspan="15">&nbsp;</td>
      <td width="9%" rowspan="15">&nbsp;</td>
      <td width="23%"><div align="left">Mã nhân viên</div></td>
      <td width="33%"><label>
        <input name="txtmanv" type="text" id="txtmanv" size="30" readonly="readonly" value="<?php echo $MaNV; ?>" />
      </label> 
      &nbsp;</td>
      <td width="16%" rowspan="15">&nbsp;</td>
    </tr>
    <tr>
      <td><div align="left">Mã phòng ban</div></td>
      <td><label>
        <input name="txtmphban" type="text" id="txtmphban" size="30" value="<?php echo $MaPB; ?>" />
      </label></td>
    </tr>
    <tr>
      <td><div align="left">Tên phòng ban</div></td>
      <td><label>
        <input name="txttphban" type="text" id="txttphban" size="30" value="<?php echo $TenPB; ?>" />
      </label></td>
    </tr>
    <tr>
      <td><div align="left">Mã chức vụ</div></td>
      <td><label>
        <input name="txtmchvu" type="text" id="txtmchvu" size="30" value="<?php echo $MaCV;?>" />
      </label>
      <label></label></td>
    </tr>
    <tr>
      <td><div align="left">Tên chức vụ</div></td>
      <td><label>
        <input name="txttchvu" type="text" id="txttchvu" size="30" value="<?php echo $TenCV; ?>" />
      </label></td>
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

