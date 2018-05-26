{*<?php exit();?>*}
<div class="block bra_sheet">
	<div class="clear"></div>
	{foreach from=$brand name=brand item=item}
	<div class="unit">
		<div class="img">
			<table>
				<tr>
					<td>
						<a href="{url channel='goods' brand=$item.id}" target="_blank"><img src="{$S_FRONT_URL}{$item.img}" onload="picresize(this,155,55)"/></a>
					</td>
				</tr>
			</table>
		</div>
		<div class="txt">{$item.text}</div>
	</div>
	{/foreach}
	<div class="clear"></div>
	{if !$brand}<div class="not_found">暂无内容</div>{/if}
</div>