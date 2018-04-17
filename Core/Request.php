<?php
namespace Core;

class Request
{
	public function __construct()
	{
		$request = [];
		foreach ($_REQUEST as $key => $value) {
			$this->{$key} = trim(stripslashes(htmlspecialchars($value)));
			$request[$key] = $this->{$key};
		}
		$this->request = $request;
	}

	public function getQueryParams(){
		if (is_array($this->request)) {
            return $this->request;
        }
	}
}