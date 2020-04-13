<?php

namespace Core\Classes\Engines;
use Core\Classes\Engines\SearchEngine;


class GoogleSearchEngine extends SearchEngine
{
	public function __construct()
	{
		parent::__construct();
		
		$this->_baseUrl = 'https://google.com/search?q=';
	}
}