<!DOCTYPE html>
<?php session_start(); ?>
	<html lang="en">
		<head>
			<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
			<title>登录成功</title>
			<style type="text/css">
			.changec:hover
			{
				background-color:#CAFF70;
			}
			::-webkit-input-placeholder
			{ /* WebKit browsers */
				color:#1A1A1A;
			}
			</style>
			<script>
				function inquiry()
				{
					var select = document.getElementById("select").value;
					var match = document.getElementById("match").value;
					var operate = "inquiry";
					alert("查询 "+select+"="+match+" 的账户");
					window.location.href="/SYSTEM/MONITOR_SYSTEM/C_S_H/CLIENT/MANAGER/OTHER/Client_Manager_Other.php?select="+select+"&match="+match+"&operate="+operate;
				}
				function alter()
				{
					var select = document.getElementById("select").value;
					var match = document.getElementById("match").value;
					var operate = "alter";
					alert("修改 "+select+"="+match+" 的账户");
					window.location.href="/SYSTEM/MONITOR_SYSTEM/C_S_H/CLIENT/MANAGER/OTHER/Client_Manager_Other.php?select="+select+"&match="+match+"&operate="+operate;
				}
				function cut()
				{
					var select = document.getElementById("select").value;
					var match = document.getElementById("match").value;
					var operate = "cut";
					alert("删除 "+select+"="+match+" 的账户");
					window.location.href="/SYSTEM/MONITOR_SYSTEM/C_S_H/CLIENT/MANAGER/OTHER/Client_Manager_Other.php?select="+select+"&match="+match+"&operate="+operate;
				}
				function create()
				{
					var select = document.getElementById("select").value;
					var match = document.getElementById("match").value;
					var operate = "create";
					alert("添加一个账户");
					window.location.href="/SYSTEM/MONITOR_SYSTEM/C_S_H/CLIENT/MANAGER/OTHER/Client_Manager_Other.php?select="+select+"&match="+match+"&operate="+operate;
				}
				function see_all()
				{
					window.location.href="/SYSTEM/MONITOR_SYSTEM/C_S_H/CLIENT/MANAGER/OTHER/Client_Manager_Other.php";
				}
			</script>
		</head>
		<body>
			
			<div>
				<span>
					<select id="select" style="width:80px;height:40px;margin-left:10px;background:rgba(0, 0, 0, 0);border-color:#636363;">
						<option value="id" >序号</option>
						<option value="nickname" >昵称</option>
					</select>
					<input id="match" style="width:160px;height:18px;outline:none;padding:10px;font-size:15px;border-top:1px solid;
									border-left:1px solid;border-right:1px solid;border-bottom:1px solid;background:rgba(0, 0, 0, 0);
									border-color:#636363;" type="text" autocomplete="off" required="required" placeholder="请输入匹配值"></input> 
				</span><br>
				<button style="width:60px;height:35px;margin-left:10px;margin-top:5px;font-size:15px;border:0px;border-radius:5px;color:#404040;"
						class="changec" type="submit" onclick="inquiry()">查询</button>
				<button style="width:60px;height:35px;margin-left:2px;margin-top:5px;font-size:15px;border:0px;border-radius:5px;color:#404040;"
						class="changec" type="submit" onclick="alter()">更改</button>
				<button style="width:60px;height:35px;margin-left:2px;margin-top:5px;font-size:15px;border:0px;border-radius:5px;color:#404040;"
						class="changec" type="submit" onclick="cut()">删除</button>
				<button style="width:60px;height:35px;margin-left:2px;margin-top:5px;font-size:15px;border:0px;border-radius:8px;color:#404040;"
						class="changec" type="submit" onclick="create()">添加</button><br>		
			</div>
			<div>
				<button style="width:270px;height:40px;margin-left:10px;margin-top:5px;font-size:30px;border:0px;border-radius:5px;color:#404040;"
						class="changec" type="submit" onclick="see_all()">All</button>
			</div>
			
			<div style="float:left;width:1190px;height:550px;float:left;margin-left:2px;margin-right:3px;margin-bottom:8px;">
				<form method="post" action="SELF/Client_Manager_Self.php"><br>
					<span style="margin-left:390px;">不可修改权限： </span>
					<input style="width:200px;height:25px;margin-top:5px;outline:none;padding:10px;font-size:13px;border-top:1px solid #312E3D;
									border-left:1px solid #312E3D;border-right:1px solid #312E3D;border-bottom: 1px solid #56536A;
									background:rgba(0,0,0,0);border-color:#636363;" type="text" readonly="true"
									placeholder="<?php echo $_SESSION['manager']; ?>"></input><br>
					<span style="margin-left:390px;">不可修改序号： </span>
					<input style="width:200px;height:25px;margin-top:10px;outline:none;padding:10px;font-size:13px;border-top:1px solid #312E3D;
									border-left:1px solid #312E3D;border-right:1px solid #312E3D;border-bottom: 1px solid #56536A;
									background:rgba(0,0,0,0);border-color:#636363;" type="text" readonly="true"
									placeholder="<?php echo $_SESSION['id']; ?>"></input><br>
					<span style="margin-left:390px;">修 改 昵 称 ： </span>
					<input style="width:200px;height:25px;margin-top:10px;outline:none;padding:10px;font-size:13px;border-top:1px solid #312E3D;
									border-left:1px solid #312E3D;border-right:1px solid #312E3D;border-bottom: 1px solid #56536A;
									background:rgba(0,0,0,0);border-color:#636363;" type="text" autocomplete="off" required="required"
									placeholder="<?php echo $_SESSION['nickname']; ?>" name="nickname"></input><br>
					<span style="margin-left:390px;">修 改 密 码  ：</span>
					<input style="width:200px;height:25px;margin-top:10px;outline:none;padding:10px;font-size:13px;border-top:1px solid #312E3D;
									border-left:1px solid #312E3D;border-right:1px solid #312E3D;border-bottom: 1px solid #56536A;
									background:rgba(0,0,0,0);border-color:#636363;" type="text" autocomplete="off" required="required"
									placeholder="<?php echo $_SESSION['password']; ?>" name="password"></input><br>
					<span style="margin-left:390px;">修改真实姓名：</span>
					<input style="width:200px;height:25px;margin-top:10px;outline:none;padding:10px;font-size:13px;border-top:1px solid #312E3D;
									border-left:1px solid #312E3D;border-right:1px solid #312E3D;border-bottom: 1px solid #56536A;
									background:rgba(0,0,0,0);border-color:#636363;" type="text" autocomplete="off" required="required"
									placeholder="<?php echo $_SESSION['name']; ?>" name="name"></input><br>
					<span style="margin-left:390px;">修改联系电话：</span>
					<input style="width:200px;height:25px;margin-top:10px;outline:none;padding:10px;font-size:13px;border-top:1px solid #312E3D;
									border-left:1px solid #312E3D;border-right:1px solid #312E3D;border-bottom: 1px solid #56536A;
									background:rgba(0,0,0,0);border-color:#636363;" type="text" autocomplete="off" required="required"
									placeholder="<?php echo $_SESSION['mobile_phone']; ?>" name="mobile_phone"></input><br>
					<span style="margin-left:390px;">修改电子邮箱：</span>
					<input style="width:200px;height:25px;margin-top:10px;outline:none;padding:10px;font-size:13px;border-top:1px solid #312E3D;
									border-left:1px solid #312E3D;border-right:1px solid #312E3D;border-bottom: 1px solid #56536A;
									background:rgba(0,0,0,0);border-color:#636363;" type="text" autocomplete="off" required="required"
									placeholder="<?php echo $_SESSION['email']; ?>" name="email"></input><br>
					<span style="margin-left:390px;">修改联系地址：</span>
					<input style="width:200px;height:25px;margin-top:10px;outline:none;padding:10px;font-size:13px;border-top:1px solid #312E3D;
									border-left:1px solid #312E3D;border-right:1px solid #312E3D;border-bottom: 1px solid #56536A;
									background:rgba(0,0,0,0);border-color:#636363;" type="text" autocomplete="off" required="required"
									placeholder="<?php echo $_SESSION['address']; ?>" name="address"></input><br>
					<button style="width:135px;height:45px;font-size:25px;margin-left:540px;margin-top:15px;border:0px;border-radius:5px;
									color:#404040;" class="changec" type="submit">保存</button>
				</form>
			</div>
		</body>
	</html>