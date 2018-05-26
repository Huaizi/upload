{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>添加缺货登记</span></div>
	<div class="main add_booking">
		<form name="form_add_booking" method="post" action="{url entrance=$global.entrance channel='user'}">
			<input name="cmd" type="hidden" value="add_booking"/>
			<input name="goods_id" type="hidden" value="{$global.goods_id}"/>
			<table class="table">
				<tr>
					<td class="l">订购商品名：</td>
					<td class="r">{$goods_title}</td>
				</tr>
				<tr>
					<td class="l">订购数量：</td>
					<td class="r"><input class="text" name="number" type="text" /></td>
				</tr>
				<tr>
					<td class="l">订购描述：</td>
					<td class="r"><textarea name="text"></textarea></td>
				</tr>
				<tr>
					<td class="l">联系人：</td>
					<td class="r"><input class="text" name="consignee" type="text" value="{$booking.consignee}" /></td>
				</tr>
				<tr>
					<td class="l">电子邮件地址：</td>
					<td class="r"><input class="text" name="email" type="text" value="{$booking.email}" /></td>
				</tr>
				<tr>
					<td class="l">联系电话：</td>
					<td class="r"><input class="text" name="tel" type="text" value="{$booking.tel}" /></td>
				</tr>
				<tr>
					<td class="bt_row" colspan="2"><input class="button" type="button" onclick="submit_add_booking()" value="确认修改" /></td>
				</tr>
			</table>
		</form>
	</div>
</div>
{literal}
<script language="javascript">
function submit_add_booking()
{
	var str = "";
	if(document.form_add_booking.number.value == ""){str += "-请输入您要订购的商品数量\n";}
	if(document.form_add_booking.text.value == ""){str += "-请输入您的订购描述信息\n";}
	if(document.form_add_booking.consignee.value == ""){str += "-请输入联系人姓名\n";}
	if(document.form_add_booking.email.value == ""){str += "-请输入联系人的电子邮件地址\n";}
	if(document.form_add_booking.tel.value == ""){str += "-请输入联系人的电话\n";}
	if(str != "")
	{
alert(str);
	}else{
		document.form_add_booking.submit();
	}
}
</script>
{/literal}
<!-- 新秀 -->