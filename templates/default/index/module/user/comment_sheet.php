{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>我的评论</span></div>
	<div class="main">
		<div class="mes_sheet">
			<ul>
				{foreach from=$comment name=comment item=item}
				<li>
					<table>
						<tr>
							<td height="30px">
								{section name=loop loop=$item.rank}<img src="{$S_TPL_PATH}images/star.gif" />{/section}&nbsp;&nbsp;
								<b>评论:</b><a href="{url channel=$item.channel id=$item.page_id}" target="_blank">《{$item.title}》</a>
								&nbsp;&nbsp;[{$item.add_time|date_format:"%Y-%m-%d %H:%M:%S"}]
							</td>
						</tr>
						<tr>
							<td><div class="txt">{$item.text}</div></td>
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
			{if !$comment}<div class="not_found">暂无内容</div>{/if}
		</div>
		{$prefix = 'user/mod-comment_list'}
		{include file="module/page_link.php" page=$global.page}
	</div>
</div>
<!-- 新秀 -->