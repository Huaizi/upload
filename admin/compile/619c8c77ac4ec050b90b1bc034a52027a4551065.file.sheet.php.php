<?php /* Smarty version Smarty-3.1.3, created on 2018-01-13 20:51:36
         compiled from "templates/default/admin\module\article\sheet.php" */ ?>
<?php /*%%SmartyHeaderCode:237865a5a00d88e2ce1-17238657%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '619c8c77ac4ec050b90b1bc034a52027a4551065' => 
    array (
      0 => 'templates/default/admin\\module\\article\\sheet.php',
      1 => 1447604783,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '237865a5a00d88e2ce1-17238657',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'article' => 0,
    'item' => 0,
    'S_TPL_PATH' => 0,
    'index_entrance' => 0,
    'global' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5a5a00d89d28b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5a00d89d28b')) {function content_5a5a00d89d28b($_smarty_tpl) {?>
<div class="block">
	<div class="head"><span>文章列表</span></div>
	<div class="main">
		<table class="table sheet">
			<tr class="h">
				<td width="120px">分类</td>
				<td>标题</td>
				<td width="45px">排序</td>
				<td width="40px">置顶</td>
				<td width="40px">显示</td>
				<td width="150px">操作</td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<tr>
				<td><?php if ($_smarty_tpl->tpl_vars['item']->value['cat_name']){?><?php echo $_smarty_tpl->tpl_vars['item']->value['cat_name'];?>
<?php }else{ ?>无<?php }?></td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
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
" style="width:30px;" onBlur="set_order('index','article',<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
,this.value)" />
					</span>
				</td>
				<td><input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['item']->value['top']==1){?>checked<?php }?> onClick="set_order('top','article',<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
,this.checked)" /></td>
				<td><input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['item']->value['show']==1){?>checked<?php }?> onClick="set_order('show','article',<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
,this.checked)" /></td>
				<td>
					<a href="<?php echo url(array('entrance'=>$_smarty_tpl->tpl_vars['index_entrance']->value,'channel'=>$_smarty_tpl->tpl_vars['global']->value['channel'],'id'=>$_smarty_tpl->tpl_vars['item']->value['id']),$_smarty_tpl);?>
" target="_blank">[查看]</a>
					<a href="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel'],'mod'=>'edit','id'=>$_smarty_tpl->tpl_vars['item']->value['id']),$_smarty_tpl);?>
">[修改]</a>
					<a onClick="del('article|<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
')">[删除]</a>
				</td>
			</tr>
			<?php } ?>
			<tr>
				<td colspan="6">
					<?php echo $_smarty_tpl->getSubTemplate ("module/page_link.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('page'=>$_smarty_tpl->tpl_vars['global']->value['page']), 0);?>

				</td>
			</tr>
		</table>
	</div>
</div>
<div class="space"></div>
<div class="block">
	<div class="head"><span>文章搜索</span></div>
	<div class="main">
		<form id="form_search" method="post" action="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel'],'mod'=>'sheet'),$_smarty_tpl);?>
">
			<table class="table">
				<tr>
					<td align="right" width="150px">
						<select name="field">
							<option value="title">文章标题</option>
							<option value="author">文章作者</option>
							<option value="text">文章正文</option>
						</select>
					</td>
					<td>
						<input name="key" type="text" />
						<input class="button" type="button" value="搜索文章" onclick="do_search()"/>
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>

<script language="javascript">
	function do_search()
	{
		var obj = document.getElementById("form_search");
		site = obj.action.lastIndexOf("/");
		str = obj.action.substr(site,obj.action.length - site);
		obj.action = obj.action.substr(0,site) + '/field-' + obj.field.value + '/key-' + obj.key.value + str;
		obj.submit();
	}
</script>
<?php }} ?>