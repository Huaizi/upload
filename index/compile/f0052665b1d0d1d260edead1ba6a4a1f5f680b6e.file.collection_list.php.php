<?php /* Smarty version Smarty-3.1.3, created on 2018-01-13 20:37:10
         compiled from "templates/default/index\module\user\collection_list.php" */ ?>
<?php /*%%SmartyHeaderCode:49635a59fd76059b95-97448737%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0052665b1d0d1d260edead1ba6a4a1f5f680b6e' => 
    array (
      0 => 'templates/default/index\\module\\user\\collection_list.php',
      1 => 1447322977,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '49635a59fd76059b95-97448737',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'collection' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5a59fd76134ec',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a59fd76134ec')) {function content_5a59fd76134ec($_smarty_tpl) {?>
<div class="block">
	<div class="head"><span>我的收藏</span></div>
	<div class="main">
		<table class="table">
			<tr class="c">
				<td width="300px"><b>商品名称</b></td>
				<td><b>市场价</b></td>
				<td><b>本店价</b></td>
				<td width="150px"><b>操作</b></td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['collection']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<tr class="c">
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['goods_title'];?>
</td>
				<td>￥<?php echo $_smarty_tpl->tpl_vars['item']->value['market_price'];?>
元</td>
				<td>￥<?php echo $_smarty_tpl->tpl_vars['item']->value['shop_price'];?>
元</td>
				<td>
					<a onclick="add_to_cart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
)">[加入购物车]</a>&nbsp;&nbsp;
					<a onclick="del_collection(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
)">[删除]</a>
				</td>
			</tr>
			<?php } ?>
		</table>
	</div>
</div>

<script language="javascript">
function add_to_cart(id)
{
	ajax("post","?/deal/","cmd=add_to_cart&id=" + id + "&buy_num=1",
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
function del_collection(id)
{
	if(confirm("您确定要从收藏夹中删除选定的商品吗？"))
	{
		ajax("post","index.php?/user/","cmd=del_collection&id=" + id,
		function(data)
		{
			if(data == 1)
			{
				document.location.replace(document.location.href);
			}
		});
	}
}
</script>

<!-- 新秀 --><?php }} ?>