<?php /* Smarty version Smarty-3.1.3, created on 2018-01-13 17:50:52
         compiled from "templates/default/index\module\goods_list.php" */ ?>
<?php /*%%SmartyHeaderCode:114655a59d67cdd6172-06247046%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbb834d1c0da90597da72acb4d45955eeaffb902' => 
    array (
      0 => 'templates/default/index\\module\\goods_list.php',
      1 => 1447641615,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114655a59d67cdd6172-06247046',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'best_goo_cat' => 0,
    'cat' => 0,
    'goods_list' => 0,
    'item' => 0,
    'S_FRONT_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5a59d67ce1e63',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a59d67ce1e63')) {function content_5a59d67ce1e63($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['best_goo_cat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value){
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
<div class="img_list" style="padding:0 0 20px 0">
	<div class="head">
		<div class="name"><?php echo $_smarty_tpl->tpl_vars['cat']->value['cat_name'];?>
</div>
		<a class="more" href="<?php echo url(array('channel'=>'goods','cat'=>$_smarty_tpl->tpl_vars['cat']->value['cat_id']),$_smarty_tpl);?>
">查看更多</a>
	</div>
	<div class="main">
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goods_list']->value[$_smarty_tpl->tpl_vars['cat']->value['cat_id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
		<div class="unit">
			<div class="inner">
				<div class="img">
					<table>
						<tr>
							<td>
								<a href="<?php echo url(array('channel'=>'goods','id'=>$_smarty_tpl->tpl_vars['item']->value['id']),$_smarty_tpl);?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['S_FRONT_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['item']->value['x_img'];?>
" onload="picresize(this,280,320)"/></a>
							</td>
						</tr>
					</table>
				</div>
				<div class="info">
					<div class="title"><a href="<?php echo url(array('channel'=>'goods','id'=>$_smarty_tpl->tpl_vars['item']->value['id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['short_title'];?>
</a></div>
					<div class="price">
						<span class="shop_price">￥<span><?php echo sprintf('%.1f',$_smarty_tpl->tpl_vars['item']->value['shop_price']);?>
</span></span>
						<span class="market_price">￥<?php echo sprintf('%.1f',$_smarty_tpl->tpl_vars['item']->value['market_price']);?>
</span>
					</div>
				</div>
			</div>
		</div>
		<?php } ?>
		<div class="clear"></div>
	</div>
</div>
<?php } ?>

<script language="javascript">
	$(".img_list .unit .inner").mousemove(function(){
		$(this).addClass("on");
	});
	$(".img_list .unit .inner").mouseout(function(){
		$(this).removeClass("on");
	});
</script>

<!-- 新秀 --><?php }} ?>