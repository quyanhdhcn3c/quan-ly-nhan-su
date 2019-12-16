<script language="javascript" src="kiemtradl.js">
</script>
<?php
session_start();
if(isset($_SESSION["s_user"]))
{
	if(($_SESSION["s_phanquyen"]) != "1")
	{
		print '<table width="100%" border="0">';	
			print '<tr>';
				print '<td><div align="right"> '.$_SESSION["s_user"].' đang đăng nhập </div></td>';
			print '</tr>';
			print '<tr>';
				print '<td><div align="right"><a href="tv_edit.php?username='.$_SESSION["s_user"].'"> Thay đổi thông tin cá nhân</a> &nbsp;|<a href="thoat.php">Thoát</a></div></td>';
			print '</tr>';
		print '</table>';
	}
	else
	{
	print '<table width="100%" border="0">';	
			print '<tr>';
				print '<td colspan="2"><div align="right">'.$_SESSION["s_user"].' đang đăng nhập </div></td>';
			print '</tr>';
			print '<tr>';
				print '<td colspan="2">&nbsp;</td>';
			print '</tr>';
			print '<tr>';
				print '<td colspan="2"><div align="right"><a href="tv_edit.php?username='.$_SESSION["s_user"].'"> Thay đổi thông tin cá nhân</a> &nbsp;|<a href="thoat.php">Thoát</a></div></td>';
			print '</tr>';
		print '</table>';
	}	
}
else
{
	print '<form id="form1" name="form1" method="post" action="process_ktralogin.php?goto=" onSubmit="return kiemtradl();"  >';
  print '<table width="100%" border="0">';
  print '<tr>';
     print '<td width="3%" colspan="5"><div align="right">Bạn đang là khách!Hãy đăng nhập.</div></td>';
    print '</tr>';
   print '<tr>';
     print '<td width="3%">&nbsp;</td>';
      print '<td width="3%">&nbsp;</td>';
      print '<td width="68%">&nbsp;</td>';
      print '<td width="12%">Username:</td>';
      print '<td width="14%"><label>
        <input name="txtuser" type="text" id="txtuser" size="20" maxlength="20" />
      </label></td>';
    print '</tr>';
    print '<tr>';
      print '<td>&nbsp;</td>';
      print '<td>&nbsp;</td>';
      print '<td>&nbsp;</td>';
      print '<td>Password</td>';
      print '<td><label>
        <input name="txtpass" type="password" id="txtpass" size="20" maxlength="20" />
      </label></td>';
    print '</tr>';
    print '<tr>';
      print '<td>&nbsp;</td>';
      print '<td>&nbsp;</td>';
      print '<td>&nbsp;</td>';
      print '<td colspan="2"><label>
       <center> <input name="btndn" type="submit" id="btndn" value="   Đăng nhập   " /></center>
      </label></td>';
   print '</tr>';
  print '</table>';
print '</form>';
}
?>
