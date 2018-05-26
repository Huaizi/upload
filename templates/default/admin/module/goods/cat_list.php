{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>商品分类</span></div>
	<div class="main">
		<table class="table sheet">
			<tr class="h">
				<td>上级分类</td>
				<td>分类名称</td>
				<td width="30px">级别</td>
				<td width="45px">排序</td>
				<td width="40px">推荐</td>
				<td width="40px">置顶</td>
				<td width="40px">显示</td>
				<td width="80px">操作</td>
			</tr>
			{foreach from=$cat_list name=cat_list item=item}
			<tr>
				<td>{if $item.parent_name}{$item.parent_name}{else}无{/if}</td>
				<td>{$item.cat_name}</td>
				<td>{$item.grade}</td>
				<td style="text-align:center" onClick="show_edit('index_{$item.cat_id}')">
					<span id="index_{$item.cat_id}_1">{$item.cat_index}<img src="{$S_TPL_PATH}images/pencil.gif" /></span>
					<span id="index_{$item.cat_id}_2" style="display:none;">
						<input type="text" id="index_{$item.cat_id}" value="{$item.cat_index}" style="width:30px;" onBlur="set_order('index','cat_goo',{$item.cat_id},this.value)" />
					</span>
				</td>
				<td style="text-align:center"><input type="checkbox" {if $item.cat_best == 1}checked{/if} onClick="set_order('best','cat_goo',{$item.cat_id},this.checked)" /></td>
				<td style="text-align:center"><input type="checkbox" {if $item.cat_top == 1}checked{/if} onClick="set_order('top','cat_goo',{$item.cat_id},this.checked)" /></td>
				<td style="text-align:center"><input type="checkbox" {if $item.cat_show == 1}checked{/if} onClick="set_order('show','cat_goo',{$item.cat_id},this.checked)" /></td>
				<td>
					<a href="{url channel=$global.channel mod='cat_edit' id=$item.cat_id}">[修改]</a>
					{if $item.exist_child == 0}
					<a onClick="del('cat_goo|{$item.cat_id}')">[删除]</a>
					{else}
					<a onClick="no_deal()">[删除]</a>
					{/if}
				</td>
			</tr>
			{/foreach}
			<tr>
				<td colspan="8">
					<div class="bt_row">
						<input class="button" type="button" onClick="jump('{url channel=$global.channel mod='cat_add'}')" value="添加" />
					</div>
				</td>
			</tr>
		</table>
	</div>
</div>
{literal}
<script language="javascript">
	function no_deal()
	{
		alert("操作失败，请先操作关联分类");
	}
</script>
{/literal}