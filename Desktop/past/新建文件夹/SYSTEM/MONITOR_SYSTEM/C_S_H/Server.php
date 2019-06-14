<!DOCTYPE html>
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
				<marquee><span style="font-size:20px;color:#8B4513;">注意：当使用率连续超过警戒线10次时，1582774238@qq.com邮箱会获得警戒邮件</span></marquee>
				<div style="width:1186px;height:90px;margin-left:2px;margin-right:2px;margin-top:0px;margin-bottom:0px;">
					<button style="width:155px;padding:0px;height:50px;font-size:25px;margin-left:3px;margin-top:5px;border:0px;
														border-radius:5px;color:#27408B;" class="changec" type="submit">
						<a href="SERVER/CPU/Cpu.php" style="text-decoration:none;" target="left_bottom_Frame" >中央处理器</a>
					</button>
					<button class="changec" style="width:155px;padding:0px;height:50px;font-size:25px;margin-left:20px;margin-top:5px;
													margin-bottom:10px;border:0px;border-radius:5px;color:#27408B;" type="submit">
						<a href="SERVER/MEMORY/Memory.php" style="text-decoration:none;" target="left_bottom_Frame" >内存储器</a>
					</button>
					<button class="changec" style="width:155px;padding:0px;height:50px;font-size:25px;margin-left:20px;margin-top:5px;
													margin-bottom:10px;border:0px;border-radius:5px;color:#27408B;" type="submit">
						<a href="SERVER/HARDPAN/Hardpan.php" style="text-decoration:none;" target="left_bottom_Frame" >外存储器</a>
					</button>
					<button class="changec" style="width:155px;padding:0px;height:50px;font-size:25px;margin-left:20px;margin-top:5px;
													margin-bottom:10px;border:0px;border-radius:5px;color:#27408B;" type="submit">
						<a href="SERVER/PROCESS/Process.php" style="text-decoration:none;" target="left_bottom_Frame" >运行进程</a>
					</button>
				<div><br>
				<iframe id="iframe" style="width:1188px;height:570px;margin-left:1px;margin-right:1px;margin-top:1px;margin-bottom:1px;"
											name="left_bottom_Frame" src="<?php session_start();
																				if($_SESSION['manager']=='管理员')
																					echo 'SERVER/Usage_Manager.php';
																				else
																					echo 'SERVER/Usage_User.php'; ?>">	
				</iframe>
		</body>
	</html>