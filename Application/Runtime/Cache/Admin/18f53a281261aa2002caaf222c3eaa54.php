<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/thinkphp_3.2.3_full/Public/css/main.css" rel="stylesheet" type="text/css" />
<script src="/thinkphp_3.2.3_full/Public/js/jquery.min.1.8.2.js" type="text/javascript"></script>
<title>套餐设置</title>
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
  <div class="li04"><a href="h_tcsz.html" class="hover"><img src="/thinkphp_3.2.3_full/Public/images/hn_04.png" /></a></div>
 </div>
</div>

<div id="add">当前位置：套餐设置</d
iv>

<div id="h_nav">
 <a href="h_tcsz.html" class="hover">套餐设置</a>
 <a href="<?php echo U('Czysz/Index');?>">操作员设置</a>
 <a href="h_xgmm.html">系统设置</a>
</div>
<div class="clear"></div>

<div id="hou">
 <form action = "/thinkphp_3.2.3_full/index.php/Admin/Tcsz/Index" method="post" id="search">
   <div id="sou">
      <p>ID：</p><input name="id" type="text" class="in_01" id="package_id"/>
      <p>套餐：</p>
      <select id = "package_name"  name="package_name">
         <option value="">全部套餐</option>
        <?php if(is_array($cat_name)): foreach($cat_name as $key=>$value): ?><option value="<?php echo ($value[0]); ?>"><?php echo ($value[0]); ?></option><?php endforeach; endif; ?>
      </select>
      <p>添加时间：</p><input name="addtime" type="text" class="in_02" /><span class="sp">-</span>
      <input name="" type="text" class="in_02" />
      <p>有效期：</p><input name="usetime" type="text" class="in_03" />
      <select name="date" class="select">
        <option value="year">年</option>
        <option value="month">月</option>
        <option value="day">日</option>
      </select>
      <button name="" type="button" onclick="search()" />查询</button>
   </div>
 </form>
 <div id="tabl">
  <dl>
   <button name="" type="button" />新建</button>
   <button name="" type="button" />修改</button>
   <dt>当前记录共 1 条</dt>
  </dl>
  <table border="0" cellspacing="0" cellpadding="0">
   <tr class="bi">
    <td width="30">&nbsp;</td>
    <td width="201">ID</td>
    <td width="100">套餐</td>
    <td width="400">描述</td>
    <td width="126">有效期</td>
    <td width="146">时间</td>
   </tr>
   <?php if(is_array($search)): foreach($search as $key=>$value): ?><tr>
    <td><input name="" type="checkbox" value="" /></td>
    <td><?php echo ($value['package_officialid']); ?></td>
    <td><?php echo ($value['package_name']); ?></td>
    <td><?php echo ($value['package_describe']); ?></td>
    <td><?php echo ($value['package_validity']); ?></td>
    <td>2016-08-08</td>
   </tr><?php endforeach; endif; ?>
  </table>
  <form action = "/thinkphp_3.2.3_full/index.php/Admin/Tcsz/Add" method = "post" id = "form">
  <div id="n_xin">
   <p>套餐：</p><input id = "package_name" name="package_name" type="text" class="in_01" />
   <p>ID：</p><input id = "package_officialid" name="package_officialid" type="text" class="in_01" />
   <p>有效期：</p><input id = "package_validity" name="package_validity" type="text" class="in_02" />
   <select name="">
    <option>年</option>
    <option>月</option>
    <option>日</option>
  </select>
   <div class="clear"></div>
   <p>描述：</p>
   <textarea id = "package_describe" name="package_describe" cols="" rows=""></textarea>
   <div class="butt">
    <button name="" type="button" onclick = "dosave()" />保 存</button>
    <button name="" type="button" />取 消</button>
   </div>
  </div>
 </div>
 
</div> 
</form>
<script type="text/javascript">
  function dosave(){
    var $name = document.getElementById("package_name").value;
    var $officialid = document.getElementById("package_officialid").value;
    var $validity = document.getElementById("package_validity").value;
    var $describe = document.getElementById("package_describe").value;
    if($officialid.length == 0 ){
      alert("ID不能为空");
      return false;
      }
      document.getElementById("form").submit();
    }
   /* var name = document.getElementById('package_name').selectedIndex;
    var n = document.getElementById('package_name').options[name].value;


    function pname(){
        var name = document.getElementById('package_name').selectedIndex;
        var n = document.getElementById('package_name').options[name].value;

    }*/
    function search(){
      document.getElementById('search').submit();
    }
  
      

</script>
<div class="clear"></div>

<div id="footer">
 <div class="main"><img src="/thinkphp_3.2.3_full/Public/images/pic_02.jpg" /></div>
</div>


</body>
</html>