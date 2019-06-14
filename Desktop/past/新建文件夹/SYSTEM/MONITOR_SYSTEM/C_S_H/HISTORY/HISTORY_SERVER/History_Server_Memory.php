<?php
	echo '<div style="margin-top:15px;margin-left:495px;font-size:30px;">内存储器超标记录</div>';
	$con= mysqli_connect('localhost','root','','server_online_monitoring_system');
	$sqls = "select * from server_warning_table where warning_choice = 'memory' order by warning_time desc ";
	$ress = mysqli_query($con,$sqls);
	echo '<div style="margin-top:10px;">';
	while($row = $ress->fetch_assoc())
		{
			@$count++;
			if($row['warning']==0)
			{
				echo '<div style="margin-left:220px;width:760px;height:50px;line-height:50px;margin-top:3px;font-size:20px;border:2px solid #00CD00;">';
				echo '	<span style="float:left;width:40px;font-weight:bold;">'.$count.'</span>
						<span style="float:left;width:130PX;">使用率：'.$row['warning_usage'].'</span>
						<span style="float:left;width:130px;">警戒线：'.$row['warning_alert'].'</span>
						<span style="float:left;width:320px;">报警时间：'.$row['warning_time'].'</span>';
				echo '<span style="float:left;width:120px;">发送邮箱：'.'否</span>
					</div>';
			}
			else
			{
				echo '<div style="margin-left:220px;width:760px;height:50px;line-height:50px;margin-top:3px;font-size:20px;border:2px solid #F00;">';
				echo '	<span style="float:left;width:40px;font-weight:bold;">'.$count.'</span>
						<span style="float:left;width:130PX;">使用率：'.$row['warning_usage'].'</span>
						<span style="float:left;width:130px;">警戒线：'.$row['warning_alert'].'</span>
				<span style="float:left;width:320px;">报警时间：'.$row['warning_time'].'</span>';
				echo '<span style="float:left;width:120px;">发送邮箱：'.'是</span>
				</div>';
			}
		}
	echo '</div>';
	mysqli_close($con);
?>