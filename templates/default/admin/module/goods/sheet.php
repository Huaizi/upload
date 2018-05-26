{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>商品列表</span></div>
	<div class="main">
		<table class="table sheet">
			<tr class="h">
				<td>图片</td>
				<td>标题</td>
				<td width="45px">排序</td>
				<td width="40px">促销</td>
				<td width="40px">精品</td>
				<td width="40px">新品</td>
				<td width="40px">热卖</td>
				<td width="40px">置顶</td>
				<td width="40px">显示</td>
				<td width="120px">操作</td>
			</tr>
			{foreach from=$goods name=goods item=item}
			<tr>
				<td class="pic"><div><img src="{$item.x_img}" onload="picresize(this,50,50)" /></div></td>
				<td>{$item.title}</td>
				<td onClick="show_edit('index_{$item.id}')">
					<span id="index_{$item.id}_1">{$item.index}<img src="{$S_TPL_PATH}images/pencil.gif" /></span>
					<span id="index_{$item.id}_2" style="display:none;">
						<input type="text" id="index_{$item.id}" value="{$item.index}" style="width:30px;" onBlur="set_order('index','goods',{$item.id},this.value)" />
					</span>
				</td>
				<td><input type="checkbox" {if $item.promotion == 1}checked{/if} onClick="set_order('promotion','goods',{$item.id},this.checked)" /></td>
				<td><input type="checkbox" {if $item.best == 1}checked{/if} onClick="set_order('best','goods',{$item.id},this.checked)" /></td>
				<td><input type="checkbox" {if $item.new == 1}checked{/if} onClick="set_order('new','goods',{$item.id},this.checked)" /></td>
				<td><input type="checkbox" {if $item.hot == 1}checked{/if} onClick="set_order('hot','goods',{$item.id},this.checked)" /></td>
				<td><input type="checkbox" {if $item.top == 1}checked{/if} onClick="set_order('top','goods',{$item.id},this.checked)" /></td>
				<td><input type="checkbox" {if $item.show == 1}checked{/if} onClick="set_order('show','goods',{$item.id},this.checked)" /></td>
				<td>
					<a href="{url entrance=$index_entrance channel=$global.channel id=$item.id}" target="_blank">[查看]</a>
					<a href="{url channel=$global.channel mod='edit' id=$item.id}">[编辑]</a>
					<a onClick="del_goods('{$item.id}')">[删除]</a>
				</td>
			</tr>
			{/foreach}
			<tr>
				<td colspan="10">
					{include file="module/page_link.php" page=$global.page}
				</td>
			</tr>
		</table>
	</div>
</div>
<div class="space"></div>
<div class="block">
	<div class="head"><span>商品搜索</span></div>
	<div class="main">
		<form id="form_search" method="post" action="{url channel=$global.channel mod='sheet'}">
			<table class="table">
				<tr>
					<td align="right" width="150px">
						<select name="field">
							<option value="title">商品标题</option>
							<option value="sn">商品编号</option>
							<option value="text">商品描述</option>
						</select>
					</td>
					<td>
						<input name="key" type="text" />
						<input class="button" type="button" value="搜索商品" onclick="do_search()"/>
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
{literal}
<script language="javascript">
	function do_search()
	{
		var obj = document.getElementById("form_search");
		site = obj.action.lastIndexOf("/");
		str = obj.action.substr(site,obj.action.length - site);
		obj.action = obj.action.substr(0,site) + '/field-' + obj.field.value + '/key-' + obj.key.value + str;
		obj.submit();
	}
	function del_goods(val)
	{
		if(confirm("您确定要删除该商品吗？"))
		{
			ajax("post","?/goods/","cmd=del_goods&id=" + val,
			function(data)
			{
				if(data == 1) document.location.replace(document.location.href);
			});
		}
	}
</script>
{/literal}