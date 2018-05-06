<?php
if (!function_exists('url')) {
	/**
	 * [url description]
	 * @param  string $uri 
	 * @return string url 
	 */
	function url($uri='')
	{
		return URL.$uri;
	}
 	# code...
 }
 if(!function_exists('ip'))
 {
 	/**
 	 * return ip address 
 	 * @return string
 	 */
 function ip()
 {
 	return $_SERVER['REMOTE_ADDR'];
 } 
}
  if(!function_exists('user'))
  {
 	/**
 	 * return cureent user data
 	 * @return array
 	 */
 function user()
 {
 	return $_SESSION['user'];
 } 
}
if(!function_exists('now'))
{
	/**
	 * returns current timstamp
	 * @return string
	 */
	function now()
	{
		return date('Y/m/d H:i:s');
	}
}

 ?>