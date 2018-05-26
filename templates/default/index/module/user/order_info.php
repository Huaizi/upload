{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>订单基本信息</span></div>
	<div class="main">
		<table class="table">
			<tr>
				<td width="100px">订单号：</td>
				<td width="310px">{$order.sn}</td>
				<td width="100px">订单状态：</td>
				<td>
				<div style="float:left;line-height:24px;">{$order.status_name}&nbsp;&nbsp;</div>
				{if $order.status == 0}
					{if $order.payment_code == 'system'}
					<input class="button" type="button" onclick="do_system_pay({$order.id})" value="完成支付" />
					{elseif $order.payment_code == 'alipay_direct'}
					<form id="form_pay" method="post" action="{url channel='pay' pay_type='alipay_direct' pay_api='alipayapi'}" target="_blank">
						<input type="hidden" name="WIDout_trade_no" value="{$order.sn}" />
						<input type="hidden" name="WIDsubject" value="{$order.sn}" />
						<input type="hidden" name="WIDtotal_fee" value="{$order.price_total}" />
						<input class="button" type="submit" value="完成支付" />
					</form>
					{elseif $order.payment_code == 'alipay_escow'}
					<form id="form_pay" method="post" action="{url channel='pay' pay_type='alipay_escow' pay_api='alipayapi'}" target="_blank">
						<input type="hidden" name="WIDout_trade_no" value="{$order.sn}" />
						<input type="hidden" name="WIDsubject" value="{$order.sn}" />
						<input type="hidden" name="WIDprice" value="{$order.price_total}" />
						<input class="button" type="submit" value="完成支付" />
					</form>
					{/if}
				{/if}
				<div class="clear"></div>
				</td>
			</tr>
			<tr>
				<td>购货人：</td>
				<td>{if $order.user_id}<a href="{url channel='user' mod='user_edit' id=$order.user_id}">{$order.user_name}</a>{else}匿名用户{/if}</td>
				<td>下单时间：</td>
				<td>{$order.add_time|date_format:"%Y-%m-%d %H:%M:%S"}</td>
			</tr>
			<tr>
				<td>支付方式：</td>
				<td>{$order.payment_name}</td>
				<td>付款时间：</td>
				<td>{$order.pay_time|date_format:"%Y-%m-%d %H:%M:%S"}</td>
			</tr>
			<tr>
				<td>配送方式：</td>
				<td>{$order.shipping_name}</td>
				<td>发货时间：</td>
				<td>{$order.shipping_time|date_format:"%Y-%m-%d %H:%M:%S"}</td>
			</tr>
			<tr>
				<td>快递单号：</td>
				<td>{$order.express_sn}</td>
				<td></td>
				<td></td>
			</tr>
		</table>
	</div>
</div>
<div class="space"></div>
<div class="block">
	<div class="head"><span>收货人信息</span></div>
	<div class="main">
		<table class="table">
			<tr>
				<td width="100px">收货人姓名：</td>
				<td>{$order.consignee}</td>
				<td width="100px">电子邮件地址：</td>
				<td>{$order.email}</td>
			</tr>
			<tr>
				<td>详细地址：</td>
				<td>{$order.address}</td>
				<td>邮政编码：</td>
				<td>{$order.zipcode}</td>
			</tr>
			<tr>
				<td>电话：</td>
				<td>{$order.tel}</td>
				<td>手机：</td>
				<td>{$order.mobile}</td>
			</tr>
			<tr>
				<td>标志建筑：</td>
				<td>{$order.building}</td>
				<td>最佳送货时间：</td>
				<td>{$order.best_time}</td>
			</tr>
		</table>
	</div>
</div>
<div class="space"></div>
<div class="block">
	<div class="head"><span>商品信息</span></div>
	<div class="main">
		<table class="table sheet">
			<tr class="h">
				<td>商品名称</td>
				<td>市场价</td>
				<td>本店价</td>
				<td width="80px">购买数量</td>
				<td width="150px">小计</td>
			</tr>
			{foreach from=$goods name=goods item=item}
			<tr class="row">
				<td><a href="{url channel='goods' id=$item.id}" target="_blank">{$item.title}</a></td>
				<td>￥{$item.market_price}元</td>
				<td>￥{$item.shop_price}元</td>
				<td>{$item.number}</td>
				<td>￥{$item.subtotal}元</td>
			</tr>
			{/foreach}
			<tr>
				<td colspan="4"></td>
				<td>总计：￥{$shop_total}元</td>
			</tr>
		</table>
	</div>
</div>
<div class="space"></div>
<div class="block">
	<div class="head"><span>操作信息</span></div>
	<div class="main">
		<form id="form_order_note" method="post" action="{url entrance=$global.entrance channel='user'}">
			<input name="cmd" type="hidden" value="order_note" />
			<input name="v_id" type="hidden" value="{$global.id}" />
			<table class="table">
				<tr>
					<td>操作备注：</td>
					<td><textarea class="textarea" name="v_note" style="width:600px;height:100px;">{$order.note}</textarea></td>
				</tr>
				<tr>
					<td colspan="2">
						<div class="bt_row">
							<input class="button" type="submit" value="提交" />
							<input class="button" type="button" onclick="go_back()" value="返回" />
						</div>
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
{literal}
<script language="javascript">
function do_system_pay(id)
{
	ajax("post","?/deal/","cmd=do_system_pay&id=" + id,
	function(data)
	{
		if(data == 1)
		{
			alert("支付成功");
			document.location.replace(document.location.href);
		}else{
			alert("支付失败");
		}
	});
}
</script>
{/literal}