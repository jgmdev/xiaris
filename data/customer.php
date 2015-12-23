<?php

namespace xiaris\data;

class Customer
{
	static $db;
	
	//Define customer status constants
	const ACTIVE = "a";
	const INACTIVE = "i";
	
	static function Edit($customerID, $customerData = array())
	{
		if(!self::$db)
			return;
		
		Utils::EscapeArrayData($customerData);
		
		self::$db->query("update customers set
        customer_name = '{$customerData['customer_name']}', 
        opening_balance = '{$customerData['opening_balance']}', 
        opening_balance_date = '{$customerData['opening_balance_date']}', 
        company_name = '{$customerData['company_name']}', 
        title = '{$customerData['title']}', 
        first_name = '{$customerData['first_name']}', 
        middle_name = '{$customerData['middle_name']}', 
        last_name = '{$customerData['last_name']}', 
        contact = '{$customerData['contact']}', 
        phone = '{$customerData['phone']}', 
        fax = '{$customerData['fax']}', 
        alt_phone = '{$customerData['alt_phone']}', 
        alt_contact = '{$customerData['alt_contact']}', 
        email = '{$customerData['email']}', 
        cc = '{$customerData['cc']}', 
        billing_address = '{$customerData['billing_address']}', 
        shipping_address = '{$customerData['shipping_address']}', 
        terms = '{$customerData['terms']}', 
        payment_type = '{$customerData['payment_type']}', 
        cc_number = '{$customerData['cc_number']}', 
        cc_expiration_month = '{$customerData['cc_expiration_month']}', 
        cc_expiration_year = '{$customerData['cc_expiration_year']}', 
        cc_name_on_card = '{$customerData['cc_name_on_card']}', 
        cc_address = '{$customerData['cc_address']}', 
        cc_zipcode = '{$customerData['cc_zipcode']}',
        notes = '{$customerData['notes']}' where id=$customerID
        ");
	}
	
	function SetCompanyDB(&$companyDataBase)
	{
		self::$db = &$companyDataBase->db;
	}
	
	function Data($customerID)
	{
		if(!self::$db)
			return false;
			
		$result = self::$db->query("select * from customers where id=$customerID");
		
		while($data = $result->fetchArray(SQLITE3_ASSOC))
		{
			return $data;
		}
		
		return false;
	}
	
	static function Add($customerData)
	{
		if(!self::$db)
			return false;
		
		if(!self::$db->tableExists("customers"))
		{
			self::$db->query("create table customers (
				id integer primary key,
				customer_name text,
				opening_balance text,
				opening_balance_date text,
				company_name text,
				title text,
				first_name text,
				middle_name text,
				last_name text,
				contact text,
				phone text,
				fax text,
				alt_phone text,
				alt_contact text,
				email text,
				cc text,
				billing_address text,
				shipping_address text,
				terms text,
				payment_type text,
				cc_number text,
				cc_expiration_month text,
				cc_expiration_year text,
				cc_name_on_card text,
				cc_address text,
				cc_zipcode text,
				notes text,
				status text
			)");
		}
		
		Utils::EscapeArrayData($customerData);
		
		self::$db->query("insert into customers (
			customer_name,
			opening_balance,
			opening_balance_date,
			company_name,
			title,
			first_name,
			middle_name,
			last_name,
			contact,
			phone,
			fax,
			alt_phone,
			alt_contact,
			email,
			cc,
			billing_address,
			shipping_address,
			terms,
			payment_type,
			cc_number,
			cc_expiration_month,
			cc_expiration_year,
			cc_name_on_card,
			cc_address,
			cc_zipcode,
			notes,
			status
		)
        values(
			'{$customerData['customer_name']}', 
			'{$customerData['opening_balance']}', 
			'{$customerData['opening_balance_date']}', 
			'{$customerData['company_name']}', 
			'{$customerData['title']}', 
			'{$customerData['first_name']}', 
			'{$customerData['middle_name']}', 
			'{$customerData['last_name']}', 
			'{$customerData['contact']}', 
			'{$customerData['phone']}', 
			'{$customerData['fax']}', 
			'{$customerData['alt_phone']}', 
			'{$customerData['alt_contact']}', 
			'{$customerData['email']}', 
			'{$customerData['cc']}', 
			'{$customerData['billing_address']}', 
			'{$customerData['shipping_address']}', 
			'{$customerData['terms']}', 
			'{$customerData['payment_type']}', 
			'{$customerData['cc_number']}', 
			'{$customerData['cc_expiration_month']}', 
			'{$customerData['cc_expiration_year']}', 
			'{$customerData['cc_name_on_card']}', 
			'{$customerData['cc_address']}',
			'{$customerData['cc_zipcode']}',
			'{$customerData['notes']}',
			'a'
        )");
		
		return true;
	}
	
	static function Delete($customerID)
	{
		if(!self::$db)
			return false;
			
		self::$db->query("delete from customers where id=$customerID");
		
		return true;
	}
	
	static function CustomersList($status=Customer::ACTIVE)
	{
		if(!self::$db)
			return false;
		
		if(self::$db->tableExists("customers"))
		{	
			$result = self::$db->query("select * from customers where status='$status'");
			
			$customers = array();
			while($data = $result->fetchArray(SQLITE3_ASSOC))
			{
				$customers[] = $data;
			}
			
			return $customers;
		}
		
		return false;
	}
	
	static function SetStatus($customerID, $status)
	{
		if(!self::$db)
			return;
		
		Utils::EscapeArrayData($customerData);
		
		self::$db->query("update customers set
        status = '$status' where id=$customerID
        ");
	}
}

?>
