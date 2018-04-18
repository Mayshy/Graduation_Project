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
<div id="urHere">DouPHP 管理中心<b>></b><strong>文章列表</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
        <h3><a href="addarticle.html?rec=add" class="actionBtn add">添加文章</a>文章列表</h3>
    <div class="filter">
    <form action="article.php" method="post">
     <select name="cat_id">
      <option value="0">未分类</option>
                  <option value="1"> 公司动态</option>
                        <option value="2"> 行业新闻</option>
                 </select>
     <input name="keyword" type="text" class="inpMain" value="" size="20" />
     <input name="submit" class="btnGray" type="submit" value="筛选" />
    </form>
    <span>
        <a class="btnGray" href="article.php?rec=sort">开始筛选首页文章</a>
        </span>
    </div>
        <div id="list">
    <form name="action" method="post" action="article.php?rec=action">
    <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
     <tr>
      <th width="22" align="center"><input name='chkall' type='checkbox' id='chkall' onclick='selectcheckbox(this.form)' value='check'></th>
      <th width="40" align="center">编号</th>
      <th align="left">文章名称</th>
      <th width="150" align="center">文章分类</th>
      <th width="80" align="center">添加日期</th>
      <th width="80" align="center">操作</th>
     </tr>
          <tr>
      <td align="center"><input type="checkbox" name="checkbox[]" value="10" /></td>
      <td align="center">10</td>
      <td><a href="article.php?rec=edit&id=10">移动互联网产品设计的核心要素有哪些？</a></td>
      <td align="center"><a href="article.php?cat_id=1">公司动态</a></td>
      <td align="center">2013-06-26</td>
      <td align="center">
              <a href="article.php?rec=edit&id=10">编辑</a> | <a href="article.php?rec=del&id=10">删除</a>
             </td>
     </tr>
          <tr>
      <td align="center"><input type="checkbox" name="checkbox[]" value="9" /></td>
      <td align="center">9</td>
      <td><a href="article.php?rec=edit&id=9">详解如何利用RSS进行网络推广</a></td>
      <td align="center"><a href="article.php?cat_id=2">行业新闻</a></td>
      <td align="center">2013-06-26</td>
      <td align="center">
              <a href="article.php?rec=edit&id=9">编辑</a> | <a href="article.php?rec=del&id=9">删除</a>
             </td>
     </tr>
          <tr>
      <td align="center"><input type="checkbox" name="checkbox[]" value="8" /></td>
      <td align="center">8</td>
      <td><a href="article.php?rec=edit&id=8">企业网站文章标题该如何去撰写</a></td>
      <td align="center"><a href="article.php?cat_id=2">行业新闻</a></td>
      <td align="center">2013-06-26</td>
      <td align="center">
              <a href="article.php?rec=edit&id=8">编辑</a> | <a href="article.php?rec=del&id=8">删除</a>
             </td>
     </tr>
          <tr>
      <td align="center"><input type="checkbox" name="checkbox[]" value="7" /></td>
      <td align="center">7</td>
      <td><a href="article.php?rec=edit&id=7">移动互联网发展下的企业网变革</a></td>
      <td align="center"><a href="article.php?cat_id=2">行业新闻</a></td>
      <td align="center">2013-06-26</td>
      <td align="center">
              <a href="article.php?rec=edit&id=7">编辑</a> | <a href="article.php?rec=del&id=7">删除</a>
             </td>
     </tr>
          <tr>
      <td align="center"><input type="checkbox" name="checkbox[]" value="6" /></td>
      <td align="center">6</td>
      <td><a href="article.php?rec=edit&id=6">新手如何选购虚拟主机</a></td>
      <td align="center"><a href="article.php?cat_id=1">公司动态</a></td>
      <td align="center">2013-06-26</td>
      <td align="center">
              <a href="article.php?rec=edit&id=6">编辑</a> | <a href="article.php?rec=del&id=6">删除</a>
             </td>
     </tr>
          <tr>
      <td align="center"><input type="checkbox" name="checkbox[]" value="5" /></td>
      <td align="center">5</td>
      <td><a href="article.php?rec=edit&id=5">网站建设要素之如何制定一份网站策划方案</a></td>
      <td align="center"><a href="article.php?cat_id=1">公司动态</a></td>
      <td align="center">2013-06-26</td>
      <td align="center">
              <a href="article.php?rec=edit&id=5">编辑</a> | <a href="article.php?rec=del&id=5">删除</a>
             </td>
     </tr>
          <tr>
      <td align="center"><input type="checkbox" name="checkbox[]" value="4" /></td>
      <td align="center">4</td>
      <td><a href="article.php?rec=edit&id=4">一个新手要如何着手来做好网站运营？</a></td>
      <td align="center"><a href="article.php?cat_id=1">公司动态</a></td>
      <td align="center">2013-06-26</td>
      <td align="center">
              <a href="article.php?rec=edit&id=4">编辑</a> | <a href="article.php?rec=del&id=4">删除</a>
             </td>
     </tr>
          <tr>
      <td align="center"><input type="checkbox" name="checkbox[]" value="3" /></td>
      <td align="center">3</td>
      <td><a href="article.php?rec=edit&id=3">网络营销之该如何打造吸引性的软文营销</a></td>
      <td align="center"><a href="article.php?cat_id=1">公司动态</a></td>
      <td align="center">2013-06-26</td>
      <td align="center">
              <a href="article.php?rec=edit&id=3">编辑</a> | <a href="article.php?rec=del&id=3">删除</a>
             </td>
     </tr>
          <tr>
      <td align="center"><input type="checkbox" name="checkbox[]" value="2" /></td>
      <td align="center">2</td>
      <td><a href="article.php?rec=edit&id=2">如何利用电子商务提升企业竞争力</a></td>
      <td align="center"><a href="article.php?cat_id=1">公司动态</a></td>
      <td align="center">2013-06-26</td>
      <td align="center">
              <a href="article.php?rec=edit&id=2">编辑</a> | <a href="article.php?rec=del&id=2">删除</a>
             </td>
     </tr>
          <tr>
      <td align="center"><input type="checkbox" name="checkbox[]" value="1" /></td>
      <td align="center">1</td>
      <td><a href="article.php?rec=edit&id=1">企业网站建设的重要性</a></td>
      <td align="center"><a href="article.php?cat_id=1">公司动态</a></td>
      <td align="center">2013-06-26</td>
      <td align="center">
              <a href="article.php?rec=edit&id=1">编辑</a> | <a href="article.php?rec=del&id=1">删除</a>
             </td>
     </tr>
         </table>
    <div class="action">
     <select name="action" onchange="douAction()">
      <option value="0">请选择...</option>
      <option value="del_all">删除</option>
      <option value="category_move">移动分类至</option>
     </select>
     <select name="new_cat_id" style="display:none">
      <option value="0">未分类</option>
                  <option value="1"> 公司动态</option>
                        <option value="2"> 行业新闻</option>
                 </select>
     <input name="submit" class="btn" type="submit" value="执行" />
    </div>
    </form>
    </div>
    <div class="clear"></div>
    <div class="pager">总计 10 个记录，共 1 页，当前第 1 页 | <a href="article.php?page=1">第一页</a> 上一页 下一页 <a href="article.php?page=1">最末页</a></div>           </div>
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