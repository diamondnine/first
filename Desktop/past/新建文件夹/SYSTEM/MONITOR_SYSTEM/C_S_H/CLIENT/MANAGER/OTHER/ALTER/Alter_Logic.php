<?php
	session_start();
	$con= mysqli_connect('localhost','root','','server_online_monitoring_system');
	$sqlu = " update user_table set user_nickname ='".$_POST['nickname']."',
										user_password = '".$_POST['password']."',
										user_name = '".$_POST['name']."',
										user_mobile_phone = '".$_POST['mobile_phone']."',
										user_email = '".$_POST['email']."',
										user_address = '".$_POST['address']."'	where user_id = '".$_SESSION['change']."'  ";
	$resu = mysqli_query($con,$sqlu);
	mysqli_close($con);
	header('Location:Alter_Success.php');
?>