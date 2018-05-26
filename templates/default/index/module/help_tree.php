{*<?php exit();?>*}
<div class="article_tree">
	<div class="inner">
		<div class="head">文章分类</div>
		<div class="main">
			{foreach from=$help_tree name=help_tree item=item}
			{if $item.grade == 1}{$grade = 1}{elseif $item.grade == 2}{$grade = 2}{else}{$grade = 3}{/if}
			<div class="cat_{$grade}"><a href="{url channel='help' cat=$item.id}">{$item.name}</a></div>
			{/foreach}
		</div>
	</div>
</div>
<!-- 新秀 -->