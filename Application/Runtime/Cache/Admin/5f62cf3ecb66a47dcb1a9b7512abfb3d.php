<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD>
<META http-equiv=Content-Type content="text/html; charset=gb2312">
<LINK href="/free_shop/Public/css/admin.css" type="text/css" rel="stylesheet">
<SCRIPT language=javascript>
	function expand(el)
	{
		childObj = document.getElementById("child" + el);

		if (childObj.style.display == 'none')
		{
			childObj.style.display = 'block';
		}
		else
		{
			childObj.style.display = 'none';
		}
		return;
	}
</SCRIPT>
</HEAD>
<BODY>
<TABLE height="100%" cellSpacing=0 cellPadding=0 width=170 
background=images/menu_bg.jpg border=0>
  <TR>
    <TD vAlign=top align=middle>
      <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
        
        <TR>
          <TD height=10></TD></TR></TABLE>

      <TABLE cellSpacing=0 cellPadding=0 width=150 border=0>
        
        <TR height=22>
          <TD style="PADDING-LEFT: 30px" background=/free_shop/Public/images/menu_bt.jpg><A 
            class=menuParent onclick=expand(1) 
            href="javascript:void(0);">订单管理</A></TD></TR>
        <TR height=4>
          <TD></TD></TR></TABLE>
      <TABLE id=child1 style="DISPLAY: none" cellSpacing=0 cellPadding=0 
      width=150 border=0>
        
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="/free_shop/Public/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="#" 
            target=main>查看订单</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="/free_shop/Public/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="#" 
            target=main>尚未发货</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="/free_shop/Public/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="#" 
            target=main>已经发货<A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="/free_shop/Public/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="#" 
            target=main>交易完成</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="/free_shop/Public/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="#" 
            target=main>无效订单</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="/free_shop/Public/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="#" 
            target=main>尚未付款</A></TD></TR>
       
        <TR height=4>
          <TD colSpan=2></TD></TR></TABLE>
       
      <TABLE cellSpacing=0 cellPadding=0 width=150 border=0>
        
        <TR height=22>
          <TD style="PADDING-LEFT: 30px" background=/free_shop/Public/images/menu_bt.jpg><A 
            class=menuParent onclick=expand(2) 
            href="javascript:void(0);">评价管理</A></TD></TR>
        <TR height=4>
          <TD></TD></TR></TABLE>
      <TABLE id=child2 style="DISPLAY: none" cellSpacing=0 cellPadding=0 
      width=150 border=0>
        
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="/free_shop/Public/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="<?php echo U('discuss/index');?>" 
            target=main>查看所有</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="/free_shop/Public/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="<?php echo U('discuss/index',array('state'=>1));?>" 
            target=main>等待回复</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="/free_shop/Public/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="<?php echo U('discuss/index',array('state'=>2));?>" 
            target=main>回复完成</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="/free_shop/Public/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="<?php echo U('discuss/index',array('state'=>3));?>" 
            target=main>无效评论</A></TD></TR>
        <TR height=4>
          <TD colSpan=2></TD></TR></TABLE>
        <!--===============================================================-->
        <!--评价管理结束-->
        <!--===============================================================-->
     <!--*****************************************************************
          //用户管理开始
          //author:张兴
          *****************************************************************-->
      <TABLE cellSpacing=0 cellPadding=0 width=150 border=0>
        <TR height=22>
          <TD style="PADDING-LEFT: 30px" background=/free_shop/Public/images/menu_bt.jpg><A 
            class=menuParent onclick=expand(3) 
            href="javascript:void(0);">用户管理</A></TD></TR>
        <TR height=4>
          <TD></TD></TR></TABLE>
      <TABLE id=child3 style="DISPLAY: none" cellSpacing=0 cellPadding=0 
      width=150 border=0>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="/free_shop/Public/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="<?php echo U('User/index');?>" 
            target=main>查看用户</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="/free_shop/Public/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="<?php echo U('User/add');?>" 
            target=main>添加用户<A></TD></TR>
        <TR height=4>
          <TD colSpan=2></TD></TR></TABLE>
          <!--***********************用户处理结束*****************************-->

