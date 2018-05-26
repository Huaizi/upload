{*<?php exit();?>*}
<div id="footer">
	<div class="nav">
		<div class="main">
			{foreach from=$footer_nav name=footer_nav item=item}
			<a href="{$item.url}">{$item.name}</a>
			{if !$smarty.foreach.footer_nav.last}|{/if}
			{/foreach}
		</div>
	</div>

</div>
<!-- 新秀 -->
