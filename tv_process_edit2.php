<?php
//nhận dữ liệu lấy về bên trang sửa thông tin
$MaNV = !(isset($_POST["txtmanv"]))?"":$_POST["txtmanv"];
$MaPB = !(isset($_POST["txtmphban"]))?"":$_POST["txtmphban"];
$TenPB = !(isset($_POST["txttphban"]))?"":$_POST["txttphban"];
$MaCV = !(isset($_POST["txtmchvu"]))?"":$_POST["txtmchvu"];
$TenCV = !(isset($_POST["txttchvu"]))?"":$_POST["txttchvu"];

//kết nối tới csdl
		include("ketnoi.inc");
		$ketqua_them = mysql_query("update chucvu set MaPB='$MaPB',TenPB='$TenPB',MaCV='$MaCV',TenCV='$TenCV' where MaNV='$MaNV'",$link);
				if($ketqua_them)
				{
					header("location:tv_add_success2.php?MaNV=".$MaNV.""); 
				}
				else
				{
					?>
					<script language="javascript">
					window.alert(" Có lỗi! Không thực hiện thay đổi được! <br> Vui lòng thử lại");
					</script>
					<?php
					header("location:tv_edit2.php?MaNV='$MaNV'");
				}
	
?>