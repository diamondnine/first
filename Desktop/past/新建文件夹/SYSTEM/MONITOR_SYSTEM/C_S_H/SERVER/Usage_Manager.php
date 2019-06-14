<!DOCTYPE html>
<?php $con= mysqli_connect('localhost','root','','server_online_monitoring_system');//链接数据库，数据库地址，用户名，密码，数据库名	
	
	$sqls = " select * from server_information_table where 1 ";
	$ress = mysqli_query($con,$sqls);
	$res = mysqli_fetch_array($ress,MYSQL_ASSOC);
?>
	<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
		<style type="text/css">
			.changec:hover
			{
				background-color:#CAFF70;
			}
			input::-webkit-input-placeholder
			{
				text-align:center;
				font-size:20px;
			}
		</style>
	</head>
	<body>
		<form method="post" style="margin-left:450px;margin-top:160px;" action="Usage_Manager_Logic.php">
			<div>
				<span style="font-size:25px;">CPU 警戒线：</span>
				<input style="text-align:center;font-size:20px;width:50px;height:35px;background:rgba(0, 0, 0, 0);" type="text" autocomplete="off"
					required="required" placeholder="<?php echo $res['cpu_usage']; ?>" name="cpu_usage"></input>
				<span style="font-size:25px;"> %</span>
			</div>
			<div>
				<span style="font-size:25px;margin-top:20px;">内存警戒线：</span>
				<input style="text-align:center;font-size:20px;margin-top:10px;width:50px;height:35px;background:rgba(0, 0, 0, 0);" type="text"
					autocomplete="off" required="required" placeholder="<?php echo $res['memory_usage']; ?>" name="memory_usage"></input>
				<span style="font-size:25px;"> %</span>
			</div>
			<div>
				<span style="font-size:25px;margin-top:20px;">硬盘警戒线：</span>
				<input style="text-align:center;font-size:20px;margin-top:10px;width:50px;height:35px;background:rgba(0, 0, 0, 0);" type="text"
					autocomplete="off" required="required" placeholder="<?php echo $res['hardpan_usage']; ?>" name="hardpan_usage"></input>
				<span style="font-size:25px;"> %</span>
			</div>
				<button class="changec" type="submit" style="width:120px;height:55px;font-size:20px;margin-left:55px;margin-top:25px;border-radius:5px;
																border:0px;color:#27408B;">确认修改</button>
		</form>
	</body>
	</html>