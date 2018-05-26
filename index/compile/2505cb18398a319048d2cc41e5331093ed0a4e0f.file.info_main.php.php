<?php /* Smarty version Smarty-3.1.3, created on 2018-01-13 20:32:20
         compiled from "templates/default/index\module\info_main.php" */ ?>
<?php /*%%SmartyHeaderCode:240075a59fc54b26107-70021605%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2505cb18398a319048d2cc41e5331093ed0a4e0f' => 
    array (
      0 => 'templates/default/index\\module\\info_main.php',
      1 => 1447256561,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '240075a59fc54b26107-70021605',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info_text' => 0,
    'link_href' => 0,
    'link_text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5a59fc54b3af5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a59fc54b3af5')) {function content_5a59fc54b3af5($_smarty_tpl) {?>
<div class="block" id="info">
	<div class="head"><span>系统信息</span></div>
	<div class="main">
		<div><?php echo $_smarty_tpl->tpl_vars['info_text']->value;?>
</div>
		<a href="<?php echo $_smarty_tpl->tpl_vars['link_href']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['link_text']->value;?>
</a>
	</div>
</div>
<script language="javascript">
	interval = setInterval("document.location.href = '<?php echo $_smarty_tpl->tpl_vars['link_href']->value;?>
'",3000);
</script><?php }} ?>