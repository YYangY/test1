<!DOCTYPE html>
<html>
	<head>
		<mate charset="UTF-8">
		<title>exam</title>
		<link href="style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div class="all">
			<div class="logo">
				<a href="http://nav.zeroling.com/"></a>
				<h1>快人一步</h1>
			</div>
			<div class="tips">
				红岩网校 | 本服务器维护中 | 临时主页
			</div>
		</div>
		<div class="unit">
			<h2 class="unit-title">每天不登不舒服斯基</h2>
			<div class="unit-detail">
				<a href="http://www.cqupt.edu.cn/" class="a1" target="_blank">重邮门户</a>
				<a href="http://jwzx.cqupt.edu.cn/" class="a2" target="_blank">教务在线</a>
				<a href="http://202.202.43.125/" class="a3" target="_blank">红岩网校</a>
				<a href="http://172.22.161.11/" class="a4" target="_blank">BT Down</a>
				<a href="http://202.202.43.125/online/" class="a5" target="_blank">重邮Online</a>
				<a href="http://202.202.43.125/user/" class="a5" target="_blank">重邮通行证</a>
				<a href="http://202.202.43.41/market/" class="a5" target="_blank">红岩二手市场</a>
				<br />
				<form action="" method="post">
				站点名称：<input type="text" name="name" id="name">
				网址：<input type="text" name="address" id="address">
				<input type="button" value="+" onclick="add()">
				<div id="list"></div>
				</form>
			</div>
		</div>
		<div class="unit">
			<h2 class="unit-title">学霸们的必争之地</h2>
			<div class="unit-details">
				<a href="http://202.202.43.36/webCollege/" class="a3" target="_blank">文峰英语</a>
				<a href="http://zwyd.cqupt.edu.cn/" class="a6" target="_blank">图书馆订座</a>
				<br />
				站点名称：<input type="text" name="name" id="name">
				网址：<input type="text" name="address" id="address">
				<input type="button" value="+" onclick="add()">
				<div id="list"></div>
			</div>
		</div>
		<div class="unit">
			<h2 class="unit-title">原来学校还有这么多网站</h2>
			<div class="unit-details">
				<a href="http://office.cqupt.edu.cn/" class="a4" target="_blank">党委办公室</a>
				<a href="http://deptweb.cqupt.edu.cn/dwzzb/" class="a5" target="_blank">组织部</a>
				<a href="http://www.cqupt.edu.cn/xcb/" class="a5" target="_blank">宣传部</a>
				<a href="http://xsc.cqupt.edu.cn/" class="a5" target="_blank">学生工作部</a>
				<a href="http://www.cqupt.edu.cn/wzb/" class="a5" target="_blank">武装部</a>
				<a href="http://zjc.cqupt.edu.cn/" class="a5" target="_blank">招生就业处</a>
				<a href="http://www.cqupt.edu.cn/gonghui/" class="a5" target="_blank">工会</a>
				<a href="http://202.202.43.125/gqt/" class="a5" target="_blank">团委</a>
				<a href="http://www.cqupt.edu.cn/rsc/" class="a5" target="_blank">人事处</a>
				<a href="http://www.cqupt.edu.cn/jwc/" class="a5" target="_blank">教务处</a>
				<a href="http://www.cqupt.edu.cn/yjsb/" class="a5" target="_blank">研究生部</a>
				<a href="http://202.202.32.194/" class="a5" target="_blank">科学技术处</a>
				<a href="http://www.cqupt.edu.cn/skc/" class="a5" target="_blank">社会科学处</a>
				<a href="http://www.cqupt.edu.cn/jjc/" class="a5" target="_blank">基建后勤处</a>
				<a href="https://sfrz.cqupt.edu.cn:8443/cas/login" class="a5" target="_blank">财务处</a>
				<a href="http://202.202.43.16:8888/find/list!list.do" class="a5" target="_blank">保卫处</a>
				<a href="http://www.cqupt.edu.cn/ltxglc/" class="a5" target="_blank">离退休管理处</a>
				<a href="http://www.cqupt.edu.cn/sbc/" class="a5" target="_blank">国际处</a>
				<a href="http://www.cqupt.edu.cn/dwjl/" class="a5" target="_blank">图书馆</a>
				<a href="http://www.cqupt.edu.cn/tsg/" class="a5" target="_blank">纪委</a>
				<a href="http://www.cqupt.edu.cn/jw/" class="a5" target="_blank">网管中心</a>
				<a href="http://deptweb.cqupt.edu.cn/xxzx/" class="a5" target="_blank">学报编辑部</a>
				<a href="http://journal.cqupt.edu.cn/" class="a5" target="_blank"></a>
				<a href="http://www.zeroling.com/leave-words" class="a5" target="_blank"></a>
				<br />
				站点名称：<input type="text" name="name" id="name">
				网址：<input type="text" name="address" id="address">
				<input type="button" value="+" onclick="add()">
				<div id="list"></div>
				</div>
		</div>
	</body>
	<script>
		   function add(){
		   	   var name = document.getElementById("name").value;
		   	   var address = document.getElementById("address").value;
		   	   var list = document.getElementById("list");
		   	   var request = new XMLHttpRequest();

		   	   request.open("post","get.php");
		   	   request.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		   	   var data = "name=" + name + "&address=" + address;
		   	   request.send(data);

		   	   var link = document.createElement("a");
		   	   link.setAttribute("href", address);
		   	   link.innerHTML = name;

		   	   var button = document.createElement("input");
		   	   button.setAttribute("type", "button");
		   	   button.value = "-";

		   	   button.onclick = function(event){
		   	   	   var target;
		   	   	   target = event.target;
		   	   	   var div = target.parentNode;
		   	   	   div.parentNode.removeChild(div);
		   	   	   var requestt = new XMLHttpRequest();
		   	   	   requestt.open("post","delete.php");
		   	   	   requestt.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		   	   	   var data1 = "name=" + name;
		   	   	   requestt.send(data1);
		   	   }

		   	   var div = document.createElement("div");
		   	   div.appendChild(button);
		   	   div.insertBefore(link,button);
		   	   list.appendChild(div);
		   }
        </script>
</html>