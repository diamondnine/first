<?php
	echo '<!DOCTYPE html>';
	if($_GET['info'] == "nickname")
	{
		echo '<SCRIPT>alert("昵称错误");</SCRIPT>';
	}
	else if($_GET['info'] == "password")
	{
		echo '<SCRIPT>alert("密码错误");</SCRIPT>';
	}
	else
	{
		echo '<SCRIPT>alert("验证码错误");</SCRIPT>';
	}
	include 'Login.php';
?>