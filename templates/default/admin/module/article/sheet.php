{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>文章列表</span></div>
	<div class="main">
		<table class="table sheet">
			<tr class="h">
				<td width="120px">分类</td>
				<td>标题</td>
				<td width="45px">排序</td>
				<td width="40px">置顶</td>
				<td width="40px">显示</td>
				<td width="150px">操作</td>
			</tr>
			{foreach from=$article name=article item=item}
			<tr>
				<td>{if $item.cat_name}{$item.cat_name}{else}无{/if}</td>
				<td>{$item.title}</td>
				<td onClick="show_edit('index_{$item.id}')">
					<span id="index_{$item.id}_1">{$item.index}<img src="{$S_TPL_PATH}images/pencil.gif" /></span>
					<span id="index_{$item.id}_2" style="display:none;">
						<input type="text" id="index_{$item.id}" value="{$item.index}" style="width:30px;" onBlur="set_order('index','article',{$item.id},this.value)" />
					</span>
				</td>
				<td><input type="checkbox" {if $item.top == 1}checked{/if} onClick="set_order('top','article',{$item.id},this.checked)" /></td>
				<td><input type="checkbox" {if $item.show == 1}checked{/if} onClick="set_order('show','article',{$item.id},this.checked)" /></td>
				<td>
					<a href="{url entrance=$index_entrance channel=$global.channel id=$item.id}" target="_blank">[查看]</a>
					<a href="{url channel=$global.channel mod='edit' id=$item.id}">[修改]</a>
					<a onClick="del('article|{$item.id}')">[删除]</a>
				</td>
			</tr>
			{/foreach}
			<tr>
				<td colspan="6">
					{include file="module/page_link.php" page=$global.page}
				</td>
			</tr>
		</table>
	</div>
</div>
<div class="space"></div>
<div class="block">
	<div class="head"><span>文章搜索</span></div>
	<div class="main">
		<form id="form_search" method="post" action="{url channel=$global.channel mod='sheet'}">
			<table class="table">
				<tr>
					<td align="right" width="150px">
						<select name="field">
							<option value="title">文章标题</option>
							<option value="author">文章作者</option>
							<option value="text">文章正文</option>
						</select>
					</td>
					<td>
						<input name="key" type="text" />
						<input class="button" type="button" value="搜索文章" onclick="do_search()"/>
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
</script>
{/literal}