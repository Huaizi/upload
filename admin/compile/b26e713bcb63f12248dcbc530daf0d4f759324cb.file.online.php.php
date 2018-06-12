<?php /* Smarty version Smarty-3.1.3, created on 2018-06-12 17:57:10
         compiled from "templates/default/admin\module\service\online.php" */ ?>
<?php /*%%SmartyHeaderCode:308795a5ab14ac2be86-91635594%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b26e713bcb63f12248dcbc530daf0d4f759324cb' => 
    array (
      0 => 'templates/default/admin\\module\\service\\online.php',
      1 => 1528797382,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '308795a5ab14ac2be86-91635594',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5a5ab14acd6d8',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5ab14acd6d8')) {function content_5a5ab14acd6d8($_smarty_tpl) {?>

<div class="space"></div>
<div class="block">
	<div class="head"><span>使用说明</span></div>
	<div class="main content">
		1、填写客服代码之前先把编辑器切换到“源代码”模式。<br />
		2、此处可填写QQ、阿里旺旺等多种在线客服代码，但请注意所填写的代码是否会影响前台页面布局。<br />
		3、建议在“源代码”模式填写代码之后，切换回“所见即所得”模式并多敲入一个空格然后才提交，否则可能会提交失败。
	</div>
</div>
<!-------------------------- BOX -------------------------->
<div class="box" id="show_html">
	<div class="close" onclick="hide_box('show_html')">关闭</div>
	<div class="main">请点击编辑器左上角的“HTML”小按钮切换到源代码模式</div>
</div>
<!-------------------------- BOX -------------------------->

<script language="javascript">
	show_box('show_html',430,95);
</script>
<?php }} ?>