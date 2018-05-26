{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>我的订单</span></div>
	<div class="main">
		<table class="table">
			<tr class="c">
				<td><b>订单号</b></td>
				<td><b>下单时间</b></td>
				<td><b>订单总金额</b></td>
				<td><b>订单状态</b></td>
				<td width="110px"><b>操作</b></td>
			</tr>
			{foreach from=$orders name=orders item=item}
			<tr class="c">
				<td>{$item.sn}</td>
				<td>{$item.add_time|date_format:"%Y-%m-%d %H:%M:%S"}</td>
				<td>{$item.price_total}</td>
				<td>{$item.status_name}</td>
				<td>
					<a href="{url channel='user' mod='order_info' id=$item.id}">[查看]</a>
					<!--&nbsp;&nbsp;<a href="{$item.id}">[取消]</a>-->
				</td>
			</tr>
			{/foreach}
		</table>
		{$prefix = 'user/mod-order_sheet'}
		{include file="module/page_link.php" page=$global.page}		
	</div>
</div>
<!-- 新秀 -->