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
<div id="urHere">DouPHP 管理中心<b>></b><strong>添加商品</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
            <h3><a href="product.html" class="actionBtn">商品列表</a>添加商品</h3>
    <form action="<?php echo U('Index/updategoods');?>" method="post" enctype="multipart/form-data">
     <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
      <input type="text" name="id" value="<?php echo ($list["id"]); ?>" size="80" class="inpMain"  />
      <tr>
       <td width="90" align="right">商品名称</td>
       <td>
        <input type="text" name="name" value="<?php echo ($list["name"]); ?>" size="80" class="inpMain"  />
       </td>
      </tr>
      <tr>
       <td align="right">商品分类</td>
       <td>
        <select name="type">
         <?php if(is_array($category)): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value=<?php echo ($vo["id"]); ?> > <?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                   
        </select>
       </td>
      </tr>
      <tr>
       <td align="right">商品价格</td>
       <td>
        <input type="text" name="price" value="<?php echo ($list["price"]); ?>" size="40" class="inpMain" />
       </td>
      </tr>
            <tr>
       <td align="right" valign="top">商品描述</td>
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
        <textarea id="content" name="desc" style="width:780px;height:400px;" class="textArea" ><?php echo ($list["desc"]); ?></textarea>
       </td>

      </tr>
      <tr>
       <td align="right">封面图</td>
       <td>
        <img src="/admin/Uploads/<?php echo ($list["img"]); ?>" alt="" style="width: 200px;height: 100px;">

      </tr>
      <tr>
       <td align="right">封面图</td>
       <td>
        <input type="file" name="img" size="38" class="inpFlie" multiple="multiple" />

      </tr>
   <!--  <tr>
       <td align="right">具体图</td>
       <td>
        <input type="file" name="images[]" size="38" class="inpFlie" multiple="multiple"/>
      
      </tr> -->
       <td></td>
       <td>
       
        <input  class="btn" type="submit" value="提交" />
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