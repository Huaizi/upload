{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>编辑文章分类</span></div>
	<div class="main">
	<form id="form_edit_cat" method="post" action="{url channel=$global.channel}">
		<input name="cmd" type="hidden" value="add_or_edit_cat" />
		<input name="cat_id" type="hidden" value="{$global.id}" />
		<table class="table">
			<tr>
				<td>上级分类：</td>
				<td>
					<select name="cat_parent_id" >
						<option value="0">无</option>
						{foreach from=$cat_list name=cat_list item=item}
						{if $item.show}
						<option value="{$item.cat_id}" {if $item.cat_id == $cat.cat_parent_id}selected="selected"{/if}>{section name=loop loop=$item.grade - 1}&nbsp;{/section}{$item.cat_name}</option>
						{/if}
						{/foreach}
					</select>
				</td>
			</tr>
			<tr>
				<td>分类名称：</td>
				<td><input class="text" name="cat_name" type="text" maxlength="150" value="{$cat.cat_name}" /></td>
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