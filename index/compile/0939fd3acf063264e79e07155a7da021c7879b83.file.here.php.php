<?php /* Smarty version Smarty-3.1.3, created on 2018-01-13 17:51:00
         compiled from "templates/default/index\module\here.php" */ ?>
<?php /*%%SmartyHeaderCode:74825a59d68435f8b8-67470200%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0939fd3acf063264e79e07155a7da021c7879b83' => 
    array (
      0 => 'templates/default/index\\module\\here.php',
      1 => 1430901747,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74825a59d68435f8b8-67470200',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_title' => 0,
    'cat_name' => 0,
    'channel_title' => 0,
    'global' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5a59d6843f8da',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a59d6843f8da')) {function content_5a59d6843f8da($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'E:\phpStudy\WWW\upload\smarty\plugins\modifier.truncate.php';
?>
<div class="here">
	<span class="name"><?php if ($_smarty_tpl->tpl_vars['page_title']->value){?><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
<?php }elseif($_smarty_tpl->tpl_vars['cat_name']->value){?><?php echo $_smarty_tpl->tpl_vars['cat_name']->value;?>
<?php }elseif($_smarty_tpl->tpl_vars['channel_title']->value){?><?php echo $_smarty_tpl->tpl_vars['channel_title']->value;?>
<?php }?></span>
	<div class="link">
		<a href="./">首页</a>
		<?php if ($_smarty_tpl->tpl_vars['channel_title']->value){?>-&gt;&nbsp;<a href="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['channel_title']->value;?>
</a><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['cat_name']->value){?>-&gt;&nbsp;<a href="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel'],'cat'=>$_smarty_tpl->tpl_vars['global']->value['cat']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['cat_name']->value;?>
</a><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['page_title']->value){?>-&gt;&nbsp;<a href="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel'],'id'=>$_smarty_tpl->tpl_vars['global']->value['id']),$_smarty_tpl);?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['page_title']->value,20);?>
</a><?php }?>
	</div>
</div>
<!-- 新秀 --><?php }} ?>