<!--*********************张超******************************************* -->
      <TABLE cellSpacing=0 cellPadding=0 width=150 border=0>
        <TR height=22>
          <TD style="PADDING-LEFT: 30px" background=/free_shop/Public/images/menu_bt.jpg><A 
            class=menuParent onclick=expand(4) 
            href="javascript:void(0);">商品管理</A></TD></TR>
        <TR height=4>
          <TD></TD></TR></TABLE>
      <TABLE id=child4 style="DISPLAY: none" cellSpacing=0 cellPadding=0 
      width=150 border=0>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="/free_shop/Public/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="/free_shop/index.php/Admin/Goods/index" 
            target=main>浏览全部商品</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="/free_shop/Public/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="<?php echo U('Goods/index',array('state'=>1));?>" 
            target=main>推荐新产品</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="/free_shop/Public/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="<?php echo U('Goods/index',array('state'=>3));?>" 
            target=main>下架产品</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="/free_shop/Public/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="<?php echo U('Goods/index',array('state'=>4));?>" 
            target=main>热销产品</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="/free_shop/Public/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="<?php echo U('Goods/index',array('state'=>5));?>" 
            target=main>限时促销</A></TD></TR>
         <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="/free_shop/Public/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="<?php echo U('Goods/index',array('state'=>6));?>" 
            target=main>1F</A></TD></TR>
         <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="/free_shop/Public/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="<?php echo U('Goods/index',array('state'=>7));?>" 
            target=main>2F</A></TD></TR>
         <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="/free_shop/Public/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="<?php echo U('Goods/index',array('state'=>8));?>" 
            target=main>3F</A></TD></TR>
         <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="/free_shop/Public/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="<?php echo U('Goods/index',array('state'=>9));?>" 
            target=main>猜你喜欢</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="/free_shop/Public/images/menu_icon.gif" width=9></TD>
         <TD><A class=menuChild 
            href="<?php echo U('Goods/add');?>" 
            target=main>添加商品</A></TD></TR>
        <TR height=4>
          <TD colSpan=2></TD></TR></TABLE>
      <TABLE cellSpacing=0 cellPadding=0 width=150 border=0>
        <TR height=22>
          <TD style="PADDING-LEFT: 30px" background=/free_shop/Public/images/menu_bt.jpg><A 
            class=menuParent onclick=expand(5) 
            href="javascript:void(0);">类别管理</A></TD></TR>
        <TR height=4>
          <TD></TD></TR></TABLE>
      <TABLE id=child5 style="DISPLAY: none" cellSpacing=0 cellPadding=0 
      width=150 border=0>
        
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="/free_shop/Public/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="<?php echo U('Type/index');?>" 
            target=main>浏览类别</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="/free_shop/Public/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="<?php echo U('Type/add1');?>" 
            target=main>添加类别</A></TD></TR><TR height=4>
          <TD colSpan=2></TD></TR></TABLE>
<!--*********************张超********************************************** -->

      <TABLE cellSpacing=0 cellPadding=0 width=150 border=0>
        
        <TR height=22>
          <TD style="PADDING-LEFT: 30px" background=/free_shop/Public/images/menu_bt.jpg><A 
            class=menuParent onclick=expand(6) 
            href="javascript:void(0);">前台轮播管理</A></TD></TR>
        <TR height=4>
          <TD></TD></TR></TABLE>
      <TABLE id=child6 style="DISPLAY: none" cellSpacing=0 cellPadding=0 
      width=150 border=0>
        
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="/free_shop/Public/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="<?php echo U('Foreground/index');?>" 
            target=main>浏览所有</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="/free_shop/Public/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="<?php echo U('Foreground/index',array('state'=>2));?>" 
            target=main>查看停用</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="/free_shop/Public/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="<?php echo U('Foreground/index',array('state'=>1));?>" 
            target=main>查看有效</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="/free_shop/Public/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="<?php echo U('Foreground/add');?>" 
            target=main>添加轮播</A></TD></TR>
        </TABLE>
     
<!--**************************************************************** -->
      <TABLE cellSpacing=0 cellPadding=0 width=150 border=0>
        
        <TR height=22>
          <TD style="PADDING-LEFT: 30px" background=/free_shop/Public/images/menu_bt.jpg><A 
            class=menuParent onclick=expand(7) 
            href="javascript:void(0);">优惠券</A></TD></TR>
        <TR height=4>
          <TD></TD></TR></TABLE>
      <TABLE id=child7 style="DISPLAY: none" cellSpacing=0 cellPadding=0 
      width=150 border=0>
        
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="/free_shop/Public/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="<?php echo U('couponmall/index');?>" 
            target=main>查看所有</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="/free_shop/Public/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="<?php echo U('couponmall/add');?>" 
            target=main>发布优惠券</A></TD></TR>
        <TR height=4>
          <TD colSpan=2></TD></TR></TABLE>
     <!-- *******************管理员***张超***********************************8 -->
      <TABLE cellSpacing=0 cellPadding=0 width=150 border=0>
        
        <TR height=22>
          <TD style="PADDING-LEFT: 30px" background=/free_shop/Public/images/menu_bt.jpg><A 
            class=menuParent onclick=expand(0) 
            href="javascript:void(0);">管理员管理</A></TD></TR>
        <TR height=4>
          <TD></TD></TR></TABLE>
      <TABLE id=child0 style="DISPLAY: none" cellSpacing=0 cellPadding=0 
      width=150 border=0>
        
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="/free_shop/Public/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="<?php echo U('Admins/index');?>" 
            target=main>浏览管理员</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="/free_shop/Public/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="<?php echo U('Admins/add');?>" 
            target=main>添加管理员</A></TD></TR></TABLE>
          <!--*************************************************************************-->
           <TABLE cellSpacing=0 cellPadding=0 width=150 border=0>
        
        <TR height=22>
          <TD style="PADDING-LEFT: 30px" background=/free_shop/Public/images/menu_bt.jpg><A 
            class=menuParent onclick=expand(9) 
            href="javascript:void(0);">公告管理</A></TD></TR>
        <TR height=4>
          <TD></TD></TR></TABLE>
      <TABLE id=child9 style="DISPLAY: none" cellSpacing=0 cellPadding=0 
      width=150 border=0>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="/free_shop/Public/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="<?php echo U('Publics/add');?>" 
            target=main>添加公告</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="/free_shop/Public/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="<?php echo U('Publics/index');?>" 
            target=main>浏览公告</A></TD></TR>
       
        <TR height=4>
          <TD colSpan=2></TD></TR></TABLE>
  <!--*************************************************************** -->
           <!-- ==================================广告管理============================ -->
      <TABLE cellSpacing=0 cellPadding=0 width=150 border=0>
        
        <TR height=22>
          <TD style="PADDING-LEFT: 30px" background=/free_shop/Public/images/menu_bt.jpg><A 
            class=menuParent onclick=expand(10) 
            href="javascript:void(0);">广告管理</A></TD></TR>
        <TR height=4>
          <TD></TD></TR></TABLE>
      <TABLE id=child10 style="DISPLAY: none" cellSpacing=0 cellPadding=0 
      width=150 border=0>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="/free_shop/Public/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="<?php echo U('Ad/add');?>" 
            target=main>添加广告</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="/free_shop/Public/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="<?php echo U('Ad/index');?>" 
            target=main>浏览广告</A></TD></TR>
       
        <TR height=4>
          <TD colSpan=2></TD></TR></TABLE>
