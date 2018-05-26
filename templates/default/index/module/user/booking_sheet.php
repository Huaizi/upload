{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>缺货登记</span></div>
	<div class="main">
		<table class="table">
			<tr class="c">
				<td><b>订购商品名</b></td>
				<td><b>订购数量</b></td>
				<td><b>登记时间</b></td>
				<td width="150"><b>处理备注</b></td>
				<td width="80px"><b>操作</b></td>
			</tr>
			{foreach from=$booking name=booking item=item}
			<tr class="c">
				<td>{$item.goods_title}</td>
				<td>{$item.number}</td>
				<td>{$item.add_time|date_format:"%Y-%m-%d %H:%M:%S"}</td>
				<td>{$item.note}</td>
				<td><a class="booking" href="{url entrance=$global.entrance channel='user' mod='booking_info' id=$item.id}">[查看详情]</a>&nbsp;</td>
			</tr>
			{/foreach}
		</table>
		{$prefix = 'user/mod-booking_sheet'}
		{include file="module/page_link.php" page=$global.page}		
	</div>
</div>
<!-- 新秀 -->