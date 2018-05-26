{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>添加商品属性</span></div>
	<div class="main">
	<form id="form_add_att" method="post" action="{url channel=$global.channel}">
		<input name="cmd" type="hidden" value="add_att" />
		<table class="table">
			<tr>
				<td>字符名：</td>
				<td><input name="att_code" type="text" class="text" maxlength="50" /></td>
			</tr>
			<tr>
				<td>中文名：</td>
				<td><input name="att_name" type="text" class="text" maxlength="50" /></td>
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