<?php 
if (!function_exists('database_connect')) {
	/**
	 * database connect
	 * @return mixed
	 */
	function database_connect()
	{
		$con=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
		if(mysqli_connect_error())
		{
      die( "problem in connect database").mysqli_connect_error();
		}
		else{
			return $con;
		}
	}
}
if (!function_exists('query')) {
	/**
	 * [query description]
	 * @param  [mixed] $con 
	 * @param  [string] $sql 
	 * @return [bool]      
	 */
	function query($con,$sql)
	{
		return mysqli_query($con,$sql);
	}
	# code...
}
if(!function_exists('fetch'))
{
	
/**
 * [fetch description]
 * @param  mixed
 * @return [array]         [description]
 */
	function fetch($result)
	{
		return mysqli_fetch_assoc($result);
	}
}

if(!function_exists('num_rows'))
{
	/**
	 * [num_rows description]
	 * @param  [mixed] 
	 * @return [int]      
	 */
	function num_rows($con)
	{
		return mysqli_num_rows($con);
	}
}

 ?>