<?php /* Smarty version Smarty-3.1.3, created on 2018-01-13 17:51:00
         compiled from "templates/default/index\module\page_link.php" */ ?>
<?php /*%%SmartyHeaderCode:305365a59d684641f39-60053765%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2842ea9d4e7d892313819f15e27665c4d444cd6' => 
    array (
      0 => 'templates/default/index\\module\\page_link.php',
      1 => 1430901580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '305365a59d684641f39-60053765',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_sum' => 0,
    'prefix' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5a59d6846f9f4',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a59d6846f9f4')) {function content_5a59d6846f9f4($_smarty_tpl) {?>
<div class="page_link">
	<div class="inner">
		<div class="inner_2">
			<?php if ($_smarty_tpl->tpl_vars['page_sum']->value!=1){?>
			<a href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>1),$_smarty_tpl);?>
">首页</a>
			<?php if ($_smarty_tpl->tpl_vars['page']->value-1>0){?><a href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value-1),$_smarty_tpl);?>
">上一页</a><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['page']->value-4>0){?><a class="num" href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value-4),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value-4;?>
</a><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['page']->value-3>0){?><a class="num" href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value-3),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value-3;?>
</a><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['page']->value-2>0){?><a class="num" href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value-2),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value-2;?>
</a><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['page']->value-1>0){?><a class="num" href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value-1),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
</a><?php }?>
			<a class="on" href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a>
			<?php if ($_smarty_tpl->tpl_vars['page']->value+1<=$_smarty_tpl->tpl_vars['page_sum']->value){?><a class="num" href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value+1),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
</a><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['page']->value+2<=$_smarty_tpl->tpl_vars['page_sum']->value){?><a class="num" href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value+2),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value+2;?>
</a><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['page']->value+3<=$_smarty_tpl->tpl_vars['page_sum']->value){?><a class="num" href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value+3),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value+3;?>
</a><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['page']->value+4<=$_smarty_tpl->tpl_vars['page_sum']->value){?><a class="num" href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value+4),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value+4;?>
</a><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['page']->value+1<=$_smarty_tpl->tpl_vars['page_sum']->value){?><a href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value+1),$_smarty_tpl);?>
">下一页</a><?php }?>
			<a href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page_sum']->value),$_smarty_tpl);?>
">末页</a>
			<?php }?>
		</div>
	</div>
	<div class="clear"></div>
</div>

<script language="javascript">
	$(".img_list .unit .inner").mousemove(function(){
		$(this).addClass("on");
	});
	$(".img_list .unit .inner").mouseout(function(){
		$(this).removeClass("on");
	});
</script>

<!-- 新秀 --><?php }} ?>