
<?php /*%%SmartyHeaderCode:297195a59d827d6ce60-57181995%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40f47c5966d016d3a8709a1b5f3150b82979c2af' => 
    array (
      0 => 'templates/default/admin\\module\\basic\\shipping_list.php',
      1 => 1447335337,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '297195a59d827d6ce60-57181995',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shipping' => 0,
    'item' => 0,
    'S_TPL_PATH' => 0,
    'global' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5a59d8282fb02',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a59d8282fb02')) {function content_5a59d8282fb02($_smarty_tpl) {?>
<div class="block">
	<div class="head"><span>配送方式</span></div>
	<div class="main">
		<table class="table sheet">
			<tr class="h">
				<td width="100px">名称</td>
				<td width="80px">价格</td>
				<td>描述</td>
				<td width="45px">排序</td>
				<td width="40px">置顶</td>
				<td width="40px">显示</td>
				<td width="100px">操作</td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shipping']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
				<td>￥<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
元</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['text'];?>
</td>
				<td onClick="show_edit('index_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
')">
					<span id="index_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
_1"><?php echo $_smarty_tpl->tpl_vars['item']->value['index'];?>
<img src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
images/pencil.gif" /></span>
					<span id="index_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
_2" style="display:none;">
						<input type="text" id="index_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['index'];?>
" style="width:30px;" onBlur="set_order('index','shipping',<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
,this.value)" />
					</span>
				</td>
				<td><input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['item']->value['top']==1){?>checked<?php }?> onClick="set_order('top','shipping',<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
,this.checked)" /></td>
				<td><input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['item']->value['show']==1){?>checked<?php }?> onClick="set_order('show','shipping',<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
,this.checked)" /></td>
				<td>
					<a onClick="jump('<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel'],'mod'=>'shipping_edit','id'=>$_smarty_tpl->tpl_vars['item']->value['id']),$_smarty_tpl);?>
')">[修改]</a>
					<a onClick="del('shipping|<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
')">[删除]</a>
				</td>
			</tr>
			<?php } ?>
			<tr>
				<td colspan="7">
					<div class="bt_row">
						<input class="button" type="button" onClick="jump('<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel'],'mod'=>'shipping_add'),$_smarty_tpl);?>
')" value="添加" />
					</div>
				</td>
			</tr>
		</table>
	</div>
</div><?php }} ?>