<!--=============================================================-->
           <TABLE cellSpacing=0 cellPadding=0 width=150 border=0>
        
        <TR height=22>
          <TD style="PADDING-LEFT: 30px" background=/free_shop/Public/images/menu_bt.jpg><A 
            class=menuParent onclick=expand(11) 
            href="javascript:void(0);">链接管理</A></TD></TR>
        <TR height=4>
          <TD></TD></TR></TABLE>
      <TABLE id=child11 style="DISPLAY: none" cellSpacing=0 cellPadding=0 
      width=150 border=0>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="/free_shop/Public/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="<?php echo U('Link/add');?>" 
            target=main>添加链接</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="/free_shop/Public/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="<?php echo U('Link/index');?>" 
            target=main>浏览链接</A></TD></TR>
       
        <TR height=4>
          <TD colSpan=2></TD></TR></TABLE>
<!--=========================新闻管理-=================================-->
   <TABLE cellSpacing=0 cellPadding=0 width=150 border=0>
        
        <TR height=22>
          <TD style="PADDING-LEFT: 30px" background=/free_shop/Public/images/menu_bt.jpg><A 
            class=menuParent onclick=expand(12) 
            href="javascript:void(0);">新闻管理</A></TD></TR>
        <TR height=4>
          <TD></TD></TR></TABLE>
      <TABLE id=child12 style="DISPLAY: none" cellSpacing=0 cellPadding=0 
      width=150 border=0>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="/free_shop/Public/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="<?php echo U('News/add');?>" 
            target=main>添加新闻</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="/free_shop/Public/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="<?php echo U('News/index');?>" 
            target=main>浏览新闻</A></TD></TR>
       
        <TR height=4>
          <TD colSpan=2></TD></TR></TABLE>

<!--站内信张兴开始-->
  <TABLE cellSpacing=0 cellPadding=0 width=150 border=0>
      <TR height=22>
        <TD style="PADDING-LEFT: 30px" background=/free_shop/Public/images/menu_bt.jpg>
          <A class=menuParent onclick=expand(13) href="javascript:void(0);">站内信</A>
        </TD>
      </TR>
      <TR height=4>
        <TD></TD>
      </TR>
    </TABLE>
    <TABLE id=child13 style="DISPLAY: none" cellSpacing=0 cellPadding=0 width=150 border=0>
      <TR height=20>
        <TD align=middle width=30><IMG height=9 src="/free_shop/Public/images/menu_icon.gif" width=9></TD>
        <TD><A class=menuChild href="<?php echo U('Message/index');?>" target=main>查看所有</A></TD>
      </TR>
      <TR height=20>
        <TD align=middle width=30><IMG height=9 src="/free_shop/Public/images/menu_icon.gif" width=9></TD>
        <TD><A class=menuChild href="<?php echo U('Message/index',array('state'=>1));?>" target=main>查看有效</A></TD>
      </TR>
      <TR height=20>
        <TD align=middle width=30><IMG height=9 src="/free_shop/Public/images/menu_icon.gif" width=9></TD>
        <TD><A class=menuChild href="<?php echo U('Message/index',array('state'=>2));?>" target=main>查看停用</A></TD>
      </TR>
      <TR height=20>
        <TD align=middle width=30><IMG height=9 src="/free_shop/Public/images/menu_icon.gif" width=9></TD>
        <TD><A class=menuChild href="<?php echo U('Message/add');?>" target=main>添加信息</A></TD>
      </TR>
      <TR height=4>
        <TD colSpan=2></TD>
      </TR>
    </TABLE>
  <!--站内信张兴结束-->

            </TD>
    <TD width=1 bgColor=#d1e6f7></TD></TR>
    </TABLE>
   
    
    </BODY>

    </HTML>