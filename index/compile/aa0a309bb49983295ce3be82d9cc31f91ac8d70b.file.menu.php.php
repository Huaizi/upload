<?php /* Smarty version Smarty-3.1.3, created on 2018-01-13 20:33:21
         compiled from "templates/default/index\module\user\menu.php" */ ?>
<?php /*%%SmartyHeaderCode:163725a59fc9112eee7-88107500%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa0a309bb49983295ce3be82d9cc31f91ac8d70b' => 
    array (
      0 => 'templates/default/index\\module\\user\\menu.php',
      1 => 1447311135,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163725a59fc9112eee7-88107500',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'global' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5a59fc9129db2',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a59fc9129db2')) {function content_5a59fc9129db2($_smarty_tpl) {?>
<div class="user_menu">
	<div class="inner">
		<div class="head">用户中心</div>
		<div class="main">
			<div><a href="<?php echo url(array('entrance'=>$_smarty_tpl->tpl_vars['global']->value['entrance'],'channel'=>'user'),$_smarty_tpl);?>
">欢迎页</a></div>
			<div><a href="<?php echo url(array('channel'=>'user','mod'=>'profile'),$_smarty_tpl);?>
">用户信息</a></div>
			<div><a href="<?php echo url(array('channel'=>'user','mod'=>'order_sheet'),$_smarty_tpl);?>
">我的订单</a></div>
			<div><a href="<?php echo url(array('channel'=>'user','mod'=>'address_list'),$_smarty_tpl);?>
">收货地址</a></div>
			<div><a href="<?php echo url(array('channel'=>'user','mod'=>'collection_list'),$_smarty_tpl);?>
">我的收藏</a></div>
			<div><a href="<?php echo url(array('channel'=>'user','mod'=>'message_sheet'),$_smarty_tpl);?>
">我的留言</a></div>
			<div><a href="<?php echo url(array('channel'=>'user','mod'=>'comment_sheet'),$_smarty_tpl);?>
">我的评论</a></div>
			<div><a href="<?php echo url(array('channel'=>'user','mod'=>'booking_sheet'),$_smarty_tpl);?>
">缺货登记</a></div>
			<div><a href="<?php echo url(array('channel'=>'user','mod'=>'account_sheet'),$_smarty_tpl);?>
">在线充值</a></div>
		</div>
	</div>
</div><?php }} ?>