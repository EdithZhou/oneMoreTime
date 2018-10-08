<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/thinkphp_3.2.3_full/Public/css/main.css" rel="stylesheet" type="text/css" />
<title>操作员设置</title>
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
  <div class="li01"><a href="/thinkphp_3.2.3_full/index.php/Admin/Rzsf"><img src="/thinkphp_3.2.3_full/Public/images/hn_01.png" /></a></div>
  <div class="li03"><a href="h_khdz.html"><img src="/thinkphp_3.2.3_full/Public/images/hn_03.png" /></a></div>
  <div class="li04"><a href="/thinkphp_3.2.3_full/index.php/Admin/Tcsz" class="hover"><img src="/thinkphp_3.2.3_full/Public/images/hn_04.png" /></a></div>
 </div>
</div>

<div id="add">当前位置：操作员设置</div>

<div id="h_nav">
 <a href="/thinkphp_3.2.3_full/index.php/Admin/Tcsz">套餐设置</a>
 <a href="h_czysz.html" class="hover">操作员设置</a>
 <a href="h_xgmm.html">修改密码</a>
</div>
<div class="clear"></div>

<div id="hou">
 <div id="sou">
  <form action = "/thinkphp_3.2.3_full/index.php/Admin/Czysz/Index" method="post">
  <p>名称：</p><input name="" type="text" class="in_01" />
  <p>套餐：</p><select name=""><option>9G年卡</option></select>
  <p>添加时间：</p><input name="" type="text" class="in_02" /><span class="sp">-</span><input name="" type="text" class="in_02" />
  <button name="search" type="submit" />查询</button>
 </div>
 </form>
 <div id="tabl">
  <dl>
   <button name="" type="button" />新建</button>
   <dt>当前记录共 1 条</dt>
  </dl>
  <table border="0" cellspacing="0" cellpadding="0">
   <tr class="bi">
    <td width="273">账号</td>
    <td width="233">联系人</td>
    <td width="175">联系方式</td>
    <td width="168">时间</td>
    <td width="154">操作</td>
   </tr>
  <?php if(is_array($info)): foreach($info as $key=>$value): ?><tr class="grey">
    <td><?php echo ($value['admin_username']); ?></td>
    <td><?php echo ($value['admin_name']); ?></td>
    <td><?php echo ($value['admin_phone']); ?></td>
    <td><?php echo date("Y-m-d",$value['admin_createtime']);?></td>
    <td><a href="<?php echo U('edit',array('id'=>$value['admin_id']));?>">修改</a> | <a href="<?php echo U('delete',array('id'=>$value['admin_id']));?>">删除</a></td>
   </tr><?php endforeach; endif; ?>
  </table>
  <form id="form" action = "/thinkphp_3.2.3_full/index.php/Admin/Czysz/add" method="post">
  <div id="n_xin">
   <p class="p">创建账号：</p><input id= "username" name="username" type="text" class="in_03" />
   <p class="p">联系人：</p><input id= "name" name="name" type="text" class="in_03" />
   <div class="clear"></div>
   <p class="p">设置密码：</p><input id= "password" name="password" type="password" class="in_03" />
   <p class="p">联系方式：</p><input id= "phone" name="phone" type="text" class="in_03" />
   <div class="clear"></div>
   <p class="p">确认密码：</p><input id= "checkpassword" name="checkpassword" type="password" class="in_03" /></form>
   <div class="butt">
    <button name="save" type="button" onclick="dosave()"/>保 存</button>
    <button name="cancel" type="button" />取 消</button>
   </div>
  </div>
 </div>
</div> 

<script type="text/javascript">
  function dosave(){
    var username = document.getElementById("username").value;

    var name = document.getElementById("name").value;
    var password = document.getElementById("password").value;
    var phone = document.getElementById("phone").value;
    var checkpassword = document.getElementById("checkpassword").value;
    var uPattern = /^[a-zA-Z0-9_-]{4,16}$/; 
    var mPattern = /^((13[0-9])|(14[5|7])|(15([0-3]|[5-9]))|(18[0,5-9]))\d{8}$/; 
    var pPattern = /^[a-zA-Z0-9_-]{4,16}$/;
    if(!uPattern.test(uPattern) && username.length == 0){
      alert("用户名不合法");
      return false;
    }
    if(!pPattern.test(mPattern) && password.length == 0){
      alert("密码不合法");
      return false;
    }
    if (checkpassword != password || checkpassword == 0) {          
        alert("两次密码输入不一致");          
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