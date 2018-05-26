{*<?php exit();?>*}
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
			{foreach from=$collection name=collection item=item}
			<tr class="c">
				<td>{$item.goods_title}</td>
				<td>￥{$item.market_price}元</td>
				<td>￥{$item.shop_price}元</td>
				<td>
					<a onclick="add_to_cart({$item.id})">[加入购物车]</a>&nbsp;&nbsp;
					<a onclick="del_collection({$item.id})">[删除]</a>
				</td>
			</tr>
			{/foreach}
		</table>
	</div>
</div>
{literal}
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
{/literal}
<!-- 新秀 -->