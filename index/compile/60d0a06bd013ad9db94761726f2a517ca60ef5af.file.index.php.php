<?php /* Smarty version Smarty-3.1.3, created on 2018-01-13 17:50:52
         compiled from "templates/default/index\index.php" */ ?>
<?php /*%%SmartyHeaderCode:54035a59d67c742ba4-22861718%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60d0a06bd013ad9db94761726f2a517ca60ef5af' => 
    array (
      0 => 'templates/default/index\\index.php',
      1 => 1447431908,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54035a59d67c742ba4-22861718',
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
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5a59d67c971aa',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a59d67c971aa')) {function content_5a59d67c971aa($_smarty_tpl) {?>
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
	<title>完美订单系统
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

	<div id="main">
		<div class="section_1">
			<?php echo $_smarty_tpl->getSubTemplate ("module/goods_tree.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<?php echo $_smarty_tpl->getSubTemplate ("module/focus.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<div class="right">
				<div class="ad_1"><?php echo $_smarty_tpl->getSubTemplate ("module/ad.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('aid'=>1), 0);?>
</div>
				<div class="ad_2"><?php echo $_smarty_tpl->getSubTemplate ("module/ad.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('aid'=>2), 0);?>
</div>
				<?php echo $_smarty_tpl->getSubTemplate ("module/news.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>
		</div>
		<?php echo $_smarty_tpl->getSubTemplate ("module/promotion.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php echo $_smarty_tpl->getSubTemplate ("module/best_goods.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php echo $_smarty_tpl->getSubTemplate ("module/new_goods.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php echo $_smarty_tpl->getSubTemplate ("module/hot_goods.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php echo $_smarty_tpl->getSubTemplate ("module/goods_list.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
	<?php echo $_smarty_tpl->getSubTemplate ("module/help.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate ("module/footer.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate ("module/service.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html><?php }} ?>