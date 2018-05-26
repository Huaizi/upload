<?php /* Smarty version Smarty-3.1.3, created on 2018-01-14 09:30:42
         compiled from "templates/default/admin\module\goods\edit.php" */ ?>
<?php /*%%SmartyHeaderCode:196025a5ab2c25d7380-39283375%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83c20fa8aef13c90f88a8be4479bcc250444cbb5' => 
    array (
      0 => 'templates/default/admin\\module\\goods\\edit.php',
      1 => 1447343308,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '196025a5ab2c25d7380-39283375',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'global' => 0,
    'goods' => 0,
    'cat_list' => 0,
    'item' => 0,
    'upl_index' => 0,
    'upl_date' => 0,
    'x_img_mode' => 0,
    'brand' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5a5ab2c283f3d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5ab2c283f3d')) {function content_5a5ab2c283f3d($_smarty_tpl) {?>
<div class="block">
	<div class="head"><span>编辑商品</span></div>
	<div class="main">
		<form id="form_edit_goods" method="post" action="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel']),$_smarty_tpl);?>
">
			<input name="cmd" type="hidden" value="add_or_edit_goods" />
			<input name="v_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['global']->value['id'];?>
" />
			<table class="table">
				<tr>
					<td width="100px">商品名称：</td>
					<td><input name="v_title" type="text" class="text" maxlength="200" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['title'];?>
" /></td>
				</tr>
				<tr>
					<td>商品编号：</td>
					<td><input name="v_sn" type="text" class="text" maxlength="200" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['sn'];?>
" /></td>
				</tr>
				<tr>
					<td>商品分类：</td>
					<td>
						<select name="v_cat_id">
							<option value="0">请选择</option>
							<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cat_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['cat_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['cat_id']==$_smarty_tpl->tpl_vars['goods']->value['cat_id']){?>selected="selected"<?php }?>><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['name'] = 'loop';
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['item']->value['grade']-1) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total']);
?>&nbsp;<?php endfor; endif; ?><?php echo $_smarty_tpl->tpl_vars['item']->value['cat_name'];?>
</option>
							<?php } ?>
						</select>
					</td>
				</tr>
				<?php $_smarty_tpl->tpl_vars['upl_index'] = new Smarty_variable(1, null, 0);?>
				<tr>
					<td>商品主图：</td>
					<td>
						<span id="show_pic_<?php echo $_smarty_tpl->tpl_vars['upl_index']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['goods']->value['img'];?>
" height="100px" /></span>
						<input class="button" type="button" onClick="before_upload('upl_img','form_upl_img','images/<?php echo $_smarty_tpl->tpl_vars['global']->value['channel'];?>
/<?php echo $_smarty_tpl->tpl_vars['upl_date']->value;?>
/','show_pic_<?php echo $_smarty_tpl->tpl_vars['upl_index']->value;?>
','pic_path_<?php echo $_smarty_tpl->tpl_vars['upl_index']->value;?>
',1)" value="上传图片" />
						<input name="pic_path" id="pic_path_<?php echo $_smarty_tpl->tpl_vars['upl_index']->value;?>
" type="hidden" maxlength="250" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['img'];?>
" />
					</td>
				</tr>
				<?php if ($_smarty_tpl->tpl_vars['x_img_mode']->value==3){?>
				<?php $_smarty_tpl->tpl_vars['upl_index'] = new Smarty_variable(3, null, 0);?>
				<tr>
					<td>商品缩略图：</td>
					<td>
						<span id="show_pic_<?php echo $_smarty_tpl->tpl_vars['upl_index']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['goods']->value['x_img'];?>
" height="100px" /></span>
						<input class="button" type="button" onClick="before_upload('upl_img','form_upl_img','images/<?php echo $_smarty_tpl->tpl_vars['global']->value['channel'];?>
/<?php echo $_smarty_tpl->tpl_vars['upl_date']->value;?>
/','show_pic_<?php echo $_smarty_tpl->tpl_vars['upl_index']->value;?>
','pic_path_<?php echo $_smarty_tpl->tpl_vars['upl_index']->value;?>
',1)" value="上传图片" />
						<input name="x_img" id="pic_path_<?php echo $_smarty_tpl->tpl_vars['upl_index']->value;?>
" type="hidden" maxlength="250" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['x_img'];?>
" />
					</td>
				</tr>
				<?php }?>
				<?php $_smarty_tpl->tpl_vars['upl_index'] = new Smarty_variable(2, null, 0);?>
				<tr>
					<td>商品副图：</td>
					<td>
						<input class="button" type="button" onClick="before_upload('upl_img','form_upl_img','images/<?php echo $_smarty_tpl->tpl_vars['global']->value['channel'];?>
/<?php echo $_smarty_tpl->tpl_vars['upl_date']->value;?>
/','','more_img',0)" value="上传图片" />&nbsp;&nbsp;此处可以上传多张图片
						<div style="padding:5px 0 0 0;"><input name="more_img" id="more_img" type="text" class="text" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['more_img'];?>
" /></div>
					</td>
				</tr>
				<tr>
					<td>市场价：</td>
					<td><input name="v_market_price" type="text" class="text" maxlength="200" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['market_price'];?>
" />&nbsp;元</td>
				</tr>
				<tr>
					<td>本店价：</td>
					<td><input name="v_shop_price" type="text" class="text" maxlength="200" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['shop_price'];?>
" />&nbsp;元</td>
				</tr>
				<tr>
					<td>商品品牌：</td>
					<td>
						<select name="v_brand_id">
							<option value="0">请选择</option>
							<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['brand']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['id']==$_smarty_tpl->tpl_vars['goods']->value['brand_id']){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</option>
							<?php } ?>
						</select>
					</td>
				</tr>
				<tr>
					<td>库存量：</td>
					<td><input name="v_number" type="text" class="text" maxlength="200" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['number'];?>
" />&nbsp;件</td>
				</tr>
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goods']->value['att']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
：</td>
					<td><input name="<?php echo $_smarty_tpl->tpl_vars['item']->value['code'];?>
" type="text" class="text" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['value'];?>
" /></td>
				</tr>
				<?php } ?>
				<tr>
					<td>商品描述：</td>
					<td>
						<div class="editor">
							<?php echo $_smarty_tpl->getSubTemplate ('module/editor.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

						</div>
					</td>
				</tr>
				<tr>
					<td>页面关键字：</td>
					<td><input class="text" name="v_keywords" type="text" maxlength="200" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['keywords'];?>
" />
					</td>
				</tr>
				<tr>
					<td>页面描述：</td>
					<td><input class="text" name="v_description" type="text" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['description'];?>
" /></td>
				</tr>
				<tr>
					<td colspan="2">
						<div class="bt_row">
							<input class="button" type="submit" value="提交" />
							<input class="button" type="button" onclick="go_back()" value="返回" />
						</div>
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
<iframe class="deal" name="deal"></iframe>
<!-------------------------- BOX -------------------------->
<?php echo $_smarty_tpl->getSubTemplate ('module/goods/box.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!-------------------------- BOX --------------------------><?php }} ?>