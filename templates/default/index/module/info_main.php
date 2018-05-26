{*<?php exit();?>*}
<div class="block" id="info">
	<div class="head"><span>系统信息</span></div>
	<div class="main">
		<div>{$info_text}</div>
		<a href="{$link_href}">{$link_text}</a>
	</div>
</div>
<script language="javascript">
	interval = setInterval("document.location.href = '{$link_href}'",3000);
</script>