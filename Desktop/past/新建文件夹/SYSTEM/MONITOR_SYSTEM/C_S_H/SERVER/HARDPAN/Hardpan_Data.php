<?php
 if(empty($_POST['time']))exit();        
    set_time_limit(0);//无限请求超时时间        
      
    while (true){                
        //若得到数据则马上返回数据给客服端，并结束本次请求        
		
class SystemInfoWindows
{
 /**
  * 判断指定路径下指定文件是否存在，如不存在则创建
  * @param string $fileName 文件名
  * @param string $content 文件内容
  * @return string 返回文件路径
  */
 private function getFilePath($fileName, $content)
 {
  $path = dirname(__FILE__) . "\\$fileName";
  if (!file_exists($path)) {
   file_put_contents($path, $content);
  }
  return $path;
 }
 /**
  * 获得总内存及可用物理内存JSON vbs文件生成函数
  * @return string 返回vbs文件路径
  */
 private function getHardpanUsageVbsPath()
 {
  return $this->getFilePath(
   'hardpan_usage.vbs',
   'On Error Resume Next
	Set objFSO = CreateObject("Scripting.FileSystemObject")  
	Set colDrives = objFSO.Drives    
	For Each objDrive in colDrives       
        WScript.echo ("{""TotalSize"":" & objDrive.TotalSize &",""FreeSpace"":" & objDrive.FreeSpace &"}")   
	Next'
  );
 }
 /**
  * 获得内存使用率数组
  * @return array
  */
 public function getHardpanUsage()
 {
  $path = $this->getHardpanUsageVbsPath();
  exec("cscript -nologo $path", $usage);
  $hardpan = json_decode($usage[0], true);
  $hardpan['usage'] = Round((($hardpan['TotalSize'] - $hardpan['FreeSpace']) / $hardpan['TotalSize']) * 100);
  return $hardpan;
 }
}

$info = new SystemInfoWindows();
$hardpan = $info->getHardpanUsage();

$con= mysqli_connect('localhost','root','','server_online_monitoring_system');
		$sql = " select * from server_information_table where 1 ";
		$res = mysqli_query($con,$sql);
		$rem = mysqli_fetch_array($res,MYSQL_ASSOC);



$alert = $rem['hardpan_usage'];
		mysqli_close($con);
$info = "警报！最新硬盘使用率：".$hardpan['usage']."%，连续10次超出警报线：".$alert."%";
if($hardpan['usage']>$alert)
{	
	$pan = $hardpan['usage'];
	session_start();
	$_SESSION['hardpan']=$_SESSION['hardpan']+1;
	if($_SESSION['hardpan']>9)
	{
		date_default_timezone_set('PRC');
		$time = date('Y-m-d H:i:s');
		$choice = 'hardpan';
		$con= mysqli_connect('localhost','root','','server_online_monitoring_system');
		$sqls = "insert into server_warning_table(warning_choice,warning_usage,warning_alert,warning_time,warning) values ('$choice','$pan','$alert','$time',1)";
		$ress = mysqli_query($con,$sqls);
		mysqli_close($con);
		
		require_once('../email.class.php');  
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
		$_SESSION['hardpan']=0;
	}
	else
	{
		date_default_timezone_set('PRC');
		$time = date('Y-m-d H:i:s');
		$choice = 'hardpan';
		$con= mysqli_connect('localhost','root','','server_online_monitoring_system');
		$sqls = "insert into server_warning_table(warning_choice,warning_usage,warning_alert,warning_time,warning) values ('$choice','$pan','$alert','$time',0)";
		$ress = mysqli_query($con,$sqls);
		mysqli_close($con);
	}
}
else
{
	$_SESSION['hardpan']=0;
}

       
            $arr=array('Hardpan_Usage'=>$hardpan['usage'],'Hardpan_TotalSize'=>$hardpan['TotalSize'],'Hardpan_FreeSpace'=>$hardpan['FreeSpace']);        
            echo json_encode($arr);        
            exit();
	}
/*
echo "硬盘总量：{$hardpan['TotalSize']} KB";
echo '<br>';
echo "硬盘已使用量：{$hardpan['FreeSpace']} KB";
echo '<br>';
echo "硬盘使用率：{$hardpan['usage']}%";
header("refresh:2;url=Hardpan.php");
*/
?>