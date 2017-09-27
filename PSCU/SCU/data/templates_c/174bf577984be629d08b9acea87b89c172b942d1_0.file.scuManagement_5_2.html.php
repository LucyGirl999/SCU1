<?php
/* Smarty version 3.1.30, created on 2017-09-26 13:21:55
  from "D:\webSoftWare\wamp64\www\SCU\tpls\admin\scuManagement_5_2.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ca5473ecdb38_00730818',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '174bf577984be629d08b9acea87b89c172b942d1' => 
    array (
      0 => 'D:\\webSoftWare\\wamp64\\www\\SCU\\tpls\\admin\\scuManagement_5_2.html',
      1 => 1506432113,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ca5473ecdb38_00730818 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="./img/js/ueditor/css/ueditor.css">
	<?php echo '<script'; ?>
 src="./img/js/jquery.js"><?php echo '</script'; ?>
>  
	<?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="./img/js/ueditor/ueditor.config.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="./img/js/ueditor/ueditor.all.min.js"> <?php echo '</script'; ?>
>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="./img/js/ueditor/lang/zh-cn/zh-cn.js"><?php echo '</script'; ?>
>
    
</head>
<body>
	<div class="right-editor">
    		<div>
    		    <span class="position">你现在的位置:社联相关&gt活动发布&gt活动编辑</span>
            <form method="POST" action="admin.php?controller=sManage&method=activity_add">
				<div class="main-title">
				<label>活动主题</label>
				<input type="text" name="aname" class="main-title-input">
				</div>
                <div class="host">
                <label>负责人</label>
                <input type="text" name="hname" class="host-input">
                </div>
                <div class="display-pos">
                <label>展示位置</label>
                <select name="location" id="location" onchange="gradeChange()">
                     <option>轮播图</option>
                     <option>公告</option>
                </select>
                <div id="div_category">
                <label>类别</label>
                <select name="category" id="category">
                     <option>热门活动</option>
                     <option>火热进行</option>
                     <option>往期回顾</option>
                </select>
                </div>
                </div>
                
    		    <?php echo '<script'; ?>
 id="editor" type="text/plain"><?php echo '</script'; ?>
>
    	 </div>
    		 <div class="sub">
             <input type="submit" value="提交" name="" class="sub-button">
             <input type="button" value="返回" name="" onclick="re()" class="sub-button">
            </form>
             </div>
    				</div>  
		<?php echo '<script'; ?>
>
	var ue = UE.getEditor('editor',{
    initialFrameWidth :1100,
    initialFrameHeight:560,
    scaleEnabled:true
  });


    function isFocus(e){
        alert(UE.getEditor('editor').isFocus());
        UE.dom.domUtils.preventDefault(e)
    }
    function setblur(e){
        UE.getEditor('editor').blur();
        UE.dom.domUtils.preventDefault(e)
    }
    //更新活动的返回按钮
    function re(){
      window.location.href="http://localhost/SCU/web/admin.php?controller=sManage&method=remove";
    }
    $('#div_category').hide()
    //下拉框更改事件
    function gradeChange(){
      if("公告"==$('#location option:selected').text())
          $('#div_category').show()
      else
          $('#div_category').hide()
    }
    
<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
