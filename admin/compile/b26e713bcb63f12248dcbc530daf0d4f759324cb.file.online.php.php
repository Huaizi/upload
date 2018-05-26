<?php /* Smarty version Smarty-3.1.3, created on 2018-01-14 09:24:26
         compiled from "templates/default/admin\module\service\online.php" */ ?>
<?php /*%%SmartyHeaderCode:308795a5ab14ac2be86-91635594%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b26e713bcb63f12248dcbc530daf0d4f759324cb' => 
    array (
      0 => 'templates/default/admin\\module\\service\\online.php',
      1 => 1447355403,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '308795a5ab14ac2be86-91635594',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'global' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5a5ab14acd6d8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5ab14acd6d8')) {function content_5a5ab14acd6d8($_smarty_tpl) {?>
<div class="block">
	<div class="head"><span>在线客服</span></div>
	<div class="main">
		<form id="form_edit_online" method="post" action="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel']),$_smarty_tpl);?>
">
			<input name="cmd" type="hidden" value="edit_online" />
			<table class="table">
				<tr>
					<td width="100px">获取代码：</td>
					<td>
						请登录&nbsp;<a href="http://shang.qq.com/" target="_blank">http://shang.qq.com/</a>&nbsp;获取QQ在线客服代码<br />
					</td>
				</tr>
				<tr>
					<td>客服代码：</td>
					<td>
						<div class="editor">
							<?php echo $_smarty_tpl->getSubTemplate ('module/editor.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

						</div>
					</td>
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
	<div class="head"><span>使用说明</span></div>
	<div class="main content">
		1、填写客服代码之前先把编辑器切换到“源代码”模式。<br />
		2、此处可填写QQ、阿里旺旺等多种在线客服代码，但请注意所填写的代码是否会影响前台页面布局。<br />
		3、建议在“源代码”模式填写代码之后，切换回“所见即所得”模式并多敲入一个空格然后才提交，否则可能会提交失败。
	</div>
</div>
<!-------------------------- BOX -------------------------->
<div class="box" id="show_html">
	<div class="close" onclick="hide_box('show_html')">关闭</div>
	<div class="main">请点击编辑器左上角的“HTML”小按钮切换到源代码模式</div>
</div>
<!-------------------------- BOX -------------------------->

<script language="javascript">
	show_box('show_html',430,95);
</script>
<?php }} ?>