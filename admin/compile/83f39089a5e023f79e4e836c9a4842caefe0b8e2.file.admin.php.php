
<?php /*%%SmartyHeaderCode:195895a59d7ee542ee0-23341462%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83f39089a5e023f79e4e836c9a4842caefe0b8e2' => 
    array (
      0 => 'templates/default/admin\\admin.php',
      1 => 1446189498,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '195895a59d7ee542ee0-23341462',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'version' => 0,
    'site_title' => 0,
    'S_TPL_PATH' => 0,
    'global' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5a59d7ee60133',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a59d7ee60133')) {function content_5a59d7ee60133($_smarty_tpl) {?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta name="version" content="<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
" />
	<title>完美订单系统
</title>
	<link href="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
css/admin.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
js/admin.js"></script>
</head>
<body>
<?php if ($_smarty_tpl->tpl_vars['global']->value['admin_id']!=0){?>
	<?php echo $_smarty_tpl->getSubTemplate ("module/header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<div id="main">
		<?php echo $_smarty_tpl->getSubTemplate ("module/left.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php echo $_smarty_tpl->getSubTemplate ("module/right.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div class="clear"></div>
	</div>
<?php }else{ ?>
	<?php echo $_smarty_tpl->getSubTemplate ("module/login.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?>
</body>
</html><?php }} ?>