<?php 

/**
 * Jibres Of Erimle
 */
class jibres
{

	private $posts = '';
	
	function __construct($req, $args)
	{
		$this->$req($args);
	}

	private function get_products($args)
	{

		
		return $this->posts;
	}
}

 ?>