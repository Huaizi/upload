<?php /* Smarty version Smarty-3.1.3, created on 2018-01-13 20:39:26
         compiled from "templates/default/index\module\user\order_sheet.php" */ ?>
<?php /*%%SmartyHeaderCode:43595a59fdfedbd946-86909204%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bd9bd6f53bdcf55365a2a008e191d00cfebf9c3' => 
    array (
      0 => 'templates/default/index\\module\\user\\order_sheet.php',
      1 => 1447620323,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43595a59fdfedbd946-86909204',
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
  'unifunc' => 'content_5a59fdfef36c4',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a59fdfef36c4')) {function content_5a59fdfef36c4($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\phpStudy\WWW\upload\smarty\plugins\modifier.date_format.php';
?>
<div class="block">
	<div class="head"><span>我的订单</span></div>
	<div class="main">
		<table class="table">
			<tr class="c">
				<td><b>订单号</b></td>
				<td><b>下单时间</b></td>
				<td><b>订单总金额</b></td>
				<td><b>订单状态</b></td>
				<td width="110px"><b>操作</b></td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<tr class="c">
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['sn'];?>
</td>
				<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['add_time'],"%Y-%m-%d %H:%M:%S");?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['price_total'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['status_name'];?>
</td>
				<td>
					<a href="<?php echo url(array('channel'=>'user','mod'=>'order_info','id'=>$_smarty_tpl->tpl_vars['item']->value['id']),$_smarty_tpl);?>
">[查看]</a>
					<!--&nbsp;&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">[取消]</a>-->
				</td>
			</tr>
			<?php } ?>
		</table>
		<?php $_smarty_tpl->tpl_vars['prefix'] = new Smarty_variable('user/mod-order_sheet', null, 0);?>
		<?php echo $_smarty_tpl->getSubTemplate ("module/page_link.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('page'=>$_smarty_tpl->tpl_vars['global']->value['page']), 0);?>
		
	</div>
</div>
<!-- 新秀 --><?php }} ?>