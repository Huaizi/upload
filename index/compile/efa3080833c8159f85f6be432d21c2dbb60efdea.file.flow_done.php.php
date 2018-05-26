<?php /* Smarty version Smarty-3.1.3, created on 2018-01-13 22:48:55
         compiled from "templates/default/index\module\flow_done.php" */ ?>
<?php /*%%SmartyHeaderCode:4085a5a1c57db8681-90882606%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efa3080833c8159f85f6be432d21c2dbb60efdea' => 
    array (
      0 => 'templates/default/index\\module\\flow_done.php',
      1 => 1447439703,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4085a5a1c57db8681-90882606',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'flow_done' => 0,
    'ord_sn' => 0,
    'ord_shipping_name' => 0,
    'ord_payment_name' => 0,
    'ord_price_total' => 0,
    'pay_text' => 0,
    'pay_code' => 0,
    'global' => 0,
    'info_text' => 0,
    'link_href' => 0,
    'link_text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5a5a1c57ebf96',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5a1c57ebf96')) {function content_5a5a1c57ebf96($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['flow_done']->value==1){?>
	<div id="flow_done">
		<div class="head">感谢您在本店购物！您的订单已提交成功，请记住您的订单号：<span><?php echo $_smarty_tpl->tpl_vars['ord_sn']->value;?>
</span></div>
		<div class="main">
			<div>
				您选定的配送方式为：<span><?php echo $_smarty_tpl->tpl_vars['ord_shipping_name']->value;?>
</span>，您选定的支付方式为：<span><?php echo $_smarty_tpl->tpl_vars['ord_payment_name']->value;?>
</span>。您的应付款金额为：<span>￥<?php echo $_smarty_tpl->tpl_vars['ord_price_total']->value;?>
元</span><br />
				<?php echo $_smarty_tpl->tpl_vars['pay_text']->value;?>
<br />
				<?php if ($_smarty_tpl->tpl_vars['pay_code']->value=='alipay_direct'){?>
				<form id="form_pay" method="post" action="<?php echo url(array('channel'=>'pay','pay_type'=>'alipay_direct','pay_api'=>'alipayapi'),$_smarty_tpl);?>
">
					<input type="hidden" name="WIDout_trade_no" value="<?php echo $_smarty_tpl->tpl_vars['ord_sn']->value;?>
" />
					<input type="hidden" name="WIDsubject" value="<?php echo $_smarty_tpl->tpl_vars['ord_sn']->value;?>
" />
					<input type="hidden" name="WIDtotal_fee" value="<?php echo $_smarty_tpl->tpl_vars['ord_price_total']->value;?>
" />
					<input type="hidden" name="WIDbody" value="" />
					<input type="hidden" name="WIDshow_url" value="" />
					<input class="button" type="submit" value="进入完成支付" />
				</form>
				<?php }elseif($_smarty_tpl->tpl_vars['pay_code']->value=='alipay_escow'){?>
				<form id="form_pay" method="post" action="<?php echo url(array('channel'=>'pay','pay_type'=>'alipay_escow','pay_api'=>'alipayapi'),$_smarty_tpl);?>
">
					<input type="hidden" name="WIDout_trade_no" value="<?php echo $_smarty_tpl->tpl_vars['ord_sn']->value;?>
" />
					<input type="hidden" name="WIDsubject" value="<?php echo $_smarty_tpl->tpl_vars['ord_sn']->value;?>
" />
					<input type="hidden" name="WIDprice" value="<?php echo $_smarty_tpl->tpl_vars['ord_price_total']->value;?>
" />
					<input type="hidden" name="WIDbody" value="" />
					<input type="hidden" name="WIDshow_url" value="" />
					<input type="hidden" name="WIDreceive_name" value="" />
					<input type="hidden" name="WIDreceive_address" value="" />
					<input type="hidden" name="WIDreceive_zip" value="" />
					<input type="hidden" name="WIDreceive_phone" value="" />
					<input type="hidden" name="WIDreceive_mobile" value="" />
					<input class="button" type="submit" value="进入完成支付" />
				</form>
				<?php }?>
				您可以&nbsp;<a href="./">返回首页</a>&nbsp;或去&nbsp;<a href="<?php echo url(array('entrance'=>$_smarty_tpl->tpl_vars['global']->value['entrance'],'channel'=>'user'),$_smarty_tpl);?>
">用户中心</a>
			</div>
		</div>
	</div>
<?php }else{ ?>
	<div class="block" id="info">
		<div class="head"><span>系统信息</span></div>
		<div class="main">
			<div><?php echo $_smarty_tpl->tpl_vars['info_text']->value;?>
</div>
			<a href="<?php echo $_smarty_tpl->tpl_vars['link_href']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['link_text']->value;?>
</a>
		</div>
	</div>
	<script language="javascript">
		interval = setInterval("document.location.href = '<?php echo $_smarty_tpl->tpl_vars['link_href']->value;?>
'",3000);
	</script>
<?php }?><?php }} ?>