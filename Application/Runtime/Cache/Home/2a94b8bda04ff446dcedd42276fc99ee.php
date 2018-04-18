<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Purple_loginform Website Template </title>

<link href="/mingjin/Public/css/style.css" rel="stylesheet" type="text/css" media="all" />

<script type="text/javascript" src="/mingjin/Public/js/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(c) {
  $('.alert-close').on('click', function(c){
    $('.message').fadeOut('slow', function(c){
        $('.message').remove();
    });
  });   
});
</script>

</head>
<body>

<div class="message warning">
  <div class="inset">
    <div class="login-head">
      <h1>民警登录</h1>

    </div>
    
    <form action="<?php echo U('Index/login');?>" method="post">
      <ul>
        <li><input type="text" class="text" name='account'><a href="#" class=" icon user"></a></li>
        <li><input type="password" value="" name='password'/> <a href="#" class="icon lock"></a></li>
      </ul>
      
      <div class="submit">
        <input type="submit"  value="登录" >
     <!--    <h4><a href="#">忘记密码?</a></h4> -->
        <div class="clear">  </div> 
      </div>
    </form>
  </div>          
</div>

<!--- footer --->
<div class="footer">
  <p>Copyright &copy; 2018.</p>
</div>


</html>