{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>订单基本信息</span></div>
	<div class="main">
		<form id="form_order_basic" method="post" action="{url channel=$global.channel}">
			<input name="cmd" type="hidden" value="order_basic" />
			<input name="v_id" type="hidden" value="{$global.id}" />
			<table class="table">
				<tr>
					<td width="100px">订单号：</td>
					<td width="310px">{$order.sn}</td>
					<td width="100px">订单状态：</td>
					<td>
					<select name="v_status">
						<option value="0" {if $order.status == 0}selected="selected"{/if}>未付款</option>
						<option value="1" {if $order.status == 1}selected="selected"{/if}>已付款</option>
						<option value="2" {if $order.status == 2}selected="selected"{/if}>等待发货</option>
						<option value="3" {if $order.status == 3}selected="selected"{/if}>已发货</option>
						<option value="4" {if $order.status == 4}selected="selected"{/if}>交易成功</option>
					</select>
					</td>
				</tr>
				<tr>
					<td>购货人：</td>
					<td>{if $order.user_id}<a href="{url channel='service' mod='user_edit' id=$order.user_id}">{$order.user_name}</a>{else}匿名用户{/if}</td>
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
					<td><input name="v_express_sn" type="text" value="{$order.express_sn}" /></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">
						<div class="bt_row">
							<input class="button" type="submit" value="提交" />
						</div>
					</td>
				</tr>
			</table>
		</form>
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
				<td><a href="{url entrance=$index_entrance channel='goods' id=$item.id}" target="_blank">{$item.title}</a></td>
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
		<form id="form_order_note" method="post" action="{url channel=$global.channel}">
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