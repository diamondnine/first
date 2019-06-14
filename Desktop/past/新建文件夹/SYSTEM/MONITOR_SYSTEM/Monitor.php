<?php
	session_start();
?>
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
		<!--.box{width: 200px;height: 100px;background-color: #ccc;margin:30px auto;}
        .shake{
            -webkit-animation-name: shake_box;
            -ms-animation-name: shake_box;
            animation-name: shake_box;
            -webkit-animation-duration: 100ms;
            -ms-animation-duration: 100ms;
            animation-duration: 100ms;
            -webkit-animation-timing-function: ease-in-out;
            -ms-animation-timing-function: ease-in-out;
            animation-timing-function: ease-in-out;
            -webkit-animation-delay: 0s;
            -ms-animation-delay: 0s;
            animation-delay: 0s;
            /*-webkit-animation-play-state: running;
            -ms-animation-play-state: running;
            animation-play-state: running;*/
        }
        .shake:hover{
            -webkit-animation-iteration-count: infinite;
            -ms-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
            /*-webkit-animation-play-state: paused;
            -ms-animation-play-state: paused;
            animation-play-state: paused;*/
        }
        @keyframes shake_box{
            0% {transform: translate(0px, 0px) rotate(0deg)}
            20% {transform: translate(1.5px, -2.5px) rotate(-1.5deg)}
            40% {transform: translate(-2.5px, 0.5px) rotate(-0.5deg)}
        }
        @-ms-keyframes shake_box{
            0% {-ms-transform: translate(0px, 0px) rotate(0deg)}
            20% {-ms-transform: translate(1.5px, -2.5px) rotate(-1.5deg)}
            40% {transform: translate(-2.5px, 0.5px) rotate(-0.5deg)}
        }-->
			</head>
			<body style="width:1900px;height:870px;line-height:0px;font-size:24px;z-index:-1;color:#27408B;" background = "bg.jpg" >
				<div style="width:1880px;height:140px;margin-left:8px;margin-right:8px;margin-top:8px;margin-bottom:4px;" >
					<span align="middle" style="font-family:Microsoft Yahei;font-size:100;line-height:140px;margin-left:120px;float:left;">
						服 务 器 在 线 监 控 系 统
					</span>
					
					<span align="middle" style="font-size:53;font-style:italic;margin-left:70px;margin-top:80px;float:left;">欢 迎 您！</span>
					
					<button class="changec" type="submit" style="width:110px;height:40px;font-size:30;margin-left:140px;margin-top:25px;
																	border-radius:5px;border:0px;">
						<a href="../Login.php" style="text-decoration:none;">退出</a>
					</button>
					<button class="changec" type="submit" style="width:110px;height:40px;font-size:30;margin-left:140px;margin-top:20px;
																	border-radius:5px;border:0px;">
							<a href="Monitor.php" style="text-decoration:none;">刷新</a></button>
				</div>
				<iframe name="leftFrame" src="Base_Information.php" style="width:1210px;height:700px;float:left;margin-left:8px;margin-right:3px;
																			margin-top:30px;margin-bottom:8px;"></iframe>
				<div>
					<button  class="changec" type="submit" style="font-weight:bold;width:190px;height:72px;font-size:40px;margin-left:230px;
																	margin-top:160px;border-radius:10px;border:0px;">
						<a href="C_S_H/Server.php" target="leftFrame" style="text-decoration:none;">设备查询</a>
					</button>
					
					<button  class="changec" type="submit" style="font-weight:bold;width:190px;height:72px;font-size:40px;margin-left:230px;
																	margin-top:60px;border-radius:10px;border:0px;">
						<a href="C_S_H/Client.php" target="leftFrame" style="text-decoration:none;">账号修改</a>
					</button>
					<button  class="changec" type="submit" style="font-weight:bold;width:190px;height:72px;font-size:40px;margin-left:230px;
																	margin-top:60px;border-radius:10px;border:0px;">
						<a href="C_S_H/History.php" target="leftFrame" style="text-decoration:none;">历史记录</a>
					</button>
				</div>
			</body>
	</html>
