{*<?php exit();?>*}
<div class="block" id="comment">
	<div class="head"><span>用户评论</span></div>
	<div class="main">
		<div class="mes_sheet">
			<ul>
			{foreach from=$comment name=comment item=item}
				<li>
					<table>
						<tr>
							<td height="30px"><span>{if $item.user_name}{$item.user_name}{else}匿名用户{/if}</span>&nbsp;&nbsp;{$item.add_time|date_format:"%Y-%m-%d %H:%M:%S"}&nbsp;&nbsp;说：</td>
							<td width="80px">{section name=loop loop=$item.rank}<img src="{$S_TPL_PATH}images/star.gif" />{/section}</td>
						</tr>
						<tr>
							<td colspan="2"><div class="txt">{$item.text}</div></td>
						</tr>
						{if $item.reply}
						<tr>
							<td colspan="2"><div class="reply"><span>回复：</span>{$item.reply}</div></td>
						</tr>
						{/if}
					</table>
				</li>
			{/foreach}
			</ul>
			{if !$comment}<div class="not_found">暂无内容</div>{/if}
		</div>
		{$prefix = $global.channel|cat:'/id-'|cat:$global.id}
		{include file="module/page_link.php" page=$global.page}
		<div class="space"></div>
		<div id="leave_word">
			<form id="form_add_comment" method="post" action="{url entrance=$global.entrance channel='deal'}">
				<input name="cmd" type="hidden" value="add_comment"/>
				<input name="channel" type="hidden" value="{$global.channel}"/>
				<input name="page_id" type="hidden" value="{$global.id}"/>
				<table>
					<tr>
						<td class="l">用户名：</td>
						<td>{if $user_name}{$user_name}{else}匿名用户{/if}</td>
					</tr>
					<tr>
						<td class="l">E-mail：</td>
						<td><input name="email" class="text" type="text" value="{$user_email}" /></td>
					</tr>
					<tr>
						<td class="l">评价等级：</td>
						<td>
							<input name="rank" type="radio" value="1" />{section name=loop loop=1}<img src="{$S_TPL_PATH}images/star.gif" />{/section}&nbsp;&nbsp;
							<input name="rank" type="radio" value="2" />{section name=loop loop=2}<img src="{$S_TPL_PATH}images/star.gif" />{/section}&nbsp;&nbsp;
							<input name="rank" type="radio" value="3" />{section name=loop loop=3}<img src="{$S_TPL_PATH}images/star.gif" />{/section}&nbsp;&nbsp;
							<input name="rank" type="radio" value="4" />{section name=loop loop=4}<img src="{$S_TPL_PATH}images/star.gif" />{/section}&nbsp;&nbsp;
							<input name="rank" type="radio" value="5" checked="checked" />{section name=loop loop=5}<img src="{$S_TPL_PATH}images/star.gif" />{/section}&nbsp;&nbsp;
						</td>
					</tr>
					<tr>
						<td class="l">评价内容：</td>
						<td><textarea name="text"></textarea></td>
					</tr>
					<tr>
						<td colspan="2">
							<div class="bt_row">
								<input class="button" type="button" onclick="submit_add_comment()" value="提交" />&nbsp;&nbsp;
								<input class="button" type="reset" value="重置"/>
							</div>
						</td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</div>
<script language="javascript">
	var lang_email_empty = "Email不能为空";
	var lang_comment_text_empty = "您没有输入评论的内容";
</script>
{literal}
<script language="javascript">
	function submit_add_comment()
	{
		var str = "";
		var obj = document.getElementById("form_add_comment");
		if(obj.email.value == ""){str += "-" + lang_email_empty + "\n";}
		if(obj.text.value == ""){str += "-" + lang_comment_text_empty + "\n";}
		if(str != "")
		{
			alert(str);
		}else{
			obj.submit();
		}
	}
</script>
{/literal}
<!-- 新秀 -->