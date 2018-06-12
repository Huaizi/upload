{*<?php exit();?>*}
<div class="block" id="reg_login">
	<div class="head"><span>注册1用户</span></div>
	<div class="main">
		<form name="form_register" method="post" action="{url entrance=$global.entrance channel='deal'}">
			<input name="cmd" type="hidden" value="register"/>
			<table>
				<tr>
					<td class="l">用户名：</td>
					<td><input class="text" name="username" type="text" onkeyup="check_register('username',this.value)" /><span id="check_username"></span></td>
				</tr>
				<tr>
					<td class="l">密码：</td>
					<td><input class="text" name="password" type="password" onkeyup="check_register('password',this.value)" /><span id="check_password"></span></td>
				</tr>
				<tr>
					<td class="l">重复密码：</td>
					<td><input class="text" name="r_password" type="password" onkeyup="check_register('r_password',this.value)" /><span id="check_r_password"></span></td>
				</tr>
				<tr>
					<td class="l">真实姓名：</td>
					<td><input class="text" name="real_name" type="text" /></td>
				</tr>
				<tr>
					<td class="l">Email：</td>
					<td><input class="text" name="email" type="text" /></td>
				</tr>
				<tr>
					<td class="l">QQ：</td>
					<td><input class="text" name="qq" type="text" /></td>
				</tr>
				<tr>
					<td class="l">电话：</td>
					<td><input class="text" name="tel" type="text" /></td>
				</tr>
				<tr>
					<td class="l">地址：</td>
					<td><input class="text" name="address" type="text" /></td>
				</tr>
				<tr>
					<td class="l"></td>
					<td><input name="agreement" type="checkbox" checked="checked" value="1" />我已看过并接受《<a onclick="show_box('user_agreement',700,300);">用户协议</a>》</td>
				</tr>
				<tr>
					<td class="l"></td>
					<td><input class="button" type="button" value="提交" onclick="submit_register()" /></td>
				</tr>
			</table>
		</form>
	</div>
</div>
<!-------------------------- BOX -------------------------->
<div class="alert" id="user_agreement">
	<div class="inner">
		<div class="head">
			<div class="title">用户协议</div>
			<div class="close" onclick="hide_box('user_agreement')">关闭</div>
		</div>
		<div class="main">
			<div class="txt">{$user_agreement}</div>
		</div>
	</div>
</div>
<!-------------------------- BOX -------------------------->
{literal}
<script language="javascript">
function check_register(name,val)
{
	switch(name)
	{
		case "username":
		if(val.length < 6)
		{
			document.getElementById("check_username").innerHTML = "用户名不能小于6个字符";
		}else if(val.length > 15){
			document.getElementById("check_username").innerHTML = "用户名不能大于15个字符";
		}else{
			ajax("post","?/deal/","cmd=check_username&val=" + val,
			function(data)
			{
				if(data == 1)
				{
					document.getElementById("check_username").innerHTML = "对不起，该用户名已存在";
				}else{
					document.getElementById("check_username").innerHTML = "该用户名可以使用";
				}
			});
		}
		break;
		case "password":
		if(val.length < 6)
		{
			document.getElementById("check_password").innerHTML = "密码不能小于6个字符";
		}else if(val.length > 15){
			document.getElementById("check_password").innerHTML = "密码不能大于15个字符";
		}else{
			document.getElementById("check_password").innerHTML = "该密码可以使用";
		}
		break;
		case "r_password":
		var password = document.form_register.password.value;
		if(val != password)
		{
			document.getElementById("check_r_password").innerHTML = "两次输入密码不一致";
		}else{
			document.getElementById("check_r_password").innerHTML = "该密码可以使用";
		}
		break;
	}
}
function submit_register()
{
	var str = "";
	if(document.form_register.username.value == ""){str += "-用户名不能为空\n";}
	if(document.form_register.password.value == ""){str += "-密码不能为空\n";}
	if(document.form_register.r_password.value == ""){str += "-重复密码不能为空\n";}
	if(document.form_register.real_name.value == ""){str += "-真实姓名不能为空\n";}
	if(document.form_register.email.value == ""){str += "-Email不能为空\n";}
	if(document.form_register.qq.value == ""){str += "-QQ不能为空\n";}
	if(document.form_register.tel.value == ""){str += "-电话不能为空\n";}
	if(document.form_register.address.value == ""){str += "-地址不能为空\n";}
	if(document.form_register.agreement.checked == false){str += "-必须同意用户协议才能注册\n";}
	if(str != "")
	{
		alert(str);
	}else{
		document.form_register.submit();
	}
}
</script>
{/literal}