{*<?php exit();?>*}
<script type="text/javascript" src="{$S_TPL_PATH}js/focus.js"></script>
<div id="focus">
	<ul>
		{foreach from=$focus name=focus item=item}
		<li><a href="{$item.url}" title="{$item.title}" target="_blank"><img src="{$item.path}" /></a></li>
		{/foreach}
	</ul>
</div>
<!-- 新秀 -->
