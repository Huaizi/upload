<?php
include('smarty/Smarty.class.php');
include('index/common.func.php');
	
set_smarty();
load_lang_pack(S_PROJECT,array($global['channel']));
initial($global['channel']);
	
//新秀
?>