{*<?php exit();?>*}
<div id="flow">
	<form name="form_order" method="post" action="{url channel='flow' step='done'}">
		<input name="sn" type="hidden" value="{$ord_sn}"/>
		<input name="region" type="hidden" value="{$ord_region}"/>
		<input name="consignee" type="hidden" value="{$ord_consignee}"/>
		<input name="email" type="hidden" value="{$ord_email}"/>
		<input name="address" type="hidden" value="{$ord_address}"/>
		<input name="zipcode" type="hidden" value="{$ord_zipcode}"/>
		<input name="tel" type="hidden" value="{$ord_tel}"/>
		<input name="mobile" type="hidden" value="{$ord_mobile}"/>
		<input name="building" type="hidden" value="{$ord_building}"/>
		<input name="best_time" type="hidden" value="{$ord_best_time}"/>
		<div class="block">
			<div class="head"><span>商品列表</span><a href="{url channel='flow'}">修改&gt;&gt;</a></div>
			<div class="main checkout">
				<table class="table">
					<tr class="head">
						<td width="180px"><b>商品名称</b></td>
						<td><b>市场价</b></td>
						<td><b>本店价</b></td>
						<td width="80px"><b>购买数量</b></td>
						<td><b>小计</b></td>
					</tr>
					{foreach from=$cart name=cart item=item}
					<tr class="row">
						<td><a href="{url channel='goods' id=$item.id}" target="_blank">{$item.short_title}</a></td>
						<td>￥{$item.market_price}元</td>
						<td>￥{$item.shop_price}元</td>
						<td>{$item.number}</td>
						<td>￥{$item.subtotal}元</td>
					</tr>
					{/foreach}
					<tr class="row">
						<td colspan="5">购物金额小计 ￥{$shop_total}元，比市场价 ￥{$market_total}元 节省了 ￥{$cut_down}元 ({$discount}%)</td>
					</tr>
				</table>
			</div>
		</div>
		<div class="space"></div>
		<div class="block">
			<div class="head"><span>收货人信息</span><a href="{url channel='flow' step='consignee'}">修改&gt;&gt;</a></div>
			<div class="main checkout">
				<table class="table">
					<tr class="row">
						<td width="120px">收货人姓名：</td>
						<td>{$ord_consignee}</td>
						<td width="120px">电子邮件地址：</td>
						<td>{$ord_email}</td>
					</tr>
					<tr class="row">
						<td>详细地址：</td>
						<td>{$ord_address}</td>
						<td>邮政编码：</td>
						<td>{$ord_zipcode}</td>
					</tr>
					<tr class="row">
						<td>电话：</td>
						<td>{$ord_tel}</td>
						<td>手机：</td>
						<td>{$ord_mobile}</td>
					</tr>
					<tr class="row">
						<td>标志建筑：</td>
						<td>{$ord_building}</td>
						<td>最佳送货时间：</td>
						<td>{$ord_best_time}</td>
					</tr>
				</table>
			</div>
		</div>
		<div class="space"></div>
		<div class="block">
			<div class="head"><span>配送方式</span></div>
			<div class="main checkout">
				<table class="table">
					<tr class="head">
						<td width="50px"><b>选择</b></td>
						<td width="200px"><b>名称</b></td>
						<td><b>配送方式说明</b></td>
						<td width="150px"><b>费用</b></td>
					</tr>
					{foreach from=$shipping name=shipping item=item}
					<tr class="row">
						<td style="text-align:center"><input name="shipping" type="radio" value="{$item.id}" onclick="reset_price('shipping','{$item.price}')" /></td>
						<td><b>{$item.name}</b></td>
						<td>{$item.text}</td>
						<td>￥{$item.price}元</td>
					</tr>
					{/foreach}
				</table>
			</div>
		</div>
		<div class="space"></div>
		<div class="block">
			<div class="head"><span>支付方式</span></div>
			<div class="main checkout">
				<table class="table">
					<tr class="head">
						<td width="50px"><b>选择</b></td>
						<td width="200px"><b>名称</b></td>
						<td><b>支付方式说明</b></td>
						<td width="150px"><b>手续费</b></td>
					</tr>
					{foreach from=$payment name=payment item=item}
					<tr class="row">
						<td style="text-align:center"><input name="payment" type="radio" value="{$item.id}" onclick="reset_price('payment','{$item.price}')" /></td>
						<td><b>{$item.name}</b></td>
						<td>{$item.text}</td>
						<td>￥{$item.price}元</td>
					</tr>
					{/foreach}
				</table>
			</div>
		</div>
		<div class="space"></div>
		<div class="block">
			<div class="head"><span>其它信息</span></div>
			<div class="main checkout">
				<table class="table">
					<tr class="row">
						<td width="120px"><b>订单附言：</b></td>
						<td><textarea name="message"></textarea></td>
					</tr>
				</table>
			</div>
		</div>
		<div class="space"></div>
		<div class="block">
			<div class="head"><span>费用总计</span></div>
			<div class="main checkout">
				<table class="table">
					<tr>
						<td style="text-align:right">
							商品总价：￥<span id="shop_total_1">{$shop_total}</span>元
							<span id="add_shipping_price"></span>
							<span id="add_payment_price"></span>
						</td>
					</tr>
					<tr>
						<td style="text-align:right">应付款金额：￥<span id="shop_total_2">{$shop_total}</span>元</td>
					</tr>
				</table>
				<div class="bt_row"><input class="button" name="message" type="button" value="提交订单" onclick="submit_order()" /></div>
			</div>
		</div>
	</form>
</div>
{literal}
<script language="javascript">
	var shipping_price = 0;
	var payment_price = 0;
	var choose_shipping = false;
	var choose_payment = false;
	function reset_price(type,price)
	{
		price = parseFloat(price);
		if(type == "shipping")
		{
			shipping_price = price;
			document.getElementById("add_shipping_price").innerHTML = "&nbsp;+&nbsp;配送费用：￥" + price.toFixed(2) + "元";
		}else if(type == "payment"){
			payment_price = price;
			document.getElementById("add_payment_price").innerHTML = "&nbsp;+&nbsp;支付手续费用：￥" + price.toFixed(2) + "元";
		}
		var shop_total_1 = parseFloat(document.getElementById("shop_total_1").innerHTML);
		var shop_total_2 = shop_total_1 + shipping_price + payment_price;
		document.getElementById("shop_total_2").innerHTML = shop_total_2.toFixed(2);
		if(type == "shipping")
		{
			choose_shipping = true;
		}else if(type == "payment"){
			choose_payment = true;
		}
	}
	function submit_order()
	{
		var str ="";
		if(document.form_order.region.value == ""){str += "-缺少配送区域\n";}
		if(document.form_order.consignee.value == ""){str += "-缺少收货人姓名\n";}
		if(document.form_order.email.value == ""){str += "-缺少电子邮件地址\n";}
		if(document.form_order.address.value == ""){str += "-缺少详细地址\n";}
		if(document.form_order.tel.value == ""){str += "-缺少电话\n";}
		if(!choose_shipping){str += "-请选择配送方式\n";}
		if(!choose_payment){str += "-请选择支付方式\n";}
		if(str != "")
		{
			alert(str);
		}else{
			document.form_order.submit();
		}
	}
</script>
{/literal}
<!-- 新秀 -->