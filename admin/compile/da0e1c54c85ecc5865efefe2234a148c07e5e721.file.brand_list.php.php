<?php /* Smarty version Smarty-3.1.3, created on 2018-01-13 20:50:42
         compiled from "templates/default/admin\module\goods\brand_list.php" */ ?>
<?php /*%%SmartyHeaderCode:61695a5a00a25b09c5-62356469%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da0e1c54c85ecc5865efefe2234a148c07e5e721' => 
    array (
      0 => 'templates/default/admin\\module\\goods\\brand_list.php',
      1 => 1447431360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '61695a5a00a25b09c5-62356469',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'brand' => 0,
    'item' => 0,
    'S_TPL_PATH' => 0,
    'global' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5a5a00a27cc8f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5a00a27cc8f')) {function content_5a5a00a27cc8f($_smarty_tpl) {?>
<div class="block">
	<div class="head"><span>商品品牌</span></div>
	<div class="main">
		<table class="table sheet">
			<tr class="h">
				<td>图片</td>
				<td>品牌名称</td>
				<td>品牌官网链接</td>
				<td width="45px">排序</td>
				<td width="40px">置顶</td>
				<td width="40px">显示</td>
				<td width="80px">操作</td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['brand']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<tr>
				<td class="pic"><div><img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['img'];?>
" onload="picresize(this,50,50)" /></div></td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
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
" style="width:30px;" onBlur="set_order('index','brand',<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
,this.value)" />
					</span>
				</td>
				<td><input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['item']->value['top']==1){?>checked<?php }?> onClick="set_order('top','brand',<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
,this.checked)" /></td>
				<td><input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['item']->value['show']==1){?>checked<?php }?> onClick="set_order('show','brand',<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
,this.checked)" /></td>
				<td>
					<a href="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel'],'mod'=>'brand_edit','id'=>$_smarty_tpl->tpl_vars['item']->value['id']),$_smarty_tpl);?>
">[编辑]</a>
					<a onClick="del_brand('<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
')">[删除]</a>
				</td>
			</tr>
			<?php } ?>
			<tr>
				<td colspan="8">
					<div class="bt_row">
						<input class="button" type="button" onClick="jump('<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel'],'mod'=>'brand_add'),$_smarty_tpl);?>
')" value="添加" />
					</div>
				</td>
			</tr>
		</table>
	</div>
</div>

<script language="javascript">
	function del_brand(val)
	{
		if(confirm("您确定要删除该品牌吗？"))
		{
			ajax("post","?/goods/","cmd=del_brand&id=" + val,
			function(data)
			{
				if(data == 1) document.location.replace(document.location.href);
			});
		}
	}
</script>
<?php }} ?>