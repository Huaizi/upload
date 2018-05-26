{*<?php exit();?>*}
<div class="block" id="reg_login">
	<div class="head"><span>会员登录</span></div>
	<div class="main">
		<form name="form_user_login" method="post" action="{url entrance=$global.entrance channel='deal'}">
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
						<input class="button" type="button" value="注册" onclick="document.location.href='{url entrance=$global.entrance channel='user' mod='register'}'" />&nbsp;
						<input class="button" type="button" value="不登录直接购买" onclick="document.location.href = '?/flow/step-consignee/direct-1/'" />
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>