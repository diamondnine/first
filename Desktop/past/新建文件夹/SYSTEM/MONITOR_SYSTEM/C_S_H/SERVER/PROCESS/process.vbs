strComputer ="."  
Set objWMIService = GetObject("winmgmts://" & strComputer & "/root/cimv2")  
Set colProcess = objWMIService.ExecQuery("Select * from Win32_PerfFormattedData_PerfProc_Process",,48)  
  
For Each objItem in colProcess  
if objItem.Name <> "Idle" and objItem.Name <> "_Total" then   
    WScript.echo  objItem.Name & ":"& objItem.PercentProcessorTime  
end if  
Next 