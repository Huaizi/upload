<?php /* Smarty version Smarty-3.1.3, created on 2018-06-12 23:34:33
         compiled from "templates/default/index\module\ad.php" */ ?>
<?php /*%%SmartyHeaderCode:266155a59d67cbfce20-35565451%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af4537f557c591323afdd95b34c6067956981db1' => 
    array (
      0 => 'templates/default/index\\module\\ad.php',
      1 => 1528817647,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '266155a59d67cbfce20-35565451',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5a59d67cc0d97',
  'variables' => 
  array (
    'ad' => 0,
    'aid' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a59d67cc0d97')) {function content_5a59d67cc0d97($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ad']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
<?php if ($_smarty_tpl->tpl_vars['aid']->value==$_smarty_tpl->tpl_vars['item']->value['id']){?><?php echo $_smarty_tpl->tpl_vars['item']->value['code'];?>
<?php }?>
<?php } ?>
<!-- 新秀 --><?php }} ?>