{*<?php exit();?>*}
<div class="block" id="login">
	<div class="head"><span>会员登录</span></div>
	<div class="main">
	{if !$global.user_id}
		<form name="form_user_login" method="post" action="{url entrance=$global.entrance channel='info'}">
			<input name="cmd" type="hidden" value="user_login"/>
			<table>
				<tr>
					<td class="l">帐号：</td>
					<td class="r"><input class="text" name="username" type="text" /></td>
				</tr>
				<tr>
					<td class="l">密码：</td>
					<td class="r"><input class="text" name="password" type="password" /></td>
				</tr>
				<tr>
					<td colspan="2">
						<input class="button" type="submit" value="登录" />&nbsp;&nbsp;
						<input class="button" type="button" value="注册" onclick="document.location.href='{url entrance=$global.entrance channel='user' mod='register'}'" />
					</td>
				</tr>
			</table>
		</form>
	{else}
		<table class="link">
			<tr>
				<td><a href="{url entrance=$global.entrance channel='user' mod='profile'}">用户信息</a></td>
				<td><a href="{url entrance=$global.entrance channel='user' mod='order_sheet'}">我的订单</a></td>
			</tr>
			<tr>
				<td><a href="{url entrance=$global.entrance channel='user' mod='message_sheet'}">我的留言</a></td>
				<td><a href="{url entrance=$global.entrance channel='user' mod='comment_sheet'}">我的评论</a></td>
			</tr>
			<tr>
				<td colspan="2"><a href="{url entrance=$global.entrance channel='user' mod='logout'}">退出登录</a></td>
			</tr>
		</table>
	{/if}
	</div>
</div>
<!-- 新秀 -->
