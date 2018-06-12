<?php /* Smarty version Smarty-3.1.3, created on 2018-05-29 18:09:59
         compiled from "templates/default/index\module\user\booking_sheet.php" */ ?>
<?php /*%%SmartyHeaderCode:41965b0d26f76d7920-41334048%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6cdad226adddec2dc5df91a02b82762a8fb49c7d' => 
    array (
      0 => 'templates/default/index\\module\\user\\booking_sheet.php',
      1 => 1447352955,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '41965b0d26f76d7920-41334048',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'booking' => 0,
    'item' => 0,
    'global' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5b0d26f793e9c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b0d26f793e9c')) {function content_5b0d26f793e9c($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\phpStudy\WWW\upload\smarty\plugins\modifier.date_format.php';
?>
<div class="block">
	<div class="head"><span>缺货登记</span></div>
	<div class="main">
		<table class="table">
			<tr class="c">
				<td><b>订购商品名</b></td>
				<td><b>订购数量</b></td>
				<td><b>登记时间</b></td>
				<td width="150"><b>处理备注</b></td>
				<td width="80px"><b>操作</b></td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['booking']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<tr class="c">
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['goods_title'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['number'];?>
</td>
				<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['add_time'],"%Y-%m-%d %H:%M:%S");?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['note'];?>
</td>
				<td><a class="booking" href="<?php echo url(array('entrance'=>$_smarty_tpl->tpl_vars['global']->value['entrance'],'channel'=>'user','mod'=>'booking_info','id'=>$_smarty_tpl->tpl_vars['item']->value['id']),$_smarty_tpl);?>
">[查看详情]</a>&nbsp;</td>
			</tr>
			<?php } ?>
		</table>
		<?php $_smarty_tpl->tpl_vars['prefix'] = new Smarty_variable('user/mod-booking_sheet', null, 0);?>
		<?php echo $_smarty_tpl->getSubTemplate ("module/page_link.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('page'=>$_smarty_tpl->tpl_vars['global']->value['page']), 0);?>
		
	</div>
</div>
<!-- 新秀 --><?php }} ?>