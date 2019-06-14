<?php
	if(($_POST['cpu_usage']<1)||(99<$_POST['cpu_usage']))
	{
		header('Location:Cpu_Error.php');
	}
	else if(($_POST['memory_usage']<1)||(99<$_POST['memory_usage']))
	{
		header('Location:Memory_Error.php');
	}
	else if(($_POST['hardpan_usage']<1)||(99<$_POST['hardpan_usage']))
	{
		header('Location:Hardpan_Error.php');
	}
	else
	{
		$con= mysqli_connect('localhost','root','','server_online_monitoring_system');
		$sql = " update server_information_table set cpu_usage ='".$_POST['cpu_usage']."',
														memory_usage ='".$_POST['memory_usage']."',
														hardpan_usage = '".$_POST['hardpan_usage']."' where 1 ";
		$res = mysqli_query($con,$sql);
		mysqli_close($con);
		header('Location:Usage_Manager_Success.php');
	}
?>