<?php
/* Smarty version 3.1.30, created on 2017-09-27 09:43:22
  from "D:\webSoftWare\wamp64\www\SCU\tpls\admin\backstageLogin.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59cb72ba76ca65_88681641',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc62e649ce41851f22d6435bcac292cf62eb6d2a' => 
    array (
      0 => 'D:\\webSoftWare\\wamp64\\www\\SCU\\tpls\\admin\\backstageLogin.html',
      1 => 1506505401,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59cb72ba76ca65_88681641 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<title>校社联后台登录界面</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./img/css/admin/backstageLogin.css">
	<?php echo '<script'; ?>
 src="./img/js/jquery.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="./img/js/admin/adminLogin.js"><?php echo '</script'; ?>
>
</head>
<body>
		<header></header>
		<article>
				<div class="left">
					<span class="span1">校社联——</span>
					<span class="span2">有幸遇见你</span><br>
					<a href="main.php">了解更多关于校社联</a>
				</div>
				<div class="rightLogin">
					<div class="SCUTitle">
						<div class="SCUL1"><span class="sTitle">社团管理</span></div>
						<div class="SCUL2"><span class="slTitle">社联管理</span></div>
					</div>
					
					<div id="formForSt">
						<div class="formIpt">
							<span class="tips" id="tips_a"></span>		

							<div class="imgUser"><input type="text" class="user" name="username" id="username_a" placeholder="请输入用户名"/><img type="image" src="./img/images/x.png" alt="reset" class="reset" onclick="reset_a()"/></div>							
							
							<div class="imgPwd"><input type="password" class="psd" name="password" id="password_a" placeholder="请输入密码" autocomplete="new-password" /></div>										
													
						</div>
						<div class="loginBtn"><input type="submit" id="rt" value="登录" name="auto_login" class="login_btn" onclick="check_a()"/><br />
						</div>
					</div>
					
					
					
					
					<div id="formForSl">
						<div class="formIpt">
							<span class="tips" id="tips_b"></span>		

							<div class="imgUser"><input type="text" class="user" name="admin_usr" id="username_b" placeholder="请输入用户名"/><img type="image" src="./img/images/x.png" alt="reset" class="reset" onclick="reset_b()"/></div>							
							
							<div class="imgPwd"><input type="password" class="psd" name="admin_pwd" id="password_b" placeholder="请输入密码"/></div>										
												
						</div>
						<div class="loginBtn"><input type="submit" value="登录" class="login_btn" onclick="check_b()"/><br />
						</div>
					</div>
					
				</div>						
		</article>
		<footer class="tail">
		</footer>
				
</body>
</html>
<?php }
}
