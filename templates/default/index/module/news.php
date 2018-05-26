{*<?php exit();?>*}
<div class="art_list">
	<div class="inner">
		<div class="head">
			<div class="tag on">公&nbsp;告</div>
			<div class="tag">快&nbsp;报</div>
			<div class="clear"></div>
		</div>
		<div class="main">
			<div class="tag tag_1">
				{foreach from=$notice name=notice item=item}
				<div><a href="{url channel='article' id=$item.id}" title="{$item.title}" target="_blank">{$item.short_title}</a><span>{$item.add_time|date_format:"%m-%d"}</span></div>
				{/foreach}
			</div>
			<div class="tag tag_2" style="display:none">
				{foreach from=$news name=news item=item}
				<div><a href="{url channel='article' id=$item.id}" title="{$item.title}" target="_blank">{$item.short_title}</a><span>{$item.add_time|date_format:"%m-%d"}</span></div>
				{/foreach}
			</div>
		</div>
	</div>
</div>
{literal}
<script language="javascript">
	$(".art_list .head .tag").mousemove(function(){
		$(".art_list .head .tag").removeClass("on");
		$(this).addClass("on");
		$(".art_list .main .tag").hide();
		$(".art_list .main .tag_" + ($(this).index() + 1)).show();
	});
</script>
{/literal}
<!-- 新秀 -->
