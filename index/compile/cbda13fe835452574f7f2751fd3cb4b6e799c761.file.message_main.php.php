<?php /* Smarty version Smarty-3.1.3, created on 2018-05-26 17:15:34
         compiled from "templates/default/index\module\message_main.php" */ ?>
<?php /*%%SmartyHeaderCode:11855b0925b6b3a0b8-80711325%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbda13fe835452574f7f2751fd3cb4b6e799c761' => 
    array (
      0 => 'templates/default/index\\module\\message_main.php',
      1 => 1447354570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11855b0925b6b3a0b8-80711325',
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
  'unifunc' => 'content_5b0925b6b8e32',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b0925b6b8e32')) {function content_5b0925b6b8e32($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\phpStudy\WWW\upload\smarty\plugins\modifier.date_format.php';
?>
<div class="block" id="message">
	<div class="head"><span>留言板</span></div>
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
							<td><b><?php if ($_smarty_tpl->tpl_vars['item']->value['user_name']){?><?php echo $_smarty_tpl->tpl_vars['item']->value['user_name'];?>
<?php }else{ ?>匿名用户<?php }?>：</b><span><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</span>&nbsp;&nbsp;（<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['add_time'],"%Y-%m-%d %H:%M:%S");?>
）</td>
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
		<?php $_smarty_tpl->tpl_vars['prefix'] = new Smarty_variable('message', null, 0);?>
		<?php echo $_smarty_tpl->getSubTemplate ("module/page_link.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('page'=>$_smarty_tpl->tpl_vars['global']->value['page']), 0);?>

		<div class="space"></div>
		<div id="leave_word">
			<form name="form_add_message" method="post" action="<?php echo url(array('entrance'=>$_smarty_tpl->tpl_vars['global']->value['entrance'],'channel'=>'deal'),$_smarty_tpl);?>
">
				<input name="cmd" type="hidden" value="add_message"/>
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
function submit_add_message()
{
	var str = "";
	if(document.form_add_message.email.value == ""){str += "-请输入您的电子邮件地址\n";}
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