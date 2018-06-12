{*<?php exit();?>*}
<div class="block" id="flow_cart">
	<div class="head"><span>您所选购的商品</span></div>
	<div class="main">
		<form name="form_cart" method="post" action="{url entrance=$global.entrance channel='deal'}">
			<input name="cmd" type="hidden" value="cart_update"/>
			<table class="table">
				<tr class="head">
					<td width="180px"><b>商品名称</b></td>
					<td><b>市场价</b></td>
					<td><b>本店价</b></td>
					<td width="80px"><b>购买数量</b></td>
					<td><b>小计</b></td>
					<td><b>操作</b></td>
				</tr>
				{foreach from=$cart name=cart item=item}
				<tr>
					<td>
						<div class="img"><a href="{url channel='goods' id=$item.id}" target="_blank"><img src="{$S_FRONT_URL}{$item.x_img}" onload="picresize(this,130,130)"/></a></div>
						<div class="title"><a href="{url channel='goods' id=$item.id}" title="{$item.title}" target="_blank">{$item.short_title}</a></div>
					</td>
					<td>￥{$item.market_price}元</td>
					<td>￥{$item.shop_price}元</td>
					<td><input name="num[{$item.id}]" class="num" type="text" value="{$item.number}" /></td>
					<td>￥{$item.subtotal}元</td>
					<td><a onclick="cart_del_goods({$item.id})">[删除]</a></td>
				</tr>
				{/foreach}
			</table>
		</form>
		<table class="count_bt">
			<tr>
				<td>购物金额小计 ￥{$shop_total}元，比市场价 ￥{$market_total}元 节省了 ￥{$cut_down}元 ({$discount}%)</td>
				<td class="bt_row"><a onclick="cart_clear()">清空购物车</a></td>
				<td class="bt_row"><a onclick="cart_update()">更1购物车</a></td>
			</tr>
		</table>
		<table class="big_bt">
			<tr>
				<td><a href="./">继续购物</a></td>
				<td class="c"></td>
				<td><a href="{url channel='flow' step='consignee'}">结算中心</a></td>
			</tr>
		</table>
	</div>
</div>
{literal}
<script language="javascript">
function cart_del_goods(id)
{
	if(confirm("您确实要把该商品移出购物车吗？"))
	{
		ajax("post","?/deal/","cmd=cart_del_goods&id=" + id,
		function(data)
		{
			if(data == 1)
			{
				document.location.href = "?/flow/";
			}
		});
	}
}
function cart_clear()
{
	ajax("post","?/deal/","cmd=cart_clear",
	function(data)
	{
		if(data == 1)
		{
			document.location.href = "?/flow/";
		}
	});
}
function cart_update()
{
	document.form_cart.submit();
}
</script>
{/literal}
<!-- 新秀 -->