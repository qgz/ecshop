<?php 
//    第三方登录插件调用，如有BUG请联系作者！！ 
/*===========================================================
*   author : weimm.cn
*   QQ : 274987096
*   E-mail : 274987096@qq.com
*   VERSION : 2.0v
*   DATE : 2014-12-30
*   尊重作者,保留版权信息
*   版权所有 weimm.cn
*   使用；不允许对程序代码以任何形式任何目的的再发布。
**/

if(!function_exists('json_encode'))
{
	include_once('../cls_json.php');
	function json_encode($value)
	{
		$json = new JSON;
		return $json->encode($value);
	}
}
if(!function_exists('json_decode'))
{
	include_once('../cls_json.php');
	function json_decode($json , $um = false)
	{
		$json = new JSON;
		return $json->decode($json , $um);
	}
}

function & website($type)
{
	$path = dirname(__FILE__);
	if(!file_exists($path.'/config/'.$type.'_config.php') || !file_exists($path.'/'.$type.'.php') || !file_exists($path.'/cls_http.php'))
	{
		return false;
	}
	
	include_once($path.'/config/'.$type.'_config.php');  //  装载第三方申请的东西
	if(!defined('RANK_ID'))  //  尚未安装
	{
		return false;
	}
	include_once($path.'/'.$type.'.php');
	
	return new website();
}




?>