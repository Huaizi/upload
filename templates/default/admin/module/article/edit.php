{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>编辑文章</span></div>
	<div class="main">
		<form id="form_edit_art" method="post" action="{url channel=$global.channel}">
			<input name="cmd" type="hidden" value="add_or_edit_article" />
			<input name="v_id" type="hidden" value="{$global.id}" />
			<table class="table">
				<tr>
					<td width="100px">文章标题：</td>
					<td><input name="v_title" type="text" class="text" maxlength="200" value="{$article.title}" /></td>
				</tr>
				<tr>
					<td>文章分类：</td>
					<td>
						<select name="v_cat_id">
							<option value="0">请选择</option>
							{foreach from=$cat_list name=cat_list item=item}
							<option value="{$item.cat_id}" {if $item.cat_id == $article.cat_id}selected="selected"{/if}>{section name=loop loop=$item.grade - 1}&nbsp;{/section}{$item.cat_name}</option>
							{/foreach}
						</select>
					</td>
				</tr>
				<tr>
					<td>作者/来源：</td>
					<td><input name="v_author" type="text" class="text" maxlength="" value="{$article.author}" /></td>
				</tr>
				<tr>
					<td>文章正文：</td>
					<td>
						<div class="editor">
							{include file='module/editor.php'}
						</div>
					</td>
				</tr>
				<tr>
					<td>页面关键字：</td>
					<td><input class="text" name="v_keywords" type="text" maxlength="200" value="{$article.keywords}" />
					</td>
				</tr>
				<tr>
					<td>页面描述：</td>
					<td><input class="text" name="v_description" type="text" value="{$article.description}" /></td>
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
