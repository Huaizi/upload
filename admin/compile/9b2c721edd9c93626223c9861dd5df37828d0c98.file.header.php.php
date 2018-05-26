<?php /* Smarty version Smarty-3.1.3, created on 2018-01-13 20:56:50
         compiled from "templates/default/admin\module\header.php" */ ?>
<?php /*%%SmartyHeaderCode:86505a59d8138254d8-65262357%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b2c721edd9c93626223c9861dd5df37828d0c98' => 
    array (
      0 => 'templates/default/admin\\module\\header.php',
      1 => 1515848206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '86505a59d8138254d8-65262357',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5a59d813e3b35',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a59d813e3b35')) {function content_5a59d813e3b35($_smarty_tpl) {?>
<div id="header">
	<div class="main">
		<div id="nav">
			<a href="?/basic/mod-basic_info/">商城设置</a>
						<a href="?/goods/mod-sheet/">商品管理</a>
						<a href="?/business/mod-order_sheet/">订单管理</a>
						<a href="?/service/mod-user_sheet/">用户互动</a>
			<div class="clear"></div>
		</div>
		<div class="link">
			<a href="./" target="_blank">网站首页</a>
			<a href="<?php echo url(array('channel'=>'out'),$_smarty_tpl);?>
">退出系统</a>
		</div>
		<div class="clear"></div>
	</div>
</div><?php }} ?>