{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>商品属性</span></div>
	<div class="main">
		<form id="form_edit_att" method="post" action="{url channel=$global.channel}">
		<input name="cmd" type="hidden" value="edit_att" />
		<table class="table sheet">
			<tr class="h">
				<td>字符名</td>
				<td>中文名</td>
				<td>操作</td>
			</tr>
			{foreach from=$att name=att item=item}
			<tr>
				<td><input name="att_code[]" type="text" class="text" maxlength="50" value="{$item.att_code}" /></td>
				<td><input name="att_name[]" type="text" class="text" maxlength="50" value="{$item.att_name}" /></td>
				<td><input name="att_id[]" type="hidden" value="{$item.att_id}" /><span class="span_bt" onClick="del('att_goo|{$item.att_id}')">[删除]</span></td>
			</tr>
			{/foreach}
			<tr>
				<td class="bt_row" colspan="4">
					<div class="bt_row">
						<input class="button" type="submit" value="修改" />
						<input class="button" type="button" onClick="jump('{url channel=$global.channel mod='att_add'}')" value="添加" />
					</div>
				</td>
			</tr>
		</table>
		</form>
	</div>
</div>