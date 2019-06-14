<?php
echo '<html lang="en">
				<head>
					<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
					<title>监控</title>	
				</head>
				<body>
				<div style="width:1100px;height:150px">
				<span style="float:left;margin-left:500px;margin-top:120px;font-size:20">';
					echo '查询结果！<br>';
				echo '</span>';
				echo '<span style="float:left;margin-left:500px;margin-top:20px;font-size:20">';
					echo '昵称：'.$reu['user_nickname'];
				echo '</span>';
				echo '<br>';
				echo '<span style="float:left;margin-left:500px;margin-top:20px;font-size:20">';
					echo '密码：'.$reu['user_password'];
				echo '</span>';
				echo '<br>';
				echo '<span style="float:left;margin-left:500px;margin-top:20px;font-size:20">';
					echo '权限：用户';
				echo '</span>';
				echo '<br>';
				echo '<span style="float:left;margin-left:500px;margin-top:20px;font-size:20">';
					echo '序号：'.$reu['user_id'];
				echo '</span>';
				echo '<br>';
				echo '<span style="float:left;margin-left:500px;margin-top:20px;font-size:20">';
					echo '联系电话：'.$reu['user_mobile_phone'];
				echo '</span>';
				echo '<br>';
				echo '<span style="float:left;margin-left:500px;margin-top:20px;font-size:20">';
					echo '邮箱号码：'.$reu['user_email'];
				echo '</span>';
				echo '<br>';
				echo '<span style="float:left;margin-left:500px;margin-top:20px;font-size:20">';
					echo '居住地址：'.$reu['user_address'];
				echo '</span>';
				echo '</div>';
				echo '</body>';
				echo '</html>';
?>