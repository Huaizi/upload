<?php /* Smarty version Smarty-3.1.3, created on 2018-06-12 23:34:33
         compiled from "templates/default/index\module\goods_tree.php" */ ?>
<?php /*%%SmartyHeaderCode:318895a59d67cb729b4-06658798%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6083629d1d798101649a847ac92025a6a963bd20' => 
    array (
      0 => 'templates/default/index\\module\\goods_tree.php',
      1 => 1528817649,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '318895a59d67cb729b4-06658798',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5a59d67cbbd8c',
  'variables' => 
  array (
    'global' => 0,
    'goods_tree' => 0,
    'item' => 0,
    'count' => 0,
    'item_2' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a59d67cbbd8c')) {function content_5a59d67cbbd8c($_smarty_tpl) {?>
<div class="goods_tree<?php if ($_smarty_tpl->tpl_vars['global']->value['channel']!='index'){?> goods_tree_2<?php }?>">
	<div class="inner">
		<?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable(0, null, 0);?>
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goods_tree']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['item']->value['grade']==1&&$_smarty_tpl->tpl_vars['count']->value<14){?>
		<?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable($_smarty_tpl->tpl_vars['count']->value+1, null, 0);?>
		<div class="unit">
			<div class="cat_1"><a href="<?php echo url(array('channel'=>'goods','cat'=>$_smarty_tpl->tpl_vars['item']->value['id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></div>
			<div class="cat_2">
				<?php  $_smarty_tpl->tpl_vars['item_2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item_2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goods_tree']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item_2']->key => $_smarty_tpl->tpl_vars['item_2']->value){
$_smarty_tpl->tpl_vars['item_2']->_loop = true;
?>
				<?php if ($_smarty_tpl->tpl_vars['item']->value['id']==$_smarty_tpl->tpl_vars['item_2']->value['parent']){?>
				<a href="<?php echo url(array('channel'=>'goods','cat'=>$_smarty_tpl->tpl_vars['item_2']->value['id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item_2']->value['name'];?>
</a>
				<?php }?>
				<?php } ?>
			</div>
		</div>
		<?php }?>
		<?php } ?>
	</div>
</div>

<script language="javascript">
	$("#nav .cat_head,.goods_tree_2").mouseover(function(){
		$(".goods_tree_2").show();
	});
	$("#nav .cat_head,.goods_tree_2").mouseout(function(){
		$(".goods_tree_2").hide();
	});
	$(".goods_tree .unit").mouseover(function(){
		if($(this).children(".cat_2").html().indexOf("<") != -1)
		{
			$(this).addClass("on");
		}
	});
	$(".goods_tree .unit").mouseout(function(){
		if($(this).children(".cat_2").html().indexOf("<") != -1)
		{
			$(this).removeClass("on");
		}
	});
</script>

<!-- 新秀 -->
<?php }} ?>