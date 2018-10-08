<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/thinkphp_3.2.3_full/Public/css/main.css" rel="stylesheet" type="text/css" />
<title>修改密码</title>
</head>

<body>
<div id="header">
 <div class="main">
  <dl><a href="#"><img src="/thinkphp_3.2.3_full/Public/images/logo.png" /></a></dl>
  <dt><a href="#"><img src="/thinkphp_3.2.3_full/Public/images/link.png" /></a></dt>
 </div>
</div>

<div id="banner"></div>

<div id="nav">
 <div class="main_01">
  <div class="li01"><a href="h_rzsf.html"><img src="/thinkphp_3.2.3_full/Public/images/hn_01.png" /></a></div>
  <div class="li03"><a href="h_khdz.html"><img src="/thinkphp_3.2.3_full/Public/images/hn_03.png" /></a></div>
  <div class="li04"><a href="h_tcsz.html" class="hover"><img src="/thinkphp_3.2.3_full/Public/images/hn_04.png" /></a></div>
 </div>
</div>

<div id="add">当前位置：修改密码</div>

<div id="h_nav">
 <a href="h_tcsz.html">套餐设置</a>
 <a href="h_czysz.html" class="hover">操作员设置</a>
 <a href="#" >修改密码</a>
</div>
<form id = "form" action = "/thinkphp_3.2.3_full/index.php/Admin/Czysz/update" method = "post" >
<div class="clear"></div>
<div id="hou">
 <div id="mima">
  <input type="hidden" name="id" value='<?php echo ($id); ?>'>
  <p>账号</p><input id = "username" name="username" type="text" class="in_01" value = "<?php echo ($username); ?>"/><div class="clear"></div>
  <p>联系人</p><input id = "name" name="name" type="text" class="in_01" value = "<?php echo ($name); ?>"/><div class="clear"></div>
  <p>联系方式</p><input id = "phone" name="phone" type="text" class="in_01" value = "<?php echo ($phone); ?>"/><div class="clear"></div>
  <div class="butt">
   <button type="button" onclick="doupdate()" />修改</button>
   <button name="" type="button" />取 消</button>
  </div>
 </div>
</div>
</div> 
</form>
  <script type="text/javascript">
    function doupdate(){
      //var id = document.getElementById('id').value;
      var username = document.getElementById('username').value;
      var name = document.getElementById("name").value;
      var phone = document.getElementById("phone").value;
      var uPattern = /^[a-zA-Z0-9_-]{4,16}$/; 
      if(!uPattern.test(uPattern) && username.length == 0){
        alert("用户名不合法");
        return false;
      }
      document.getElementById("form").submit();
    }

  </script>

<div class="clear"></div>

<div id="footer">
 <div class="main"><img src="/thinkphp_3.2.3_full/Public/images/pic_02.jpg" /></div>
</div>


</body>
</html>