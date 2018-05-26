<?php /* Smarty version Smarty-3.1.3, created on 2018-05-26 17:15:29
         compiled from "templates/default/index\module\article_tree.php" */ ?>
<?php /*%%SmartyHeaderCode:117885b0925b14a19e3-86498045%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec1a1bf72f88fe7b38beb00e20b8da24ddeb430b' => 
    array (
      0 => 'templates/default/index\\module\\article_tree.php',
      1 => 1430902197,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117885b0925b14a19e3-86498045',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'article_tree' => 0,
    'item' => 0,
    'grade' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5b0925b14d2f0',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b0925b14d2f0')) {function content_5b0925b14d2f0($_smarty_tpl) {?>
<div class="article_tree">
	<div class="inner">
		<div class="head">文章分类</div>
		<div class="main">
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article_tree']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['item']->value['grade']==1){?><?php $_smarty_tpl->tpl_vars['grade'] = new Smarty_variable(1, null, 0);?><?php }elseif($_smarty_tpl->tpl_vars['item']->value['grade']==2){?><?php $_smarty_tpl->tpl_vars['grade'] = new Smarty_variable(2, null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['grade'] = new Smarty_variable(3, null, 0);?><?php }?>
			<div class="cat_<?php echo $_smarty_tpl->tpl_vars['grade']->value;?>
"><a href="<?php echo url(array('channel'=>'article','cat'=>$_smarty_tpl->tpl_vars['item']->value['id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></div>
			<?php } ?>
		</div>
	</div>
</div>
<!-- 新秀 --><?php }} ?>