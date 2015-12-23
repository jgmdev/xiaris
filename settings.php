<?php

namespace xiaris;

class Settings
{
	static $settingsArray;
	static $homeDirectory;
	static $settingsFile;
	
	static function Load()
	{
		self::$settingsArray = array();
		
		if(isset($_SERVER["HOME"]))
		{
			self::$homeDirectory = $_SERVER["HOME"] . "/.xiaris";
		}
		
		if(!file_exists(self::$homeDirectory))
		{
			mkdir(self::$homeDirectory);
		}
		
		self::$settingsFile = self::$homeDirectory . "/settings.ini";
		
		if(file_exists(self::$settingsFile))
		{
			self::$settingsArray = parse_ini_file(self::$settingsFile, true);
		}
	}
	
	static function Get($valueName)
	{
		if(isset(self::$settingsArray[$valueName]))
		{
			return self::$settingsArray[$valueName];
		}
		
		return false;
	}
	
	static function GetSectionValue($sectionName, $valueName)
	{
		if(isset(self::$settingsArray[$sectionName]))
		{
			if(isset(self::$settingsArray[$sectionName][$valueName]))
			{
				return self::$settingsArray[$sectionName][$valueName];
			}
		}
		
		return false;
	}
	
	static function Set($valueName, $value)
	{
		self::$settingsArray[$valueName] = $value;
		
		self::WriteINI();
	}
	
	static function SetSectionValue($sectionName, $valueName, $value)
	{
		self::$settingsArray[$sectionName][$valueName] = $value;
		
		self::WriteINI();
	}
	
	static function WriteINI()
	{
		$content = "";
		
		foreach(self::$settingsArray as $key=>$data)
		{	
			if(is_array($data))
			{	
				$is_section = true;
				
				foreach($data as $dataKey=>$dataValues)
				{
					if(is_long($dataKey))
					{
						$is_section = false;
						break;
					}
				}
				
				$content .= "\n";
				
				//Write global array value
				if(!$is_section)
				{
					foreach($data as $dataKey=>$dataValue)
					{
						$content .= $key . '[] = "' . $dataValue . '"' . "\n";
					}
				}
				
				//Write section
				else
				{
					$content .= "[" . $key . "]\n";
					
					foreach($data as $dataKey=>$dataValue)
					{
						if(is_array($dataValue))
						{
							foreach($dataValue as $dataInnerValue)
							{
								$content .= $dataKey . '[] = "' . $dataInnerValue . '"' . "\n";
							}
						}
						else
						{
							$content .= $dataKey . ' = "' . $dataValue . '"' . "\n";
						}
					}
				}
				
				$content .= "\n";
			}
			
			//Write global value
			else
			{
				$content .= $key . ' = "' . $data . '"' . "\n";
			}
		}
		
		file_put_contents(self::$settingsFile, $content);
	}
}

?>
