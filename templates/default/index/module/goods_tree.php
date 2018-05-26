{*<?php exit();?>*}
<div class="goods_tree{if $global.channel != 'index'} goods_tree_2{/if}">
	<div class="inner">
		{$count = 0}
		{foreach from=$goods_tree name=goods_tree item=item}
		{if $item.grade == 1 && $count < 14}
		{$count = $count + 1}
		<div class="unit">
			<div class="cat_1"><a href="{url channel='goods' cat=$item.id}">{$item.name}</a></div>
			<div class="cat_2">
				{foreach from=$goods_tree name=goods_tree item=item_2}
				{if $item.id == $item_2.parent}
				<a href="{url channel='goods' cat=$item_2.id}">{$item_2.name}</a>
				{/if}
				{/foreach}
			</div>
		</div>
		{/if}
		{/foreach}
	</div>
</div>
{literal}
<script language="javascript">
	$("#nav .cat_head,.goods_tree_2").mouseover(function(){
		$(".goods_tree_2").show();
	});
	$("#nav .cat_head,.goods_tree_2").mouseout(function(){
		$(".goods_tree_2").hide();
	});
	$(".goods_tree .unit").mouseover(function(){
		if($(this).children(".cat_2").html().indexOf("<") != -1)
		{
			$(this).addClass("on");
		}
	});
	$(".goods_tree .unit").mouseout(function(){
		if($(this).children(".cat_2").html().indexOf("<") != -1)
		{
			$(this).removeClass("on");
		}
	});
</script>
{/literal}
<!-- 新秀 -->
