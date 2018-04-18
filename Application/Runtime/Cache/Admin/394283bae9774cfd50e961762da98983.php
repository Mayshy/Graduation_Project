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
  <div class="logo"><a href="index.html"><img src="images/dclogo.gif" alt="logo"></a></div>
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
  <li><a href="<?php echo U('Index/user');?>"><i class="manager"></i><em>网站成员</em></a></li>
    <li><a href="<?php echo U('Index/manager');?>"><i class="manager"></i><em>网站管理员</em></a></li>
  <li><a href="<?php echo U('Index/product_category');?>"><i class="productCat"></i><em>商品分类</em></a></li>
    <li><a href="<?php echo U('Index/product');?>"><i class="product"></i><em>商品列表</em></a></li>
  <li><a href="<?php echo U('Index/article_category');?>"><i class="articleCat"></i><em>文章列表</em></a></li>
</div></div>

 <div id="dcMain">
   <!-- 当前位置 -->
<div id="urHere">DouPHP 管理中心<b>></b><strong>商品列表</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
        <h3><a href="<?php echo U('Index/addproduct');?>" class="actionBtn add">添加商品</a>商品列表</h3>
    <div class="filter">
    <form action="product.php" method="post">
     <select name="cat_id">
      <option value="0">未分类</option>
                  <option value="1"> 电子数码</option>
                        <option value="4">- 智能手机</option>
                        <option value="5">- 平板电脑</option>
                        <option value="2"> 家居百货</option>
                        <option value="3"> 母婴用品</option>
                 </select>
     <input name="keyword" type="text" class="inpMain" value="" size="20" />
     <input name="submit" class="btnGray" type="submit" value="筛选" />
    </form>
    <span>
    <a class="btnGray" href="product.php?rec=re_thumb">更新商品缩略图</a>
        <a class="btnGray" href="product.php?rec=sort">开始筛选首页商品</a>
        </span>
    </div>
        <div id="list">
    <form name="action" method="post" action="product.php?rec=action">
    <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
      <tr>
     <!--    <th width="22" align="center"><input name='chkall' type='checkbox' id='chkall' onclick='selectcheckbox(this.form)' value='check'></th> -->
        <th width="40" align="center">编号</th>
        <th align="left">商品名称</th>
        <th width="150" align="center">商品分类</th>
        <th width="150" align="center">商品价格</th>
        <th width="150" align="center">商品缩略图</th>
        <th width="150" align="center">商品描述</th>
        <th width="80" align="center">添加日期</th>
        <th width="80" align="center">操作</th>
      </tr>

      <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
        <!-- <td align="center"><input type="checkbox" name="checkbox[]" value="15" /></td> -->
        <td align="center"><?php echo ($vo["id"]); ?></td>
        <td><?php echo ($vo["name"]); ?></td>
        <td align="center"><?php echo ($vo["category"]); ?></td>
        <td align="center"><?php echo ($vo["price"]); ?></td>
        <td align="center"><img src="/admin/Uploads/<?php echo ($vo["img"]); ?>" alt="" style="width: 200px;height: 100px;"></td>
        <td align="center"><?php echo ($vo["desc"]); ?></td>
        <td align="center"><?php echo ($vo["date"]); ?></td>
        <td align="center">
          <a href="<?php echo U('Index/goodsinfo',array('id'=>$vo['id']));?>">编辑</a> | <a href="<?php echo U('Index/delgoods',array('id'=>$vo['id']));?>">删除</a>
        </td>
      </tr><?php endforeach; endif; else: echo "" ;endif; ?>
          </table>
           <div class="pager"><?php echo ($page); ?></div>
   
    <div class="clear"></div>
   
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