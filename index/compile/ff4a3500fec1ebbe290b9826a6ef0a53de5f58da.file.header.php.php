<?php /* Smarty version Smarty-3.1.3, created on 2018-05-08 17:30:04
         compiled from "templates/default/index\module\header.php" */ ?>
<?php /*%%SmartyHeaderCode:262965a59d67c986aa9-65003323%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff4a3500fec1ebbe290b9826a6ef0a53de5f58da' => 
    array (
      0 => 'templates/default/index\\module\\header.php',
      1 => 1525771596,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '262965a59d67c986aa9-65003323',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5a59d67cb606b',
  'variables' => 
  array (
    'global' => 0,
    'S_FRONT_URL' => 0,
    'cart' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a59d67cb606b')) {function content_5a59d67cb606b($_smarty_tpl) {?>
<div id="header">
	<div id="top">
		<div class="main">
			<div class="left">您好，欢迎来到完美商城！</div>
			<div class="right">
				<?php if (!$_smarty_tpl->tpl_vars['global']->value['user_id']){?>
				<a href="<?php echo url(array('entrance'=>$_smarty_tpl->tpl_vars['global']->value['entrance'],'channel'=>'user'),$_smarty_tpl);?>
">用户中心</a>|
				<a href="<?php echo url(array('entrance'=>$_smarty_tpl->tpl_vars['global']->value['entrance'],'channel'=>'user','mod'=>'register'),$_smarty_tpl);?>
">快速注册</a>|
				<?php }else{ ?>
				<a href="<?php echo url(array('entrance'=>$_smarty_tpl->tpl_vars['global']->value['entrance'],'channel'=>'user'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['global']->value['user_name'];?>
</a>|
				<a href="<?php echo url(array('entrance'=>$_smarty_tpl->tpl_vars['global']->value['entrance'],'channel'=>'user'),$_smarty_tpl);?>
">用户中心</a>|
				<a href="<?php echo url(array('entrance'=>$_smarty_tpl->tpl_vars['global']->value['entrance'],'channel'=>'user','mod'=>'logout'),$_smarty_tpl);?>
">退出登录</a>|
				<?php }?>
				<a href="<?php echo url(array('entrance'=>$_smarty_tpl->tpl_vars['global']->value['entrance'],'channel'=>'user','mod'=>'order_sheet'),$_smarty_tpl);?>
">查看订单</a>

			</div>
		</div>
	</div>
	<div class="main">
		<div class="logo"><a href=""><img src="<?php echo $_smarty_tpl->tpl_vars['S_FRONT_URL']->value;?>
images/logo.jpg" /></a></div>
		<div class="search">
			<div class="form">
				<form id="form_search" method="post" action="<?php echo url(array('entrance'=>$_smarty_tpl->tpl_vars['global']->value['entrance'],'channel'=>'search'),$_smarty_tpl);?>
">
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
			
		</div>
		<div id="cart">
			<div class="img"></div>
			<a class="word" href="<?php echo url(array('entrance'=>$_smarty_tpl->tpl_vars['global']->value['entrance'],'channel'=>'flow'),$_smarty_tpl);?>
">去购物车结算</a>
			<?php if ($_smarty_tpl->tpl_vars['cart']->value){?>
			<div class="cart_list">
				<div class="line"></div>
				<div class="inner">
					<table>
						<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
						<tr>
							<td class="title"><a href="<?php echo url(array('channel'=>'goods','id'=>$_smarty_tpl->tpl_vars['item']->value['id']),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['short_title'];?>
</a></td>
							<td class="num"><?php echo $_smarty_tpl->tpl_vars['item']->value['number'];?>
件</td>
							<td class="price">￥<?php echo $_smarty_tpl->tpl_vars['item']->value['subtotal'];?>
</td>
						</tr>
						<?php } ?>
					</table>
				</div>
			</div>
			<?php }?>
		</div>
		
		<script language="javascript">
			$("#cart").mouseover(function(){
				$("#cart .cart_list").show();
			});
			$("#cart").mouseout(function(){
				$("#cart .cart_list").hide();
			});
		</script>
		
	</div>
	<div id="nav">
		<div class="main">
			<div class="cat_head">全部商品分类</div>
			<a href="http://localhost/upload/?/index/">首&nbsp;&nbsp;&nbsp;页</a>
						<a href="http://localhost/upload/?/goods/cat-1/">男&nbsp;&nbsp;&nbsp;装</a>
						<a href="http://localhost/upload/?/goods/cat-2/">女&nbsp;&nbsp;&nbsp;装</a>
						<a href="http://localhost/upload/?/goods/cat-3/">鞋&nbsp;&nbsp;&nbsp;包</a>
						<a href="http://localhost/upload/?/goods/cat-4/">居&nbsp;&nbsp;&nbsp;家</a>
						<a href="http://localhost/upload/?/goods/cat-5/">食&nbsp;&nbsp;&nbsp;品</a>
						<a href="http://localhost/upload/?/goods/cat-6/">母&nbsp;&nbsp;&nbsp;婴</a>
						<a href="http://localhost/upload/?/goods/cat-7/">化妆品</a>
						<a href="http://localhost/upload/?/goods/cat-8/">数&nbsp;&nbsp;&nbsp;码</a>
						<a href="http://localhost/upload/?/goods/promotion-1/">特&nbsp;&nbsp;&nbsp;卖</a>
			<div class="clear"></div>
		</div>
	</div>
</div>
<!-- 新秀 -->
<?php }} ?>