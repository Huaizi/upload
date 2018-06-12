{*<?php exit();?>*}
<div class="block">
	<div class="head"><span>用户信息</span></div>
	<div class="main">
		<form name="form_edit_profile" method="post" action="{url entrance=$global.entrance channel='user'}">
			<input name="cmd" type="hidden" value="edit_profile"/>
			<table class="table">
				<tr>
					<td class="l">出生日期：</td>
					<td class="r">
						<select name="birthday_year">
						<option value="0">请选择</option>
							{section name=loop loop=100}
							{$val = 1913 + $smarty.section.loop.index + 1}
							<option value="{$val}" {if $val == $profile.birthday_year}selected="selected"{/if}>{$val}</option>
							{/section}
						</select>&nbsp;&nbsp;
						<select name="birthday_month">
							<option value="0">请选择</option>
							{section name=loop loop=12}
							{$val = $smarty.section.loop.index + 1}
							<option value="{$val}" {if $val == $profile.birthday_month}selected="selected"{/if}>{$val}</option>
							{/section}
						</select>&nbsp;&nbsp;
						<select name="birthday_day">
							<option value="0">请选择</option>
							{section name=loop loop=31}
							{$val = $smarty.section.loop.index + 1}
							<option value="{$val}" {if $val == $profile.birthday_day}selected="selected"{/if}>{$val}</option>
							{/section}
						</select>
					</td>
				</tr>
				<tr>
					<td class="l">性&nbsp;&nbsp;别：</td>
					<td class="r">
						<input name="sex" type="radio" value="0" {if $profile.sex == 0}checked="checked"{/if} />保密&nbsp;&nbsp;
						<input name="sex" type="radio" value="1" {if $profile.sex == 1}checked="checked"{/if} />男&nbsp;&nbsp;
						<input name="sex" type="radio" value="2" {if $profile.sex == 2}checked="checked"{/if} />女
					</td>
				</tr>
				<tr>
					<td class="l">真实姓名：</td>
					<td class="r"><input class="text" name="real_name" type="text" value="{$profile.real_name}" /></td>
				</tr>
				<tr>
					<td class="l">Email：</td>
					<td class="r"><input class="text" name="email" type="text" value="{$profile.email}" /></td>
				</tr>
				<tr>
					<td class="l">QQ：</td>
					<td class="r"><input class="text" name="qq" type="text" value="{$profile.qq}" /></td>
				</tr>
				<tr>
					<td class="l">电话：</td>
					<td class="r"><input class="text" name="tel" type="text" value="{$profile.tel}" /></td>
				</tr>
				<tr>
					<td class="l">手机：</td>
					<td class="r"><input class="text" name="phone" type="text" value="{$profile.phone}" /></td>
				</tr>
				<tr>
					<td class="l">地址：</td>
					<td class="r"><input class="text" name="address" type="text" value="{$profile.address}" /></td>
				</tr>
				<tr>
					<td class="l">密码提示问题：</td>
					<td class="r">
						<select name="question">
							<option value="0">请选择密码提示问题</option>
							<option value="friend_birthday" {if $profile.question == 'friend_birthday'}selected="selected"{/if}>我最好朋友的生日？</option>
							<option value="old_address" {if $profile.question == 'old_address'}selected="selected"{/if}>我儿时居住地的地址？</option>
							<option value="motto" {if $profile.question == 'motto'}selected="selected"{/if}>我的座右铭是？</option>
							<option value="favorite_movie" {if $profile.question == 'favorite_movie'}selected="selected"{/if}>我最喜爱的电影？</option>
							<option value="favorite_song" {if $profile.question == 'favorite_song'}selected="selected"{/if}>我最喜爱的歌曲？</option>
							<option value="favorite_food" {if $profile.question == 'favorite_food'}selected="selected"{/if}>我最喜爱的食物？</option>
							<option value="interest" {if $profile.question == 'interest'}selected="selected"{/if}>我最大的爱好？</option>
							<option value="favorite_novel" {if $profile.question == 'favorite_novel'}selected="selected"{/if}>我最喜欢的小说？</option>
							<option value="favorite_equipe" {if $profile.question == 'favorite_equipe'}selected="selected"{/if}>我最喜欢的运动队？</option>
						</select>
					</td>
				</tr>
				<tr>
					<td class="l">密码问题答案：</td>
					<td class="r"><input class="text" name="answer" type="text" value="{$profile.answer}" /></td>
				</tr>
				<tr>
					<td colspan="2" class="bt_row"><input class="button" type="button" onclick="submit_edit_profile()" value="确认修改" /></td>
				</tr>
			</table>
		</form>
		<div class="space"></div>
		<form name="form_edit_pwd" method="post" action="{url entrance=$global.entrance channel='user'}">
			<input name="cmd" type="hidden" value="edit_pwd"/>
			<table class="table">
				<tr>
					<td class="l">原密码：</td>
					<td class="r"><input class="text" name="old_pwd" type="password" /></td>
				</tr>
				<tr>
					<td class="l">1密码：</td>
					<td class="r"><input class="text" name="new_pwd" type="password" /></td>
				</tr>
				<tr>
					<td class="l">确认密码：</td>
					<td class="r"><input class="text" name="r_pwd" type="password" /></td>
				</tr>
				<tr>
					<td colspan="2" class="bt_row"><input class="button" type="button" onclick="submit_edit_pwd()" value="确认修改" /></td>
				</tr>
			</table>
		</form>
	</div>
</div>
{literal}
<script language="javascript">
function submit_edit_profile()
{
	var str = "";
	if(document.form_edit_profile.real_name.value == ""){str += "-真实姓名不能为空\n";}
	if(document.form_edit_profile.email.value == ""){str += "-Email不能为空\n";}
	if(document.form_edit_profile.qq.value == ""){str += "-QQ不能为空\n";}
	if(document.form_edit_profile.tel.value == ""){str += "-电话不能为空\n";}
	if(document.form_edit_profile.address.value == ""){str += "-地址不能为空\n";}
	if(str != "")
	{
		alert(str);
	}else{
		document.form_edit_profile.submit();
	}
}
function submit_edit_pwd()
{
	var str = "";
	var old_pwd = document.form_edit_pwd.old_pwd.value;
	var new_pwd = document.form_edit_pwd.new_pwd.value;
	var r_pwd = document.form_edit_pwd.r_pwd.value;
	if(old_pwd.length < 6){str += "-旧密码不能小于6个字符\n";}
	else if(old_pwd.length > 15){str += "-旧密码不能大于15个字符\n";}
	if(new_pwd.length < 6){str += "-1密码不能小于6个字符\n";}
	else if(new_pwd.length > 15){str += "-1密码不能大于15个字符\n";}
	if(new_pwd != r_pwd){str += "-两次输入密码不一致\n";}
	if(str != "")
	{
		alert(str);
	}else{
		document.form_edit_pwd.submit();
	}
}
</script>
{/literal}
<!-- 新秀 -->