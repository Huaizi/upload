<?php /* Smarty version Smarty-3.1.3, created on 2018-01-13 20:51:20
         compiled from "templates/default/admin\module\basic\account_sheet.php" */ ?>
<?php /*%%SmartyHeaderCode:34685a5a00c83ab661-44563183%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '676f7d44b5cc3db76eab6f7ed0b5998e211208f9' => 
    array (
      0 => 'templates/default/admin\\module\\basic\\account_sheet.php',
      1 => 1447322824,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '34685a5a00c83ab661-44563183',
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
  'unifunc' => 'content_5a5a00c874f0a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5a00c874f0a')) {function content_5a5a00c874f0a($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\phpStudy\WWW\upload\smarty\plugins\modifier.date_format.php';
?>
<div class="block">
	<div class="head"><span>用户财务记录</span></div>
	<div class="main">
		<table class="table sheet">
			<tr class="h">
				<td>用户名</td>
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
				<td><?php if ($_smarty_tpl->tpl_vars['item']->value['user_name']){?><a href="<?php echo url(array('channel'=>'service','mod'=>'user_edit','id'=>$_smarty_tpl->tpl_vars['item']->value['user_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['user_name'];?>
</a><?php }else{ ?>无<?php }?></td>
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
			<tr>
				<td colspan="6">
					<?php $_smarty_tpl->tpl_vars['prefix'] = new Smarty_variable(($_smarty_tpl->tpl_vars['global']->value['channel']).('/mod-account_sheet'), null, 0);?>
					<?php echo $_smarty_tpl->getSubTemplate ("module/page_link.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('page'=>$_smarty_tpl->tpl_vars['global']->value['page']), 0);?>

				</td>
			</tr>
		</table>
	</div>
</div><?php }} ?>