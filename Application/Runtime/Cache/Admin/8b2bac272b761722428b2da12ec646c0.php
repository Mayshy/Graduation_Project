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
<div id="urHere">DouPHP 管理中心<b>></b><strong>添加文章</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
            <h3><a href="article.html" class="actionBtn">文章列表</a>添加文章</h3>
    <form action="article.php?rec=insert" method="post" enctype="multipart/form-data">
     <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
      <tr>
       <td width="90" align="right">文章名称</td>
       <td>
        <input type="text" name="title" value="" size="80" class="inpMain" />
       </td>
      </tr>
      <tr>
       <td align="right">文章分类</td>
       <td>
        <select name="cat_id">
         <option value="0">未分类</option>
                           <option value="1"> 公司动态</option>
                                    <option value="2"> 行业新闻</option>
                          </select>
       </td>
      </tr>
            <tr>
       <td align="right" valign="top">文章描述</td>
       <td>
        <!-- KindEditor -->
        <link rel="stylesheet" href="js/kindeditor/themes/default/default.css" />
			<link rel="stylesheet" href="js/kindeditor/plugins/code/prettify.css" />
			<script charset="utf-8" src="js/kindeditor/kindeditor.js"></script>
			<script charset="utf-8" src="js/kindeditor/lang/zh_CN.js"></script>
			<script charset="utf-8" src="js/kindeditor/plugins/code/prettify.js"></script>
        <script>
					KindEditor.ready(function(K) {
						var editor1 = K.create('textarea[name="content"]', {
							cssPath : '../plugins/code/prettify.css',
							uploadJson : '../php/upload_json.php',
							fileManagerJson : '../php/file_manager_json.php',
							allowFileManager : true,
							afterCreate : function() {
								var self = this;
								K.ctrl(document, 13, function() {
									self.sync();
									K('form[name=example]')[0].submit();
								});
								K.ctrl(self.edit.doc, 13, function() {
									self.sync();
									K('form[name=example]')[0].submit();
								});
							}
						});
						prettyPrint();
					});
			</script>
        <!-- /KindEditor -->
        <textarea id="content" name="content" style="width:780px;height:400px;" class="textArea"></textarea>
       </td>
      </tr>
      <tr>
       <td align="right">缩略图</td>
       <td>
        <input type="file" name="image" size="38" class="inpFlie" />
        <img src="images/icon_no.png"></td>
      </tr>
      <tr>
       <td align="right">关键字</td>
       <td>
        <input type="text" name="keywords" value="" size="50" class="inpMain" />
       </td>
      </tr>
      <tr>
       <td align="right">简单描述</td>
       <td>
        <input type="text" name="description" value="" size="50" class="inpMain" />
       </td>
      </tr>
      <tr>
       <td></td>
       <td>
        <input type="hidden" name="token" value="7e4a88fb" />
        <input type="hidden" name="image" value="">
        <input type="hidden" name="id" value="">
        <input name="submit" class="btn" type="submit" value="提交" />
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