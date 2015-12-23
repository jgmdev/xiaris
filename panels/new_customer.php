<?php

namespace xiaris\panels;

use wxSize, xiaris\data\Customer, CustomerPanel;

class NewCustomer extends CustomerPanel
{
	function __construct($parent)
	{
		$this->parent = $parent;
		parent::__construct( $parent, wxID_ANY, wxDefaultPosition, new wxSize( 500,300 ), wxTAB_TRAVERSAL );
		
		$this->btnCancel->Connect(wxEVT_COMMAND_BUTTON_CLICKED, array($this, "onCancelClick"));
		$this->btnSave->Connect(wxEVT_COMMAND_BUTTON_CLICKED, array($this, "onSaveClick"));
		$this->btnTimeStamp->Connect(wxEVT_COMMAND_BUTTON_CLICKED, array($this, "onNotesTimeStamp"));
	}
	
	function SaveChanges()
	{
		//Main customer info
		$data["customer_name"] = $this->txtCustomerName->GetValue();
		$data["opening_balance"] = $this->txtOpeningBalance->GetValue();
		$data["opening_balance_date"] = strtotime(date("n/j/Y", $this->dpOpeningBalance->GetValue()), time());
		$data["company_name"] = $this->txtCompanyName->GetValue();
		$data["title"] = $this->txtTitle->GetValue();
		$data["first_name"] = $this->txtFirstName->GetValue();
		$data["middle_name"] = $this->txtMiddleName->GetValue();
		$data["last_name"] = $this->txtLastName->GetValue();
		$data["contact"] = $this->txtContact->GetValue();
		$data["phone"] = $this->txtPhone->GetValue();
		$data["fax"] = $this->txtFax->GetValue();
		$data["alt_phone"] = $this->txtAltPhone->GetValue();
		$data["alt_contact"] = $this->txtAltContact->GetValue();
		$data["email"] = $this->txtEmail->GetValue();
		$data["cc"] = $this->txtCc->GetValue();
		$data["billing_address"] = $this->txtBillTo->GetValue();
		$data["shipping_address"] = $this->txtShipTo->GetValue();
		
		//Additional info
		$data["terms"] = $this->cboxTerms->GetValue();
		
		//Preferred Payment Method
		$data["payment_type"] = $this->cboxPaymentMethod->GetValue();
		$data["cc_number"] = $this->txtCCNumber->GetValue();
		$data["cc_expiration_month"] = $this->txtCCExpirationMonth->GetValue();
		$data["cc_expiration_year"] = $this->txtCCExpirationYear->GetValue();
		$data["cc_name_on_card"] = $this->txtCCNameOnCard->GetValue();
		$data["cc_address"] = $this->txtCCAddress->GetValue();
		$data["cc_zipcode"] = $this->txtCCZipCode->GetValue();
		
		//Notes
		$data["notes"] = $this->txtNotes->GetValue();
		
		Customer::SetCompanyDB($this->mainFrame->company);
		Customer::Add($data);
		
		if(isset($this->mainFrame->customersList))
		{
			$this->mainFrame->customersList->ReloadList();
		}
	}
	
	function SetMainFrame($mainFrame)
	{
		//$this->mainFrame = $mainFrame;
	}
	
	function ClosePage()
	{
		$this->parent->DeletePage($this->parent->GetPageIndex($this));
	}
	
	function onCancelClick($event)
	{
		$this->ClosePage();
	}
	
	function onSaveClick($event)
	{
		$this->SaveChanges();
		$this->ClosePage();
	}
	
	function onNotesTimeStamp($event)
	{
		$time = strtotime(date("n/j/Y", $this->dpTimeStamp->GetValue()));
		
		if($this->txtNotes->GetValue() == "")
		{
			$this->txtNotes->WriteText(date("m/d/Y", $time) . ": ");
		}
		else
		{
			$this->txtNotes->AppendText("\n\n" . date("m/d/Y", $time) . ": ");
		}
		
		$this->txtNotes->SetFocus();
	}
}

?>
