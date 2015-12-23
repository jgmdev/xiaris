<?php

namespace xiaris\dialogs;

use xiaris\data\Company, \CompanyDialog, wxFileDialog, wxMessageDialog;

class NewCompany extends CompanyDialog
{
	var $company;
	
	function __construct($parent=null)
	{
		parent::__construct($parent);
		
		$this->btnCancel->Connect(wxEVT_COMMAND_BUTTON_CLICKED, array($this, "onCancelClick"));
		$this->btnSave->Connect(wxEVT_COMMAND_BUTTON_CLICKED, array($this, "onCreateClick"));
		
		$this->company = new Company();
	}	
	
	function GetCompany()
	{
		return $this->company;
	}
	
	function onCancelClick($event)
	{
		$this->EndModal(wxID_CANCEL);
	}
	
	function onCreateClick($event)
	{
		$fileDialog = new wxFileDialog($this, "Save to company file", "", "", "Xiaris Company File|*.xia", wxFD_SAVE);
		if($fileDialog->ShowModal() != wxID_CANCEL)
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
			
			$path = str_ireplace(".xia", "", $fileDialog->GetPath());
			$path .= ".xia";
				
			if(Company::Create($path, $data))
			{	
				$this->company->Open($path);
				$this->EndModal(wxID_OK);
			}
			else
			{
				$message = new wxMessageDialog($this, "An error ocurred while trying to create the company file.");
				$message->ShowModal();
			}
		}
	}
}

?>
