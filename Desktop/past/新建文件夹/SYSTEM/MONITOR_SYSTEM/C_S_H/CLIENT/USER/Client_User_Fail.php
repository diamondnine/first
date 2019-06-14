<!DOCTYPE html>
<?php
	//使用者序号（id）与权限(manager or user)不允许修改
	//if($_GET['err']=='nickname')
	//	echo "<script>alert('昵称格式有问题！');</script>";
	//if($_GET['err']=='password')
	//	echo "<script>alert('密码格式有问题！');</script>";
	//if($_GET['err']=='name')
	//	echo "<script>alert('姓名格式有问题！');</script>";
	if($_GET['err']=='mobile_phone')
		echo "<script>alert('手机号码格式有问题！');</script>";
	if($_GET['err']=='email')
		echo "<script>alert('电子邮箱格式有问题！');</script>";

	include 'Client_User.php';
?>