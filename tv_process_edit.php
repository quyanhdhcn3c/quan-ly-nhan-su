<?php
//nhận dữ liệu lấy về bên trang sửa thông tin
$MaNV = !(isset($_POST["txtmanv"]))?"":$_POST["txtmanv"];
$Hoten = !(isset($_POST["txthoten"]))?"":$_POST["txthoten"];
$Ngaysinh = !(isset($_POST["txtngaysinh"]))?"":$_POST["txtngaysinh"];
$Noisinh = !(isset($_POST["txtnoisinh"]))?"":$_POST["txtnoisinh"];
$Nguyenquan = !(isset($_POST["txtngquan"]))?"":$_POST["txtngquan"];
$Quoctich = !(isset($_POST["txtqtich"]))?"":$_POST["txtqtich"];
$Dantoc = !(isset($_POST["txtdantoc"]))?"":$_POST["txtdantoc"];
$Tongiao = !(isset($_POST["txttongiao"]))?"":$_POST["txttongiao"];
$Tinhtranghonnhan = !(isset($_POST["txttthonnhan"]))?"":$_POST["txttthonnhan"];
$Tinhtrangsuckhoe = !(isset($_POST["txtttsuckhoe"]))?"":$_POST["txtsuckhoe"];
//kết nối tới csdl
		include("ketnoi.inc");
		$ketqua_them = mysql_query("update thongtinnhanvien set Hoten='$Hoten',Ngaysinh='$Ngaysinh',Noisinh='$Noisinh',Nguyenquan='$Nguyenquan',Quoctich='$Quoctich',Dantoc='$Dantoc',Tongiao='$Tongiao',Tinhtranghonnhan='$Tinhtranghonnhan', Tinhtrangsuckhoe='$Tinhtrangsuckhoe' where MaNV='$MaNV'",$link);
				if($ketqua_them)
				{
					header("location:tv_add_success.php?MaNV=".$MaNV.""); 
				}
				else
				{
					?>
					<script language="javascript">
					window.alert(" Có lỗi! Không thực hiện thay đổi được! <br> Vui lòng thử lại");
					</script>
					<?php
					header("location:tv_edit1.php?MaNV='$MaNV'");
				}
	
?>