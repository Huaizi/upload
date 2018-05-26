{*<?php exit();?>*}
<div class="block" id="message">
	<div class="head"><span>留言板</span></div>
	<div class="main">
		<div class="mes_sheet">
			<ul>
				{foreach from=$message name=message item=item}
				<li>
					<table>
						<tr>
							<td><b>{if $item.user_name}{$item.user_name}{else}匿名用户{/if}：</b><span>{$item.title}</span>&nbsp;&nbsp;（{$item.add_time|date_format:"%Y-%m-%d %H:%M:%S"}）</td>
						</tr>
						<tr>
							<td>{$item.text}</td>
						</tr>
						{if $item.reply}
						<tr>
							<td><div class="reply"><span>管理员回复：</span>{$item.reply}</div></td>
						</tr>
						{/if}
					</table>
				</li>
				{/foreach}
			</ul>
			{if !$message}<div class="not_found">暂无内容</div>{/if}
		</div>
		{$prefix = 'message'}
		{include file="module/page_link.php" page=$global.page}
		<div class="space"></div>
		<div id="leave_word">
			<form name="form_add_message" method="post" action="{url entrance=$global.entrance channel='deal'}">
				<input name="cmd" type="hidden" value="add_message"/>
				<table>
					<tr>
						<td class="l">用户名：</td>
						<td>
							{if $user_name}{$user_name}{else}匿名用户{/if}&nbsp;&nbsp;
							<input name="show" type="checkbox" value="2"/>悄悄话
						</td>
					</tr>
					<tr>
						<td class="l">E-mail：</td>
						<td><input name="email" class="text" type="text" value="{$user_email}" /></td>
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
{literal}
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
{/literal}
<!-- 新秀 -->