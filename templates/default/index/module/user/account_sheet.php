{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>在线充值</span></div>
	<div class="main">
		<form id="form_pay" method="post" action="{url channel='pay' pay_type='alipay_direct' pay_api='alipayapi'}" target="_blank">
			<table class="table">
				<tr>
					<td class="l">充值金额：</td>
					<td><input class="text" name="WIDtotal_fee" type="text" value="" />&nbsp;元</td>
				</tr>
				<tr>
					<td class="l">备注：</td>
					<td><input class="text" name="WIDbody" type="text" value="" /></td>
				</tr>
				<tr>
					<td colspan="2">
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
	<div class="head"><span>财务记录</span></div>
	<div class="main">
		<table class="table sheet">
			<tr class="h">
				<td width="125px">流水号</td>
				<td>金额（元）</td>
				<td width="125px">产生时间</td>
				<td width="125px">完成时间</td>
				<td width="60px">状态</td>
			</tr>
			{foreach from=$account name=account item=item}
			<tr>
				<td>{$item.sn}</td>
				<td>{if $item.increase}+{else}-{/if} {$item.amount}</td>
				<td>{$item.add_time|date_format:"%Y-%m-%d %H:%M:%S"}</td>
				<td>{$item.edit_time|date_format:"%Y-%m-%d %H:%M:%S"}</td>
				<td>{$item.status_name}</td>
			</tr>
			{/foreach}
		</table>
		{$prefix = 'user/mod-account_sheet'}
		{include file="module/page_link.php" page=$global.page}		
	</div>
</div>
<!-- 新秀 -->