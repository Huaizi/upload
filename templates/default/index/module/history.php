{*<?php exit();?>*}
<div class="history">
	<div class="head">———— 猜你喜欢 ————</div>
	<div class="main">
		{foreach from=$history name=history item=item}
		{if $smarty.foreach.history.index < 2}
		<div class="unit">
			<div class="his_img">
				<table>
					<tr>
						<td>
							<a href="{url channel='goods' id=$item.id}" target="_blank"><img src="{$S_FRONT_URL}{$item.x_img}" onload="picresize(this,150,150)"/></a>
						</td>
					</tr>
				</table>
			</div>
			<div class="title">
				<span>￥{$item.shop_price}</span><a href="{url channel='goods' id=$item.id}" target="_blank">{$item.short_title}</a>
			</div>
		</div>
		{/if}
		{/foreach}
	</div>
</div>
<!-- 新秀 -->