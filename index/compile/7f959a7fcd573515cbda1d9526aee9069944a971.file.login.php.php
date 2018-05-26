<?php /* Smarty version Smarty-3.1.3, created on 2018-01-13 20:27:56
         compiled from "templates/default/index\module\user\login.php" */ ?>
<?php /*%%SmartyHeaderCode:100135a59fb4c565cf6-98941324%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f959a7fcd573515cbda1d9526aee9069944a971' => 
    array (
      0 => 'templates/default/index\\module\\user\\login.php',
      1 => 1447250909,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100135a59fb4c565cf6-98941324',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'global' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5a59fb4c6238d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a59fb4c6238d')) {function content_5a59fb4c6238d($_smarty_tpl) {?>
<div class="block" id="reg_login">
	<div class="head"><span>会员登录</span></div>
	<div class="main">
		<form name="form_user_login" method="post" action="<?php echo url(array('entrance'=>$_smarty_tpl->tpl_vars['global']->value['entrance'],'channel'=>'deal'),$_smarty_tpl);?>
">
			<input name="cmd" type="hidden" value="user_login"/>
			<table>
				<tr>
					<td class="l">用户名：</td>
					<td><input class="text" name="username" type="text" /></td>
				</tr>
				<tr>
					<td class="l">密码：</td>
					<td><input class="text" name="password" type="password" /></td>
				</tr>
				<tr>
					<td class="l"></td>
					<td>
						<input class="button" type="submit" value="登录" />&nbsp;&nbsp;
						<input class="button" type="button" value="注册" onclick="document.location.href='<?php echo url(array('entrance'=>$_smarty_tpl->tpl_vars['global']->value['entrance'],'channel'=>'user','mod'=>'register'),$_smarty_tpl);?>
'" />
					</td>
				</tr>
			</table>
		</form>
	</div>
</div><?php }} ?>