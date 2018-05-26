<?php /* Smarty version Smarty-3.1.3, created on 2018-01-13 20:37:14
         compiled from "templates/default/index\module\user\profile.php" */ ?>
<?php /*%%SmartyHeaderCode:70085a59fd7a2a7883-68450590%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6dd48a1286f835f519ee308f6a61c4bd4991b4c0' => 
    array (
      0 => 'templates/default/index\\module\\user\\profile.php',
      1 => 1447311140,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '70085a59fd7a2a7883-68450590',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'global' => 0,
    'val' => 0,
    'profile' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5a59fd7a4e43f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a59fd7a4e43f')) {function content_5a59fd7a4e43f($_smarty_tpl) {?>
<div class="block">
	<div class="head"><span>用户信息</span></div>
	<div class="main">
		<form name="form_edit_profile" method="post" action="<?php echo url(array('entrance'=>$_smarty_tpl->tpl_vars['global']->value['entrance'],'channel'=>'user'),$_smarty_tpl);?>
">
			<input name="cmd" type="hidden" value="edit_profile"/>
			<table class="table">
				<tr>
					<td class="l">出生日期：</td>
					<td class="r">
						<select name="birthday_year">
						<option value="0">请选择</option>
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['name'] = 'loop';
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'] = is_array($_loop=100) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total']);
?>
							<?php $_smarty_tpl->tpl_vars['val'] = new Smarty_variable(1913+$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']+1, null, 0);?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['val']->value==$_smarty_tpl->tpl_vars['profile']->value['birthday_year']){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
</option>
							<?php endfor; endif; ?>
						</select>&nbsp;&nbsp;
						<select name="birthday_month">
							<option value="0">请选择</option>
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['name'] = 'loop';
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'] = is_array($_loop=12) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total']);
?>
							<?php $_smarty_tpl->tpl_vars['val'] = new Smarty_variable($_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']+1, null, 0);?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['val']->value==$_smarty_tpl->tpl_vars['profile']->value['birthday_month']){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
</option>
							<?php endfor; endif; ?>
						</select>&nbsp;&nbsp;
						<select name="birthday_day">
							<option value="0">请选择</option>
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['name'] = 'loop';
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'] = is_array($_loop=31) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total']);
?>
							<?php $_smarty_tpl->tpl_vars['val'] = new Smarty_variable($_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']+1, null, 0);?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['val']->value==$_smarty_tpl->tpl_vars['profile']->value['birthday_day']){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
</option>
							<?php endfor; endif; ?>
						</select>
					</td>
				</tr>
				<tr>
					<td class="l">性&nbsp;&nbsp;别：</td>
					<td class="r">
						<input name="sex" type="radio" value="0" <?php if ($_smarty_tpl->tpl_vars['profile']->value['sex']==0){?>checked="checked"<?php }?> />保密&nbsp;&nbsp;
						<input name="sex" type="radio" value="1" <?php if ($_smarty_tpl->tpl_vars['profile']->value['sex']==1){?>checked="checked"<?php }?> />男&nbsp;&nbsp;
						<input name="sex" type="radio" value="2" <?php if ($_smarty_tpl->tpl_vars['profile']->value['sex']==2){?>checked="checked"<?php }?> />女
					</td>
				</tr>
				<tr>
					<td class="l">真实姓名：</td>
					<td class="r"><input class="text" name="real_name" type="text" value="<?php echo $_smarty_tpl->tpl_vars['profile']->value['real_name'];?>
" /></td>
				</tr>
				<tr>
					<td class="l">Email：</td>
					<td class="r"><input class="text" name="email" type="text" value="<?php echo $_smarty_tpl->tpl_vars['profile']->value['email'];?>
" /></td>
				</tr>
				<tr>
					<td class="l">QQ：</td>
					<td class="r"><input class="text" name="qq" type="text" value="<?php echo $_smarty_tpl->tpl_vars['profile']->value['qq'];?>
" /></td>
				</tr>
				<tr>
					<td class="l">电话：</td>
					<td class="r"><input class="text" name="tel" type="text" value="<?php echo $_smarty_tpl->tpl_vars['profile']->value['tel'];?>
" /></td>
				</tr>
				<tr>
					<td class="l">手机：</td>
					<td class="r"><input class="text" name="phone" type="text" value="<?php echo $_smarty_tpl->tpl_vars['profile']->value['phone'];?>
" /></td>
				</tr>
				<tr>
					<td class="l">地址：</td>
					<td class="r"><input class="text" name="address" type="text" value="<?php echo $_smarty_tpl->tpl_vars['profile']->value['address'];?>
" /></td>
				</tr>
				<tr>
					<td class="l">密码提示问题：</td>
					<td class="r">
						<select name="question">
							<option value="0">请选择密码提示问题</option>
							<option value="friend_birthday" <?php if ($_smarty_tpl->tpl_vars['profile']->value['question']=='friend_birthday'){?>selected="selected"<?php }?>>我最好朋友的生日？</option>
							<option value="old_address" <?php if ($_smarty_tpl->tpl_vars['profile']->value['question']=='old_address'){?>selected="selected"<?php }?>>我儿时居住地的地址？</option>
							<option value="motto" <?php if ($_smarty_tpl->tpl_vars['profile']->value['question']=='motto'){?>selected="selected"<?php }?>>我的座右铭是？</option>
							<option value="favorite_movie" <?php if ($_smarty_tpl->tpl_vars['profile']->value['question']=='favorite_movie'){?>selected="selected"<?php }?>>我最喜爱的电影？</option>
							<option value="favorite_song" <?php if ($_smarty_tpl->tpl_vars['profile']->value['question']=='favorite_song'){?>selected="selected"<?php }?>>我最喜爱的歌曲？</option>
							<option value="favorite_food" <?php if ($_smarty_tpl->tpl_vars['profile']->value['question']=='favorite_food'){?>selected="selected"<?php }?>>我最喜爱的食物？</option>
							<option value="interest" <?php if ($_smarty_tpl->tpl_vars['profile']->value['question']=='interest'){?>selected="selected"<?php }?>>我最大的爱好？</option>
							<option value="favorite_novel" <?php if ($_smarty_tpl->tpl_vars['profile']->value['question']=='favorite_novel'){?>selected="selected"<?php }?>>我最喜欢的小说？</option>
							<option value="favorite_equipe" <?php if ($_smarty_tpl->tpl_vars['profile']->value['question']=='favorite_equipe'){?>selected="selected"<?php }?>>我最喜欢的运动队？</option>
						</select>
					</td>
				</tr>
				<tr>
					<td class="l">密码问题答案：</td>
					<td class="r"><input class="text" name="answer" type="text" value="<?php echo $_smarty_tpl->tpl_vars['profile']->value['answer'];?>
" /></td>
				</tr>
				<tr>
					<td colspan="2" class="bt_row"><input class="button" type="button" onclick="submit_edit_profile()" value="确认修改" /></td>
				</tr>
			</table>
		</form>
		<div class="space"></div>
		<form name="form_edit_pwd" method="post" action="<?php echo url(array('entrance'=>$_smarty_tpl->tpl_vars['global']->value['entrance'],'channel'=>'user'),$_smarty_tpl);?>
">
			<input name="cmd" type="hidden" value="edit_pwd"/>
			<table class="table">
				<tr>
					<td class="l">原密码：</td>
					<td class="r"><input class="text" name="old_pwd" type="password" /></td>
				</tr>
				<tr>
					<td class="l">新密码：</td>
					<td class="r"><input class="text" name="new_pwd" type="password" /></td>
				</tr>
				<tr>
					<td class="l">确认密码：</td>
					<td class="r"><input class="text" name="r_pwd" type="password" /></td>
				</tr>
				<tr>
					<td colspan="2" class="bt_row"><input class="button" type="button" onclick="submit_edit_pwd()" value="确认修改" /></td>
				</tr>
			</table>
		</form>
	</div>
</div>

<script language="javascript">
function submit_edit_profile()
{
	var str = "";
	if(document.form_edit_profile.real_name.value == ""){str += "-真实姓名不能为空\n";}
	if(document.form_edit_profile.email.value == ""){str += "-Email不能为空\n";}
	if(document.form_edit_profile.qq.value == ""){str += "-QQ不能为空\n";}
	if(document.form_edit_profile.tel.value == ""){str += "-电话不能为空\n";}
	if(document.form_edit_profile.address.value == ""){str += "-地址不能为空\n";}
	if(str != "")
	{
		alert(str);
	}else{
		document.form_edit_profile.submit();
	}
}
function submit_edit_pwd()
{
	var str = "";
	var old_pwd = document.form_edit_pwd.old_pwd.value;
	var new_pwd = document.form_edit_pwd.new_pwd.value;
	var r_pwd = document.form_edit_pwd.r_pwd.value;
	if(old_pwd.length < 6){str += "-旧密码不能小于6个字符\n";}
	else if(old_pwd.length > 15){str += "-旧密码不能大于15个字符\n";}
	if(new_pwd.length < 6){str += "-新密码不能小于6个字符\n";}
	else if(new_pwd.length > 15){str += "-新密码不能大于15个字符\n";}
	if(new_pwd != r_pwd){str += "-两次输入密码不一致\n";}
	if(str != "")
	{
		alert(str);
	}else{
		document.form_edit_pwd.submit();
	}
}
</script>

<!-- 新秀 --><?php }} ?>