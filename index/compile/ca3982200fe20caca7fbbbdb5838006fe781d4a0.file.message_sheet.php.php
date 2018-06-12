<?php /* Smarty version Smarty-3.1.3, created on 2018-05-29 18:10:02
         compiled from "templates/default/index\module\user\message_sheet.php" */ ?>
<?php /*%%SmartyHeaderCode:305945b0d26fa642c86-77537550%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca3982200fe20caca7fbbbdb5838006fe781d4a0' => 
    array (
      0 => 'templates/default/index\\module\\user\\message_sheet.php',
      1 => 1447619176,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '305945b0d26fa642c86-77537550',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
    'item' => 0,
    'global' => 0,
    'user_name' => 0,
    'user_email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5b0d26fa6fce7',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b0d26fa6fce7')) {function content_5b0d26fa6fce7($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\phpStudy\WWW\upload\smarty\plugins\modifier.date_format.php';
?>
<div class="block">
	<div class="head"><span>我的留言</span></div>
	<div class="main">
		<div class="mes_sheet">
			<ul>
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['message']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				<li>
					<table>
						<tr>
							<td><b><?php echo $_smarty_tpl->tpl_vars['item']->value['type'];?>
：</b><span><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</span>&nbsp;&nbsp;[ <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['add_time'],"%Y-%m-%d %H:%M:%S");?>
 ]</td>
						</tr>
						<tr>
							<td><?php echo $_smarty_tpl->tpl_vars['item']->value['text'];?>
</td>
						</tr>
						<?php if ($_smarty_tpl->tpl_vars['item']->value['reply']){?>
						<tr>
							<td><div class="reply"><span>管理员回复：</span><?php echo $_smarty_tpl->tpl_vars['item']->value['reply'];?>
</div></td>
						</tr>
						<?php }?>
					</table>
				</li>
				<?php } ?>
			</ul>
			<?php if (!$_smarty_tpl->tpl_vars['message']->value){?><div class="not_found">暂无内容</div><?php }?>
		</div>
		<?php $_smarty_tpl->tpl_vars['prefix'] = new Smarty_variable('user/mod-message_sheet', null, 0);?>
		<?php echo $_smarty_tpl->getSubTemplate ("module/page_link.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('page'=>$_smarty_tpl->tpl_vars['global']->value['page']), 0);?>

		<div id="leave_word">
			<form name="form_add_message" method="post" action="<?php echo url(array('entrance'=>$_smarty_tpl->tpl_vars['global']->value['entrance'],'channel'=>'deal'),$_smarty_tpl);?>
">
				<input name="cmd" type="hidden" value="add_message"/>
				<input name="link_href" type="hidden" value="user/mod-message_sheet"/>
				<table>
					<tr>
						<td class="l">用户名：</td>
						<td>
							<?php if ($_smarty_tpl->tpl_vars['user_name']->value){?><?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
<?php }else{ ?>匿名用户<?php }?>&nbsp;&nbsp;
							<input name="show" type="checkbox" value="2"/>悄悄话
						</td>
					</tr>
					<tr>
						<td class="l">E-mail：</td>
						<td><input name="email" class="text" type="text" value="<?php echo $_smarty_tpl->tpl_vars['user_email']->value;?>
" /></td>
					</tr>
					<tr>
						<td class="l">留言类型：</td>
						<td>
							<input name="type" type="radio" value="留言" checked="checked" />留言&nbsp;&nbsp;
							<input name="type" type="radio" value="投诉" />投诉&nbsp;&nbsp;
							<input name="type" type="radio" value="询问" />询问&nbsp;&nbsp;
							<input name="type" type="radio" value="售后" />售后&nbsp;&nbsp;
							<input name="type" type="radio" value="求购" />求购&nbsp;&nbsp;
						</td>
					</tr>
					<tr>
						<td class="l">主题：</td>
						<td><input name="title" class="text" type="text" maxlength="30"/></td>
					</tr>
					<tr>
						<td class="l">留言内容：</td>
						<td><textarea name="text"></textarea></td>
					</tr>
					<tr>
						<td class="bt_row" colspan="2">
							<input class="button" type="button" onclick="submit_add_message()" value="提交" />
							<input class="button" type="reset" value="重置"/>
						</td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</div>

<script language="javascript">
function del_message(id)
{
	if(confirm("你确实要彻底删除这条留言吗？"))
	{
		ajax("post","index.php?/user/","cmd=del_message&id=" + id,
		function(data)
		{
			if(data == 1)
			{
				document.location.replace(document.location.href);
			}
		});
	}
}
function submit_add_message()
{
	var str = "";
	if(document.form_add_message.title.value == ""){str += "-留言标题为空\n";}
	if(document.form_add_message.text.value == ""){str += "-留言内容为空\n";}
	if(str != "")
	{
		alert(str);
	}else{
		document.form_add_message.submit();
	}
}
</script>

<!-- 新秀 --><?php }} ?>