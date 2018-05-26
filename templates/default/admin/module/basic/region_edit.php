{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>编辑配送范围</span></div>
	<div class="main">
	<form id="form_edit_region" method="post" action="{url channel=$global.channel}">
		<input name="cmd" type="hidden" value="add_or_edit_region" />
		<input name="v_id" type="hidden" value="{$global.id}" />
		<table class="table">
			<tr>
				<td>上级区域：</td>
				<td>
					<select name="v_parent_id" >
						<option value="0">无</option>
						{foreach from=$region_list name=region_list item=item}
						{if $item.show}
						<option value="{$item.id}" {if $item.id == $cat.parent_id}selected="selected"{/if}>{section name=loop loop=$item.grade - 1}&nbsp;{/section}{$item.name}</option>
						{/if}
						{/foreach}
					</select>
				</td>
			</tr>
			<tr>
				<td>区域名称：</td>
				<td><input class="text" name="v_name" type="text" maxlength="150" value="{$cat.name}" /></td>
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