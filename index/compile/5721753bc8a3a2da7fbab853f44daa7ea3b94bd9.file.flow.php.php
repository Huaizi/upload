<?php /* Smarty version Smarty-3.1.3, created on 2018-01-13 22:47:50
         compiled from "templates/default/index\flow.php" */ ?>
<?php /*%%SmartyHeaderCode:99005a5a1c168824d7-23642757%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5721753bc8a3a2da7fbab853f44daa7ea3b94bd9' => 
    array (
      0 => 'templates/default/index\\flow.php',
      1 => 1433348044,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '99005a5a1c168824d7-23642757',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'keywords' => 0,
    'describe' => 0,
    'version' => 0,
    'site_title' => 0,
    'S_TPL_PATH' => 0,
    'global' => 0,
    'show_login' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5a5a1c1698e2c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5a1c1698e2c')) {function content_5a5a1c1698e2c($_smarty_tpl) {?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
	<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['describe']->value;?>
" />
	<meta name="version" content="<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
" />
	<title><?php echo $_smarty_tpl->tpl_vars['site_title']->value;?>
</title>
	<link href="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
css/index.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
js/index.js"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
js/jquery-1.11.2.min.js"></script>
	<!--[if IE 6]>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
js/DD_belatedPNG_0.0.8a.js"></script>
	<script type="text/javascript">
		DD_belatedPNG.fix("*");
	</script>
	<![endif]-->
</head>
<body>
	<?php echo $_smarty_tpl->getSubTemplate ("module/header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<div id="main" class="user_center">
		<div class="section_2">
			<?php echo $_smarty_tpl->getSubTemplate ("module/goods_tree.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		</div>
		<?php if ($_smarty_tpl->tpl_vars['global']->value['step']==''||$_smarty_tpl->tpl_vars['global']->value['step']=='cart'){?>
			<?php echo $_smarty_tpl->getSubTemplate ("module/flow_main.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php }elseif($_smarty_tpl->tpl_vars['global']->value['step']=='consignee'){?>
			<?php if ($_smarty_tpl->tpl_vars['show_login']->value==1){?>
				<?php echo $_smarty_tpl->getSubTemplate ("module/flow_login.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<?php }else{ ?>
				<?php echo $_smarty_tpl->getSubTemplate ("module/flow_consignee.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<?php }?>
		<?php }elseif($_smarty_tpl->tpl_vars['global']->value['step']=='checkout'){?>
			<?php echo $_smarty_tpl->getSubTemplate ("module/flow_checkout.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php }elseif($_smarty_tpl->tpl_vars['global']->value['step']=='done'){?>
			<?php echo $_smarty_tpl->getSubTemplate ("module/flow_done.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php }?>
	</div>
	<?php echo $_smarty_tpl->getSubTemplate ("module/help.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate ("module/footer.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate ("module/service.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html>
<?php }} ?>