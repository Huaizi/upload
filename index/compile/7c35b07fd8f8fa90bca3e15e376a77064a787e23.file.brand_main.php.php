<?php /* Smarty version Smarty-3.1.3, created on 2018-05-26 17:15:29
         compiled from "templates/default/index\module\brand_main.php" */ ?>
<?php /*%%SmartyHeaderCode:150195b0925b1bdd2f1-38543013%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c35b07fd8f8fa90bca3e15e376a77064a787e23' => 
    array (
      0 => 'templates/default/index\\module\\brand_main.php',
      1 => 1447246957,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150195b0925b1bdd2f1-38543013',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'brand' => 0,
    'item' => 0,
    'S_FRONT_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5b0925b1bf813',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b0925b1bf813')) {function content_5b0925b1bf813($_smarty_tpl) {?>
<div class="block bra_sheet">
	<div class="clear"></div>
	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['brand']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
	<div class="unit">
		<div class="img">
			<table>
				<tr>
					<td>
						<a href="<?php echo url(array('channel'=>'goods','brand'=>$_smarty_tpl->tpl_vars['item']->value['id']),$_smarty_tpl);?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['S_FRONT_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['item']->value['img'];?>
" onload="picresize(this,155,55)"/></a>
					</td>
				</tr>
			</table>
		</div>
		<div class="txt"><?php echo $_smarty_tpl->tpl_vars['item']->value['text'];?>
</div>
	</div>
	<?php } ?>
	<div class="clear"></div>
	<?php if (!$_smarty_tpl->tpl_vars['brand']->value){?><div class="not_found">暂无内容</div><?php }?>
</div><?php }} ?>