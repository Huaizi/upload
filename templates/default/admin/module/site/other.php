{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>列表长度设置</span></div>
	<div class="main">
		<table class="table">
			<tr>
				<td width="30%">首页分类商品列表长度：</td>
				<td><input type="text" class="text2" onBlur="set_varia('index_img_list_len',this.value)" value="{$index_img_list_len}" /> 张</td>
			</tr>
			<tr>
				<td width="30%">首页促销商品列表长度：</td>
				<td><input type="text" class="text2" onBlur="set_varia('index_promotion_len',this.value)" value="{$index_promotion_len}" /> 张</td>
			</tr>
			<tr>
				<td width="30%">首页精品推荐列表长度：</td>
				<td><input type="text" class="text2" onBlur="set_varia('index_best_goods_len',this.value)" value="{$index_best_goods_len}" /> 张</td>
			</tr>
			<tr>
				<td width="30%">首页新品上市列表长度：</td>
				<td><input type="text" class="text2" onBlur="set_varia('index_new_goods_len',this.value)" value="{$index_new_goods_len}" /> 张</td>
			</tr>
			<tr>
				<td width="30%">首页热卖商品列表长度：</td>
				<td><input type="text" class="text2" onBlur="set_varia('index_hot_goods_len',this.value)" value="{$index_hot_goods_len}" /> 张</td>
			</tr>
			<tr>
				<td>首页站内快讯列表长度：</td>
				<td><input type="text" class="text2" onBlur="set_varia('index_art_list_len',this.value)" value="{$index_art_list_len}" /> 行</td>
			</tr>
			<tr>
				<td>首页帮助中心列表长度：</td>
				<td><input type="text" class="text2" onBlur="set_varia('index_help_list_len',this.value)" value="{$index_help_list_len}" /> 行</td>
			</tr>
			<tr>
				<td>图片页列表长度：</td>
				<td><input type="text" class="text2" onBlur="set_varia('img_list_len',this.value)" value="{$img_list_len}" /> 张</td>
			</tr>
			<tr>
				<td>文章页列表长度：</td>
				<td><input type="text" class="text2" onBlur="set_varia('art_list_len',this.value)" value="{$art_list_len}" /> 行</td>
			</tr>
		</table>
	</div>
</div>
<div class="space"></div>
<div class="block">
	<div class="head"><span>搜索设置</span></div>
	<div class="main">
		<table class="table">
			<tr>
				<td width="30%">热门搜索：</td>
				<td>
					<input type="text" class="text" onBlur="set_hot_search(this.value)" value="{$hot_search}" />
				</td>
			</tr>
		</table>
	</div>
</div>
<div class="space"></div>
<div class="block">
	<div class="head"><span>图片设置</span></div>
	<div class="main">
		<table class="table">
			<tr>
				<td width="30%">缩略图模式：</td>
				<td>
					<input type="radio" name="x_img_mode" onClick="set_varia('x_img_mode',0)" {if $x_img_mode == 0}checked{/if} /> 使用原图 
					<input type="radio" name="x_img_mode" onClick="set_varia('x_img_mode',1)" {if $x_img_mode == 1}checked{/if} /> 只压缩 
					<input type="radio" name="x_img_mode" onClick="set_varia('x_img_mode',2)" {if $x_img_mode == 2}checked{/if} /> 裁剪并压缩 
					<input type="radio" name="x_img_mode" onClick="set_varia('x_img_mode',3)" {if $x_img_mode == 3}checked{/if} /> 独立上传 
				</td>
			</tr>
			<tr>
				<td width="30%">缩略图设置：</td>
				<td>
					最大宽度：<input type="text" class="text2" onBlur="set_varia('x_img_width',this.value)" value="{$x_img_width}" /> px &nbsp;&nbsp;
					最大高度：<input type="text" class="text2" onBlur="set_varia('x_img_height',this.value)" value="{$x_img_height}" /> px
				</td>
			</tr>
		</table>
	</div>
</div>
<div class="space"></div>
<div class="block">
	<div class="head"><span>清除Smarty缓存</span></div>
	<div class="main">
		<table class="table">
			<tr>
				<td width="30%">清除Smarty缓存：</td>
				<td>
					<input class="button" type="button" onClick="clear_cache()" value="立即清除" />
				</td>
			</tr>
		</table>
	</div>
</div>
<div class="space"></div>
<div class="block">
	<div class="head"><span>邮件通知设置</span></div>
	<div class="main">
		<form id="form_set_sentmail" method="post" action="{url channel=$global.channel}">
			<input name="cmd" type="hidden" value="save_sentmail" />
			<table class="table">
				<tr>
					<td width="30%">启用邮件通知功能：</td>
					<td>
						<input type="radio" name="sentmail" onClick="set_varia('sentmail',1)" {if $sentmail == 1}checked{/if} />开启
						<input type="radio" name="sentmail" onClick="set_varia('sentmail',0)" {if $sentmail == 0}checked{/if} />关闭
					</td>
				</tr>
				<tr>
					<td>发件SMTP服务器：</td>
					<td><input name="smtp" type="text" class="text" maxlength="200" value="{$sentmail_smtp}" /></td>
				</tr>
				<tr>
					<td>发件邮箱：</td>
					<td><input name="send" type="text" class="text" maxlength="200" value="{$sentmail_send}" /></td>
				</tr>
				<tr>
					<td>发件邮箱密码：</td>
					<td><input name="password" type="password" class="text" maxlength="200" value="{$sentmail_password}" /></td>
				</tr>
				<tr>
					<td>收件邮箱：</td>
					<td><input name="receive" type="text" class="text" maxlength="200" value="{$sentmail_receive}" /></td>
				</tr>
				<tr>
					<td></td>
					<td><input class="button" type="submit" value="修改" /></td>
				</tr>
			</table>
		</form>
	</div>
</div>
<div class="space"></div>
<div class="block">
	<div class="head"><span>使用说明</span></div>
	<div class="main content">
		1、邮件通知功能的目前的主要用途是：当有访客在网站提交留言或调查问卷时，系统自动使用发件邮箱发送邮件通知管理员。<br />
		2、SMTP服务器地址一般形如smtp.163.com，但并不是所有SMTP服务器地址都是这种形式，163邮箱经多次测试发送邮件正常，建议使用。<br />
		3、如果您所填写的邮件信息不正确，请不要启用邮件通知功能，否则可能导致前台在线留言和在线调查功能无法正常使用。
	</div>
</div>
{literal}
<script language="javascript">
	function set_hot_search(val)
	{
		ajax("post","?/site/","cmd=set_hot_search&val=" + val,
		function(data)
		{
			if(data == 1) result();
		});
	}
	function clear_cache()
	{
		ajax("post","?/site/","cmd=clear_cache",
		function(data)
		{
			if(data == 1) result();
		});
	}
</script>
{/literal}