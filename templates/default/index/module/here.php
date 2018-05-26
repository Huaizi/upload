{*<?php exit();?>*}
<div class="here">
	<span class="name">{if $page_title}{$page_title}{elseif $cat_name}{$cat_name}{elseif $channel_title}{$channel_title}{/if}</span>
	<div class="link">
		<a href="./">首页</a>
		{if $channel_title}-&gt;&nbsp;<a href="{url channel=$global.channel}">{$channel_title}</a>{/if}
		{if $cat_name}-&gt;&nbsp;<a href="{url channel=$global.channel cat=$global.cat}">{$cat_name}</a>{/if}
		{if $page_title}-&gt;&nbsp;<a href="{url channel=$global.channel id=$global.id}">{$page_title|truncate:20}</a>{/if}
	</div>
</div>
<!-- 新秀 -->