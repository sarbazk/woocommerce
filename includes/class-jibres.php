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

	private function get($data, $post = null)
	{
		$ch = curl_init();
		
		curl_setopt($ch, CURLOPT_URL, "https://jibres.com/fa/api/v1/{STORE}/products/list");
		curl_setopt($ch, CURLOPT_HEADER, 0);
		if ($post) {
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		}
		
		$get = curl_exec($ch);
		
		curl_close($ch);

		return json_encode($get);
	}

	public function get_products($args)
	{

		
		return $this->posts;
	}
}

 ?>