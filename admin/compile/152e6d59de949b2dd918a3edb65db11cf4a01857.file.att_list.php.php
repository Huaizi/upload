<?php /* Smarty version Smarty-3.1.3, created on 2018-05-08 17:19:56
         compiled from "templates/default/admin\module\goods\att_list.php" */ ?>
<?php /*%%SmartyHeaderCode:64645af16bbc17bad2-33542703%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '152e6d59de949b2dd918a3edb65db11cf4a01857' => 
    array (
      0 => 'templates/default/admin\\module\\goods\\att_list.php',
      1 => 1447344323,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '64645af16bbc17bad2-33542703',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'global' => 0,
    'att' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5af16bbc267dd',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af16bbc267dd')) {function content_5af16bbc267dd($_smarty_tpl) {?>
<div class="block">
	<div class="head"><span>商品属性</span></div>
	<div class="main">
		<form id="form_edit_att" method="post" action="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel']),$_smarty_tpl);?>
">
		<input name="cmd" type="hidden" value="edit_att" />
		<table class="table sheet">
			<tr class="h">
				<td>字符名</td>
				<td>中文名</td>
				<td>操作</td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['att']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<tr>
				<td><input name="att_code[]" type="text" class="text" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['att_code'];?>
" /></td>
				<td><input name="att_name[]" type="text" class="text" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['att_name'];?>
" /></td>
				<td><input name="att_id[]" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['att_id'];?>
" /><span class="span_bt" onClick="del('att_goo|<?php echo $_smarty_tpl->tpl_vars['item']->value['att_id'];?>
')">[删除]</span></td>
			</tr>
			<?php } ?>
			<tr>
				<td class="bt_row" colspan="4">
					<div class="bt_row">
						<input class="button" type="submit" value="修改" />
						<input class="button" type="button" onClick="jump('<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel'],'mod'=>'att_add'),$_smarty_tpl);?>
')" value="添加" />
					</div>
				</td>
			</tr>
		</table>
		</form>
	</div>
</div><?php }} ?>