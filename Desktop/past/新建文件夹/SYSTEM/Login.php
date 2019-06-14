<!DOCTYPE html>
<html lang="en">  
	<head>  
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
		<title>服务器在线监控系统登录</title>
	</head>
	<body style="width:100%;height:100%;sans-serif;margin:0;background-color:#4A374A;"> 
		<h4 style="line-height:0px;font-size: 24px;color:#fff;">服务器在线监控系统</h4>
		<span id="time_login" style="line-height:0px;font-size:15px;color:#fff;"></span>
		<div style="position: absolute;top: 44%;left:50%;margin: -150px 0 0 -150px;width: 300px;height: 300px;">
			<h1 style="color: #fff;text-shadow:0 0 10px;letter-spacing: 1px;text-align: center;font-size: 3em;margin: 0.67em 0;">Login</h1>  
			<form method="post" action="Login_Logic.php">  
				<input style="width:278px;height:22px;margin-bottom:10px;outline:none;padding:10px;font-size:13px;color:#fff;text-shadow:1px 1px 1px;
								border-top:1px solid #312E3D;border-left:1px solid #312E3D;border-right:1px solid #312E3D;
								border-bottom:1px solid #56536A;border-radius:4px;background-color:#2D2D3F;" type="text" autocomplete="off"
								required="required" placeholder="昵称" name="nickname"></input>  
				<input style="width:278px;height:22px;margin-bottom:10px;outline:none;padding:10px;font-size:13px;color:#fff;text-shadow:1px 1px 1px;
								border-top:1px solid #312E3D;border-left:1px solid #312E3D;border-right:1px solid #312E3D;
								border-bottom:1px solid #56536A;border-radius:4px;background-color: #2D2D3F;"  type="password" required="required"
								placeholder="密码" name="password"></input>
				<span>
					<img style="float:left;width:80px;height:33px;margin-bottom:10px;outline:none;padding:5px;font-size:13px;color:#fff;
								text-shadow:1px 1px 1px;border-top: 1px solid #312E3D;border-left: 1px solid #312E3D;border-right: 1px solid #312E3D;
								border-bottom:1px solid #56536A;border-radius:4px;background-color: #2D2D3F;" border="1"
								src="./Captcha.php?r=echo rand(); ?>"/>
					<input style="width:165px;height:22px;margin-left:20px;margin-bottom:10px;outline:none;padding:10px;font-size:13px;color:#fff;
									text-shadow:1px 1px 1px;border-top: 1px solid #312E3D;border-left: 1px solid #312E3D;
									border-right: 1px solid #312E3D;border-bottom: 1px solid #56536A;border-radius:4px;background-color:#2D2D3F;"
									name="authcode" type="text" autocomplete="off" required="required" placeholder="验证码"></input>
				</span>
				<button style="width:300px;min-height:20px;display:block;background-color:#4a77d4;border:1px solid #3762bc;color:#fff;padding:9px 14px;
								font-size:15px;line-height:normal;border-radius:5px;margin:0;" type="submit">登录</button>  
			</form>  
		</div>
		<div style="width:100%;height:100%;overflow:hidden;font-style:sans-serif;color:#fff;">
			<script language="javascript">
				window.onload=function()
				{
				//定时器每秒调用一次fnDate()
					setInterval(function()
								{
									fnDate();
								},1000);
				}
				//js 获取当前时间
				function fnDate()
				{
					var oDiv=document.getElementById("time_login");
					var date=new Date();
					var year=date.getFullYear();//当前年份
					var month=date.getMonth();//当前月份
					var data=date.getDate();//天
					var hours=date.getHours();//小时
					var minute=date.getMinutes();//分
					var second=date.getSeconds();//秒
					var time=year+"-"+fnW((month+1))+"-"+fnW(data)+" "+fnW(hours)+":"+fnW(minute)+":"+fnW(second);
					oDiv.innerHTML=time;
				}
				//补位 当某个字段不是两位数时补0
				function fnW(str)
				{
					var num;
					str>9?num=str:num="0"+str;
					return num;
				} 
			</script>
		</div>
	</body>
</html>