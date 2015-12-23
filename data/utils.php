<?php

namespace xiaris\data;

class Utils
{
	static function EscapeArrayData(&$data)
	{
		foreach($data as $key=>$value)
		{
			$data[$key] = str_replace("'", "''", $value);
		}
	}
}

?>
