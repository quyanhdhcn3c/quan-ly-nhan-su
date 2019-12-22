<?php
//kiểm tra sự tồn tại của password và user
$user = !(isset($_POST["txtuser"]))?"":$_POST["txtuser"];
$pass = !(isset($_POST["txtpass"]))?"":$_POST["txtpass"];
//kết nối tới sql
include("ketnoi.inc");
//kiểm tra xem user có và password có trong cơ sở dữ liệu hay k
$ketqua = mysql_query("select username,password from user where ((username = '$user') and (password = '$pass')) ",$link);
$num = mysql_num_rows($ketqua);
//lấy số dòng trả ve
if($num == 0 )
{
	?>
	<script language="javascript">
	window.alert(" Sai tên đăng nhập hoặc mật khẩu");
	window.location = "index.php";
	</script>
	<?php
}
else
{	
		session_start();
		$s_user = $user;
		$ketqua_phanquyen = mysql_query("select * from user where username = '$user'",$link);
		$i = mysql_fetch_row($ketqua_phanquyen);
		$s_phanquyen = $i[3];
		session_register("s_user");
		session_register("s_phanquyen");
		header("location:index.php");
}
?>

