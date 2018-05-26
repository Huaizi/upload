<?php /* Smarty version Smarty-3.1.3, created on 2018-01-13 20:33:21
         compiled from "templates/default/index\module\user\welcome.php" */ ?>
<?php /*%%SmartyHeaderCode:171815a59fc912b25c7-19830537%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac174bea9547b8b66544ee555f4af937915f97d8' => 
    array (
      0 => 'templates/default/index\\module\\user\\welcome.php',
      1 => 1430963869,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '171815a59fc912b25c7-19830537',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_name' => 0,
    'prev_login' => 0,
    'user_money' => 0,
    'order_count' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5a59fc912c6fd',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a59fc912c6fd')) {function content_5a59fc912c6fd($_smarty_tpl) {?>
<div class="block" id="welcome">
	<div class="head"><span class="user_name"><?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
</span><span>欢迎来到用户中心！</span></div>
	<div class="main">
		您的上一次登录时间：<?php echo $_smarty_tpl->tpl_vars['prev_login']->value;?>
<br />
		余额：￥<?php echo $_smarty_tpl->tpl_vars['user_money']->value;?>
元<br />
		您最近30天内提交了 <b><?php echo $_smarty_tpl->tpl_vars['order_count']->value;?>
</b> 个订单<br />
	</div>
</div>
<!-- 新秀 --><?php }} ?>