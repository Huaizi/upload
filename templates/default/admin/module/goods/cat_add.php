{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>添加商品分类</span></div>
	<div class="main">
	<form id="form_add_cat" method="post" action="{url channel=$global.channel}">
		<input name="cmd" type="hidden" value="add_or_edit_cat" />
		<table class="table">
			<tr>
				<td>上级分类：</td>
				<td>
					<select name="cat_parent_id" >
						<option value="0">无</option>
						{foreach from=$cat_list name=cat_list item=item}
						<option value="{$item.cat_id}">{section name=loop loop=$item.grade - 1}&nbsp;{/section}{$item.cat_name}</option>
						{/foreach}
					</select>
				</td>
			</tr>
			<tr>
				<td>分类名称：</td>
				<td><input class="text" name="cat_name" type="text" maxlength="150" /></td>
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