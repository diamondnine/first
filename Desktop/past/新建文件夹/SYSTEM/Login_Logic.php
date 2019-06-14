<?php
	session_start();//启用session
	@$_SESSION['nickname'] = $_POST['nickname'];
	@$_SESSION['password'] = $_POST['password'];
	
	$con= mysqli_connect('localhost','root','','server_online_monitoring_system');//链接数据库，数据库地址，用户名，密码，数据库名	
	
	$sqlm = " select * from manager_table where manager_nickname ='".$_SESSION['nickname']."' ";
	$resm = mysqli_query($con,$sqlm);
	$sqlu = " select * from user_table where user_nickname ='".$_SESSION['nickname']."' ";
	$resu = mysqli_query($con,$sqlu);
	date_default_timezone_set('PRC');
	$login_time = date('Y-m-d H:i:s');

	if($rem = mysqli_fetch_array($resm,MYSQL_ASSOC))//判断查询是否成功	
	{
		if($_SESSION['password'] == $rem['manager_password'])
		{
		@$_SESSION['id'] = $rem['manager_id'];
		@$_SESSION['name'] = $rem['manager_name'];
		@$_SESSION['mobile_phone'] = $rem['manager_mobile_phone'];
		@$_SESSION['email'] = $rem['manager_email'];
		@$_SESSION['address'] = $rem['manager_address'];
		@$_SESSION['manager'] = "管理员";
		$id = $_SESSION['id'];
		mysqli_close($con);//关闭数据库连接
		
		$conmt= mysqli_connect('localhost','root','','server_online_monitoring_system');
		$sqlml = "insert into manager_log_table(manager_id, manager_login_time) values ('$id','$login_time')  ";
		$resml = mysqli_query($conmt,$sqlml);//查询manager
		mysqli_close($conmt);
		if(strtolower($_POST['authcode'])== $_SESSION['authcode'])
		{
			$conmt= mysqli_connect('localhost','root','','server_online_monitoring_system');
			$sqlml = "insert into manager_log_table(manager_id, manager_login_time) values ('$id','$login_time')  ";
			$resml = mysqli_query($conmt,$sqlml);//查询manager
			mysqli_close($cont);
			header('Location:MONITOR_SYSTEM/Monitor.php');
		}
		else
		{
			$reason = "identifying";
			header('Location:Login_Restart.php?info='.$reason);
		}
		}
		else
		{
			$reason = "password";
			header('Location:Login_Restart.php?info='.$reason);
		}
	}
	else if($reu = mysqli_fetch_array($resu,MYSQL_ASSOC))
	{
		if($_SESSION['password'] == $reu['user_password'])
		{
		@$_SESSION['id'] = $reu['user_id'];
		@$_SESSION['name'] = $reu['user_name'];	
		@$_SESSION['mobile_phone'] = $reu['user_mobile_phone'];
		@$_SESSION['email'] = $reu['user_email'];
		@$_SESSION['address'] = $reu['user_address'];
		@$_SESSION['manager'] = "用户";
		$id = $_SESSION['id'];
		mysqli_close($con);//关闭数据库连接
		
		if(strtolower($_POST['authcode'])== $_SESSION['authcode'])
		{
		$conut= mysqli_connect('localhost','root','','server_online_monitoring_system');
		$sqlul = " insert into user_log_table(user_id, user_login_time) values ('$id','$login_time')  ";
		$resul = mysqli_query($conut,$sqlul);//查询manager
		mysqli_close($conut);
		header('Location:MONITOR_SYSTEM/Monitor.php');
		}
		else
		{
			$reason = "identifying";
			header('Location:Login_Restart.php?info='.$reason);
		}
		}
		else
		{
			$reason = "password";
			header('Location:Login_Restart.php?info='.$reason);
		}
	}
	else
	{
		$reason = "nickname";
		header('Location:Login_Restart.php?info='.$reason);
	}
?>