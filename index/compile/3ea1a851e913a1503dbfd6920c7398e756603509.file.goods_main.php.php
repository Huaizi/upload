<?php /* Smarty version Smarty-3.1.3, created on 2018-06-12 23:34:42
         compiled from "templates/default/index\module\goods_main.php" */ ?>
<?php /*%%SmartyHeaderCode:199475a59d684485e32-92623376%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ea1a851e913a1503dbfd6920c7398e756603509' => 
    array (
      0 => 'templates/default/index\\module\\goods_main.php',
      1 => 1528817649,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199475a59d684485e32-92623376',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5a59d68463270',
  'variables' => 
  array (
    'show_sheet' => 0,
    'goods' => 0,
    'item' => 0,
    'S_FRONT_URL' => 0,
    'global' => 0,
    'more_img' => 0,
    'share_code' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a59d68463270')) {function content_5a59d68463270($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['show_sheet']->value==1){?>
	<div class="img_list">
		<div class="main">
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<div class="unit">
				<div class="inner">
					<div class="img">
						<table>
							<tr>
								<td>
									<a href="<?php echo url(array('channel'=>'goods','id'=>$_smarty_tpl->tpl_vars['item']->value['id']),$_smarty_tpl);?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['S_FRONT_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['item']->value['x_img'];?>
" onload="picresize(this,280,320)"/></a>
								</td>
							</tr>
						</table>
					</div>
					<div class="info">
						<div class="title"><a href="<?php echo url(array('channel'=>'goods','id'=>$_smarty_tpl->tpl_vars['item']->value['id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['short_title'];?>
</a></div>
						<div class="price">
							<span class="shop_price">￥<span><?php echo sprintf('%.1f',$_smarty_tpl->tpl_vars['item']->value['shop_price']);?>
</span></span>
							<span class="market_price">￥<?php echo sprintf('%.1f',$_smarty_tpl->tpl_vars['item']->value['market_price']);?>
</span>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>
			<?php if (!$_smarty_tpl->tpl_vars['goods']->value){?><div class="not_found">暂无内容</div><?php }?>
			<div class="clear"></div>
		</div>
	</div>
	<?php echo $_smarty_tpl->getSubTemplate ("module/page_link.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('page'=>$_smarty_tpl->tpl_vars['global']->value['page']), 0);?>

<?php }else{ ?>
	<div id="goods">
		<div class="goods_info">
			<div class="imgs">
				<div class="big_img">
					<table>
						<tr>
							<td>
								<a href="<?php echo $_smarty_tpl->tpl_vars['S_FRONT_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['goods']->value['img'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['goods']->value['title'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['S_FRONT_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['goods']->value['img'];?>
" onload="picresize(this,330,330)"/></a>
							</td>
						</tr>
					</table>
				</div>
				<div class="more_img">
					<div class="unit on"><img src="<?php echo $_smarty_tpl->tpl_vars['S_FRONT_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['goods']->value['img'];?>
" /></div>
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['more_img']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['more_img']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['more_img']['index']++;
?>
					<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['more_img']['index']<5){?>
					<div class="unit"><img src="<?php echo $_smarty_tpl->tpl_vars['S_FRONT_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
" /></div>
					<?php }?>
					<?php } ?>
					<div class="clear"></div>
				</div>
			</div>
			<div class="info">
				<div class="title"><?php echo $_smarty_tpl->tpl_vars['goods']->value['title'];?>
</div>
				<div class="sn">商品货号：<?php echo $_smarty_tpl->tpl_vars['goods']->value['sn'];?>
</div>
				<div class="brand">商品品牌：<?php if ($_smarty_tpl->tpl_vars['goods']->value['brand']){?><?php echo $_smarty_tpl->tpl_vars['goods']->value['brand'];?>
<?php }else{ ?>无<?php }?></div>
				<div class="market_price">市场价格：<span>￥<?php echo $_smarty_tpl->tpl_vars['goods']->value['market_price'];?>
</span></div>
				<div class="shop_price">本店售价：<span>￥<?php echo $_smarty_tpl->tpl_vars['goods']->value['shop_price'];?>
</span></div>
				<div class="hits">浏览次数：<?php echo $_smarty_tpl->tpl_vars['goods']->value['hits']+1;?>
</div>
				<div class="number">商品库存：<?php echo $_smarty_tpl->tpl_vars['goods']->value['number'];?>
</div>
				<div class="buy_num">购买数量：<input id="buy_num" type="text" value="1" /></div>
				<table>
					<tr>
						<td class="bt_row"><a onclick="add_to_cart(<?php echo $_smarty_tpl->tpl_vars['goods']->value['id'];?>
)">加入购物车</a></td>
						<td class="bt_row"><a onclick="add_to_collection(<?php echo $_smarty_tpl->tpl_vars['goods']->value['id'];?>
)">加入收藏夹</a></td>
						<td class="bt_row"><a onclick="show_box('share',300,100);">推荐给好友</a></td>
					</tr>
				</table>
			</div>
			<?php echo $_smarty_tpl->getSubTemplate ("module/history.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<div class="clear"></div>
		</div>
		<div class="space"></div>
		<div class="block">
			<div class="head"><span>商品属性</span></div>
			<div class="main goods_att">
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goods']->value['att']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				<span><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
: <?php echo $_smarty_tpl->tpl_vars['item']->value['value'];?>
</span>
				<?php } ?>
				<div class="clear"></div>
			</div>
		</div>
		<div class="space"></div>
		<div class="block">
			<div class="head"><span>商品描述</span></div>
			<div class="main goods_text">
				<?php echo $_smarty_tpl->tpl_vars['goods']->value['text'];?>

			</div>
		</div>
		<div class="space"></div>
		<?php echo $_smarty_tpl->getSubTemplate ("module/comment.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
	<!-------------------------- BOX -------------------------->
	<div class="alert" id="share">
		<div class="inner">
			<div class="head">
				<div class="title">推荐给好友</div>
				<div class="close" onclick="hide_box('share')">关闭</div>
			</div>
			<div class="main">
				<?php echo $_smarty_tpl->tpl_vars['share_code']->value;?>

			</div>
		</div>
	</div>
	<!-------------------------- BOX -------------------------->
	
	<script language="javascript">
	$(".goods_info .imgs .unit").click(function(){
		var src = $(this).children("img").attr("src");
		var img = "<img src='" + src+ "' onload='picresize(this,330,330)'/>";
		$(".goods_info .big_img a").html(img);
		$(".goods_info .big_img a").attr("href",src);
		$(".goods_info .imgs .unit").removeClass("on");
		$(this).addClass("on");
	});
	function add_to_cart(id)
	{
		var buy_num = document.getElementById("buy_num").value;
		ajax("post","?/deal/","cmd=add_to_cart&id=" + id + "&buy_num=" + buy_num,
		function(data)
		{
			if(data == 1)
			{
				document.location.href = "?/flow/";
			}else if(data == 2){
				alert("对不起，该商品已经库存不足暂停销售。\n你现在要进行缺货登记来预订该商品吗？");
				document.location.href = "?/user/mod-booking_add/goods_id-" + id + "/";
			}
		});
	}
	function add_to_collection(id)
	{
		ajax("post","?/deal/","cmd=add_to_collection&id=" + id,
		function(data)
		{
			if(data == 0)
			{
				alert("由于您还没有登录，因此您还不能使用该功能");
			}else if(data == 1)
			{
				alert("该商品已经成功地加入了您的收藏夹");
			}else if(data == 2){
				alert("该商品已经存在于您的收藏夹中");
			}
		});
	}
	</script>
	
<?php }?>
<!-- 新秀 -->
<?php }} ?>