<!DOCTYPE html>
<?php $con= mysqli_connect('localhost','root','','server_online_monitoring_system');//链接数据库，数据库地址，用户名，密码，数据库名	
	
	$sqls = " select * from server_information_table where 1 ";
	$ress = mysqli_query($con,$sqls);
	$res = mysqli_fetch_array($ress,MYSQL_ASSOC);
?>
	<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
	</head>
	<body>
		<span style="text-align:center;line-height:58px;border:2px solid #F00;width:320px;height:58px;float:left;margin-left:450px;margin-top:130px;font-size:28px;">CPU 警戒线：<?php echo $res['cpu_usage']; ?>%</span>
		<span style="text-align:center;line-height:58px;border:2px solid #F00;width:320px;height:58px;float:left;margin-left:450px;margin-top:20px;font-size:28px;">内存警戒线：<?php echo $res['memory_usage']; ?>%</span>
		<span style="text-align:center;line-height:58px;border:2px solid #F00;width:320px;height:58px;float:left;margin-left:450px;margin-top:20px;font-size:28px;">硬盘警戒线：<?php echo $res['hardpan_usage']; ?>%</span>
	</body>
	</html>