<?php /* Smarty version Smarty-3.1.3, created on 2018-01-13 20:45:40
         compiled from "templates/default/admin\module\goods\box.php" */ ?>
<?php /*%%SmartyHeaderCode:160635a59ff74c2c994-75052004%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9bf82f2cae6cb8f330d9e6488f0b38c135af69de' => 
    array (
      0 => 'templates/default/admin\\module\\goods\\box.php',
      1 => 1447343391,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '160635a59ff74c2c994-75052004',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5a59ff74c3bf2',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a59ff74c3bf2')) {function content_5a59ff74c3bf2($_smarty_tpl) {?>
<div class="box" id="upl_img">
	<div class="head">
		<div class="title">上传图片</div>
		<div class="close" onClick="hide_box('upl_img')">关闭</div>
	</div>
	<form id="form_upl_img" method="post" enctype="multipart/form-data" action="<?php echo url(array('channel'=>'goods'),$_smarty_tpl);?>
" target="deal">
		<input name="cmd" type="hidden" value="upload" />
		<input name="dir" type="hidden" value="" />
		<input name="file" type="hidden" value="" />
		<input name="reduce" type="hidden" value="" />
		<input name="show_tag" type="hidden" value="" />
		<input name="form_tag" type="hidden" value="" />
		<table>
			<tr>
				<td><input name="file_path" type="file" onChange="do_upload('form_upl_img',1)" /></td>
			</tr>
		</table>
	</form>
</div><?php }} ?>