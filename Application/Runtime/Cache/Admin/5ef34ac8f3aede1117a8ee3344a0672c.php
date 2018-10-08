<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/thinkphp_3.2.3_full/Public/css/main.css" rel="stylesheet" type="text/css" />
<script src="/thinkphp_3.2.3_full/Public/js/jquery.min.1.8.2.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function(){
        $(".aa").click(function(){
          var status = $(this).html();
          var obj = $(this);
          $.ajax({
          url:"/thinkphp_3.2.3_full/index.php/Admin/Rzsf/rz",
          type:"post",
          data:{certification_status:status,certification_id:obj.data('tid')},
          success:function(data){
            //alert(data);
           if(data == "y"){
            //$(this).parent().prev().html("已认证");
            obj.html("驳回");
           }else{
             //$(this).parent().prev().html("未认证");
            obj.html("通过");
           }
           //alert(data);
          },
          error:function(){
            alert("请求失败");
          }
        });
        })
       


    });
 </script>
<title>认证审核</title>
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
  <div class="li01"><a href="h_rzsf.html" class="hover"><img src="/thinkphp_3.2.3_full/Public/images/hn_01.png" /></a></div>
  <div class="li03"><a href="<?php echo U('Khdz/Index');?>"><img src="/thinkphp_3.2.3_full/Public/images/hn_03.png" /></a></div>
  <div class="li04"><a href="<?php echo U('Tcsz/Index');?>"><img src="/thinkphp_3.2.3_full/Public/images/hn_04.png" /></a></div>
 </div>
</div>

<div id="add">当前位置：认证审核</div>
<div class="clear"></div>

<div id="hou">
 <div id="sou">
  <p>手机号：</p><input name="" type="text" class="in_01" />
  <p>外码号：</p><input name="" type="text" class="in_01" />
  <p>内码号：</p><input name="" type="text" class="in_02" />
  <p>套餐：</p><select name=""><option>9G年卡</option></select>
  <p>状态：</p><select name=""><option>已审核</option></select>
  <div class="clear"></div>
  <p>时间：</p><input name="" type="text" class="in_02" /><span class="sp">-</span><input name="" type="text" class="in_02" />
  <button name="" type="button" />查询</button>
 </div>
 
 <div id="tabl">
  <dl>
   <input name="" type="checkbox" value="" /><span>全选</span>
   <button name="" type="button" />批量删除</button>
   <dt>当前记录共1条</dt>
  </dl>
  <table border="0" cellspacing="0" cellpadding="0">
   <tr class="bi">
    <td width="34">&nbsp;</td>
    <td width="116">手机号</td>
    <td width="80">姓名</td>
    <td width="160">外码号</td>
    <td width="83">套餐</td>
    <td width="177">时间</td>
    <td width="84">状态</td>
    <td width="122">操作</td>
   </tr>
   
  <?php if(is_array($info)): foreach($info as $key=>$value): ?><tr class="grey">
    <form action = "/thinkphp_3.2.3_full/index.php/Admin/Rzsfrz" method = "post" id="form">
    <td><input name="" type="checkbox" value="" /></td>
    <td><?php echo ($value['certification_phone']); ?></td>
    <td><?php echo ($value['certification_username']); ?></td>
    <td><?php echo ($value['terminal_outercode']); ?></td>
    <td><?php echo ($value['package_name']); ?></td>
    <td><?php echo ($value['certification_createtime']); ?></td>
    <td class = "terminal_status" name = "terminal_status"><?php echo ($value['terminal_status']); ?></td>
    <td><a href="javascript:void(0);"  data-tid="<?php echo ($value['certification_id']); ?>" class = "aa"><?php echo ($value['certification_status']); ?></a>
       | <a href="#">查看</a></td>
   </tr>
   </form><?php endforeach; endif; ?>

  </table>

 </div>
 
 
  
</div>
<div class="clear"></div>

<div id="footer">
 <div class="main"><img src="/thinkphp_3.2.3_full/Public/images/pic_02.jpg" /></div>
</div>
</body>
</html>