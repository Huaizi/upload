{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>商品品牌</span></div>
	<div class="main">
		<table class="table sheet">
			<tr class="h">
				<td>图片</td>
				<td>品牌名称</td>
				<td>品牌官网链接</td>
				<td width="45px">排序</td>
				<td width="40px">置顶</td>
				<td width="40px">显示</td>
				<td width="80px">操作</td>
			</tr>
			{foreach from=$brand name=brand item=item}
			<tr>
				<td class="pic"><div><img src="{$item.img}" onload="picresize(this,50,50)" /></div></td>
				<td>{$item.name}</td>
				<td>{$item.url}</td>
				<td onClick="show_edit('index_{$item.id}')">
					<span id="index_{$item.id}_1">{$item.index}<img src="{$S_TPL_PATH}images/pencil.gif" /></span>
					<span id="index_{$item.id}_2" style="display:none;">
						<input type="text" id="index_{$item.id}" value="{$item.index}" style="width:30px;" onBlur="set_order('index','brand',{$item.id},this.value)" />
					</span>
				</td>
				<td><input type="checkbox" {if $item.top == 1}checked{/if} onClick="set_order('top','brand',{$item.id},this.checked)" /></td>
				<td><input type="checkbox" {if $item.show == 1}checked{/if} onClick="set_order('show','brand',{$item.id},this.checked)" /></td>
				<td>
					<a href="{url channel=$global.channel mod='brand_edit' id=$item.id}">[编辑]</a>
					<a onClick="del_brand('{$item.id}')">[删除]</a>
				</td>
			</tr>
			{/foreach}
			<tr>
				<td colspan="8">
					<div class="bt_row">
						<input class="button" type="button" onClick="jump('{url channel=$global.channel mod='brand_add'}')" value="添加" />
					</div>
				</td>
			</tr>
		</table>
	</div>
</div>
{literal}
<script language="javascript">
	function del_brand(val)
	{
		if(confirm("您确定要删除该品牌吗？"))
		{
			ajax("post","?/goods/","cmd=del_brand&id=" + val,
			function(data)
			{
				if(data == 1) document.location.replace(document.location.href);
			});
		}
	}
</script>
{/literal}