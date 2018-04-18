<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>DouPHP 管理中心</title>
<meta name="Copyright" content="Douco Design." />
<link href="/mingjin/Public/css/public.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/mingjin/Public/js/jquery.min.js"></script>
<script type="text/javascript" src="/mingjin/Public/js/global.js"></script>
</head>
<body>
<div id="dcWrap"> <div id="dcHead">
 <div id="head">
  <div class="logo"><!-- <a href="index.html"><img src="images/dclogo.gif" alt="logo"></a> --></div>
  <div class="nav">
   
   <ul class="navRight">
    <li class="M noLeft"><a href="JavaScript:void(0);">您好，<?php echo (session('admin')); ?></a>
     <div class="drop mUser">
      <a href="manager.php?rec=edit&id=1">编辑我的个人资料</a>
      <a href="manager.php?rec=cloud_account">设置云账户</a>
     </div>
    </li>
    <li class="noRight"><a href="<?php echo U('Index/loginout');?>">退出</a></li>
   </ul>
  </div>
 </div>
</div>
<!-- dcHead 结束 --> <div id="dcLeft"><div id="menu">

 <ul>
  <li><a href="<?php echo U('Index/user');?>"><i class="manager"></i><em>民警管理</em></a></li>
    <li><a href="<?php echo U('Index/manager');?>"><i class="manager"></i><em>网站管理员</em></a></li>
     <li><a href="<?php echo U('Index/anjian');?>"><i class="manager"></i><em>案件管理</em></a></li>
     <li><a href="<?php echo U('Index/pingjia');?>"><i class="manager"></i><em>评价管理</em></a></li>
     <li><a href="<?php echo U('Index/tousu');?>"><i class="manager"></i><em>投诉管理</em></a></li>
<!--   <li><a href="<?php echo U('Index/product_category');?>"><i class="productCat"></i><em>商品分类</em></a></li>
    <li><a href="<?php echo U('Index/product');?>"><i class="product"></i><em>商品列表</em></a></li>
  <li><a href="<?php echo U('Index/article_category');?>"><i class="articleCat"></i><em>文章列表</em></a></li> -->
</div></div>

<div id="dcMain">
   <!-- 当前位置 -->
<div id="urHere">DouPHP 管理中心<b>></b><strong>案件管理</strong> </div>   <div id="manager" class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
    <h3>民警案件</h3>
        <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
     <tr>
      <th width="30" align="center">编号</th>
      <th align="center">案件名称</th>
      <th align="center">状态</th>
     <!--  <th align="center">密码</th> -->
<!--       <th align="center">联系电话</th>
       <th align="center">联系地址</th> -->
      <th align="center">操作</th>
     </tr>
      
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
            <td align="center"><?php echo ($vo["id"]); ?></td>
            <td align="center"><?php echo ($vo["name"]); ?></td>
            <td align="center"><?php echo ($vo["type"]); ?></td>
 <!--            <td align="center"><?php echo ($vo["password"]); ?></td>
            <td align="center"><?php echo ($vo["phone"]); ?></td>
            <td align="center"><?php echo ($vo["address"]); ?></td> -->
            <td align="center"><a href="<?php echo U('Index/delanjian',array('id'=>$vo['id']));?>">删除</td>
           </tr><?php endforeach; endif; else: echo "" ;endif; ?>
         </table>
         </div>
 </div>
 <div class="clear"></div>
<div id="dcFooter">
 <div id="footer">
  <div class="line"></div>
  <ul>

  </ul>
 </div>
</div><!-- dcFooter 结束 -->
<div class="clear"></div> </div>
</body>
</html>
 <div class="clear"></div>
<div id="dcFooter">
 <div id="footer">
  <div class="line"></div>
  <ul>

  </ul>
 </div>
</div><!-- dcFooter 结束 -->
<div class="clear"></div> </div>
</body>
</html>