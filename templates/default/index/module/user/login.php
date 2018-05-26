{*<?php exit();?>*}
<div class="block" id="reg_login">
	<div class="head"><span>会员登录</span></div>
	<div class="main">
		<form name="form_user_login" method="post" action="{url entrance=$global.entrance channel='deal'}">
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
						<input class="button" type="button" value="注册" onclick="document.location.href='{url entrance=$global.entrance channel='user' mod='register'}'" />
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>