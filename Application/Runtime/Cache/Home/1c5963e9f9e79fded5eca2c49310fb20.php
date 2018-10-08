<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/thinkphp_3.2.3_full/Public/css/main.css" rel="stylesheet" type="text/css" />
<title>流量查询</title>
</head>

<body>
<div id="header">
 <div class="main">
  <dl><a href="#"><img src="/thinkphp_3.2.3_full/Public/images/logo.png" /></a></dl>
  <dt><a href="/thinkphp_3.2.3_full/index.php/Admin/Index"><img src="/thinkphp_3.2.3_full/Public/images/link.png" /></a></dt>
 </div>
</div>

<div id="banner"></div>

<div id="nav">
 <div class="main">
  <div class="li01"><a href="#" class="hover"><img src="/thinkphp_3.2.3_full/Public/images/n_01.png" /></a></div>
  <div class="li02"><a href="/thinkphp_3.2.3_full/index.php/Home/Index"><img src="/thinkphp_3.2.3_full/Public/images/n_02.png" /></a></div>
 </div>
</div>

<div id="add">当前位置：流量查询</div>

<div id="bott">
  
 <div id="sea_01"><p>编码：</p><form action = "/thinkphp_3.2.3_full/index.php/Home/Llcx/index" method = "post" id="form"><input id = "terminal_outercode" name="terminal_outercode" type="text" /></form><button name="" type="button" onclick="doselect()" /><img src="/thinkphp_3.2.3_full/Public/images/but_01.jpg" /></button></div>
 <script type="text/javascript">
  function doselect(){
   var outercode = document.getElementById("terminal_outercode").value;//alert(outercode);
   document.getElementById("form").submit();
  }

 </script>
 <div id="bi_01">
 
  <p>客户<?php echo ($value['terminal_username']); ?>的流量信息</p>
  <dl>
   <dt>基本套餐</dt><dt><?php echo ($value['package_name']); ?></dt>
  </dl>
  <dl>
   <dt>开卡时间</dt><dt><?php echo ($value['terminal_createtime']); ?></dt>
  </dl>
  <dl>
   <dt>使用时长</dt><dt> <?php echo ($value['terminal_createtime']); ?>至 <?php echo ($value['terminal_createtime']); ?></dt>
  </dl>
  <dl>
   <dt>套餐余量</dt><dt><?php echo ($value['terminal_remaindata']); ?></dt>
  </dl>
 </div>

 <div id="an_01"><a href="/thinkphp_3.2.3_full/index.php/Home/Llcx/a"><img src="/thinkphp_3.2.3_full/Public/images/an_01.jpg" /></a></div>
 <div id="img_01"><img src="/thinkphp_3.2.3_full/Public/images/pic_01.jpg" /></div>
</div>

<div class="clear"></div>

<div id="footer">
 <div class="main"><img src="/thinkphp_3.2.3_full/Public/images/pic_02.jpg" /></div>
</div>


















</body>
</html>