{*<?php exit();?>*}
{foreach from=$ad name=ad item=item}
{if $aid == $item.id}{$item.code}{/if}
{/foreach}
<!-- 新秀 -->