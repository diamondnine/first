<?php
	session_start();
	@$_SESSION['name'] = $_POST['name'];
	@$_SESSION['nickname'] = $_POST['nickname'];
	@$_SESSION['password'] = $_POST['password'];
	@$_SESSION['mobile_phone'] = $_POST['mobile_phone'];
	@$_SESSION['email'] = $_POST['email'];
	@$_SESSION['address'] = $_POST['address'];

	$con= mysqli_connect('localhost','root','','server_online_monitoring_system');
	$sqlm = " update manager_table set manager_nickname ='".$_SESSION['nickname']."',
										manager_password = '".$_SESSION['password']."',
										manager_name = '".$_SESSION['name']."',
										manager_mobile_phone = '".$_SESSION['mobile_phone']."',
										manager_email = '".$_SESSION['email']."',
										manager_address = '".$_SESSION['address']."' where manager_id = '".$_SESSION['id']."'  ";
	$resm = mysqli_query($con,$sqlm);
	mysqli_close($con);
	header('Location:Client_Manager_Self_Success.php');
?>