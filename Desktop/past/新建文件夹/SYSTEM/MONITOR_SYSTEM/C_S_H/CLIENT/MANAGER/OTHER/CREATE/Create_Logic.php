<?php
	$id = $_POST['id'];
	$name = $_POST['name'];
	$nickname = $_POST['nickname'];
	$password = $_POST['password'];
	$mobile_phone = $_POST['mobile_phone'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	
	$con= mysqli_connect('localhost','root','','server_online_monitoring_system');
	$sqlu = "insert into user_table(user_id, user_name, user_nickname, user_password, user_mobile_phone, user_email, user_address) values
									('$id','$name','$nickname','$password','$mobile_phone','$email','$address')";
	$resu = mysqli_query($con,$sqlu);
	mysqli_close($con);
	header('Location:Create_Success.php');
?>