<?php /* Smarty version Smarty-3.1.3, created on 2018-01-13 19:05:12
         compiled from "templates/default/index\module\search_main.php" */ ?>
<?php /*%%SmartyHeaderCode:254695a59e7e87ff839-05416006%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3021e69f0ef3db11d5de04d8f25a3e74b5653092' => 
    array (
      0 => 'templates/default/index\\module\\search_main.php',
      1 => 1447641653,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '254695a59e7e87ff839-05416006',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search' => 0,
    'item' => 0,
    'S_FRONT_URL' => 0,
    'global' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5a59e7e886fc3',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a59e7e886fc3')) {function content_5a59e7e886fc3($_smarty_tpl) {?>
<div class="img_list">
	<div class="main">
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['search']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
		<?php if (!$_smarty_tpl->tpl_vars['search']->value){?><div class="not_found">暂无内容</div><?php }?>
		<div class="clear"></div>
	</div>
</div>
<?php $_smarty_tpl->tpl_vars['prefix'] = new Smarty_variable(((('search/cat-').($_smarty_tpl->tpl_vars['global']->value['cat'])).('/key-')).($_smarty_tpl->tpl_vars['global']->value['key']), null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("module/page_link.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('page'=>$_smarty_tpl->tpl_vars['global']->value['page']), 0);?>

<!-- 新秀 -->
<?php }} ?>