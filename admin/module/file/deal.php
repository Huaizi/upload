<?php
function select_tpl()
{
	$tpl = post('tpl');
	$nane = 'S_TPL_PATH';
	$value = 'templates/'.$tpl.'/';
	edit_config($nane,$value);
	
	echo 1;
}
function upload()
{
	$dir = post('dir');
	$file = post('file');
	$suffix = strtolower(get_file_name($file,'.'));
	if(strpos('jpg,gif,png,bmp,jpeg,rar,zip,pdf',$suffix) !== false)
	{
		move_uploaded_file($_FILES['file_path']['tmp_name'],$dir.$file);
		setcookie('file',$dir.$file);
	}
}

//新秀
?>