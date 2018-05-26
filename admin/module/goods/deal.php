<?php
function del_goods_back($back)
{
	$img_x_path = $back['img_x_path'];
	$img_path = $back['img_path'];
	
	if($path = realpath($img_x_path))
	{
		if(file_exists($path) && $img_x_path != 'images/no_img.gif') unlink($path);
	}
	if($path = realpath($img_path))
	{
		if(file_exists($path) && $img_path != 'images/no_img.gif') unlink($path);
	}
}
function del_brand_back($back)
{
	$img_path = $back['img_path'];
	
	if($path = realpath($img_path))
	{
		if(file_exists($path)) unlink($path);
	}
}
function upload_back($back)
{
	$x_img_mode = $back['x_img_mode'];
	$x_img_width = $back['x_img_width'];
	$x_img_height = $back['x_img_height'];
	
	$dir = post('dir');
	$file = rawurlencode(post('file'));
	$reduce = intval(post('reduce'));
	$suffix = strtolower(get_file_name($file,'.'));
	if(strpos('jpg,gif,png,bmp,jpeg',$suffix) !== false)
	{
		if(!is_dir($dir))
		{
			mkdir($dir,0777,true);
		}
		move_uploaded_file($_FILES['file_path']['tmp_name'],$dir.$file);
		if(is_image($dir.$file) !== false)
		{
			setcookie('img',$dir.$file);
			$mode = intval($x_img_mode);
			if($reduce)
			{
				if($mode > 0 && function_exists('imagecreate'))
				{
					$width = intval($x_img_width);
					$height = intval($x_img_height);
					if($mode == 1)
					{
							include('include/resizeimage.class.php');
							$resizeimage = new resizeimage($dir.$file,$width,$height,false,$dir.'x_'.$file);
					}elseif($mode == 2){
						
						$srcX = 0;
						$srcY = 0;
						$dst_im = imagecreatetruecolor($width,$height);
						if($suffix == 'jpg' || $suffix == 'jpeg')
						{
							$src_im = imagecreatefromjpeg($dir.$file);
						}elseif($suffix == '.gif'){
							$src_im = imagecreatefromgif($dir.$file);
						}elseif($suffix == '.png'){
							$src_im = imagecreatefrompng($dir.$file);
						}
						list($srcW,$srcH) = getimagesize($dir.$file);
						if($srcW / $srcH < $width / $height)
						{
							$val = $height * ($srcW / $width);
							$srcY = ($srcH - $val) / 2;
							$srcH = $val;
						}elseif($srcW / $srcH > $width / $height){
							$val = $width * ($srcH / $height);
							$srcX = ($srcW - $val) / 2;
							$srcW = $val;
						}
						imagecopyresized($dst_im,$src_im,0,0,$srcX,$srcY,$width,$height,$srcW,$srcH);
						if($suffix == 'jpg' || $suffix == 'jpeg')
						{
							imagejpeg($dst_im,$dir.'x_'.$file);
						}elseif($suffix == '.gif'){
							imagegif($dst_im,$dir.'x_'.$file);
						}elseif($suffix == '.png'){
							imagepng($dst_im,$dir.'x_'.$file);
						}
					}
				}else{
					copy($dir.$file,$dir.'x_'.$file);
				}
			}
		}else{
			unlink($dir.$file);
		}
	}
}
//新秀
?>