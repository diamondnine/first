<?php
	session_start();
	$_SESSION['cpu']=0;
	$_SESSION['memory']=0;
	$_SESSION['hardpan']=0;
?>

<!DOCTYPE html>  
<html  xml:lang="en">  
<head>  
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link href="Hardpan.css" rel="stylesheet" style="text/css"/>
    <script  type="text/javascript" src="http://s1.hqbcdn.com/??lib/jquery/jquery-1.7.2.min.js"></script>  
</head>  
<body>
	<div id="msg_TotalSize" style="font-size:20px;margin-left:20px;margin-top:20px;"></div>
	<div id="msg_FreeSpace" style="font-size:20px;margin-left:20px;margin-top:5px;"></div>
	<div id="msg_Usage" style="font-size:20px;margin-left:20px;margin-top:5px;"></div>

	<canvas id="location_canvas" style="width:600px;height:375px;margin-left:280px;margin-top:65px;">
			你的浏览器还不支持canvas
	</canvas>

<script  type="text/javascript">
		var hardpan_usage = new Array();

		window.setInterval(function(){
            $.ajax({
                type:"POST",  
                dataType:"json",  
                url:"Hardpan_Data.php",  
                timeout:80000,     //ajax请求超时时间80秒  
                data:{time:"80"}, //40秒后无论结果服务器都返回数据  
                success:function(data,textStatus){
						if(data.Hardpan_Usage=="null"){
						}
						else
						{	
						$("#msg_TotalSize").text("总计空间量:"+data.Hardpan_TotalSize+" KB");
						$("#msg_FreeSpace").text("剩余可用量:"+data.Hardpan_FreeSpace+" KB");
                        $("#msg_Usage").text("当前系统硬盘使用率:"+data.Hardpan_Usage+"%");
						
						var length = hardpan_usage.length;
						hardpan_usage.push(data.Hardpan_Usage);
						if(length>20)
						{
							for(var i=0;i<length-1;i++)
							hardpan_usage[i] = hardpan_usage[i+1];
							hardpan_usage.pop();
							hardpan_usage.length = 20;
						}	
						
						
						var location_canvas = document.getElementById("location_canvas");
						location_canvas.remove();
						
						var canvas = document.createElement('canvas');
						
						canvas.id     = "location_canvas"; 
						canvas.width  = 600; 
						canvas.height = 375;
						canvas.style.marginLeft = "280px";
						canvas.style.marginTop = "20px";
						
						document.body.appendChild(canvas);

						var location_canvas = document.getElementById("location_canvas");
						var location_context = location_canvas.getContext("2d");
						
						for(var i=0;i<length;i++)
						{
						location_context.beginPath();
						location_context.arc(60+i*25,350-hardpan_usage[i]*3,2,0,360,false);
						location_context.fillStyle="red";//填充颜色,默认是黑色
						location_context.fill();//画实心圆
						location_context.closePath();
						}
						
						if(length>1)//获取的cpu使用率点个数多余一个就要画线
						{
							for(var i=0;i<length-1;i++)
							{
							location_context.moveTo(60+i*25,350-hardpan_usage[i]*3);
							location_context.lineTo(60+(i+1)*25,350-hardpan_usage[i+1]*3);
							}
						}
		
						location_context.moveTo(60,30);
						location_context.lineTo(60,350);//纵坐标
						location_context.moveTo(60,350);
						location_context.lineTo(550,350);//横坐标
						location_context.moveTo(57,40);//纵坐标箭头
						location_context.lineTo(60,30);
						location_context.moveTo(63,40);
						location_context.lineTo(60,30);
						location_context.moveTo(545,347);//横坐标箭头
						location_context.lineTo(550,350);
						location_context.moveTo(545,353);
						location_context.lineTo(550,350);
		
						location_context.font = "10px Courier New";
						//设置字体填充颜色
						location_context.fillStyle = "blue";
						//开始绘制
						location_context.fillText("硬盘使用率",45,25);
						for(var i=0;i<10;i++)//纵坐标刻度线与对应刻度值
						{
						location_context.moveTo(60,320-30*i);
						location_context.lineTo(65,320-30*i);
						location_context.fillText((i+1)*10, 40, 320-30*i);
						}
						location_context.fillText(0,45,355);//0刻度线
						location_context.fillText("时间线",550,350);
						for(var i=0;i<19;i++)//横坐标刻度线与对应刻度值
						{
						location_context.moveTo(85+i*25,350);
						location_context.lineTo(85+i*25,345);
						location_context.fillText(i+1,85+25*i,360);
						}	
						//设置样式
						location_context.lineWidth = 2;
						location_context.strokeStyle = "#F5270B";
						//绘制
						location_context.stroke();
						
						
						}
                }
            });  
		},1000);

		

		
</script>  
</body>  
</html>  
