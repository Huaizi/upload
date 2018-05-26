{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>编辑广告</span></div>
	<div class="main">
		<form id="form_edit_advert" method="post" action="{url channel=$global.channel}">
			<input name="cmd" type="hidden" value="add_or_edit_advert" />
			<input name="v_id" type="hidden" value="{$advert.id}" />
			<table class="table">
				<tr>
					<td>广告名称：</td>
					<td><input name="v_name" type="text" class="text" maxlength="40" value="{$advert.name}" /></td>
				</tr>
				<tr>
					<td>广告代码：</td>
					<td><textarea class="textarea" name="v_code">{$advert.code}</textarea></td>
				</tr>
				<tr>
					<td colspan="2">
						<div class="bt_row">
							<input class="button" type="submit" value="修改" />
							<input class="button" type="button" onclick="go_back()" value="返回" />
						</div>
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>