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
    <script  type="text/javascript" src="http://s1.hqbcdn.com/??lib/jquery/jquery-1.7.2.min.js"></script>  
</head>  
<body>
	<div id="msgs" style="margin-left:500px;margin-top:100px;font-size:20px"></div>
	<canvas id="location_canvas">
		你的浏览器还不支持canvas
	</canvas>

<script  type="text/javascript">
		var cpu_usage = new Array();

		window.setInterval(function(){
            $.ajax({  
                type:"POST",  
                dataType:"json",  
                url:"Cpu_Data.php",  
                timeout:80000,     //ajax请求超时时间80秒  
                data:{time:"80"}, //40秒后无论结果服务器都返回数据  
                success:function(data,textStatus){  
						if(data.cpu=="null"){
						}
						else
						{	
                        $("#msgs").text("当前系统CPU使用率:"+data.cpu+"%");

						var length = cpu_usage.length;
						cpu_usage.push(data.cpu);
						if(length>20)
						{
							for(var i=0;i<length-1;i++)
							cpu_usage[i] = cpu_usage[i+1];
							cpu_usage.pop();
							cpu_usage.length = 20;
						}	
						
						/*location_canvas.remove();
						
				        var oDiv=document.createElement('div');
						canvas = document.createElement('canvas');
						
						canvas.id     = "location_canvas"; 
						canvas.width  = 600; 
						canvas.height = 375; 
						//canvas.style.zIndex   = 8; 
						canvas.style.position = "absolute"; 
						canvas.style.border   = "1px solid";

						oDiv.appendChild(canvas);
						document.body.appendChild(oDiv);
						*/

						var location_canvas = document.getElementById("location_canvas");
						location_canvas.remove();
						
						var canvas = document.createElement('canvas');
						
						canvas.id     = "location_canvas"; 
						canvas.width  = 600; 
						canvas.height = 375; 
						//canvas.style.zIndex   = 8; 
						canvas.style.marginLeft = "280px"; 

						document.body.appendChild(canvas);

						var location_canvas = document.getElementById("location_canvas");
						var location_context = location_canvas.getContext("2d");
						
						for(var i=0;i<length;i++)
						{
						 //$("#msg").append("CPU使用率记录:"+cpu_usage[i]+"%");
						location_context.beginPath();
						location_context.arc(60+i*25,350-cpu_usage[i]*3,2,0,360,false);
						location_context.fillStyle="red";//填充颜色,默认是黑色
						location_context.fill();//画实心圆
						location_context.closePath();
						}
						
						if(length>1)//获取的cpu使用率点个数多余一个就要画线
						{
							for(var i=0;i<length-1;i++)
							{
							location_context.moveTo(60+i*25,350-cpu_usage[i]*3);
							location_context.lineTo(60+(i+1)*25,350-cpu_usage[i+1]*3);
							}
						}
						
						//location_context.moveTo(348,22);
						//location_context.lineTo(360,28);
						//location_context.moveTo(348,34);
						//location_context.lineTo(360,28);
		
						//location_context.moveTo(325,26);
						//location_context.lineTo(350,26);
						//location_context.moveTo(325,30);
						//location_context.lineTo(350,30);//指导箭头
		
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
						//开始绘制文字
						location_context.fillText("CPU使用率",45,25);
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
