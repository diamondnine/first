<?php	
	session_start();
	$con= mysqli_connect('localhost','root','','server_online_monitoring_system');	
	if(@$_REQUEST['operate'] == "inquiry")
	{
		if($_REQUEST['select'] == "id")
		{
			$sqlu = " select * from user_table where user_id ='".$_REQUEST['match']."' ";
			$resu = mysqli_query($con,$sqlu);
			if($reu = mysqli_fetch_array($resu,MYSQL_ASSOC))
			{
				include 'INQUIRY/Inquiry.php';
			}
			else
			{
				header('Location:None.php');
			}
		}
		else
		{
			$sqlu = " select * from user_table where user_nickname ='".$_REQUEST['match']."' ";
			$resu = mysqli_query($con,$sqlu);
			if($reu = mysqli_fetch_array($resu,MYSQL_ASSOC))
			{
				include 'INQUIRY/Inquiry.php';
			}
			else
			{
				header('Location:None.php');
			}
		}
	}
	else if(@$_REQUEST['operate'] == "alter")
	{
		if($_REQUEST['select'] == "id")
		{
			$sqlu = " select * from user_table where user_id ='".$_REQUEST['match']."' ";
			$resu = mysqli_query($con,$sqlu);
			if($reu = mysqli_fetch_array($resu,MYSQL_ASSOC))
			{
				
				$_SESSION['change'] = $reu['user_id'];
				include 'ALTER/Alter.php';
			}
			else
			{
				header('Location:None.php');
			}		
		}
		else
		{
			$sqlu = " select * from user_table where user_nickname ='".$_REQUEST['match']."' ";
			$resu = mysqli_query($con,$sqlu);
			if($reu = mysqli_fetch_array($resu,MYSQL_ASSOC))
			{
				include 'ALTER/Alter.php';
			}
			else
			{
				header('Location:None.php');
			}
		}
	}
	else if(@$_REQUEST['operate'] == "cut")
	{
		if($_REQUEST['select'] == "id")
		{
			$sqlu = " select * from user_table where user_id ='".$_REQUEST['match']."' ";
			$resu = mysqli_query($con,$sqlu);
			if($reu = mysqli_fetch_array($resu,MYSQL_ASSOC))
			{
				$sqlu = " delete from user_table where user_id ='".$_REQUEST['match']."' ";
				$resu = mysqli_query($con,$sqlu);
				header('Location:CUT/Cut_Success.php');
			}
			else
			{
				header('Location:None.php');
			}				
		}
		else
		{
			$sqlu = " select * from user_table where user_nickname ='".$_REQUEST['match']."' ";
			$resu = mysqli_query($con,$sqlu);
			if($reu = mysqli_fetch_array($resu,MYSQL_ASSOC))
			{
				$sqlu = " delete from user_table where user_nickname ='".$_REQUEST['match']."' ";
				$resu = mysqli_query($con,$sqlu);
				header('Location:CUT/Cut_Success.php');
			}
			else
			{
				header('Location:None.php');
			}	
		}
	}	
	else if(@$_REQUEST['operate'] == "create")
	{
		if($_REQUEST['select'] == "id")
		{
			$sqlu = " select * from user_table where user_id ='".$_REQUEST['match']."' ";
			$resu = mysqli_query($con,$sqlu);
			if(!($reu = mysqli_fetch_array($resu,MYSQL_ASSOC)))
			{
				include '/CREATE/Create.php';
			}
			else
			{
				header('Location:CREATE/Error.php');
			}				
		}
		else
		{
			$sqlu = " select * from user_table where user_nickname ='".$_REQUEST['match']."' ";
			$resu = mysqli_query($con,$sqlu);
			if(!($reu = mysqli_fetch_array($resu,MYSQL_ASSOC)))
			{
				include '/CREATE/Create.php';
			}
			else
			{
				header('Location:CREATE/Error.php');
			}	
		}
	}
	else
	{
		$sqlu = " select * from user_table where 1 ";
		$resu = mysqli_query($con,$sqlu);
		include'INQUIRY/See_All.php';
	}
	
?>