{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>订单列表</span></div>
	<div class="main">
		<table class="table sheet">
			<tr class="h">
				<td width="130px">订单号</td>
				<td>收货人</td>
				<td width="70px">总金额</td>
				<td width="140px">下单时间</td>
				<td width="80px">订单状态</td>
				<td width="100px">操作</td>
			</tr>
			{foreach from=$orders name=orders item=item}
			<tr>
				<td>{$item.sn}</td>
				<td>
				{$item.consignee}&nbsp;-&nbsp;电话：{$item.tel}<br />
				{$item.address}
				</td>
				<td>{$item.price_total}</td>
				<td>{$item.add_time|date_format:"%Y-%m-%d %H:%M:%S"}</td>
				<td>{$item.status_name}</td>
				<td>
					<a href="{url channel=$global.channel mod='order_info' id=$item.id}">[查看]</a>
					<a onclick="del('orders|{$item.id}')">[删除]</a>
				</td>
			</tr>
			{/foreach}
			<tr>
				<td colspan="6">
					{$prefix = $global.channel|cat:'/mod-order_sheet'}
					{include file="module/page_link.php" page=$global.page}
				</td>
			</tr>
		</table>
	</div>
</div>
