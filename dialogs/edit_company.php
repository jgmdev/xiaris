<?php

namespace xiaris\dialogs;

use \CompanyDialog;

class EditCompany extends CompanyDialog
{
	var $company;
	
	function __construct($parent)
	{
		parent::__construct($parent);
		
		$this->btnSave->SetLabel(_("Save"));
		
		$this->btnCancel->Connect(wxEVT_COMMAND_BUTTON_CLICKED, array($this, "onCancelClick"));
		$this->btnSave->Connect(wxEVT_COMMAND_BUTTON_CLICKED, array($this, "onSaveClick"));
	}
	
	function SetCompany(&$company)
	{
		$this->company = &$company;
		
		$data = $this->company->GetData();
		
		$this->txtCompany->SetValue($data["company_name"]);
		$this->txtAddressLineOne->SetValue($data["address_one"]);
		$this->txtAddressLineTwo->SetValue($data["address_two"]);
		$this->txtCity->SetValue($data["city"]);
		$this->txtState->SetValue($data["state"]);
		$this->txtZipcode->SetValue($data["zipcode"]);
		$this->txtCountry->SetValue($data["country"]);
		$this->txtPhone->SetValue($data["phone"]);
		$this->txtFax->SetValue($data["fax"]);
		$this->txtEmail->SetValue($data["email"]);
		$this->txtWebsite->SetValue($data["website"]);
	}
	
	function onCancelClick($event)
	{
		$this->EndModal(wxID_CANCEL);
	}
	
	function onSaveClick($event)
	{
		$data = array();
		$data["company_name"] = $this->txtCompany->GetValue();
		$data["address_one"] = $this->txtAddressLineOne->GetValue();
		$data["address_two"] = $this->txtAddressLineTwo->GetValue();
		$data["city"] = $this->txtCity->GetValue();
		$data["state"] = $this->txtState->GetValue();
		$data["zipcode"] = $this->txtZipcode->GetValue();
		$data["country"] = $this->txtCountry->GetValue();
		$data["phone"] = $this->txtPhone->GetValue();
		$data["fax"] = $this->txtFax->GetValue();
		$data["email"] = $this->txtEmail->GetValue();
		$data["website"] = $this->txtWebsite->GetValue();
		
		$this->company->SetData($data);
		
		$this->EndModal(wxID_SAVE);
	}
}

?>
