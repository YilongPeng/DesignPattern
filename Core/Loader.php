<?php
namespace Core;

class Loader{

	public static function _autoload($class)
	{
		require_once BASEDIR.'/'.str_replace('\\', '/', $class).'.php';
	}

}