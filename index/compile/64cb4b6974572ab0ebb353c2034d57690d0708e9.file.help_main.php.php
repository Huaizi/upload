<?php /* Smarty version Smarty-3.1.3, created on 2018-01-13 19:16:31
         compiled from "templates/default/index\module\help_main.php" */ ?>
<?php /*%%SmartyHeaderCode:24695a59ea8f3082f6-57523422%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64cb4b6974572ab0ebb353c2034d57690d0708e9' => 
    array (
      0 => 'templates/default/index\\module\\help_main.php',
      1 => 1447242125,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24695a59ea8f3082f6-57523422',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_sheet' => 0,
    'article' => 0,
    'item' => 0,
    'global' => 0,
    'share_code' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5a59ea8f4b88a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a59ea8f4b88a')) {function content_5a59ea8f4b88a($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\phpStudy\WWW\upload\smarty\plugins\modifier.date_format.php';
?>
<?php if ($_smarty_tpl->tpl_vars['show_sheet']->value==1){?>
	<div class="art_sheet">
		<div class="main">
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<div><a href="<?php echo url(array('channel'=>'help','id'=>$_smarty_tpl->tpl_vars['item']->value['id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a><span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['add_time'],"%Y-%m-%d");?>
</span></div>
			<?php } ?>
			<?php if (!$_smarty_tpl->tpl_vars['article']->value){?><div class="not_found">暂无内容</div><?php }?>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['global']->value['cat']){?><?php $_smarty_tpl->tpl_vars['prefix'] = new Smarty_variable(('help/cat-').($_smarty_tpl->tpl_vars['global']->value['cat']), null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['prefix'] = new Smarty_variable('help', null, 0);?><?php }?>
		<?php echo $_smarty_tpl->getSubTemplate ("module/page_link.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('page'=>$_smarty_tpl->tpl_vars['global']->value['page']), 0);?>

	</div>
<?php }else{ ?>
	<div id="article">
		<div class="title"><h2><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h2></div>
		<div class="message">
			作者/来源：<?php echo $_smarty_tpl->tpl_vars['article']->value['author'];?>
&nbsp;&nbsp;&nbsp;发表时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value['add_time'],"%Y-%m-%d %H:%M:%S");?>

		</div>
		<div class="main">
			<?php echo $_smarty_tpl->tpl_vars['article']->value['text'];?>

			<div class="clear"></div>
		</div>
		<div class="share"><?php echo $_smarty_tpl->tpl_vars['share_code']->value;?>
</div>
		<?php $_smarty_tpl->tpl_vars['prefix'] = new Smarty_variable('help', null, 0);?>
		<?php echo $_smarty_tpl->getSubTemplate ("module/prev_next.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
<?php }?>
<!-- 新秀 --><?php }} ?>