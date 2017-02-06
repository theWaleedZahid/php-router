<?php 

/**
* Route Class
*/
class Route
{

	function add($r, callable $c)
	{
		$this->r[$r] = $c;
	}

	function submit()
	{
		$p = (isset($_SERVER['PATH_INFO'])) ? $_SERVER['PATH_INFO'] : '/';
		$this->r[$p]();
	}
}

?>