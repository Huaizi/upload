<?php /* Smarty version Smarty-3.1.3, created on 2018-06-12 23:34:33
         compiled from "templates/default/index\module\focus.php" */ ?>
<?php /*%%SmartyHeaderCode:266145a59d67cbd2c84-09885955%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00ea1e4d417d6100b557777c89cadbc877d4920d' => 
    array (
      0 => 'templates/default/index\\module\\focus.php',
      1 => 1528817648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '266145a59d67cbd2c84-09885955',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5a59d67cbeab2',
  'variables' => 
  array (
    'S_TPL_PATH' => 0,
    'focus' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a59d67cbeab2')) {function content_5a59d67cbeab2($_smarty_tpl) {?>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
js/focus.js"></script>
<div id="focus">
	<ul>
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['focus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['path'];?>
" /></a></li>
		<?php } ?>
	</ul>
</div>
<!-- 新秀 -->
<?php }} ?>