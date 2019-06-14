<!DOCTYPE html>
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
			<form method="post" action="ALTER/Alter_Logic.php"><br>
				<span style="margin-left:390px;margin-top:40px;">不可修改权限： </span>
				<input style="width:220px;height:25px;margin-top:40px;outline:none;padding:10px;font-size:13px;border-top:1px solid #312E3D;
								border-left:1px solid #312E3D;border-right:1px solid #312E3D;border-bottom:1px solid #56536A;background:rgba(0,0,0,0);"
						type="text" readonly="true" placeholder="用户"></input><br>
				<span style="margin-left:390px;">不可修改序号： </span>
				<input style="width:220px;height:25px;margin-top:20px;outline:none;padding:10px;font-size:13px;border-top:1px solid #312E3D;
								border-left:1px solid #312E3D;border-right:1px solid #312E3D;border-bottom:1px solid #56536A;background:rgba(0,0,0,0);"
								type="text" readonly="true" placeholder="<?php echo $reu['user_id']; ?>"></input><br>
				<span style="margin-left:390px;">修 改 昵 称 ： </span>
				<input style="width:220px;height:25px;margin-top:20px;outline:none;padding:10px;font-size:13px;border-top:1px solid #312E3D;
								border-left:1px solid #312E3D;border-right:1px solid #312E3D;border-bottom:1px solid #56536A;background:rgba(0,0,0,0);"
								type="text" autocomplete="off" required="required" placeholder="<?php echo $reu['user_nickname']; ?>" name="nickname"></input><br>
				<span style="margin-left:390px;">修 改 密 码  ：</span>
				<input style="width:220px;height:25px;margin-top:20px;outline:none;padding:10px;font-size:13px;border-top:1px solid #312E3D;
								border-left:1px solid #312E3D;border-right:1px solid #312E3D;border-bottom:1px solid #56536A;background:rgba(0,0,0,0);"
								type="text" autocomplete="off" required="required" placeholder="<?php echo $reu['user_password']; ?>" name="password"></input><br>
				<span style="margin-left:390px;">修改真实姓名：</span>
				<input style="width:220px;height:25px;margin-top:20px;outline:none;padding:10px;font-size:13px;border-top:1px solid #312E3D;
								border-left:1px solid #312E3D;border-right:1px solid #312E3D;border-bottom:1px solid #56536A;background:rgba(0,0,0,0);"
								type="text" autocomplete="off" required="required" placeholder="<?php echo $reu['user_name']; ?>" name="name"></input><br>
				<span style="margin-left:390px;">修改联系电话：</span>
				<input style="width:220px;height:25px;margin-top:20px;outline:none;padding:10px;font-size:13px;border-top:1px solid #312E3D;
								border-left:1px solid #312E3D;border-right:1px solid #312E3D;border-bottom:1px solid #56536A;background:rgba(0,0,0,0);"
								type="text" autocomplete="off" required="required" placeholder="<?php echo $reu['user_mobile_phone']; ?>" name="mobile_phone"></input><br>
				<span style="margin-left:390px;">修改电子邮箱：</span>
				<input style="width:220px;height:25px;margin-top:20px;outline:none;padding:10px;font-size:13px;border-top:1px solid #312E3D;
								border-left:1px solid #312E3D;border-right:1px solid #312E3D;border-bottom:1px solid #56536A;background:rgba(0,0,0,0);"
								type="text" autocomplete="off" required="required" placeholder="<?php echo $reu['user_email']; ?>" name="email"></input><br>
				<span style="margin-left:390px;">修改联系地址：</span>
				<input style="width:220px;height:25px;margin-top:20px;outline:none;padding:10px;font-size:13px;border-top:1px solid #312E3D;
								border-left:1px solid #312E3D;border-right:1px solid #312E3D;border-bottom:1px solid #56536A;background:rgba(0,0,0,0);"
								type="text" autocomplete="off" required="required" placeholder="<?php echo $reu['user_address']; ?>" name="address"></input><br>
				<button style="width:170px;height:55px;font-size:30px;margin-left:552px;margin-top:20px;border:0px;border-radius:15px;color:#27408B;"
						class="changec" type="submit">保存</button>
			</form>
		</body>
	</html>