<?php /* Smarty version Smarty-3.1.3, created on 2018-05-29 18:10:01
         compiled from "templates/default/index\module\user\comment_sheet.php" */ ?>
<?php /*%%SmartyHeaderCode:89095b0d26f98b4985-09312265%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce7b39623542542343883e6daa7c38915d41ba70' => 
    array (
      0 => 'templates/default/index\\module\\user\\comment_sheet.php',
      1 => 1447618562,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89095b0d26f98b4985-09312265',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'comment' => 0,
    'item' => 0,
    'S_TPL_PATH' => 0,
    'global' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5b0d26f995995',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b0d26f995995')) {function content_5b0d26f995995($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\phpStudy\WWW\upload\smarty\plugins\modifier.date_format.php';
?>
<div class="block">
	<div class="head"><span>我的评论</span></div>
	<div class="main">
		<div class="mes_sheet">
			<ul>
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comment']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				<li>
					<table>
						<tr>
							<td height="30px">
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['name'] = 'loop';
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['item']->value['rank']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?><img src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
images/star.gif" /><?php endfor; endif; ?>&nbsp;&nbsp;
								<b>评论:</b><a href="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['item']->value['channel'],'id'=>$_smarty_tpl->tpl_vars['item']->value['page_id']),$_smarty_tpl);?>
" target="_blank">《<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
》</a>
								&nbsp;&nbsp;[<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['add_time'],"%Y-%m-%d %H:%M:%S");?>
]
							</td>
						</tr>
						<tr>
							<td><div class="txt"><?php echo $_smarty_tpl->tpl_vars['item']->value['text'];?>
</div></td>
						</tr>
						<?php if ($_smarty_tpl->tpl_vars['item']->value['reply']){?>
						<tr>
							<td><div class="reply"><span>管理员回复：</span><?php echo $_smarty_tpl->tpl_vars['item']->value['reply'];?>
</div></td>
						</tr>
						<?php }?>
					</table>
				</li>
				<?php } ?>
			</ul>
			<?php if (!$_smarty_tpl->tpl_vars['comment']->value){?><div class="not_found">暂无内容</div><?php }?>
		</div>
		<?php $_smarty_tpl->tpl_vars['prefix'] = new Smarty_variable('user/mod-comment_list', null, 0);?>
		<?php echo $_smarty_tpl->getSubTemplate ("module/page_link.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('page'=>$_smarty_tpl->tpl_vars['global']->value['page']), 0);?>

	</div>
</div>
<!-- 新秀 --><?php }} ?>