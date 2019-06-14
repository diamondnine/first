<?php
    if(empty($_POST['time']))exit();        
    set_time_limit(0);//无限请求超时时间        
      
    while (true){                
        //若得到数据则马上返回数据给客服端，并结束本次请求        
		class SystemInfoWindows
		{
			private function getFilePath($fileName, $content)
			{
				$path = dirname(__FILE__) . "\\$fileName";
				if (!file_exists($path)) 
				{
					file_put_contents($path, $content);
				}
				return $path;
			}
			private function getCupUsageVbsPath()
			{
				return $this->getFilePath(
				'cpu_usage.vbs',
				"On Error Resume Next
				Set objProc = GetObject(\"winmgmts:\\\\.\\root\cimv2:win32_processor='cpu0'\")
				WScript.Echo(objProc.LoadPercentage)"
				);
			}
		/**
		* 获得CPU使用率
		* @return Number
		*/
			public function getCpuUsage()
			{
				$path = $this->getCupUsageVbsPath();
				exec("cscript -nologo $path", $usage);
				return $usage[0];
			}
		}

		$info = new SystemInfoWindows();
		$cpu = $info->getCpuUsage();
			
		$con= mysqli_connect('localhost','root','','server_online_monitoring_system');
		$sql = " select * from server_information_table where 1 ";
		$res = mysqli_query($con,$sql);
		$rem = mysqli_fetch_array($res,MYSQL_ASSOC);


		$alert = $rem['cpu_usage'];
		mysqli_close($con);
		$info = "警报！最新CPU使用率：".$cpu."%，连续10次超出警报线：".$alert."%";
		if($cpu>$alert)
		{
			session_start();
			$_SESSION['cpu']=$_SESSION['cpu']+1;
			if($_SESSION['cpu']>9)
			{
				date_default_timezone_set('PRC');
				$time = date('Y-m-d H:i:s');
				$choice = 'cpu';
				$con= mysqli_connect('localhost','root','','server_online_monitoring_system');
				$sqls = "insert into server_warning_table(warning_choice,warning_usage,warning_alert,warning_time,warning) values ('$choice','$cpu','$alert','$time',1)";
				$ress = mysqli_query($con,$sqls);
				mysqli_close($con);
			
				require_once('../Email.Class.php');  
				//##########################################  
				$smtpserver = "smtp.163.com";//SMTP服务器  
				$smtpserverport = 25;//SMTP服务器端口  
				$smtpusermail = "lu1582774238@163.com";//SMTP服务器的用户邮箱  
				$smtpemailto = "1582774238@qq.com";//发送给谁  
				$smtpuser = "lu1582774238@163.com";//SMTP服务器的用户帐号  
				$smtppass = "132360l";//SMTP服务器的用户密码  
				$mailsubject = "服务器性能警报";//邮件主题  
				$mailbody = $info;//邮件内容 
				$mailtype = "HTML";//邮件格式（HTML/TXT）,TXT为文本邮件  
				##########################################  
				$smtp = new smtp($smtpserver, $smtpserverport, true, $smtpuser, $smtppass);//这里面的一个true是表示使用身份验证,否则不使用身份验证.  
				$smtp->debug = true;//是否显示发送的调试信息  
				$smtp->sendmail($smtpemailto, $smtpusermail, $mailsubject, $mailbody, $mailtype);  
				$_SESSION['cpu']=0;
			}
			else
			{
				date_default_timezone_set('PRC');
				$time = date('Y-m-d H:i:s');
				$choice = 'cpu';
				$con= mysqli_connect('localhost','root','','server_online_monitoring_system');
				$sqls = "insert into server_warning_table(warning_choice,warning_usage,warning_alert,warning_time,warning) values ('$choice','$cpu','$alert','$time',0)";
				$ress = mysqli_query($con,$sqls);
				mysqli_close($con);
			}
}
else
{
	$_SESSION['cpu']=0;
}

/*$count = count($_SESSION['CPU']);
$_SESSION['CPU'][$count] = $cpu;
$count++;
if($count > 20)
{
	unset($_SESSION['CPU'][0]);
	for($m=0;$m<20;$m++)
	{
		$_SESSION['CPU'][$m] = $_SESSION['CPU'][$m+1];
	}
	unset($_SESSION['CPU'][20]);
	$count--;
}*/
         
            $arr=array('cpu'=>$cpu);        
            echo json_encode($arr);
            exit();

        //服务器($_POST['time']*0.5)秒后告诉客服端无数据        
        /*if($i==$_POST['time']){        
            $arr=array('success'=>"0",'name'=>'xiaoyu','text'=>$rand);        
            echo json_encode($arr);        
            exit();        
        }*/      
    }     
?>  