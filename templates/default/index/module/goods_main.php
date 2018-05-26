{*<?php exit();?>*}
{if $show_sheet == 1}
	<div class="img_list">
		<div class="main">
			{foreach from=$goods name=goods item=item}
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
			{if !$goods}<div class="not_found">暂无内容</div>{/if}
			<div class="clear"></div>
		</div>
	</div>
	{include file="module/page_link.php" page=$global.page}
{else}
	<div id="goods">
		<div class="goods_info">
			<div class="imgs">
				<div class="big_img">
					<table>
						<tr>
							<td>
								<a href="{$S_FRONT_URL}{$goods.img}" title="{$goods.title}" target="_blank"><img src="{$S_FRONT_URL}{$goods.img}" onload="picresize(this,330,330)"/></a>
							</td>
						</tr>
					</table>
				</div>
				<div class="more_img">
					<div class="unit on"><img src="{$S_FRONT_URL}{$goods.img}" /></div>
					{foreach from=$more_img name=more_img item=item}
					{if $smarty.foreach.more_img.index < 5}
					<div class="unit"><img src="{$S_FRONT_URL}{$item}" /></div>
					{/if}
					{/foreach}
					<div class="clear"></div>
				</div>
			</div>
			<div class="info">
				<div class="title">{$goods.title}</div>
				<div class="sn">商品货号：{$goods.sn}</div>
				<div class="brand">商品品牌：{if $goods.brand}{$goods.brand}{else}无{/if}</div>
				<div class="market_price">市场价格：<span>￥{$goods.market_price}</span></div>
				<div class="shop_price">本店售价：<span>￥{$goods.shop_price}</span></div>
				<div class="hits">浏览次数：{$goods.hits+1}</div>
				<div class="number">商品库存：{$goods.number}</div>
				<div class="buy_num">购买数量：<input id="buy_num" type="text" value="1" /></div>
				<table>
					<tr>
						<td class="bt_row"><a onclick="add_to_cart({$goods.id})">加入购物车</a></td>
						<td class="bt_row"><a onclick="add_to_collection({$goods.id})">加入收藏夹</a></td>
						<td class="bt_row"><a onclick="show_box('share',300,100);">推荐给好友</a></td>
					</tr>
				</table>
			</div>
			{include file="module/history.php"}
			<div class="clear"></div>
		</div>
		<div class="space"></div>
		<div class="block">
			<div class="head"><span>商品属性</span></div>
			<div class="main goods_att">
				{foreach from=$goods.att name=att item=item}
				<span>{$item.name}: {$item.value}</span>
				{/foreach}
				<div class="clear"></div>
			</div>
		</div>
		<div class="space"></div>
		<div class="block">
			<div class="head"><span>商品描述</span></div>
			<div class="main goods_text">
				{$goods.text}
			</div>
		</div>
		<div class="space"></div>
		{include file="module/comment.php"}
	</div>
	<!-------------------------- BOX -------------------------->
	<div class="alert" id="share">
		<div class="inner">
			<div class="head">
				<div class="title">推荐给好友</div>
				<div class="close" onclick="hide_box('share')">关闭</div>
			</div>
			<div class="main">
				{$share_code}
			</div>
		</div>
	</div>
	<!-------------------------- BOX -------------------------->
	{literal}
	<script language="javascript">
	$(".goods_info .imgs .unit").click(function(){
		var src = $(this).children("img").attr("src");
		var img = "<img src='" + src+ "' onload='picresize(this,330,330)'/>";
		$(".goods_info .big_img a").html(img);
		$(".goods_info .big_img a").attr("href",src);
		$(".goods_info .imgs .unit").removeClass("on");
		$(this).addClass("on");
	});
	function add_to_cart(id)
	{
		var buy_num = document.getElementById("buy_num").value;
		ajax("post","?/deal/","cmd=add_to_cart&id=" + id + "&buy_num=" + buy_num,
		function(data)
		{
			if(data == 1)
			{
				document.location.href = "?/flow/";
			}else if(data == 2){
				alert("对不起，该商品已经库存不足暂停销售。\n你现在要进行缺货登记来预订该商品吗？");
				document.location.href = "?/user/mod-booking_add/goods_id-" + id + "/";
			}
		});
	}
	function add_to_collection(id)
	{
		ajax("post","?/deal/","cmd=add_to_collection&id=" + id,
		function(data)
		{
			if(data == 0)
			{
				alert("由于您还没有登录，因此您还不能使用该功能");
			}else if(data == 1)
			{
				alert("该商品已经成功地加入了您的收藏夹");
			}else if(data == 2){
				alert("该商品已经存在于您的收藏夹中");
			}
		});
	}
	</script>
	{/literal}
{/if}
<!-- 新秀 -->
