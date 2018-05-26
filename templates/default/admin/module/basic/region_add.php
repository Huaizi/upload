{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>添加配送范围</span></div>
	<div class="main">
	<form id="form_add_region" method="post" action="{url channel=$global.channel}">
		<input name="cmd" type="hidden" value="add_or_edit_region" />
		<table class="table">
			<tr>
				<td>上级区域：</td>
				<td>
					<select name="v_parent_id" >
						<option value="0">无</option>
						{foreach from=$region_list name=region_list item=item}
						<option value="{$item.id}">{section name=loop loop=$item.grade - 1}&nbsp;{/section}{$item.name}</option>
						{/foreach}
					</select>
				</td>
			</tr>
			<tr>
				<td>区域名称：</td>
				<td><input class="text" name="v_name" type="text" maxlength="150" /></td>
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