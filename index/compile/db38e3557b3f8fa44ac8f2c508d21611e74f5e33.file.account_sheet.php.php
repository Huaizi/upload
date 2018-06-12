<?php /* Smarty version Smarty-3.1.3, created on 2018-01-13 22:49:01
         compiled from "templates/default/index\module\user\account_sheet.php" */ ?>
<?php /*%%SmartyHeaderCode:117615a5a1c5d63c0b1-92917189%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db38e3557b3f8fa44ac8f2c508d21611e74f5e33' => 
    array (
      0 => 'templates/default/index\\module\\user\\account_sheet.php',
      1 => 1447439558,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117615a5a1c5d63c0b1-92917189',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'account' => 0,
    'item' => 0,
    'global' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5a5a1c5d787b3',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5a1c5d787b3')) {function content_5a5a1c5d787b3($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\phpStudy\WWW\upload\smarty\plugins\modifier.date_format.php';
?>
<div class="block">
	<div class="head"><span>在线充值</span></div>
	<div class="main">
		<form id="form_pay" method="post" action="<?php echo url(array('channel'=>'pay','pay_type'=>'alipay_direct','pay_api'=>'alipayapi'),$_smarty_tpl);?>
" target="_blank">
			<table class="table">
				<tr>
					<td class="l">充值金额：</td>
					<td><input class="text" name="WIDtotal_fee" type="text" value="" />&nbsp;元</td>
				</tr>
				<tr>
					<td class="l">备注：</td>
					<td><input class="text" name="WIDbody" type="text" value="" /></td>
				</tr>
				<tr>
					<td colspan="2">
						<div class="bt_row">
							<input class="button" type="submit" value="提交" />
						</div>
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
<div class="space"></div>
<div class="block">
	<div class="head"><span>财务记录</span></div>
	<div class="main">
		<table class="table sheet">
			<tr class="h">
				<td width="125px">流水号</td>
				<td>金额（元）</td>
				<td width="125px">产生时间</td>
				<td width="125px">完成时间</td>
				<td width="60px">状态</td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['account']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['sn'];?>
</td>
				<td><?php if ($_smarty_tpl->tpl_vars['item']->value['increase']){?>+<?php }else{ ?>-<?php }?> <?php echo $_smarty_tpl->tpl_vars['item']->value['amount'];?>
</td>
				<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['add_time'],"%Y-%m-%d %H:%M:%S");?>
</td>
				<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['edit_time'],"%Y-%m-%d %H:%M:%S");?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['status_name'];?>
</td>
			</tr>
			<?php } ?>
		</table>
		<?php $_smarty_tpl->tpl_vars['prefix'] = new Smarty_variable('user/mod-account_sheet', null, 0);?>
		<?php echo $_smarty_tpl->getSubTemplate ("module/page_link.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('page'=>$_smarty_tpl->tpl_vars['global']->value['page']), 0);?>
		
	</div>
</div>
<?php }} ?>