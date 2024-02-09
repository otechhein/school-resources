<?php

namespace Helpers;

class HTTP
{
	static $base = "http://localhost/MySandbox/SchoolResource/07-php/2nd-week/Assignment/UserProfile";

	static function redirect($path, $query = "")
	{
		$url = static::$base . $path;
		if ($query) $url .= "?$query";

		header("location: $url");
		exit();
	}
}
