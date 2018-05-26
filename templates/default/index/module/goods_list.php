{*<?php exit();?>*}
{foreach from=$best_goo_cat name=best_goo_cat item=cat}
<div class="img_list" style="padding:0 0 20px 0">
	<div class="head">
		<div class="name">{$cat.cat_name}</div>
		<a class="more" href="{url channel='goods' cat=$cat.cat_id}">查看更多</a>
	</div>
	<div class="main">
		{foreach from=$goods_list[$cat.cat_id] name=goods_list item=item}
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
{/foreach}
{literal}
<script language="javascript">
	$(".img_list .unit .inner").mousemove(function(){
		$(this).addClass("on");
	});
	$(".img_list .unit .inner").mouseout(function(){
		$(this).removeClass("on");
	});
</script>
{/literal}
<!-- 新秀 -->