<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/thinkphp_3.2.3_full/Public/css/main.css" rel="stylesheet" type="text/css" />
<title>后台登录</title>
</head>

<body>
<div id="header">
 <div class="main">
  <dl><a href="#"><img src="/thinkphp_3.2.3_full/Public/images/logo.png" /></a></dl>
  <dt><a href="#"><img src="/thinkphp_3.2.3_full/Public/images/link.png" /></a></dt>
 </div>
</div>

<div id="banner"></div>

<div id="h_log">
	<form id='form' action = "/thinkphp_3.2.3_full/index.php/Admin/Index/dologin" method = "post">
		 <p>账号：</p><input name="username" id = "username" type="text" class="in_01" />
		 <p>密码：</p><input name="password" id = "password" type="password" class="in_01"  />
		 <p>验证码：</p><input name="checkcode" id = "checkcode" type="text" class="in_02"  /><img src="/thinkphp_3.2.3_full/index.php/Admin/Index/getCode" onclick="this.src='/thinkphp_3.2.3_full/index.php/Admin/Index/getCode?a='+Math.random()">
		<!--  <input type = "submit" value = "登录" />
		  <input type = "button" value = "退出" /> -->
		</form>
		 <dl>
		  <button name="login" type="button" onclick="login()" />登 录</button>
		  <button name="logout" type="button" />退 出</button>
		 </dl>
	<script type="text/javascript">
		function login(){
			var username = document.getElementById("username").value;
			//alert("username");
			var password = document.getElementById("password").value;
			var checkcode = document.getElementById("checkcode").value;
			if(username.length == 0){
				alert("账号不能为空");
				return false;
			}
			if(password.length == 0){
				alert("密码不能为空");
				return false;
			}
			if(checkcode.length == 0){
				alert("请输入验证码");
				return false;
			}
			//alert(11);
			document.getElementById("form").submit();
			
		}
	</script>
</div>
<div class="clear"></div>
	

<div id="footer">
 <div class="main"><img src="/thinkphp_3.2.3_full/Public/images/pic_02.jpg" /></div>
</div>

</body>
</html>