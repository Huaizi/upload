<?php /* Smarty version Smarty-3.1.3, created on 2018-01-13 19:16:31
         compiled from "templates/default/index\module\help_tree.php" */ ?>
<?php /*%%SmartyHeaderCode:275485a59ea8f1d5e54-96013870%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8078b0a32e59b4fb6653e765a230e7dae87fabe5' => 
    array (
      0 => 'templates/default/index\\module\\help_tree.php',
      1 => 1431013388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '275485a59ea8f1d5e54-96013870',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'help_tree' => 0,
    'item' => 0,
    'grade' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5a59ea8f25b76',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a59ea8f25b76')) {function content_5a59ea8f25b76($_smarty_tpl) {?>
<div class="article_tree">
	<div class="inner">
		<div class="head">文章分类</div>
		<div class="main">
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['help_tree']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['item']->value['grade']==1){?><?php $_smarty_tpl->tpl_vars['grade'] = new Smarty_variable(1, null, 0);?><?php }elseif($_smarty_tpl->tpl_vars['item']->value['grade']==2){?><?php $_smarty_tpl->tpl_vars['grade'] = new Smarty_variable(2, null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['grade'] = new Smarty_variable(3, null, 0);?><?php }?>
			<div class="cat_<?php echo $_smarty_tpl->tpl_vars['grade']->value;?>
"><a href="<?php echo url(array('channel'=>'help','cat'=>$_smarty_tpl->tpl_vars['item']->value['id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></div>
			<?php } ?>
		</div>
	</div>
</div>
<!-- 新秀 --><?php }} ?>