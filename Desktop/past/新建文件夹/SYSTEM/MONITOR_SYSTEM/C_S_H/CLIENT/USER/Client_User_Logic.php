<?php
	//$nickname="^[\u4E00-\u9FA5A-Za-z0-9_]+$";
	//$password="^[a-zA-Z]\w{5,11}$";
	//$name="[\u4e00-\u9fa5]{2,7}";
	$mobile_phone="/^1(3[0-9]|5[189]|8[6789])[0-9]{8}$/";
	$email="/([a-z0-9]*[-_.]?[a-z0-9]+)*@([a-z0-9]*[-_]?[a-z0-9]+)+[.][a-z]{2,3}([.][a-z]{2})?/i";
	//if(preg_match($nickname,$_POST['nickname']) )
	//{
		//if(preg_match($password,$_POST['password']) )
		//{
			//if(preg_match($email,$_POST['email']) )
			//{
				//if(preg_match($name,$_POST['name']) )
				//{
					if(preg_match($mobile_phone,$_POST['mobile_phone']) )
					{
					session_start();
					@$_SESSION['name'] = $_POST['name'];
					@$_SESSION['nickname'] = $_POST['nickname'];
					@$_SESSION['password'] = $_POST['password'];
					@$_SESSION['mobile_phone'] = $_POST['mobile_phone'];
					@$_SESSION['email'] = $_POST['email'];
					@$_SESSION['address'] = $_POST['address'];

					$con= mysqli_connect('localhost','root','','server_online_monitoring_system');
					$sqlu = " update user_table set user_nickname ='".$_SESSION['nickname']."',
													user_password = '".$_SESSION['password']."',
													user_name = '".$_SESSION['name']."',
													user_mobile_phone = '".$_SESSION['mobile_phone']."',
													user_email = '".$_SESSION['email']."',
													user_address = '".$_SESSION['address']."'	where user_id = '".$_SESSION['id']."'  ";
					$resu = mysqli_query($con,$sqlu);
					mysqli_close($con);
					header('Location:Client_User_Success.php');
					}
					else
					{
					header('Location:Client_User_Fail.php?err='.'mobile_phone');
					}
				//}
				//else
				//{
				//header('Location:Client_User_Fail.php?err='.'name');
				//}
			//}
			//else
			//{
			//header('Location:Client_User_Fail.php?err='.'email');
			//}
		//}
		//else
		//{
		//header('Location:Client_User_Fail.php?err='.'password');
		//}
	//}
	//else
	//{
	//header('Location:Client_User_Fail.php?err='.'nickname');
	//}
?>