<?php /* Smarty version Smarty-3.1.3, created on 2018-01-13 17:50:52
         compiled from "templates/default/index\module\service.php" */ ?>
<?php /*%%SmartyHeaderCode:281565a59d67cef2fa4-73164917%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '621b459cacdc28e79302a8ad50807fb045baf3f1' => 
    array (
      0 => 'templates/default/index\\module\\service.php',
      1 => 1431017861,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '281565a59d67cef2fa4-73164917',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'service_code' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5a59d67cf028c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a59d67cf028c')) {function content_5a59d67cf028c($_smarty_tpl) {?>
<div id="service">
	<div id="service_img" onmousemove="show_service(1)"></div>
	<div class="main">
		<div class="in">
			<?php echo $_smarty_tpl->tpl_vars['service_code']->value;?>

		</div>
	</div>
</div>

<script language="javascript">
	function show_service(val)
	{
		if(val == 1 && document.getElementById("service").style.width == "26px")
		{
			document.getElementById("service").style.width = "126px";
			document.getElementById("service").style.backgroundColor = "#ff4883";
		}else{
			document.getElementById("service").style.width = "26px";
			document.getElementById("service").style.backgroundColor = "transparent";
		}
	}
	window.onscroll = function()
	{
		show_service(0);
	}
</script>

<!-- 新秀 --><?php }} ?>