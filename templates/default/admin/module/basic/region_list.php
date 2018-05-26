{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>配送范围</span></div>
	<div class="main">
		<table class="table sheet">
			<tr class="h">
				<td>上级区域</td>
				<td>区域名称</td>
				<td width="30px">级别</td>
				<td width="45px">排序</td>
				<td width="40px">置顶</td>
				<td width="40px">显示</td>
				<td width="80px">操作</td>
			</tr>
			{foreach from=$region_list name=region_list item=item}
			<tr>
				<td>{if $item.parent_name}{$item.parent_name}{else}无{/if}</td>
				<td>{$item.name}</td>
				<td>{$item.grade}</td>
				<td style="text-align:center" onClick="show_edit('index_{$item.id}')">
					<span id="index_{$item.id}_1">{$item.index}<img src="{$S_TPL_PATH}images/pencil.gif" /></span>
					<span id="index_{$item.id}_2" style="display:none;">
						<input type="text" id="index_{$item.id}" value="{$item.index}" style="width:30px;" onBlur="set_order('index','region',{$item.id},this.value)" />
					</span>
				</td>
				<td style="text-align:center"><input type="checkbox" {if $item.top == 1}checked{/if} onClick="set_order('top','region',{$item.id},this.checked)" /></td>
				<td style="text-align:center"><input type="checkbox" {if $item.show == 1}checked{/if} onClick="set_order('show','region',{$item.id},this.checked)" /></td>
				<td>
					<a href="{url channel=$global.channel mod='region_edit' id=$item.id}">[修改]</a>
					{if $item.exist_child == 0}
					<a onClick="del('region|{$item.id}')">[删除]</a>
					{else}
					<a onClick="no_deal()">[删除]</a>
					{/if}
				</td>
			</tr>
			{/foreach}
			<tr>
				<td colspan="8">
					<div class="bt_row">
						<input class="button" type="button" onClick="jump('{url channel=$global.channel mod='region_add'}')" value="添加" />
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