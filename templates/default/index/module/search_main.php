{*<?php exit();?>*}
<div class="img_list">
	<div class="main">
		{foreach from=$search name=search item=item}
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
		{if !$search}<div class="not_found">暂无内容</div>{/if}
		<div class="clear"></div>
	</div>
</div>
{$prefix = 'search/cat-'|cat:$global.cat|cat:'/key-'|cat:$global.key}
{include file="module/page_link.php" page=$global.page}
<!-- 新秀 -->
