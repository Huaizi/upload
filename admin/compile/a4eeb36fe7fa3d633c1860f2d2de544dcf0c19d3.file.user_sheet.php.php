
<?php /*%%SmartyHeaderCode:82265a59d82c4f75e3-03972552%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4eeb36fe7fa3d633c1860f2d2de544dcf0c19d3' => 
    array (
      0 => 'templates/default/admin\\module\\service\\user_sheet.php',
      1 => 1447354178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82265a59d82c4f75e3-03972552',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'users' => 0,
    'item' => 0,
    'global' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5a59d82c678ed',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a59d82c678ed')) {function content_5a59d82c678ed($_smarty_tpl) {?>
<div class="block">
	<div class="head"><span>用户管理</span></div>
	<div class="main">
		<table class="table sheet">
			<tr class="h">
				<td>用户名</td>
				<td>真实姓名</td>
				<td>E-mail</td>
				<td>QQ</td>
				<td>电话</td>
				<td width="120px">操作</td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['username'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['real_name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['email'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['qq'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['tel'];?>
</td>
				<td>
					<a href="<?php echo url(array('channel'=>'service','mod'=>'user_edit','id'=>$_smarty_tpl->tpl_vars['item']->value['id']),$_smarty_tpl);?>
">[修改]</a>
					<a onClick="del_user('<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
')">[删除]</a>
				</td>
			</tr>
			<?php } ?>
			<tr>
				<td colspan="7">
					<?php $_smarty_tpl->tpl_vars['prefix'] = new Smarty_variable('service/mod-user_sheet', null, 0);?>
					<?php echo $_smarty_tpl->getSubTemplate ("module/page_link.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('page'=>$_smarty_tpl->tpl_vars['global']->value['page']), 0);?>

				</td>
			</tr>
		</table>
	</div>
</div>

<script language="javascript">
	function del_user(val)
	{
		if(confirm("您确定要删除该帐号吗？"))
		{
			ajax("post","?/service/","cmd=del_user&id=" + val,
			function(data)
			{
				if(data == 1) document.location.replace(document.location.href);
			});
		}
	}
</script>
<?php }} ?>