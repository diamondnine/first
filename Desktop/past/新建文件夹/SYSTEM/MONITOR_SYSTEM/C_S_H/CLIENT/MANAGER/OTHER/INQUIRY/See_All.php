<?php

	echo '<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
			<title>登录成功</title>	
			<style type="text/css">
			.changec:hover
			{
				background-color:#CAFF70;
			}
			</style>
		</head>
		<body>
		<div style="margin-left:120px;margin-top:60px">';
		$count = 0;
		while($row = $resu->fetch_assoc())
		{
			$count++;
			echo '<div style="margin-top:40px;font-size:20px;">';
			echo '<div>'.$count.'</div>';
			echo '	<span style="width:100px;height:30px;line-height:30px;">序号：'.$row['user_id'].'</span><br>
					<div style="float:left;width:350px;height:30px;line-height:30px;">姓&nbsp&nbsp名：'.$row['user_name'].'</div>
					<div style="float:left;width:350px;height:30px;line-height:30px;">昵&nbsp&nbsp称：'.$row['user_nickname'].'</div>
					<div style="float:left;width:350px;height:30px;line-height:30px;">密&nbsp&nbsp码：'.$row['user_password'].'</div><br>
				  </div>
					
				  <div style="margin-top:10px;font-size:20px;">
						<div style="float:left;width:350px;height:30px;line-height:30px;">手机号码：'.$row['user_mobile_phone'].'</div>
						<div style="float:left;width:350px;height:30px;line-height:30px;">电子邮箱：'.$row['user_email'].'</div>
						<div style="float:left;width:350px;height:30px;line-height:30px;">联系地址：'.$row['user_address'].'</div><br>
				  </div>';
		}
		echo '</div>
				<button style="width:100px;height:60px;font-size:30px;border:0px;border-radius:8px;color:#404040;position:fixed;bottom:0;right:0;"
						class="changec"><a href="../Client_Manager.php" style="text-decoration:none">完成</a></button>
		</body>
	</html>';
?>