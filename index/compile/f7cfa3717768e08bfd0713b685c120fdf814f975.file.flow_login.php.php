<?php /* Smarty version Smarty-3.1.3, created on 2018-01-16 22:20:43
         compiled from "templates/default/index\module\flow_login.php" */ ?>
<?php /*%%SmartyHeaderCode:282515a5e0a3b7e2c34-55434432%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7cfa3717768e08bfd0713b685c120fdf814f975' => 
    array (
      0 => 'templates/default/index\\module\\flow_login.php',
      1 => 1447250905,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '282515a5e0a3b7e2c34-55434432',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'global' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5a5e0a3b9eda3',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5e0a3b9eda3')) {function content_5a5e0a3b9eda3($_smarty_tpl) {?>
<div class="block" id="reg_login">
	<div class="head"><span>会员登录</span></div>
	<div class="main">
		<form name="form_user_login" method="post" action="<?php echo url(array('entrance'=>$_smarty_tpl->tpl_vars['global']->value['entrance'],'channel'=>'deal'),$_smarty_tpl);?>
">
			<input name="cmd" type="hidden" value="user_login"/>
			<input name="info_text" type="hidden" value="登录成功"/>
			<input name="link_text" type="hidden" value="返回结算中心"/>
			<input name="link_href" type="hidden" value="flow/step-consignee"/>
			<table>
				<tr>
					<td class="l">用户名：</td>
					<td class="r"><input class="text" name="username" type="text" /></td>
				</tr>
				<tr>
					<td class="l">密码：</td>
					<td class="r"><input class="text" name="password" type="password" /></td>
				</tr>
				<tr>
					<td class="l"></td>
					<td class="r">
						<input class="button" type="submit" value="登录" />&nbsp;
						<input class="button" type="button" value="注册" onclick="document.location.href='<?php echo url(array('entrance'=>$_smarty_tpl->tpl_vars['global']->value['entrance'],'channel'=>'user','mod'=>'register'),$_smarty_tpl);?>
'" />&nbsp;
						<input class="button" type="button" value="不登录直接购买" onclick="document.location.href = '?/flow/step-consignee/direct-1/'" />
					</td>
				</tr>
			</table>
		</form>
	</div>
</div><?php }} ?>