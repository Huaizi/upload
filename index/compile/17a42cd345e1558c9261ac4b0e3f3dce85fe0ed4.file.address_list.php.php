<?php /* Smarty version Smarty-3.1.3, created on 2018-01-13 20:37:08
         compiled from "templates/default/index\module\user\address_list.php" */ ?>
<?php /*%%SmartyHeaderCode:116665a59fd74013466-54525348%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17a42cd345e1558c9261ac4b0e3f3dce85fe0ed4' => 
    array (
      0 => 'templates/default/index\\module\\user\\address_list.php',
      1 => 1447633954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '116665a59fd74013466-54525348',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'consignee' => 0,
    'iteration' => 0,
    'global' => 0,
    'item' => 0,
    'con_region' => 0,
    'con_consignee' => 0,
    'con_email' => 0,
    'con_address' => 0,
    'con_tel' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5a59fd7415ef7',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a59fd7415ef7')) {function content_5a59fd7415ef7($_smarty_tpl) {?>
<div class="block">
	<div class="head"><span>收货地址</span></div>
	<div class="main">
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['consignee']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['consignee']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['consignee']['iteration']++;
?>
		<?php $_smarty_tpl->tpl_vars['iteration'] = new Smarty_variable($_smarty_tpl->getVariable('smarty')->value['foreach']['consignee']['iteration'], null, 0);?>
		<form id="form_consignee_<?php echo $_smarty_tpl->tpl_vars['iteration']->value;?>
" method="post" action="<?php echo url(array('entrance'=>$_smarty_tpl->tpl_vars['global']->value['entrance'],'channel'=>'user'),$_smarty_tpl);?>
">
			<input name="cmd" type="hidden" value="edit_consignee"/>
			<input name="id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"/>
			<table class="table">
				<tr>
					<td>配送区域：</td>
					<td colspan="3">
						<select name="region_1" onchange="get_region(this.value,'region_<?php echo $_smarty_tpl->tpl_vars['iteration']->value;?>
_2')">
							<option value="0">请选择</option>
							<?php echo $_smarty_tpl->tpl_vars['item']->value['region_1'];?>

						</select>&nbsp;&nbsp;
						<span id="region_<?php echo $_smarty_tpl->tpl_vars['iteration']->value;?>
_2">
						<select name="region_2" onchange="get_region(this.value,'region_<?php echo $_smarty_tpl->tpl_vars['iteration']->value;?>
_3')">
							<option value="0">请选择</option>
							<?php echo $_smarty_tpl->tpl_vars['item']->value['region_2'];?>

						</select>&nbsp;&nbsp;
						</span>
						<span id="region_<?php echo $_smarty_tpl->tpl_vars['iteration']->value;?>
_3">
						<select name="region_3" onchange="get_region(this.value,'')">
							<option value="0">请选择</option>
							<?php echo $_smarty_tpl->tpl_vars['item']->value['region_3'];?>

						</select>&nbsp;&nbsp;（必填）
						</span>
					</td>
				</tr>
				<tr>
					<td width="90px">收货人姓名：</td>
					<td><input class="text" name="consignee" type="text" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['consignee'];?>
" />&nbsp;&nbsp;（必填）</td>
					<td width="90px">电子邮件地址：</td>
					<td><input class="text" name="email" type="text" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['email'];?>
" />&nbsp;&nbsp;（必填）</td>
				</tr>
				<tr>
					<td>详细地址：</td>
					<td><input class="text" name="address" type="text" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['address'];?>
" />&nbsp;&nbsp;（必填）</td>
					<td>邮政编码：</td>
					<td><input class="text" name="zipcode" type="text" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['zipcode'];?>
" /></td>
				</tr>
				<tr>
					<td>电话：</td>
					<td><input class="text" name="tel" type="text" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['tel'];?>
" />&nbsp;&nbsp;（必填）</td>
					<td>手机：</td>
					<td><input class="text" name="mobile" type="text" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['mobile'];?>
" /></td>
				</tr>
				<tr>
					<td>标志建筑：</td>
					<td><input class="text" name="building" type="text" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['building'];?>
" /></td>
					<td>最佳送货时间：</td>
					<td><input class="text" name="best_time" type="text" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['best_time'];?>
" /></td>
				</tr>
				<tr>
					<td class="bt_row" colspan="4">
						<input class="button" type="button" value="确认修改" onclick="submit_consignee('<?php echo $_smarty_tpl->tpl_vars['iteration']->value;?>
')" />&nbsp;&nbsp;
						<input class="button" type="button" value="删除" onclick="del_consignee(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
)" />
					</td>
				</tr>
			</table>
		</form>
		<div class="space"></div>
		<?php } ?>
		<form id="form_consignee_0" method="post" action="<?php echo url(array('entrance'=>$_smarty_tpl->tpl_vars['global']->value['entrance'],'channel'=>'user'),$_smarty_tpl);?>
">
			<input name="cmd" type="hidden" value="add_consignee"/>
			<table class="table">
				<tr>
					<td>配送区域：</td>
					<td colspan="3">
						<select name="region_1" onchange="get_region(this.value,'region_0_2')" >
							<option value="0">请选择</option>
							<?php echo $_smarty_tpl->tpl_vars['con_region']->value;?>

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
					<td><input class="text" name="consignee" type="text" value="<?php echo $_smarty_tpl->tpl_vars['con_consignee']->value;?>
" />&nbsp;&nbsp;（必填）</td>
					<td width="90px">电子邮件地址：</td>
					<td><input class="text" name="email" type="text" value="<?php echo $_smarty_tpl->tpl_vars['con_email']->value;?>
" />&nbsp;&nbsp;（必填）</td>
				</tr>
				<tr>
					<td>详细地址：</td>
					<td><input class="text" name="address" type="text" value="<?php echo $_smarty_tpl->tpl_vars['con_address']->value;?>
" />&nbsp;&nbsp;（必填）</td>
					<td>邮政编码：</td>
					<td><input class="text" name="zipcode" type="text" value="" /></td>
				</tr>
				<tr>
					<td>电话：</td>
					<td><input class="text" name="tel" type="text" value="<?php echo $_smarty_tpl->tpl_vars['con_tel']->value;?>
" />&nbsp;&nbsp;（必填）</td>
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

<!-- 新秀 --><?php }} ?>