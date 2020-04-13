<?php

namespace Core\Classes\Engines;
use Core\Classes\Crawler;


class SearchEngine
{
	protected $_baseUrl,
			  $_url,
			  $_result,
			  $_crawler;
	
	
	public function __construct()
	{
		$this->_crawler = new Crawler;
	}
	
	public function prepareQuery($query)
	{
		$this->_url = $this->_baseUrl . $query;
	}
	
	public function loadContent()
	{
		$this->_crawler->parsePageContent($this->_url);
	}
	
	public function getResults($data)
	{
		$this->_crawler->find($data);
	}
	
	public function search($query)
	{
		$this->prepareQuery($query);
		$data = $this->loadContent(['#main', '#rso']);
//		echo $this->_crawler->content;
//		var_dump($data);
	}
}