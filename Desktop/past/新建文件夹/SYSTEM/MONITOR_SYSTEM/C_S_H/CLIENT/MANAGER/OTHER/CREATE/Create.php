<?php
echo '
			<html lang="en">
			<head>
				<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
				<style type="text/css">
					.changec:hover
					{
						background-color:#CAFF70;
					}
				</style>
				</head>
				<body>
				<form method="post" action="CREATE/Create_Logic.php">
		<br>';
		echo '<span style="margin-left:390px">不可修改权限： </span>';
		echo '<input type="text" readonly="true" placeholder="';
		echo '用户';
		echo '"style="width:278px;height:47px;margin-top:30px;outline:none;padding: 10px;font-size: 13px;
										border-top: 1px solid #312E3D;border-left: 1px solid #312E3D;border-right: 1px solid #312E3D;   
										border-bottom: 1px solid #56536A;background:rgba(0, 0, 0, 0)"></input> ';
		echo '<br>';
		echo '<span style="margin-left:390px">设 置 序 号 ： </span>';
		echo '<input type="text" autocomplete="off" required="required" value="" placeholder="请输入序号" name="id"
										style="width:278px;height:47px;margin-top:20px;outline:none;padding: 10px;font-size: 13px;
										border-top: 1px solid #312E3D;border-left: 1px solid #312E3D;border-right: 1px solid #312E3D;   
										border-bottom: 1px solid #56536A;background:rgba(0, 0, 0, 0)"></input> ';
		echo '<br>';
		echo '<span style="margin-left:390px">设 置 昵 称 ： </span>';
		echo '<input type="text" autocomplete="off" required="required" value="" placeholder="请输入昵称" name="nickname" style="width:278px;height:47px;margin-top:20px;outline:none;
																										padding: 10px;font-size: 13px;
																										border-top: 1px solid #312E3D;
																										border-left: 1px solid #312E3D;
																										border-right: 1px solid #312E3D;   
																										border-bottom: 1px solid #56536A;   
																										background:rgba(0, 0, 0, 0)"></input> 
		<span style="margin-left:390px">设置账号密码：</span>
		<input type="text" autocomplete="off" required="required" placeholder="';
		echo '请输入密码';
		echo '"name="password" style="width:278px;height:47px;margin-top:20px;outline:none;
									padding: 10px;font-size: 13px;border-top: 1px solid #312E3D;
									border-left: 1px solid #312E3D;border-right: 1px solid #312E3D;   
									border-bottom: 1px solid #56536A;background:rgba(0, 0, 0, 0)"></input> 
		<br>
		<span style="margin-left:390px">设置真实姓名：</span>
		<input type="text" autocomplete="off" required="required" placeholder="';
		echo '请输入姓名';
		echo '" name="name" style="width:278px;height:47px;margin-top:20px;outline:none;
																										padding: 10px;font-size: 13px;
																										border-top: 1px solid #312E3D;
																										border-left: 1px solid #312E3D;
																										border-right: 1px solid #312E3D;   
																										border-bottom: 1px solid #56536A;   
																										background:rgba(0, 0, 0, 0)"></input> 
		<br>
		<span style="margin-left:390px">设置联系电话：</span>
		<input type="text" autocomplete="off" required="required" placeholder="';
		echo '请输入电话';
		echo '" name="mobile_phone" style="width:278px;height:47px;margin-top:20px;outline:none;
																										padding: 10px;font-size: 13px;
																										border-top: 1px solid #312E3D;
																										border-left: 1px solid #312E3D;
																										border-right: 1px solid #312E3D;   
																										border-bottom: 1px solid #56536A;   
																										background:rgba(0, 0, 0, 0)"></input>  
		<br>
		<span style="margin-left:390px">修改电子邮箱：</span>
		<input type="text" autocomplete="off" required="required" placeholder="';
		echo '请输入邮箱';
		echo '"name="email" style="width:278px;height:47px;margin-top:20px;outline:none;
																										padding: 10px;font-size: 13px;
																										border-top: 1px solid #312E3D;
																										border-left: 1px solid #312E3D;
																										border-right: 1px solid #312E3D;   
																										border-bottom: 1px solid #56536A;   
																										background:rgba(0, 0, 0, 0)"></input>  
		<br>
		<span style="margin-left:390px">设置联系地址：</span>
		<input type="text" autocomplete="off" required="required" placeholder="';
		echo '请输入地址';
		echo '" name="address" style="width:278px;height:47px;margin-top:20px;outline:none;
																										padding: 10px;font-size: 13px;
																										border-top: 1px solid #312E3D;
																										border-left: 1px solid #312E3D;
																										border-right: 1px solid #312E3D;   
																										border-bottom: 1px solid #56536A;   
																										background:rgba(0, 0, 0, 0)"></input>
		<br>
		<button class="changec" type="submit" style="width:170px;height:55px;font-size:30px;margin-left:552px;margin-top:20px;border:0px;border-radius:15px;color:#27408B;">保存</button>
		</form>
		</body>
	</html>
	';
?>