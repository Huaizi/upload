{*<?php exit();?>*}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta name="keywords" content="{$keywords}" />
	<meta name="description" content="{$describe}" />
	<meta name="version" content="{$version}" />
	<title>{$site_title}</title>
	<link href="{$S_TPL_PATH}css/index.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="{$S_TPL_PATH}js/index.js"></script>
	<script type="text/javascript" src="{$S_TPL_PATH}js/jquery-1.11.2.min.js"></script>
	<!--[if IE 6]>
	<script type="text/javascript" src="{$S_TPL_PATH}js/DD_belatedPNG_0.0.8a.js"></script>
	<script type="text/javascript">
		DD_belatedPNG.fix("*");
	</script>
	<![endif]-->
</head>
<body>
	{include file="module/header.php"}
	<div id="main" class="user_center">
		<div class="section_2">
			{include file="module/goods_tree.php"}
		</div>
		{if $global.step == '' || $global.step == 'cart'}
			{include file="module/flow_main.php"}
		{elseif $global.step == 'consignee'}
			{if $show_login == 1}
				{include file="module/flow_login.php"}
			{else}
				{include file="module/flow_consignee.php"}
			{/if}
		{elseif $global.step == 'checkout'}
			{include file="module/flow_checkout.php"}
		{elseif $global.step == 'done'}
			{include file="module/flow_done.php"}
		{/if}
	</div>
	{include file="module/help.php"}
	{include file="module/footer.php"}
	{include file="module/service.php"}
</body>
</html>