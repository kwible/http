<?php

namespace Flyer\Components\HTTP\Request;

class Request
{

	protected $payload;

	public function setPayload($payload)
	{
		$this->payload = $payload;
	}

	public static function getRequestMethod()
	{
		return Registry::get('application.request.method');
	}
}