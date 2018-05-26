{*<?php exit();?>*}
<div id="prev_next">
	<div class="prev">上一篇：{if $prev_title}<a href="{url prefix=$prefix id=$prev_id}">{$prev_title}</a>{else}无{/if}</div>
	<div class="next">下一篇：{if $next_title}<a href="{url prefix=$prefix id=$next_id}">{$next_title}</a>{else}无{/if}</div>
	<div class="clear"></div>
</div>