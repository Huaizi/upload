{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>添加商品</span></div>
	<div class="main">
		<form id="form_add_goods" method="post" action="{url channel=$global.channel}">
			<input name="cmd" type="hidden" value="add_or_edit_goods" />
			<table class="table">
				<tr>
					<td width="100px">商品名称：</td>
					<td><input name="v_title" type="text" class="text" maxlength="200" value="" /></td>
				</tr>
				<tr>
					<td>商品编号：</td>
					<td><input name="v_sn" type="text" class="text" maxlength="200" value="{$goods_sn}" /></td>
				</tr>
				<tr>
					<td>商品分类：</td>
					<td>
						<select name="v_cat_id">
							<option value="0">请选择</option>
							{foreach from=$cat_list name=cat_list item=item}
							<option value="{$item.cat_id}">{section name=loop loop=$item.grade - 1}&nbsp;{/section}{$item.cat_name}</option>
							{/foreach}
						</select>
					</td>
				</tr>
				{$upl_index = 1}
				<tr>
					<td>商品主图：</td>
					<td>
						<span id="show_pic_{$upl_index}"></span>
						<input class="button" type="button" onClick="before_upload('upl_img','form_upl_img','images/{$global.channel}/{$upl_date}/','show_pic_{$upl_index}','pic_path_{$upl_index}',1)" value="上传图片" />
						<input name="pic_path" id="pic_path_{$upl_index}" type="hidden" maxlength="250" value="" />
					</td>
				</tr>
				{if $x_img_mode == 3}
				{$upl_index = 3}
				<tr>
					<td>商品缩略图：</td>
					<td>
						<span id="show_pic_{$upl_index}"></span>
						<input class="button" type="button" onClick="before_upload('upl_img','form_upl_img','images/{$global.channel}/{$upl_date}/','show_pic_{$upl_index}','pic_path_{$upl_index}',1)" value="上传图片" />
						<input name="x_img" id="pic_path_{$upl_index}" type="hidden" maxlength="250" value="" />
					</td>
				</tr>
				{/if}
				{$upl_index = 2}
				<tr>
					<td>商品副图：</td>
					<td>
						<input class="button" type="button" onClick="before_upload('upl_img','form_upl_img','images/{$global.channel}/{$upl_date}/','','more_img',0)" value="上传图片" />&nbsp;&nbsp;此处可以上传多张图片
						<div style="padding:5px 0 0 0;"><input name="more_img" id="more_img" type="text" class="text" value="" /></div>
					</td>
				</tr>
				<tr>
					<td>市场价：</td>
					<td><input name="v_market_price" type="text" class="text" maxlength="200" value="" />&nbsp;元</td>
				</tr>
				<tr>
					<td>本店价：</td>
					<td><input name="v_shop_price" type="text" class="text" maxlength="200" value="" />&nbsp;元</td>
				</tr>
				<tr>
					<td>商品品牌：</td>
					<td>
						<select name="v_brand_id">
							<option value="0">请选择</option>
							{foreach from=$brand name=brand item=item}
							<option value="{$item.id}">{$item.name}</option>
							{/foreach}
						</select>
					</td>
				</tr>
				<tr>
					<td>库存量：</td>
					<td><input name="v_number" type="text" class="text" maxlength="200" value="" />&nbsp;件</td>
				</tr>
				{foreach from=$att name=att item=item}
				<tr>
					<td>{$item.att_name}：</td>
					<td><input name="{$item.att_code}" type="text" class="text" value="" /></td>
				</tr>
				{/foreach}
				<tr>
					<td>商品描述：</td>
					<td>
						<div class="editor">
							{include file='module/editor.php'}
						</div>
					</td>
				</tr>
				<tr>
					<td>页面关键字：</td>
					<td><input class="text" name="v_keywords" type="text" maxlength="200" value="{$site_keywords}" />
					</td>
				</tr>
				<tr>
					<td>页面描述：</td>
					<td><input class="text" name="v_description" type="text" value="{$site_description}" /></td>
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
<iframe class="deal" name="deal"></iframe>
<!-------------------------- BOX -------------------------->
{include file='module/goods/box.php'}
<!-------------------------- BOX -------------------------->