<?php
	error_reporting(0);
	if($_GET['DEBUG'] || $_COOKIE['DEBUG'])
	{
		error_reporting(E_ALL);
		if(!$_COOKIE['DEBUG'])
		{
			setcookie('DEBUG',1,null,'/');
		}
	}
	
	define('TIME_FORMAT','%d %B %Y %H:%M');
	define('MAIL_TEMPLATE_PATH',dirname(__FILE__).'/mailTemplates/');
	setlocale(LC_TIME,'tr_TR.UTF-8', 'tr_TR', 'tr', 'turkish');
	$formTypes = array(
		'contact'   => 'Contact Form'
	);
	
	function clean($str){
		if(is_array($str)){
			return array_filter($str,'clean');
		}
		$str = strip_tags($str);
		$str = htmlspecialchars($str,ENT_QUOTES);
		$str = mysql_real_escape_string($str);
		return $str;
	}

	function foreachTemplate($arr,$format="%s, ")
	{
		$str = '';
		foreach((array)$arr as $v)
		{
			if(empty($v)){ continue; }
			$str .= sprintf($format,$v);
		}
		return ($format == "%s, " ? substr($str,0,(strlen($str)-2)) : $str);
	}
?>