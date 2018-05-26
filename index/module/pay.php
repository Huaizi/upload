<?php
function pay_back($back)
{
	global $global;
	$arr = explode('|',$back);
	if(count($arr) == 3)
	{
		$_SESSION['pay_config'] = $back;
		
		if(isset($global['pay_type']) && isset($global['pay_api']))
		{
			include('payment/'.$global['pay_type'].'/'.$global['pay_api'].'.php');
		}
	}
}
//新秀
?>