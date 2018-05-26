
<?php /*%%SmartyHeaderCode:81965a59d82984eb64-89400064%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e00758e0a0ebed207e3e9796b4c05493c0f6c469' => 
    array (
      0 => 'templates/default/admin\\module\\business\\order_sheet.php',
      1 => 1447620289,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '81965a59d82984eb64-89400064',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'orders' => 0,
    'item' => 0,
    'global' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5a59d829d8971',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a59d829d8971')) {function content_5a59d829d8971($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\phpStudy\WWW\upload\smarty\plugins\modifier.date_format.php';
?>
<div class="block">
	<div class="head"><span>订单列表</span></div>
	<div class="main">
		<table class="table sheet">
			<tr class="h">
				<td width="130px">订单号</td>
				<td>收货人</td>
				<td width="70px">总金额</td>
				<td width="140px">下单时间</td>
				<td width="80px">订单状态</td>
				<td width="100px">操作</td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['sn'];?>
</td>
				<td>
				<?php echo $_smarty_tpl->tpl_vars['item']->value['consignee'];?>
&nbsp;-&nbsp;电话：<?php echo $_smarty_tpl->tpl_vars['item']->value['tel'];?>
<br />
				<?php echo $_smarty_tpl->tpl_vars['item']->value['address'];?>

				</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['price_total'];?>
</td>
				<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['add_time'],"%Y-%m-%d %H:%M:%S");?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['status_name'];?>
</td>
				<td>
					<a href="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel'],'mod'=>'order_info','id'=>$_smarty_tpl->tpl_vars['item']->value['id']),$_smarty_tpl);?>
">[查看]</a>
					<a onclick="del('orders|<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
')">[删除]</a>
				</td>
			</tr>
			<?php } ?>
			<tr>
				<td colspan="6">
					<?php $_smarty_tpl->tpl_vars['prefix'] = new Smarty_variable(($_smarty_tpl->tpl_vars['global']->value['channel']).('/mod-order_sheet'), null, 0);?>
					<?php echo $_smarty_tpl->getSubTemplate ("module/page_link.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('page'=>$_smarty_tpl->tpl_vars['global']->value['page']), 0);?>

				</td>
			</tr>
		</table>
	</div>
</div>
<?php }} ?>