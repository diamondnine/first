<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
	</head>
	<body style="font-weight:bold;margin-left:20px;">
		<form>
			<div style="width:1100px;height:150px;">
				<span style="float:left;font-size:20px;margin-left:15px;margin-top:30px;">用户资料：</span>
				<span style="float:left;font-size:20px;margin-left:40px;margin-top:30px;">
					昵称：<?php echo $_SESSION['nickname']; ?><br>
					密码：<?php echo $_SESSION['password']; ?><br>
					权限：<?php echo $_SESSION['manager']; ?><br>
					序号：<?php echo $_SESSION['id']; ?><br>
				</span>
				<span style="float:left;font-size:20px;margin-left:40px;margin-top:30px;">
					真实姓名：<?php echo $_SESSION['name']; ?><br>
					联系电话：<?php echo $_SESSION['mobile_phone']; ?><br>
					邮箱号码：<?php echo $_SESSION['email']; ?><br>
					居住地址：<?php echo $_SESSION['address']; ?>
				</span>
			</div>	
			<div style="float:left;width:1100px;height:450px;">
				<span style="float:left;font-size:20px;margin-left:15px;margin-top:10px;">
					本机资料：
				</span>
				<span style="float:left;font-size:20px;margin-left:38px;margin-top:10px;">
				系统类型：<?php echo php_uname('s'); ?><br>
				系统版本号：<?php echo php_uname('r'); ?><br>
				PHP运行方式：<?php echo php_sapi_name(); ?><br>
				PHP版本：<?php echo PHP_VERSION; ?><br>
				Zend版本：<?php echo Zend_Version(); ?><br>
				PHP安装路径：<?php echo DEFAULT_INCLUDE_PATH; ?><br>
				传输协议：<?php echo getenv('SERVER_PROTOCOL'); ?><br>
				Http请求中Host值：<?php echo $_SERVER["HTTP_HOST"]; ?><br>
				
				<!--当前文件绝对路径：<?php	echo __FILE__; ?><br>-->
				
				服务器IP：<?php echo GetHostByName($_SERVER['SERVER_NAME']);?><br>
				服务器解译引擎：<?php echo $_SERVER['SERVER_SOFTWARE']; ?><br>
				服务器系统目录：<?php echo $_SERVER['SystemRoot'];?><br>
				服务器域名：<?php echo $_SERVER['SERVER_NAME']; ?><br>
				服务器语言：<?php echo $_SERVER['HTTP_ACCEPT_LANGUAGE']; ?><br>
				服务器Web端口：<?php echo $_SERVER['SERVER_PORT']; ?>
				</span>
			</div>
		</form>
	</body>
</html>
