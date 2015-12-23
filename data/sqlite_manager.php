<?php

namespace xiaris\data;

use SQLite3;

class SQLiteManager extends SQLite3
{
	function __construct($file="", $flags="default", $password="")
	{
		if($flags == "default")
		{
			$flags = SQLITE3_OPEN_READWRITE | SQLITE3_OPEN_CREATE;
		}
		
		if($file != "")
		{
			parent::__construct($file, $flags, $password);
		}
	}
	
	function tableExists($table_name)
	{
		$result = parent::query("select * from sqlite_master where type='table' and name='$table_name'");
		
		if(!($data = $result->fetchArray(SQLITE3_ASSOC)))
		{
			return false;
		}
		
		return true;
	}
}

?>
