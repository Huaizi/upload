{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>添加支付方式</span></div>
	<div class="main">
		<form id="form_add_payment" method="post" action="{url channel=$global.channel}">
			<input name="cmd" type="hidden" value="add_or_edit_payment" />
			<table class="table">
				<tr>
					<td>名称：</td>
					<td><input name="v_name" type="text" class="text" maxlength="40" value="" /></td>
				</tr>
				<tr>
					<td>价格：</td>
					<td><input name="v_price" type="text" class="text" maxlength="40" value="" /></td>
				</tr>
				<tr>
					<td>配置：</td>
					<td><input name="v_config" type="text" class="text" value="" /></td>
				</tr>				
				<tr>
					<td>描述：</td>
					<td><textarea class="textarea" name="v_text"></textarea></td>
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