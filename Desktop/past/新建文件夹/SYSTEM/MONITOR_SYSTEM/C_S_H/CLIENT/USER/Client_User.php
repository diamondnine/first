<!DOCTYPE html>
<?php
	//序号（id）与权限(manager or user)不允许修改
	session_start();
?>
	<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
		<style type="text/css">
			::-webkit-input-placeholder
			{
				color:#454545;opacity:1;
			}
			.changec:hover
			{
				background-color:#CAFF70;
			}
		</style>
	</head>
	<body>
	<form method="post" action="Client_User_Logic.php">
		<br>
		<span style="margin-top:45px;margin-left:390px;">不可修改权限： </span>
		<input style="width:220px;height:24px;margin-top:30px;outline:none;padding:10px;font-size:13px;border-top:1px solid #312E3D;
						border-left:1px solid #312E3D;border-right:1px solid #312E3D;border-bottom:1px solid #56536A;background:rgba(0, 0, 0, 0);"
				type="text" readonly="true"  placeholder="<?php echo $_SESSION['manager'];?>" ></input><br>
		<span style="margin-top:35px;margin-left:390px;">不可修改序号： </span>
		<input style="width:220px;height:24px;margin-top:20px;outline:none;padding:10px;font-size:13px;border-top:1px solid #312E3D;
						border-left:1px solid #312E3D;border-right:1px solid #312E3D;border-bottom: 1px solid #56536A;background:rgba(0, 0, 0, 0);"
				type="text" readonly="true" placeholder="<?php echo $_SESSION['id']; ?>" ></input><br>
		<span style="margin-top:35px;margin-left:390px;">修 改 昵 称 ： </span>
		<input style="width:220px;height:24px;margin-top:20px;outline:none;padding:10px;font-size:13px;border-top:1px solid #312E3D;
						border-left:1px solid #312E3D;border-right:1px solid #312E3D;border-bottom: 1px solid #56536A;background:rgba(0, 0, 0, 0);"
			type="text" autocomplete="off" required="required" placeholder="<?php echo $_SESSION['nickname']; ?>" name="nickname"></input><br>
		<span style="margin-top:35px;margin-left:390px;">修 改 密 码  ：</span>
		<input style="width:220px;height:24px;margin-top:20px;outline:none;padding:10px;font-size:13px;border-top:1px solid #312E3D;
						border-left:1px solid #312E3D;border-right:1px solid #312E3D;border-bottom: 1px solid #56536A;background:rgba(0, 0, 0, 0);"
				type="text" autocomplete="off" required="required" placeholder="<?php echo $_SESSION['password']; ?>" name="password" ></input> <br>
		<span style="margin-top:35px;margin-left:390px;">修改真实姓名：</span>
		<input style="width:220px;height:24px;margin-top:20px;outline:none;padding:10px;font-size:13px;border-top:1px solid #312E3D;
						border-left:1px solid #312E3D;border-right:1px solid #312E3D;border-bottom: 1px solid #56536A;background:rgba(0, 0, 0, 0);"
				type="text" autocomplete="off" required="required" placeholder="<?php echo $_SESSION['name']; ?>" name="name" ></input><br>
		<span style="margin-top:35px;margin-left:390px;">修改联系电话：</span>
		<input style="width:220px;height:24px;margin-top:20px;outline:none;padding:10px;font-size:13px;border-top:1px solid #312E3D;
						border-left:1px solid #312E3D;border-right:1px solid #312E3D;border-bottom: 1px solid #56536A;background:rgba(0, 0, 0, 0);"
				type="text" autocomplete="off" required="required" placeholder="<?php echo $_SESSION['mobile_phone']; ?>" name="mobile_phone" ></input><br>
		<span style="margin-top:35px;margin-left:390px;">修改电子邮箱：</span>
		<input style="width:220px;height:24px;margin-top:20px;outline:none;padding:10px;font-size:13px;border-top:1px solid #312E3D;
						border-left:1px solid #312E3D;border-right:1px solid #312E3D;border-bottom: 1px solid #56536A;background:rgba(0, 0, 0, 0);"
				type="text" autocomplete="off" required="required" placeholder="<?php echo $_SESSION['email']; ?>" name="email" ></input><br>
		<span style="margin-top:35px;margin-left:390px;">修改联系地址：</span>
		<input style="width:220px;height:24px;margin-top:20px;outline:none;padding:10px;font-size:13px;border-top:1px solid #312E3D;
						border-left:1px solid #312E3D;border-right:1px solid #312E3D;border-bottom: 1px solid #56536A;background:rgba(0, 0, 0, 0);"
				type="text" autocomplete="off" required="required" placeholder="<?php echo $_SESSION['address']; ?>" name="address" ></input><br>
		
		<button style="width:170px;height:55px;font-size:30px;margin-left:538px;margin-top:20px;border-radius:15px;border:0px;color:#27408B;"
				class="changec" type="submit">保存</button>
		</form>
		</body>
	</html>