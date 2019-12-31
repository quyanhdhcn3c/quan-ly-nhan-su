<?php
//mở kết nối tới sql
$link = mysql_connect("localhost","root","") or die(" kết nối không thành công");

//kết nối tới csdl
mysql_query("SET NAMES 'utf8'",$link);
mysql_select_db("ql",$link);
?>