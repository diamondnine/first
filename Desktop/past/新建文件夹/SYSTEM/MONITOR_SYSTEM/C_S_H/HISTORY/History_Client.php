<?php
	session_start();
	
	$con= mysqli_connect('localhost','root','','server_online_monitoring_system');
		/*	echo '<script type="text/css">
			.changec:hover
		{
			background-color:#CAFF70;
		}
		</script>
		';*/
	
	if($_SESSION['manager'] == "管理员")
	{
	$sqlm = " select * from manager_log_table where manager_id ='".$_SESSION['id']."' ";
	$resm = mysqli_query($con,$sqlm);
		
	if(mysqli_num_rows($resm))//为什么这里不能使用mysqli_fetch_array($resm,MYSQL_ASSOC)、!empty()或者其他的函数？
	{
		echo '<style type="text/css">.changec:hover{background:#CAFF70;}</style>';
		echo '<form method="post" action="History_Clear_Self.php">';
		echo '<button class ="changec" style="width:110px;height:40px;font-size:20px;margin-left:25px;margin-top:15px;border-radius:5px;border:0px;color:#27408B;">清空所有</button>';
		echo '<br><span style="float:left;margin-left:538px;margin-top:20px;font-size:30">';
		echo '您的登录时间：<br>';
		echo '</span>';
		while($row = mysqli_fetch_assoc($resm))
			{
				str_split($row['manager_login_time']);
				echo '<span style="text-align:center;line-height:50px;border:2px solid #F00;width:350px;height:50px;float:left;margin-left:450px;margin-top:20px;font-size:25">';
				for($j=0;$j<19;$j++)
				{
					echo $row['manager_login_time'][$j];
				}
				echo '</span>';
				echo '<br>';
			}	
				echo '</form>';
			mysqli_close($con);
	}
	else
	{
		mysqli_close($con);
		header('Location:Nothing.php');
	}
		
		
	}
	else
	{		
	$sqlu = " select * from user_log_table where user_id ='".$_SESSION['id']."' ";
	$resu = mysqli_query($con,$sqlu);
		
	if(mysqli_num_rows($resu))//为什么这里不能使用mysqli_fetch_array($resu,MYSQL_ASSOC)、!empty()或者其他的函数？
	{
		echo '<style type="text/css">.changec:hover{background:#CAFF70;}</style>';
		echo '<form method="post" action="History_Clear_Self.php">';
		echo '<button class="changec" style="width:110px;height:40px;font-size:20px;margin-left:25px;margin-top:15px;border-radius:5px;border:0px;color:#27408B;">清空所有</button>';
		echo '<br><span style="float:left;margin-left:538px;margin-top:20px;font-size:30">';
		echo '您的登录时间：<br>';
		echo '</span>';
		while($row = mysqli_fetch_assoc($resu))
			{
				str_split($row['user_login_time']);
				echo '<span style="text-align:center;line-height:50px;border:2px solid #F00;width:350px;height:50px;float:left;margin-left:450px;margin-top:20px;font-size:25">';
				for($j=0;$j<19;$j++)
				{
					echo $row['user_login_time'][$j];
				}
				echo '</span>';
				echo '<br>';
			}	
			echo '</form>';
			mysqli_close($con);
	}
	else
	{
		mysqli_close($con);
		header('Location:Nothing.php');
	}
	}
?>