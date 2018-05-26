{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>收货地址</span></div>
	<div class="main">
		{foreach from=$consignee name=consignee item=item}
		{$iteration = $smarty.foreach.consignee.iteration}
		<form id="form_consignee_{$iteration}" method="post" action="{url entrance=$global.entrance channel='user'}">
			<input name="cmd" type="hidden" value="edit_consignee"/>
			<input name="id" type="hidden" value="{$item.id}"/>
			<table class="table">
				<tr>
					<td>配送区域：</td>
					<td colspan="3">
						<select name="region_1" onchange="get_region(this.value,'region_{$iteration}_2')">
							<option value="0">请选择</option>
							{$item.region_1}
						</select>&nbsp;&nbsp;
						<span id="region_{$iteration}_2">
						<select name="region_2" onchange="get_region(this.value,'region_{$iteration}_3')">
							<option value="0">请选择</option>
							{$item.region_2}
						</select>&nbsp;&nbsp;
						</span>
						<span id="region_{$iteration}_3">
						<select name="region_3" onchange="get_region(this.value,'')">
							<option value="0">请选择</option>
							{$item.region_3}
						</select>&nbsp;&nbsp;（必填）
						</span>
					</td>
				</tr>
				<tr>
					<td width="90px">收货人姓名：</td>
					<td><input class="text" name="consignee" type="text" value="{$item.consignee}" />&nbsp;&nbsp;（必填）</td>
					<td width="90px">电子邮件地址：</td>
					<td><input class="text" name="email" type="text" value="{$item.email}" />&nbsp;&nbsp;（必填）</td>
				</tr>
				<tr>
					<td>详细地址：</td>
					<td><input class="text" name="address" type="text" value="{$item.address}" />&nbsp;&nbsp;（必填）</td>
					<td>邮政编码：</td>
					<td><input class="text" name="zipcode" type="text" value="{$item.zipcode}" /></td>
				</tr>
				<tr>
					<td>电话：</td>
					<td><input class="text" name="tel" type="text" value="{$item.tel}" />&nbsp;&nbsp;（必填）</td>
					<td>手机：</td>
					<td><input class="text" name="mobile" type="text" value="{$item.mobile}" /></td>
				</tr>
				<tr>
					<td>标志建筑：</td>
					<td><input class="text" name="building" type="text" value="{$item.building}" /></td>
					<td>最佳送货时间：</td>
					<td><input class="text" name="best_time" type="text" value="{$item.best_time}" /></td>
				</tr>
				<tr>
					<td class="bt_row" colspan="4">
						<input class="button" type="button" value="确认修改" onclick="submit_consignee('{$iteration}')" />&nbsp;&nbsp;
						<input class="button" type="button" value="删除" onclick="del_consignee({$item.id})" />
					</td>
				</tr>
			</table>
		</form>
		<div class="space"></div>
		{/foreach}
		<form id="form_consignee_0" method="post" action="{url entrance=$global.entrance channel='user'}">
			<input name="cmd" type="hidden" value="add_consignee"/>
			<table class="table">
				<tr>
					<td>配送区域：</td>
					<td colspan="3">
						<select name="region_1" onchange="get_region(this.value,'region_0_2')" >
							<option value="0">请选择</option>
							{$con_region}
						</select>&nbsp;&nbsp;
						<span id="region_0_2">
						<select name="region_2" onchange="get_region(this.value,'region_0_3')" >
							<option value="0">请选择</option>
						</select>&nbsp;&nbsp;
						</span>
						<span id="region_0_3">
						<select name="region_3" onchange="get_region(this.value,'')" >
							<option value="0">请选择</option>
						</select> &nbsp;&nbsp;（必填）
						</span>
					</td>
				</tr>
				<tr>
					<td width="90px">收货人姓名：</td>
					<td><input class="text" name="consignee" type="text" value="{$con_consignee}" />&nbsp;&nbsp;（必填）</td>
					<td width="90px">电子邮件地址：</td>
					<td><input class="text" name="email" type="text" value="{$con_email}" />&nbsp;&nbsp;（必填）</td>
				</tr>
				<tr>
					<td>详细地址：</td>
					<td><input class="text" name="address" type="text" value="{$con_address}" />&nbsp;&nbsp;（必填）</td>
					<td>邮政编码：</td>
					<td><input class="text" name="zipcode" type="text" value="" /></td>
				</tr>
				<tr>
					<td>电话：</td>
					<td><input class="text" name="tel" type="text" value="{$con_tel}" />&nbsp;&nbsp;（必填）</td>
					<td>手机：</td>
					<td><input class="text" name="mobile" type="text" value="" /></td>
				</tr>
				<tr>
					<td>标志建筑：</td>
					<td><input class="text" name="building" type="text" value="" /></td>
					<td>最佳送货时间：</td>
					<td><input class="text" name="best_time" type="text" value="" /></td>
				</tr>
				<tr>
					<td class="bt_row" colspan="4">
						<input class="button" type="button" onclick="submit_consignee(0)" value="新增收货地址" />&nbsp;&nbsp;
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
{literal}
<script language="javascript">
function submit_consignee(val)
{
	var str = "";
	var form_consignee = document.getElementById("form_consignee_" + val);
	if(form_consignee.region_1.value == 0){str += "-请选择配送区域\n";}
	if(form_consignee.consignee.value == ""){str += "-收货人姓名不能为空\n";}
	if(form_consignee.email.value == ""){str += "-电子邮件地址不能为空\n";}
	if(form_consignee.address.value == ""){str += "-详细地址不能为空\n";}
	if(form_consignee.tel.value == ""){str += "-电话不能为空\n";}
	if(str != "")
	{
		alert(str);
	}else{
		form_consignee.submit();
	}
}
function del_consignee(id)
{
	if(confirm("你确认要删除该收货地址吗？"))
	{
		ajax("post","index.php?/user/","cmd=del_consignee&id=" + id,
		function(data)
		{
			if(data == 1)
			{
				document.location.replace(document.location.href);
			}
		});
	}
}
function get_region(val,tag)
{
	var html = document.getElementById(tag).innerHTML;
	var start = html.indexOf(">");
	var end = html.lastIndexOf("</");
	var option = html.substr(start + 1,end - start - 1);
	var str = '<option value="0">请选择</option>';
	if(val != 0 && tag != "")
	{
		ajax("post","?/deal/","cmd=get_region&val=" + val,
		function(data)
		{
			document.getElementById(tag).innerHTML = html.replace(option,str + data);
		});
	}else if(val == 0){
		document.getElementById(tag).innerHTML = html.replace(option,str);
	}
}
</script>
{/literal}
<!-- 新秀 -->