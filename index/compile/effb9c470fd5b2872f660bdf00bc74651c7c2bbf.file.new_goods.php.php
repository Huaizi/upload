<?php /* Smarty version Smarty-3.1.3, created on 2018-01-13 17:50:52
         compiled from "templates/default/index\module\new_goods.php" */ ?>
<?php /*%%SmartyHeaderCode:32195a59d67cd3f826-70457119%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'effb9c470fd5b2872f660bdf00bc74651c7c2bbf' => 
    array (
      0 => 'templates/default/index\\module\\new_goods.php',
      1 => 1447641653,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32195a59d67cd3f826-70457119',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'new_goods' => 0,
    'item' => 0,
    'S_FRONT_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5a59d67cd7722',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a59d67cd7722')) {function content_5a59d67cd7722($_smarty_tpl) {?>
<div class="img_list" style="padding:0 0 20px 0">
	<div class="head">
		<div class="name">新品上市</div>
		<a class="more" href="<?php echo url(array('channel'=>'goods','new'=>1),$_smarty_tpl);?>
">查看更多</a>
	</div>
	<div class="main">
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['new_goods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
<!-- 新秀 --><?php }} ?>