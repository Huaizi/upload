<?php /* Smarty version Smarty-3.1.3, created on 2018-01-13 22:47:50
         compiled from "templates/default/index\module\flow_main.php" */ ?>
<?php /*%%SmartyHeaderCode:39575a5a1c169aebb6-10022593%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3f4cb2f077eb1f1442022dc36bd6de256d76536' => 
    array (
      0 => 'templates/default/index\\module\\flow_main.php',
      1 => 1447641653,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '39575a5a1c169aebb6-10022593',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'global' => 0,
    'cart' => 0,
    'item' => 0,
    'S_FRONT_URL' => 0,
    'shop_total' => 0,
    'market_total' => 0,
    'cut_down' => 0,
    'discount' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5a5a1c16a16b2',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5a1c16a16b2')) {function content_5a5a1c16a16b2($_smarty_tpl) {?>
<div class="block" id="flow_cart">
	<div class="head"><span>您所选购的商品</span></div>
	<div class="main">
		<form name="form_cart" method="post" action="<?php echo url(array('entrance'=>$_smarty_tpl->tpl_vars['global']->value['entrance'],'channel'=>'deal'),$_smarty_tpl);?>
">
			<input name="cmd" type="hidden" value="cart_update"/>
			<table class="table">
				<tr class="head">
					<td width="180px"><b>商品名称</b></td>
					<td><b>市场价</b></td>
					<td><b>本店价</b></td>
					<td width="80px"><b>购买数量</b></td>
					<td><b>小计</b></td>
					<td><b>操作</b></td>
				</tr>
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				<tr>
					<td>
						<div class="img"><a href="<?php echo url(array('channel'=>'goods','id'=>$_smarty_tpl->tpl_vars['item']->value['id']),$_smarty_tpl);?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['S_FRONT_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['item']->value['x_img'];?>
" onload="picresize(this,130,130)"/></a></div>
						<div class="title"><a href="<?php echo url(array('channel'=>'goods','id'=>$_smarty_tpl->tpl_vars['item']->value['id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['short_title'];?>
</a></div>
					</td>
					<td>￥<?php echo $_smarty_tpl->tpl_vars['item']->value['market_price'];?>
元</td>
					<td>￥<?php echo $_smarty_tpl->tpl_vars['item']->value['shop_price'];?>
元</td>
					<td><input name="num[<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
]" class="num" type="text" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['number'];?>
" /></td>
					<td>￥<?php echo $_smarty_tpl->tpl_vars['item']->value['subtotal'];?>
元</td>
					<td><a onclick="cart_del_goods(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
)">[删除]</a></td>
				</tr>
				<?php } ?>
			</table>
		</form>
		<table class="count_bt">
			<tr>
				<td>购物金额小计 ￥<?php echo $_smarty_tpl->tpl_vars['shop_total']->value;?>
元，比市场价 ￥<?php echo $_smarty_tpl->tpl_vars['market_total']->value;?>
元 节省了 ￥<?php echo $_smarty_tpl->tpl_vars['cut_down']->value;?>
元 (<?php echo $_smarty_tpl->tpl_vars['discount']->value;?>
%)</td>
				<td class="bt_row"><a onclick="cart_clear()">清空购物车</a></td>
				<td class="bt_row"><a onclick="cart_update()">更1购物车</a></td>
			</tr>
		</table>
		<table class="big_bt">
			<tr>
				<td><a href="./">继续购物</a></td>
				<td class="c"></td>
				<td><a href="<?php echo url(array('channel'=>'flow','step'=>'consignee'),$_smarty_tpl);?>
">结算中心</a></td>
			</tr>
		</table>
	</div>
</div>

<script language="javascript">
function cart_del_goods(id)
{
	if(confirm("您确实要把该商品移出购物车吗？"))
	{
		ajax("post","?/deal/","cmd=cart_del_goods&id=" + id,
		function(data)
		{
			if(data == 1)
			{
				document.location.href = "?/flow/";
			}
		});
	}
}
function cart_clear()
{
	ajax("post","?/deal/","cmd=cart_clear",
	function(data)
	{
		if(data == 1)
		{
			document.location.href = "?/flow/";
		}
	});
}
function cart_update()
{
	document.form_cart.submit();
}
</script>

<!-- 新秀 --><?php }} ?>