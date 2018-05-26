{*<?php exit();?>*}
<div id="search">
	<form id="form_search" method="post" action="{url entrance=$global.entrance channel='search'}">
		<select name="cat">
			<option value="0">所有分类</option>
			{foreach from=$search_cat name=search_cat item=item}
			<option value="{$item.cat_id}">{$item.cat_name}</option>
			{/foreach}
		</select>
		<input class="text" name="key" type="text" maxlength="30" onkeydown="if(event.keyCode == 13)do_search();" />
		<input class="button" type="button" onclick="do_search()" value="搜索" />
	</form>
	<div class="hot_search">
		热门搜索：
		{foreach from=$hot_search name=hot_search item=item}
		<a href="{url entrance=$global.entrance channel='search' cat=0 key=$item}">{$item}</a>&nbsp;
		{/foreach}
	</div>
	<div class="clear"></div>
</div>
<!-- 新秀 -->