<?php
	session_start();
	$con= mysqli_connect('localhost','root','','server_online_monitoring_system');
	if($_SESSION['manager'] == '管理员')
	{
		$sqlm = "delete from manager_log_table where manager_id ='".$_SESSION['id']."' ";
		$resm = mysqli_query($con,$sqlm);
		mysqli_close($con);
		header('Location:Nothing.php');
	}
	else
	{
		$sqlu = " delete from user_log_table where user_id ='".$_SESSION['id']."' ";
		$resu = mysqli_query($con,$sqlu);
		mysqli_close($con);
		header('Location:Nothing.php');
	}
?>