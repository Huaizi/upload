<?php /* Smarty version Smarty-3.1.3, created on 2018-01-13 20:50:44
         compiled from "templates/default/admin\module\goods\cat_list.php" */ ?>
<?php /*%%SmartyHeaderCode:43185a5a00a4e11288-11824293%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '110c821258754cb1fde56296b8b7c0a42bcbc694' => 
    array (
      0 => 'templates/default/admin\\module\\goods\\cat_list.php',
      1 => 1447431360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43185a5a00a4e11288-11824293',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cat_list' => 0,
    'item' => 0,
    'S_TPL_PATH' => 0,
    'global' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5a5a00a4ed9e3',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5a00a4ed9e3')) {function content_5a5a00a4ed9e3($_smarty_tpl) {?>
<div class="block">
	<div class="head"><span>商品分类</span></div>
	<div class="main">
		<table class="table sheet">
			<tr class="h">
				<td>上级分类</td>
				<td>分类名称</td>
				<td width="30px">级别</td>
				<td width="45px">排序</td>
				<td width="40px">推荐</td>
				<td width="40px">置顶</td>
				<td width="40px">显示</td>
				<td width="80px">操作</td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cat_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<tr>
				<td><?php if ($_smarty_tpl->tpl_vars['item']->value['parent_name']){?><?php echo $_smarty_tpl->tpl_vars['item']->value['parent_name'];?>
<?php }else{ ?>无<?php }?></td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['cat_name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['grade'];?>
</td>
				<td style="text-align:center" onClick="show_edit('index_<?php echo $_smarty_tpl->tpl_vars['item']->value['cat_id'];?>
')">
					<span id="index_<?php echo $_smarty_tpl->tpl_vars['item']->value['cat_id'];?>
_1"><?php echo $_smarty_tpl->tpl_vars['item']->value['cat_index'];?>
<img src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
images/pencil.gif" /></span>
					<span id="index_<?php echo $_smarty_tpl->tpl_vars['item']->value['cat_id'];?>
_2" style="display:none;">
						<input type="text" id="index_<?php echo $_smarty_tpl->tpl_vars['item']->value['cat_id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['cat_index'];?>
" style="width:30px;" onBlur="set_order('index','cat_goo',<?php echo $_smarty_tpl->tpl_vars['item']->value['cat_id'];?>
,this.value)" />
					</span>
				</td>
				<td style="text-align:center"><input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['item']->value['cat_best']==1){?>checked<?php }?> onClick="set_order('best','cat_goo',<?php echo $_smarty_tpl->tpl_vars['item']->value['cat_id'];?>
,this.checked)" /></td>
				<td style="text-align:center"><input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['item']->value['cat_top']==1){?>checked<?php }?> onClick="set_order('top','cat_goo',<?php echo $_smarty_tpl->tpl_vars['item']->value['cat_id'];?>
,this.checked)" /></td>
				<td style="text-align:center"><input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['item']->value['cat_show']==1){?>checked<?php }?> onClick="set_order('show','cat_goo',<?php echo $_smarty_tpl->tpl_vars['item']->value['cat_id'];?>
,this.checked)" /></td>
				<td>
					<a href="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel'],'mod'=>'cat_edit','id'=>$_smarty_tpl->tpl_vars['item']->value['cat_id']),$_smarty_tpl);?>
">[修改]</a>
					<?php if ($_smarty_tpl->tpl_vars['item']->value['exist_child']==0){?>
					<a onClick="del('cat_goo|<?php echo $_smarty_tpl->tpl_vars['item']->value['cat_id'];?>
')">[删除]</a>
					<?php }else{ ?>
					<a onClick="no_deal()">[删除]</a>
					<?php }?>
				</td>
			</tr>
			<?php } ?>
			<tr>
				<td colspan="8">
					<div class="bt_row">
						<input class="button" type="button" onClick="jump('<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel'],'mod'=>'cat_add'),$_smarty_tpl);?>
')" value="添加" />
					</div>
				</td>
			</tr>
		</table>
	</div>
</div>

<script language="javascript">
	function no_deal()
	{
		alert("操作失败，请先操作关联分类");
	}
</script>
<?php }} ?>