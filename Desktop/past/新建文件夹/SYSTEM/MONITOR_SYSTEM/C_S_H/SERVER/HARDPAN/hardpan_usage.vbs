On Error Resume Next
	Set objFSO = CreateObject("Scripting.FileSystemObject")  
	Set colDrives = objFSO.Drives    
	For Each objDrive in colDrives       
        WScript.echo ("{""TotalSize"":" & objDrive.TotalSize &",""FreeSpace"":" & objDrive.FreeSpace &"}")   
	Next