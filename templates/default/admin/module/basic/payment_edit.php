{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>修改支付方式</span></div>
	<div class="main">
		<form id="form_edit_payment" method="post" action="{url channel=$global.channel}">
			<input name="cmd" type="hidden" value="add_or_edit_payment" />
			<input name="v_id" type="hidden" value="{$payment.id}" />
			<table class="table">
				<tr>
					<td>名称：</td>
					<td><input name="v_name" type="text" class="text" maxlength="40" value="{$payment.name}" /></td>
				</tr>
				<tr>
					<td>价格：</td>
					<td><input name="v_price" type="text" class="text" maxlength="40" value="{$payment.price}" /></td>
				</tr>
				<tr>
					<td>配置：</td>
					<td><input name="v_config" type="text" class="text" value="{$payment.config}" /></td>
				</tr>
				<tr>
					<td>描述：</td>
					<td><textarea class="textarea" name="v_text">{$payment.text}</textarea></td>
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
<div class="space"></div>
<div class="block">
	<div class="head"><span>使用说明</span></div>
	<div class="main content">
		1、支付宝接口请到支付宝“商家服务”处申请，申请通过后可获取合作者身份（PID）和安全校验码（Key）<br />
		2、支付宝接口配置格式：收款支付宝帐号（电子邮件）|合作者身份（PID）|安全校验码（Key）。
	</div>
</div>