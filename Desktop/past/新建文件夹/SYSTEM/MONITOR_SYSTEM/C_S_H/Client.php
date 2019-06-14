<?php
	session_start();
			echo '
			<span id="notice" style="float:left;margin-left:430px;margin-top:280px;font-size:28px">
			<script language="javascript">
				window.onload=function(){
				//定时器每秒调用一次fnDate()
					setInterval(function(){
						fnDate();
						},1000);
					}
					var time=2;
					function fnDate(){';
	if($_SESSION['manager'] == '用户')
	{
		echo 'var notice = "您的身份是用户,"+time+"秒后跳转！";
				var oDiv=document.getElementById("notice");
						oDiv.innerHTML=notice;
						time = time - 1;
					}
				</script>
				</span>';
				header("refresh:3;url=Client/USER/Client_User.php");
	}
	else
	{
		echo 'var notice = "您的身份是管理员,"+time+"秒后跳转！";
				var oDiv=document.getElementById("notice");
						oDiv.innerHTML=notice;
						time = time - 1;
					}
				</script>
				</span>';
				header("refresh:3;url=CLIENT/MANAGER/Client_Manager.php");
	}
?>