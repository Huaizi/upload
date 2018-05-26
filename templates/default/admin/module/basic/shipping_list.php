{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>配送方式</span></div>
	<div class="main">
		<table class="table sheet">
			<tr class="h">
				<td width="100px">名称</td>
				<td width="80px">价格</td>
				<td>描述</td>
				<td width="45px">排序</td>
				<td width="40px">置顶</td>
				<td width="40px">显示</td>
				<td width="100px">操作</td>
			</tr>
			{foreach from=$shipping name=shipping item=item}
			<tr>
				<td>{$item.name}</td>
				<td>￥{$item.price}元</td>
				<td>{$item.text}</td>
				<td onClick="show_edit('index_{$item.id}')">
					<span id="index_{$item.id}_1">{$item.index}<img src="{$S_TPL_PATH}images/pencil.gif" /></span>
					<span id="index_{$item.id}_2" style="display:none;">
						<input type="text" id="index_{$item.id}" value="{$item.index}" style="width:30px;" onBlur="set_order('index','shipping',{$item.id},this.value)" />
					</span>
				</td>
				<td><input type="checkbox" {if $item.top == 1}checked{/if} onClick="set_order('top','shipping',{$item.id},this.checked)" /></td>
				<td><input type="checkbox" {if $item.show == 1}checked{/if} onClick="set_order('show','shipping',{$item.id},this.checked)" /></td>
				<td>
					<a onClick="jump('{url channel=$global.channel mod='shipping_edit' id=$item.id}')">[修改]</a>
					<a onClick="del('shipping|{$item.id}')">[删除]</a>
				</td>
			</tr>
			{/foreach}
			<tr>
				<td colspan="7">
					<div class="bt_row">
						<input class="button" type="button" onClick="jump('{url channel=$global.channel mod='shipping_add'}')" value="添加" />
					</div>
				</td>
			</tr>
		</table>
	</div>
</div>