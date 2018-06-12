{*<?php exit();?>*}
<div class="img_list" style="padding:0 0 20px 0">
	<div class="head">
		<div class="name">1品上市</div>
		<a class="more" href="{url channel='goods' new=1}">查看更多</a>
	</div>
	<div class="main">
		{foreach from=$new_goods name=new_goods item=item}
		<div class="unit">
			<div class="inner">
				<div class="img">
					<table>
						<tr>
							<td>
								<a href="{url channel='goods' id=$item.id}" target="_blank"><img src="{$S_FRONT_URL}{$item.x_img}" onload="picresize(this,280,320)"/></a>
							</td>
						</tr>
					</table>
				</div>
				<div class="info">
					<div class="title"><a href="{url channel='goods' id=$item.id}" title="{$item.title}" target="_blank">{$item.short_title}</a></div>
					<div class="price">
						<span class="shop_price">￥<span>{$item.shop_price|string_format:'%.1f'}</span></span>
						<span class="market_price">￥{$item.market_price|string_format:'%.1f'}</span>
					</div>
				</div>
			</div>
		</div>
		{/foreach}
		<div class="clear"></div>
	</div>
</div>
<!-- 新秀 -->