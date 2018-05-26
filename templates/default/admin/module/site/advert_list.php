{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>广告管理</span></div>
	<div class="main">
		<table class="table sheet">
			<tr class="h">
				<td>名称</td>
				<td width="250px">标签</td>
				<td width="120px">操作</td>
			</tr>
			{foreach from=$advert name=advert item=item}
			<tr>
				<td>{$item.name}</td>
				<td>{ldelim}include file="module/ad.php" aid={$item.id}{rdelim}</td>
				<td>
					<a onClick="jump('{url channel=$global.channel mod='advert_edit' id=$item.id}')">[修改]</a>
					<a onClick="del('advert|{$item.id}')">[删除]</a>
				</td>
			</tr>
			{/foreach}
			<tr>
				<td colspan="3">
					<div class="bt_row">
						<input class="button" type="button" onClick="jump('{url channel=$global.channel mod='advert_add'}')" value="添加" />
					</div>
				</td>
			</tr>
		</table>
	</div>
</div>
<div class="space"></div>
<div class="block">
	<div class="head"><span>使用说明</span></div>
	<div class="main content">
		1、系统原有两个广告建议只修改不删除，以免删除后不知道如何添加；<br />
		2、添加广告后复制标签插入到模板文件中，用户须要会点HTML基础。
	</div>
</div>