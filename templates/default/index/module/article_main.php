{*<?php exit();?>*}
{if $show_sheet == 1}
	<div class="art_sheet">
		<div class="main">
			{foreach from=$article name=article item=item}
			<div><a href="{url channel='article' id=$item.id}" title="{$item.title}" target="_blank">{$item.title}</a><span>{$item.add_time|date_format:"%Y-%m-%d"}</span></div>
			{/foreach}
			{if !$article}<div class="not_found">暂无内容</div>{/if}
		</div>
		{if $global.cat}{$prefix = 'article/cat-'|cat:$global.cat}{else}{$prefix = 'article'}{/if}
		{include file="module/page_link.php" page=$global.page}
	</div>
{else}
	<div id="article">
		<div class="title"><h2>{$article.title}</h2></div>
		<div class="message">
			作者/来源：{$article.author}&nbsp;&nbsp;&nbsp;发表时间：{$article.add_time|date_format:"%Y-%m-%d %H:%M:%S"}
		</div>
		<div class="main">
			{$article.text}
			<div class="clear"></div>
		</div>
		<div class="share">{$share_code}</div>
		{$prefix = 'article'}
		{include file="module/prev_next.php"}
	</div>
	{include file="module/comment.php"}
{/if}
<!-- 新秀 -->