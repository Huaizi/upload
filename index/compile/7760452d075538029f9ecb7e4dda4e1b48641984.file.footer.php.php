<?php /* Smarty version Smarty-3.1.3, created on 2018-01-13 20:33:50
         compiled from "templates/default/index\module\footer.php" */ ?>
<?php /*%%SmartyHeaderCode:243035a59d67ce8de57-97093150%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7760452d075538029f9ecb7e4dda4e1b48641984' => 
    array (
      0 => 'templates/default/index\\module\\footer.php',
      1 => 1515846827,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '243035a59d67ce8de57-97093150',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5a59d67cedf38',
  'variables' => 
  array (
    'footer_nav' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a59d67cedf38')) {function content_5a59d67cedf38($_smarty_tpl) {?>
<div id="footer">
	<div class="nav">
		<div class="main">
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['footer_nav']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['item']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->iteration++;
 $_smarty_tpl->tpl_vars['item']->last = $_smarty_tpl->tpl_vars['item']->iteration === $_smarty_tpl->tpl_vars['item']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['footer_nav']['last'] = $_smarty_tpl->tpl_vars['item']->last;
?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
			<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['footer_nav']['last']){?>|<?php }?>
			<?php } ?>
		</div>
	</div>

</div>
<!-- 新秀 -->
<?php }} ?>