
<?php /*%%SmartyHeaderCode:302965a59d814b6db88-36646212%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b888ffdb5bdc9d42d15360846a6434e57e60cfe' => 
    array (
      0 => 'templates/default/admin\\module\\right.php',
      1 => 1446190050,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '302965a59d814b6db88-36646212',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'admin_power' => 0,
    'global' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5a59d814decca',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a59d814decca')) {function content_5a59d814decca($_smarty_tpl) {?>
<div id="right">
<?php if ($_smarty_tpl->tpl_vars['admin_power']->value){?>
	<div id="core">
		<?php echo $_smarty_tpl->getSubTemplate ((((('module/').($_smarty_tpl->tpl_vars['global']->value['original'])).('/')).($_smarty_tpl->tpl_vars['global']->value['mod'])).('.php'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
<?php }else{ ?>
	<div class="block">
		<div class="head"><span>系统信息</span></div>
		<div class="main">
			<div id="info">
				<div class="main">
					<div class="txt">对不起，您的权限不足，无法操作当前页面</div>
				</div>
			</div>
		</div>
	</div>
<?php }?>
</div><?php }} ?>