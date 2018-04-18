<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>DouPHP 管理中心</title>
<meta name="Copyright" content="Douco Design." />
<link href="/admin/Public/css/public.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/admin/Public/js/jquery.min.js"></script>
<script type="text/javascript" src="/admin/Public/js/global.js"></script>
</head>
<body>
<div id="dcWrap"> <div id="dcHead">
 <div id="head">
  <div class="logo"><a href="index.html"><img src="images/dclogo.gif" alt="logo"></a></div>
  <div class="nav">
   
   <ul class="navRight">
    <li class="M noLeft"><a href="JavaScript:void(0);">您好，admin</a>
     <div class="drop mUser">
      <a href="manager.php?rec=edit&id=1">编辑我的个人资料</a>
      <a href="manager.php?rec=cloud_account">设置云账户</a>
     </div>
    </li>
    <li class="noRight"><a href="login.php?rec=logout">退出</a></li>
   </ul>
  </div>
 </div>
</div>
<!-- dcHead 结束 --> <div id="dcLeft"><div id="menu">

 <ul>
  <li><a href="<?php echo U('Index/index');?>"><i class="manager"></i><em>网站成员</em></a></li>
    <li><a href="<?php echo U('Index/manager');?>"><i class="manager"></i><em>网站管理员</em></a></li>
  <li><a href="<?php echo U('Index/product_category');?>"><i class="productCat"></i><em>商品分类</em></a></li>
    <li><a href="<?php echo U('Index/product');?>"><i class="product"></i><em>商品列表</em></a></li>
  <li><a href="<?php echo U('Index/article_category');?>"><i class="articleCat"></i><em>文章列表</em></a></li>
</div></div>

 <div id="dcMain">
   <!-- 当前位置 -->
<div id="urHere">DouPHP 管理中心<b>></b><strong>用户信息</strong> </div>   <div id="manager" class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
    <h3><a href="manager.html" class="actionBtn">返回列表</a>用户信息</h3>
            <form action="<?php echo U('Index/updatemanagerinfo');?>" method="post">
     <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
     <input type="hidden" name="id" size="40" class="inpMain" value="<?php echo ($list["id"]); ?>" />
      <tr>
       <td width="100" align="right">用户名称</td>
       <td>
        <input type="text" name="name" size="40" class="inpMain" value="<?php echo ($list["name"]); ?>" />
       </td>
      </tr>
      <tr>
       <td width="100" align="right">账号</td>
       <td>
        <input type="text" name="account" size="40" class="inpMain" value="<?php echo ($list["account"]); ?>" />
       </td>
      </tr>
      <tr>
       <td align="right">密码</td>
       <td>
        <input type="text" name="password" size="40" class="inpMain"  value="<?php echo ($list["password"]); ?>"/>
       </td>
      </tr>
      <tr>
      <tr>
         <tr>
       <td width="100" align="right">联系电话</td>
       <td>
        <input type="text" name="phone" size="40" class="inpMain"  value="<?php echo ($list["phone"]); ?>"/>
       </td>
      </tr>
         <tr>
       <td width="100" align="right">联系地址</td>
       <td>
        <input type="text" name="address" size="40" class="inpMain"  value="<?php echo ($list["address"]); ?>"/>
       </td>
      </tr>
       <td></td>
       <td>
        <input type="hidden" name="type" value="0" />
        <input type="submit" name="submit" class="btn" value="提交" />
       </td>
      </tr>
     </table>
    </form>
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