<?php /* Smarty version Smarty-3.1.3, created on 2018-06-12 23:34:33
         compiled from "templates/default/index\module\news.php" */ ?>
<?php /*%%SmartyHeaderCode:139245a59d67cc1dc69-61897747%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '070312f30a0e9b4cd36613961e26b5744c023831' => 
    array (
      0 => 'templates/default/index\\module\\news.php',
      1 => 1528817640,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '139245a59d67cc1dc69-61897747',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5a59d67cc95ca',
  'variables' => 
  array (
    'notice' => 0,
    'item' => 0,
    'news' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a59d67cc95ca')) {function content_5a59d67cc95ca($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\phpStudy\WWW\upload\smarty\plugins\modifier.date_format.php';
?>
<div class="art_list">
	<div class="inner">
		<div class="head">
			<div class="tag on">公&nbsp;告</div>
			<div class="tag">快&nbsp;报</div>
			<div class="clear"></div>
		</div>
		<div class="main">
			<div class="tag tag_1">
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notice']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				<div><a href="<?php echo url(array('channel'=>'article','id'=>$_smarty_tpl->tpl_vars['item']->value['id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['short_title'];?>
</a><span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['add_time'],"%m-%d");?>
</span></div>
				<?php } ?>
			</div>
			<div class="tag tag_2" style="display:none">
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['news']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				<div><a href="<?php echo url(array('channel'=>'article','id'=>$_smarty_tpl->tpl_vars['item']->value['id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['short_title'];?>
</a><span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['add_time'],"%m-%d");?>
</span></div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>

<script language="javascript">
	$(".art_list .head .tag").mousemove(function(){
		$(".art_list .head .tag").removeClass("on");
		$(this).addClass("on");
		$(".art_list .main .tag").hide();
		$(".art_list .main .tag_" + ($(this).index() + 1)).show();
	});
</script>

<!-- 新秀 -->
<?php }} ?>