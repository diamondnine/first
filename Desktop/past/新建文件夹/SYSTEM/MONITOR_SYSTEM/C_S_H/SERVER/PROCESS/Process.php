<?php
 //   if(empty($_POST['time']))exit();        
//    set_time_limit(0);//无限请求超时时间        
      
//    while (true){                
        //若得到数据则马上返回数据给客服端，并结束本次请求 
class SystemInfoWindows
{
 private function getFilePath($fileName, $content)
 {
  $path = dirname(__FILE__) . "\\$fileName";
  if (!file_exists($path)) {
   file_put_contents($path, $content);
  }
  return $path;
 }
 private function getProcessVbsPath()
 {
  return $this->getFilePath(
   'process.vbs',
   'strComputer ="."  
	Set objWMIService = GetObject("winmgmts://" & strComputer & "/root/cimv2")  
	Set colProcess = objWMIService.ExecQuery("Select * from Win32_PerfFormattedData_PerfProc_Process",,48)

	For Each objItem in colProcess  
	if objItem.Name <> "Idle" and objItem.Name <> "_Total" then   
		WScript.echo  objItem.Name & ":"& objItem.PercentProcessorTime  
	end if  
	Next '
  );
 }
 public function getProcessUsage()
 {
  $path = $this->getProcessVbsPath();
  exec("cscript -nologo $path", $process);
  return $process;
 }
}

$info = new SystemInfoWindows();
$process = $info->getProcessUsage();

	//print_r($process);
	/*
			$arr = array();
			$count = count($process);
			array_push($arr,$count);
			for($i=0;$i<count;$i++)
			{
				array_push($arr,$process[$i]);
            }
			echo json_encode($arr);        
            exit();*/        
//	}
echo '<span style="font-size:20px">当前系统各进程与CPU使用率：</span><br>';

foreach($process as $value)
	echo '<span style="font-size:15px;">'.$value."%<span><br>";
	
header("refresh:5;url=Process.php");
?>