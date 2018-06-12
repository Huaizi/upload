<?php /* Smarty version Smarty-3.1.3, created on 2018-06-12 23:34:42
         compiled from "templates/default/index\module\history.php" */ ?>
<?php /*%%SmartyHeaderCode:319985a5a1c0c741ba4-60783466%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd46332f794aa19ae2dd66b93e6c2f1673d482d73' => 
    array (
      0 => 'templates/default/index\\module\\history.php',
      1 => 1528817639,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '319985a5a1c0c741ba4-60783466',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5a5a1c0ca4d49',
  'variables' => 
  array (
    'history' => 0,
    'item' => 0,
    'S_FRONT_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5a1c0ca4d49')) {function content_5a5a1c0ca4d49($_smarty_tpl) {?>
<div class="history">
	<div class="head">———— 猜你喜欢 ————</div>
	<div class="main">
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['history']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['history']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['history']['index']++;
?>
		<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['history']['index']<2){?>
		<div class="unit">
			<div class="his_img">
				<table>
					<tr>
						<td>
							<a href="<?php echo url(array('channel'=>'goods','id'=>$_smarty_tpl->tpl_vars['item']->value['id']),$_smarty_tpl);?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['S_FRONT_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['item']->value['x_img'];?>
" onload="picresize(this,150,150)"/></a>
						</td>
					</tr>
				</table>
			</div>
			<div class="title">
				<span>￥<?php echo $_smarty_tpl->tpl_vars['item']->value['shop_price'];?>
</span><a href="<?php echo url(array('channel'=>'goods','id'=>$_smarty_tpl->tpl_vars['item']->value['id']),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['short_title'];?>
</a>
			</div>
		</div>
		<?php }?>
		<?php } ?>
	</div>
</div>
<!-- 新秀 --><?php }} ?>