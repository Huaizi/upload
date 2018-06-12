{*<?php exit();?>*}
<div id="header">
	<div id="top">
		<div class="main">
			<div class="left">您好，欢迎来到完美商城！</div>
			<div class="right">
				{if !$global.user_id}
				<a href="{url entrance=$global.entrance channel='user'}">用户中心</a>|
				<a href="{url entrance=$global.entrance channel='user' mod='register'}">快速注册</a>|
				{else}
				<a href="{url entrance=$global.entrance channel='user'}">{$global.user_name}</a>|
				<a href="{url entrance=$global.entrance channel='user'}">用户中心</a>|
				<a href="{url entrance=$global.entrance channel='user' mod='logout'}">退出登录</a>|
				{/if}
				<a href="{url entrance=$global.entrance channel='user' mod='order_sheet'}">查看订单</a>

			</div>
		</div>
	</div>
	<div class="main">
		<div class="logo"><a href=""><img src="{$S_FRONT_URL}images/logo.jpg" /></a></div>
		<div class="search">
			<div class="form">
				<form id="form_search" method="post" action="{url entrance=$global.entrance channel='search'}">
					<input name="cat" type="hidden" value="0" />
					<input class="text" name="key" type="text" maxlength="30" onkeydown="if(event.keyCode == 13)do_search();" value="以撒的结合" />
					<input class="bt" type="button" onclick="do_search()" value="搜商品" />
				</form>
			</div>

			<div class="hot_word">
								<a href="http://localhost/upload/?/search/cat-0/key-xbox/index.html">xbox</a>&nbsp;|&nbsp;								<a href="http://localhost/upload/?/search/cat-0/key-3ds/index.html">3ds</a>&nbsp;|&nbsp;								<a href="http://localhost/upload/?/search/cat-0/key-gba/index.html">gba</a>&nbsp;|&nbsp;								<a href="http://localhost/upload/?/search/cat-0/key-nds/index.html">nds</a>&nbsp;|&nbsp;								<a href="http://localhost/upload/?/search/cat-0/key-switch/index.html">switch</a>&nbsp;|&nbsp;								<a href="http://localhost/upload/?/search/cat-0/key-ps4/index.html">ps4</a>&nbsp;|&nbsp;								<a href="http://localhost/upload/?/search/cat-0/key-pc/index.html">pc</a>&nbsp;|&nbsp;								<a href="http://localhost/upload/?/search/cat-0/key-雅达利/index.html">雅达利</a>&nbsp;|&nbsp;								<a href="http://localhost/upload/?/search/cat-0/key-wiiu/index.html">wiiu</a>							</div>

			<script language="javascript">
				var default_search = "以撒的结合";
			</script>

			{literal}
			<script language="javascript">
				$("#form_search .text").focus(function(){
					if($(this).val() == default_search)
					{
						$(this).val("");
					}
					$(this).css("color","#000");
				});
				$("#form_search .text").blur(function(){
					if($(this).val() == "")
					{
						$(this).val(default_search);
						$(this).css("color","#999");
					}
				});
			</script>
			{/literal}
		</div>
		<div id="cart">
			<div class="img"></div>
			<a class="word" href="{url entrance=$global.entrance channel='flow'}">去购物车结算</a>
			{if $cart}
			<div class="cart_list">
				<div class="line"></div>
				<div class="inner">
					<table>
						{foreach from=$cart name=cart item=item}
						<tr>
							<td class="title"><a href="{url channel='goods' id=$item.id}" target="_blank">{$item.short_title}</a></td>
							<td class="num">{$item.number}件</td>
							<td class="price">￥{$item.subtotal}</td>
						</tr>
						{/foreach}
					</table>
				</div>
			</div>
			{/if}
		</div>
		{literal}
		<script language="javascript">
			$("#cart").mouseover(function(){
				$("#cart .cart_list").show();
			});
			$("#cart").mouseout(function(){
				$("#cart .cart_list").hide();
			});
		</script>
		{/literal}
	</div>
	<div id="nav">
		<div class="main">
			<div class="cat_head">全部商品分类</div>
			<a href="http://localhost/upload/?/index/">首&nbsp;&nbsp;&nbsp;页</a>
						<a href="http://localhost/upload/?/goods/cat-1/">影&nbsp;&nbsp;&nbsp;像</a>
						<a href="http://localhost/upload/?/goods/cat-2/">电&nbsp;&nbsp;&nbsp;器</a>
						<a href="http://localhost/upload/?/goods/cat-3/">手&nbsp;&nbsp;&nbsp;机</a>
						<a href="http://localhost/upload/?/goods/cat-4/">办&nbsp;&nbsp;&nbsp;工</a>
						<a href="http://localhost/upload/?/goods/cat-5/">家&nbsp;&nbsp;&nbsp;具</a>
						<a href="http://localhost/upload/?/goods/cat-6/">衣&nbsp;&nbsp;&nbsp;装</a>
						<a href="http://localhost/upload/?/goods/cat-7/">化妆品</a>
						<a href="http://localhost/upload/?/goods/cat-8/">奢侈品</a>
						<a href="http://localhost/upload/?/goods/promotion-1/">特&nbsp;&nbsp;&nbsp;卖</a>
			<div class="clear"></div>
		</div>
	</div>
</div>
<!-- 新秀 -->
