{*<?php exit();?>*}
{if $flow_done == 1}
	<div id="flow_done">
		<div class="head">感谢您在本店购物！您的订单已提交成功，请记住您的订单号：<span>{$ord_sn}</span></div>
		<div class="main">
			<div>
				您选定的配送方式为：<span>{$ord_shipping_name}</span>，您选定的支付方式为：<span>{$ord_payment_name}</span>。您的应付款金额为：<span>￥{$ord_price_total}元</span><br />
				{$pay_text}<br />
				{if $pay_code == 'alipay_direct'}
				<form id="form_pay" method="post" action="{url channel='pay' pay_type='alipay_direct' pay_api='alipayapi'}">
					<input type="hidden" name="WIDout_trade_no" value="{$ord_sn}" />
					<input type="hidden" name="WIDsubject" value="{$ord_sn}" />
					<input type="hidden" name="WIDtotal_fee" value="{$ord_price_total}" />
					<input type="hidden" name="WIDbody" value="" />
					<input type="hidden" name="WIDshow_url" value="" />
					<input class="button" type="submit" value="进入完成支付" />
				</form>
				{elseif $pay_code == 'alipay_escow'}
				<form id="form_pay" method="post" action="{url channel='pay' pay_type='alipay_escow' pay_api='alipayapi'}">
					<input type="hidden" name="WIDout_trade_no" value="{$ord_sn}" />
					<input type="hidden" name="WIDsubject" value="{$ord_sn}" />
					<input type="hidden" name="WIDprice" value="{$ord_price_total}" />
					<input type="hidden" name="WIDbody" value="" />
					<input type="hidden" name="WIDshow_url" value="" />
					<input type="hidden" name="WIDreceive_name" value="" />
					<input type="hidden" name="WIDreceive_address" value="" />
					<input type="hidden" name="WIDreceive_zip" value="" />
					<input type="hidden" name="WIDreceive_phone" value="" />
					<input type="hidden" name="WIDreceive_mobile" value="" />
					<input class="button" type="submit" value="进入完成支付" />
				</form>
				{/if}
				您可以&nbsp;<a href="./">返回首页</a>&nbsp;或去&nbsp;<a href="{url entrance=$global.entrance channel='user'}">用户中心</a>
			</div>
		</div>
	</div>
{else}
	<div class="block" id="info">
		<div class="head"><span>系统信息</span></div>
		<div class="main">
			<div>{$info_text}</div>
			<a href="{$link_href}">{$link_text}</a>
		</div>
	</div>
	<script language="javascript">
		interval = setInterval("document.location.href = '{$link_href}'",3000);
	</script>
{/if}