<?php
function clear_cache()
{
	del_dir('admin/compile');
	del_dir('index/compile');
	
	echo 1;
}
//新秀
?>