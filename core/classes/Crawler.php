<?php

namespace Core\Classes;
use KubAT\PhpSimple\HtmlDomParser;


class Crawler
{
	public  $content,
			$results = [];
	
	
	public function __construct()
	{
		echo 'crawler';
	}
	
	public function parsePageContent($url)
	{
		$this->content = HtmlDomParser::file_get_html($url);
	}
	
	public function filterContent($content, $index = null)
	{
		$this->content = $this->content->find($content, $index);
	}
	
	public function find($data)
	{
		if (!is_array($data))
			return $this->content->find($data);
		
		if (!count($data))
			return;
		
		$result = [];
		
		foreach ($data as $key => $values)
		{
			if (is_integer($key))
			{
				$result[$values] = $this->content->find($key);
			}
			else if (is_array($values) && count($values))
			{
				$result[$key] = [];
				
				foreach ($values as $property)
				{
					$result[$key][$property] = $this->content->find($key)->$property;
				}
			}
		}
		
		return $result;
	}
}