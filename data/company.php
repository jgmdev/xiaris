<?php

namespace xiaris\data;

class Company
{
	var $db, $isOpen, $filePath, $password;
	
	function __construct($companyFile="", $password="")
	{
		$this->isOpen = false;
		$this->Open($companyFile, $password);
	}
	
	function __destruct()
	{
		unset($db);
	}
	
	function Open($companyFile, $password="")
	{
		if(!file_exists($companyFile))
			return false;
		
		if($companyFile != "")
		{
			$this->db = new SQLiteManager($companyFile, SQLITE3_OPEN_READWRITE|SQLITE3_OPEN_CREATE, $password);
			
			if(!$this->db)
			{
				$this->isOpen = false;
			}
			else
			{
				$this->filePath = $companyFile;
				$this->password = $password;
				$this->isOpen = true;
			}
		}
		
		return $this->isOpen;
	}
	
	function SetData($companyData = array())
	{
		if(!$this->IsOpen())
			return;
		
		Utils::EscapeArrayData($companyData);
		
		$this->db->query("update company set
        company_name = '{$companyData['company_name']}', 
        address_one = '{$companyData['address_one']}', 
        address_two = '{$companyData['address_two']}', 
        city = '{$companyData['city']}', 
        state = '{$companyData['state']}', 
        zipcode = '{$companyData['zipcode']}', 
        country = '{$companyData['country']}', 
        phone = '{$companyData['phone']}', 
        fax = '{$companyData['fax']}', 
        email = '{$companyData['email']}', 
        website = '{$companyData['website']}'
        ");
	}
	
	function GetData()
	{
		if(!$this->IsOpen())
			return false;
			
		$result = $this->db->query("select * from company");
		
		while($data = $result->fetchArray(SQLITE3_ASSOC))
		{
			return $data;
		}
		
		return false;
	}
	
	function GetFilePath()
	{
		return $this->filePath;
	}
	
	function IsOpen()
	{
		return $this->isOpen;
	}
	
	function IsPasswordProtected()
	{
		return $this->password!=""?true:false;
	}
	
	static function Create($companyFile, $companyData, $password="")
	{
		if(file_exists($companyFile))
			unlink($companyFile);
			
		$db = new SQLiteManager($companyFile, SQLITE3_OPEN_READWRITE|SQLITE3_OPEN_CREATE, $password);
		
		$db->query("create table company (
            company_name text,
            address_one text,
            address_two text,
            city text,
            state text,
            zipcode text,
            country text,
            phone text,
            fax text,
            email text,
            website
		)");
		
		Utils::EscapeArrayData($companyData);
		
		$db->query("insert into company (
        company_name, address_one, address_two, city,
        state, zipcode, country, phone,
        fax, email, website)
        values(
        '{$companyData['company_name']}', 
        '{$companyData['address_one']}', 
        '{$companyData['address_two']}', 
        '{$companyData['city']}', 
        '{$companyData['state']}', 
        '{$companyData['zipcode']}', 
        '{$companyData['country']}', 
        '{$companyData['phone']}', 
        '{$companyData['fax']}', 
        '{$companyData['email']}', 
        '{$companyData['website']}'
        )");
		
		return true;
	}
}

?>
