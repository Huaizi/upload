<?php /* Smarty version Smarty-3.1.3, created on 2018-01-13 20:51:04
         compiled from "templates/default/admin\module\basic\region_list.php" */ ?>
<?php /*%%SmartyHeaderCode:7035a5a00b8db32e0-81495655%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d39293977801c8541ffb25a00eba033c12c2b5c' => 
    array (
      0 => 'templates/default/admin\\module\\basic\\region_list.php',
      1 => 1447431360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7035a5a00b8db32e0-81495655',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'region_list' => 0,
    'item' => 0,
    'S_TPL_PATH' => 0,
    'global' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5a5a00b8ee1fe',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5a00b8ee1fe')) {function content_5a5a00b8ee1fe($_smarty_tpl) {?>
<div class="block">
	<div class="head"><span>配送范围</span></div>
	<div class="main">
		<table class="table sheet">
			<tr class="h">
				<td>上级区域</td>
				<td>区域名称</td>
				<td width="30px">级别</td>
				<td width="45px">排序</td>
				<td width="40px">置顶</td>
				<td width="40px">显示</td>
				<td width="80px">操作</td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['region_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<tr>
				<td><?php if ($_smarty_tpl->tpl_vars['item']->value['parent_name']){?><?php echo $_smarty_tpl->tpl_vars['item']->value['parent_name'];?>
<?php }else{ ?>无<?php }?></td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['grade'];?>
</td>
				<td style="text-align:center" onClick="show_edit('index_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
')">
					<span id="index_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
_1"><?php echo $_smarty_tpl->tpl_vars['item']->value['index'];?>
<img src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
images/pencil.gif" /></span>
					<span id="index_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
_2" style="display:none;">
						<input type="text" id="index_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['index'];?>
" style="width:30px;" onBlur="set_order('index','region',<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
,this.value)" />
					</span>
				</td>
				<td style="text-align:center"><input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['item']->value['top']==1){?>checked<?php }?> onClick="set_order('top','region',<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
,this.checked)" /></td>
				<td style="text-align:center"><input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['item']->value['show']==1){?>checked<?php }?> onClick="set_order('show','region',<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
,this.checked)" /></td>
				<td>
					<a href="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel'],'mod'=>'region_edit','id'=>$_smarty_tpl->tpl_vars['item']->value['id']),$_smarty_tpl);?>
">[修改]</a>
					<?php if ($_smarty_tpl->tpl_vars['item']->value['exist_child']==0){?>
					<a onClick="del('region|<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
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
						<input class="button" type="button" onClick="jump('<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel'],'mod'=>'region_add'),$_smarty_tpl);?>
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