<?php
namespace Core;

use Core\Config;

class Application
{

	static $instance;
	public $config = array();

	public function __construct($base_dir)
	{
		$this->config =  new Config($base_dir);
	}

	public static function getInstance($base_dir = '')
	{
		if( empty(self::$instance) ){
			self::$instance = new self($base_dir);
		}
		return self::$instance;
	}

}