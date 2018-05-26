{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>缺货登记详情</span></div>
	<div class="main">
		<table class="table">
			<tr>
				<td class="l">商品名称：</td>
				<td class="r">{$booking.goods_title}</td>
			</tr>
			<tr>
				<td class="l">订购数量：</td>
				<td class="r">{$booking.number}</td>
			</tr>
			<tr>
				<td class="l">订购描述：</td>
				<td class="r">{$booking.text}</td>
			</tr>
			<tr>
				<td class="l">联系人：</td>
				<td class="r">{$booking.consignee}</td>
			</tr>
			<tr>
				<td class="l">电子邮件：</td>
				<td class="r">{$booking.email}</td>
			</tr>
			<tr>
				<td class="l">联系电话：</td>
				<td class="r">{$booking.tel}</td>
			</tr>
			<tr>
				<td class="l">订购时间：</td>
				<td class="r">{$booking.add_time|date_format:"%Y-%m-%d %H:%M:%S"}</td>
			</tr>
			<tr>
				<td class="l">处理备注：</td>
				<td class="r">{$booking.note}</td>
			</tr>
			<tr>
				<td colspan="2">
					<div class="bt_row">
						<input class="button" type="button" onclick="go_back()" value="返回" />
					</div>
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- 新秀 -->