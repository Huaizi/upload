<?php /* Smarty version Smarty-3.1.3, created on 2018-01-13 22:48:43
         compiled from "templates/default/index\module\flow_checkout.php" */ ?>
<?php /*%%SmartyHeaderCode:203475a5a1c4b962918-79337876%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5e013f697f204926293c0604316433cf22d653b' => 
    array (
      0 => 'templates/default/index\\module\\flow_checkout.php',
      1 => 1447337694,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203475a5a1c4b962918-79337876',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ord_sn' => 0,
    'ord_region' => 0,
    'ord_consignee' => 0,
    'ord_email' => 0,
    'ord_address' => 0,
    'ord_zipcode' => 0,
    'ord_tel' => 0,
    'ord_mobile' => 0,
    'ord_building' => 0,
    'ord_best_time' => 0,
    'cart' => 0,
    'item' => 0,
    'shop_total' => 0,
    'market_total' => 0,
    'cut_down' => 0,
    'discount' => 0,
    'shipping' => 0,
    'payment' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5a5a1c4bad60b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5a1c4bad60b')) {function content_5a5a1c4bad60b($_smarty_tpl) {?>
<div id="flow">
	<form name="form_order" method="post" action="<?php echo url(array('channel'=>'flow','step'=>'done'),$_smarty_tpl);?>
">
		<input name="sn" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['ord_sn']->value;?>
"/>
		<input name="region" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['ord_region']->value;?>
"/>
		<input name="consignee" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['ord_consignee']->value;?>
"/>
		<input name="email" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['ord_email']->value;?>
"/>
		<input name="address" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['ord_address']->value;?>
"/>
		<input name="zipcode" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['ord_zipcode']->value;?>
"/>
		<input name="tel" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['ord_tel']->value;?>
"/>
		<input name="mobile" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['ord_mobile']->value;?>
"/>
		<input name="building" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['ord_building']->value;?>
"/>
		<input name="best_time" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['ord_best_time']->value;?>
"/>
		<div class="block">
			<div class="head"><span>商品列表</span><a href="<?php echo url(array('channel'=>'flow'),$_smarty_tpl);?>
">修改&gt;&gt;</a></div>
			<div class="main checkout">
				<table class="table">
					<tr class="head">
						<td width="180px"><b>商品名称</b></td>
						<td><b>市场价</b></td>
						<td><b>本店价</b></td>
						<td width="80px"><b>购买数量</b></td>
						<td><b>小计</b></td>
					</tr>
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
					<tr class="row">
						<td><a href="<?php echo url(array('channel'=>'goods','id'=>$_smarty_tpl->tpl_vars['item']->value['id']),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['short_title'];?>
</a></td>
						<td>￥<?php echo $_smarty_tpl->tpl_vars['item']->value['market_price'];?>
元</td>
						<td>￥<?php echo $_smarty_tpl->tpl_vars['item']->value['shop_price'];?>
元</td>
						<td><?php echo $_smarty_tpl->tpl_vars['item']->value['number'];?>
</td>
						<td>￥<?php echo $_smarty_tpl->tpl_vars['item']->value['subtotal'];?>
元</td>
					</tr>
					<?php } ?>
					<tr class="row">
						<td colspan="5">购物金额小计 ￥<?php echo $_smarty_tpl->tpl_vars['shop_total']->value;?>
元，比市场价 ￥<?php echo $_smarty_tpl->tpl_vars['market_total']->value;?>
元 节省了 ￥<?php echo $_smarty_tpl->tpl_vars['cut_down']->value;?>
元 (<?php echo $_smarty_tpl->tpl_vars['discount']->value;?>
%)</td>
					</tr>
				</table>
			</div>
		</div>
		<div class="space"></div>
		<div class="block">
			<div class="head"><span>收货人信息</span><a href="<?php echo url(array('channel'=>'flow','step'=>'consignee'),$_smarty_tpl);?>
">修改&gt;&gt;</a></div>
			<div class="main checkout">
				<table class="table">
					<tr class="row">
						<td width="120px">收货人姓名：</td>
						<td><?php echo $_smarty_tpl->tpl_vars['ord_consignee']->value;?>
</td>
						<td width="120px">电子邮件地址：</td>
						<td><?php echo $_smarty_tpl->tpl_vars['ord_email']->value;?>
</td>
					</tr>
					<tr class="row">
						<td>详细地址：</td>
						<td><?php echo $_smarty_tpl->tpl_vars['ord_address']->value;?>
</td>
						<td>邮政编码：</td>
						<td><?php echo $_smarty_tpl->tpl_vars['ord_zipcode']->value;?>
</td>
					</tr>
					<tr class="row">
						<td>电话：</td>
						<td><?php echo $_smarty_tpl->tpl_vars['ord_tel']->value;?>
</td>
						<td>手机：</td>
						<td><?php echo $_smarty_tpl->tpl_vars['ord_mobile']->value;?>
</td>
					</tr>
					<tr class="row">
						<td>标志建筑：</td>
						<td><?php echo $_smarty_tpl->tpl_vars['ord_building']->value;?>
</td>
						<td>最佳送货时间：</td>
						<td><?php echo $_smarty_tpl->tpl_vars['ord_best_time']->value;?>
</td>
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
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shipping']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
					<tr class="row">
						<td style="text-align:center"><input name="shipping" type="radio" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" onclick="reset_price('shipping','<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
')" /></td>
						<td><b><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</b></td>
						<td><?php echo $_smarty_tpl->tpl_vars['item']->value['text'];?>
</td>
						<td>￥<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
元</td>
					</tr>
					<?php } ?>
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
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['payment']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
					<tr class="row">
						<td style="text-align:center"><input name="payment" type="radio" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" onclick="reset_price('payment','<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
')" /></td>
						<td><b><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</b></td>
						<td><?php echo $_smarty_tpl->tpl_vars['item']->value['text'];?>
</td>
						<td>￥<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
元</td>
					</tr>
					<?php } ?>
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
							商品总价：￥<span id="shop_total_1"><?php echo $_smarty_tpl->tpl_vars['shop_total']->value;?>
</span>元
							<span id="add_shipping_price"></span>
							<span id="add_payment_price"></span>
						</td>
					</tr>
					<tr>
						<td style="text-align:right">应付款金额：￥<span id="shop_total_2"><?php echo $_smarty_tpl->tpl_vars['shop_total']->value;?>
</span>元</td>
					</tr>
				</table>
				<div class="bt_row"><input class="button" name="message" type="button" value="提交订单" onclick="submit_order()" /></div>
			</div>
		</div>
	</form>
</div>

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

<!-- 新秀 --><?php }} ?>