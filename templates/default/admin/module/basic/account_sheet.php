{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>用户财务记录</span></div>
	<div class="main">
		<table class="table sheet">
			<tr class="h">
				<td>用户名</td>
				<td width="125px">流水号</td>
				<td>金额（元）</td>
				<td width="125px">产生时间</td>
				<td width="125px">完成时间</td>
				<td width="60px">状态</td>
			</tr>
			{foreach from=$account name=account item=item}
			<tr>
				<td>{if $item.user_name}<a href="{url channel='service' mod='user_edit' id=$item.user_id}">{$item.user_name}</a>{else}无{/if}</td>
				<td>{$item.sn}</td>
				<td>{if $item.increase}+{else}-{/if} {$item.amount}</td>
				<td>{$item.add_time|date_format:"%Y-%m-%d %H:%M:%S"}</td>
				<td>{$item.edit_time|date_format:"%Y-%m-%d %H:%M:%S"}</td>
				<td>{$item.status_name}</td>
			</tr>
			{/foreach}
			<tr>
				<td colspan="6">
					{$prefix = $global.channel|cat:'/mod-account_sheet'}
					{include file="module/page_link.php" page=$global.page}
				</td>
			</tr>
		</table>
	</div>
</div>