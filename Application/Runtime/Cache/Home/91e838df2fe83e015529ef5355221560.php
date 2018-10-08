<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/thinkphp_3.2.3_full/Public/css/main.css" rel="stylesheet" type="text/css" />
<script src="/thinkphp_3.2.3_full/Public/js/jquery.min.1.8.2.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function(){
      $("#terminal_outercode").blur(function(){
        $.ajax({
          url:"/thinkphp_3.2.3_full/index.php/Home/Index/rz",
          type:"post",
          data:$("input[name=terminal_outercode]").serialize(),
          success:function(data){
            //alert(data);
              if("y" == data){
                $("#rztg").html("已通过验证");
              }else{
                $("#rztg").html();
              }
          },
          error:function(){
            alert("请求失败");
          }
        });
      })
      
    });

</script>
<title>实名认证</title>
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
  <div class="li01"><a href="/thinkphp_3.2.3_full/index.php/Home/Llcx/index"><img src="/thinkphp_3.2.3_full/Public/images/n_01.png" /></a></div>
  <div class="li02"><a href="#" class="hover"><img src="/thinkphp_3.2.3_full/Public/images/n_02.png" /></a></div>
 </div>
</div>

<div id="add">当前位置：实名认证</div>

<div id="bott">
 <div id="s_na">
  <div class="left">
    <form action ="/thinkphp_3.2.3_full/index.php/Home/Index/Add" method = "post" id= "form">
   <p>编码：</p><input id = "terminal_outercode" name="terminal_outercode" type="text" /><span id = "rztg"></span><div class="clear"></div>
   <p>姓名：</p><input id= "terminal_username" name="terminal_username" type="text" /><div class="clear"></div>
   <p>套餐：</p><select id= "package_name" name="package_name"><?php if(is_array($info)): foreach($info as $key=>$value): ?><option><?php echo ($value['package_name']); ?></option><?php endforeach; endif; ?></select><div class="clear"></div>
   <p>手机号：</p><input id = "terminal_phone" name="terminal_phone" type="text" /><div class="clear"></div>
   
  </div>
  <div class="right">
   <dl>图例说明<span>（注：点击放大示例图片）</span></dl>
   <ul>
    <a href="img.html" target="_blank"><img src="/thinkphp_3.2.3_full/Public/images/banner.jpg" /></a>
    <a href="img.html" target="_blank"><img src="/thinkphp_3.2.3_full/Public/images/banner.jpg" /></a>
    <a href="img.html" target="_blank"><img src="/thinkphp_3.2.3_full/Public/images/banner.jpg" /></a>
   </ul>
   <dl>请上传身份图片</dl>
   <ul>
    <a href="#"><img src="/thinkphp_3.2.3_full/Public/images/jia.jpg" /></a>
    <a href="#"><img src="/thinkphp_3.2.3_full/Public/images/jia.jpg" /></a>
    <a href="#"><img src="/thinkphp_3.2.3_full/Public/images/jia.jpg" /></a>
   </ul>
   <dt>图片上传说明</dt>
   <p>1.需上传身份证（军官证、士兵证）正面、反面照片，个人手持证件照片，图片尺寸小于xxx*xx，小于xM，格式为JPG、PNG。</p>
   <p>2.在拍摄证件时，确保照片清晰（底纹、字体、照片清晰），无模糊，无白光点等；确保图片完整，证件的周围不允许加上边角框；证件上不出现其它字样或图案。</p>
   <p>3.机主真实姓名、证件号码与提交的证件信息一致。</p>
   <p>4.手持证件照要求用户本人手持身份证正面于胸前拍摄，确保图片清晰（本人照片、身份证照片清晰）。</p>
  </div>
  <div class="dibu">
   <button name="" type="button" onclick="dosave()"/>提 交</button>
   <button name="" type="button" />返 回</button>
  </div>
  
 </div>
</div>
</form>
<script type="text/javascript">
  function dosave(){
    var package_name = document.getElementById("package_name").value;
    var terminal_outercode = document.getElementById("terminal_outercode").value;
    var terminal_username = document.getElementById("terminal_username").value;
    var terminal_phone = document.getElementById("terminal_phone").value;

        if(!(/^1[3|4|5|8][0-9]\d{4,8}$/.test(terminal_phone))){ 
        alert("不是完整的11位手机号或者正确的手机号前七位"); 
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