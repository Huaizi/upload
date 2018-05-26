{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>添加品牌</span></div>
	<div class="main">
		<form id="form_add_brand" method="post" action="{url channel=$global.channel}">
			<input name="cmd" type="hidden" value="add_or_edit_brand" />
			<table class="table">
				<tr>
					<td>品牌名称：</td>
					<td><input name="v_name" type="text" class="text" maxlength="50" /></td>
				</tr>
				<tr>
					<td>官网链接：</td>
					<td><input name="v_url" type="text" class="text" maxlength="200" /></td>
				</tr>
				{$upl_index = 1}
				<tr>
					<td>上传图片：</td>
					<td>
						<span id="show_pic_{$upl_index}"></span>
						<input class="button" type="button" onClick="before_upload('upl_img','form_upl_img','images/brand/','show_pic_{$upl_index}','pic_path_{$upl_index}',0)" value="上传图片" />
						<input name="pic_path" id="pic_path_{$upl_index}" type="hidden" maxlength="250" value="" />
					</td>
				</tr>
				<tr>
					<td>品牌描述：</td>
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
<iframe class="deal" name="deal"></iframe>
<!-------------------------- BOX -------------------------->
{include file='module/goods/box.php'}
<!-------------------------- BOX -------------------------->