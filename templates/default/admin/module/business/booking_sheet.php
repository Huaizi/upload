{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>缺货登记列表</span></div>
	<div class="main">
		<table class="table sheet">
			<tr class="h">
				<td width="100px">用户名</td>
				<td>商品名称</td>
				<td width="80px">订购数量</td>
				<td width="150px">订购时间</td>
				<td width="120px">操作</td>
			</tr>
			{foreach from=$booking name=booking item=item}
			<tr>
				<td>{if $item.user_name}<a href="{url channel='service' mod='user_edit' id=$item.user_id}">{$item.user_name}</a>{else}无{/if}</td>
				<td>{$item.goods_title}</td>
				<td>{$item.number}</td>
				<td>{$item.add_time|date_format:"%Y-%m-%d %H:%M:%S"}</td>
				<td>
					<a class="booking" href="{url channel=$global.channel mod='booking_info' id=$item.id}">[查看详情]</a>
					<a onclick="del('booking|{$item.id}')">[删除]</a>
				</td>
			</tr>
			{/foreach}
			<tr>
				<td colspan="5">
					{$prefix = $global.channel|cat:'/mod-booking_sheet'}
					{include file="module/page_link.php" page=$global.page}
				</td>
			</tr>
		</table>
	</div>
</div>
