<?php

namespace xiaris\panels;

use xiaris\data\Customer, \wxSize, \CustomerPanel;

class EditCustomer extends CustomerPanel
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
		Customer::Edit($this->customerID, $data);
		
		if(isset($this->mainFrame->customersList))
		{
			$this->mainFrame->customersList->ReloadList();
		}
	}
	
	function SetMainFrame($mainFrame)
	{
		$this->mainFrame = $mainFrame;
	}
	
	function ClosePage()
	{
		$this->parent->DeletePage($this->parent->GetPageIndex($this));
		unset($this->mainFrame->editCustomer);
	}
	
	function LoadCustomer($customerID)
	{
		$this->customerID = $customerID;
		
		$data = Customer::Data($customerID);
		
		//Main customer info
		$this->txtCustomerName->SetValue($data["customer_name"]);
		$this->txtOpeningBalance->SetValue($data["opening_balance"]);
		$this->dpOpeningBalance->SetValue($data["opening_balance_date"]);
		$this->txtCompanyName->SetValue($data["company_name"]);
		$this->txtTitle->SetValue($data["title"]);
		$this->txtFirstName->SetValue($data["first_name"]);
		$this->txtMiddleName->SetValue($data["middle_name"]);
		$this->txtLastName->SetValue($data["last_name"]);
		$this->txtContact->SetValue($data["contact"]);
		$this->txtPhone->SetValue($data["phone"]);
		$this->txtFax->SetValue($data["fax"]);
		$this->txtAltPhone->SetValue($data["alt_phone"]);
		$this->txtAltContact->SetValue($data["alt_contact"]);
		$this->txtEmail->SetValue($data["email"]);
		$this->txtCc->SetValue($data["cc"]);
		$this->txtBillTo->SetValue($data["billing_address"]);
		$this->txtShipTo->SetValue($data["shipping_address"]);
		
		//Additional info
		$this->cboxTerms->SetValue($data["terms"]);
		
		//Preferred Payment Method
		$this->cboxPaymentMethod->SetValue($data["payment_type"]);
		$this->txtCCNumber->SetValue($data["cc_number"]);
		$this->txtCCExpirationMonth->SetValue($data["cc_expiration_month"]);
		$this->txtCCExpirationYear->SetValue($data["cc_expiration_year"]);
		$this->txtCCNameOnCard->SetValue($data["cc_name_on_card"]);
		$this->txtCCAddress->SetValue($data["cc_address"]);
		$this->txtCCZipCode->SetValue($data["cc_zipcode"]);
		
		//Notes
		$this->txtNotes->SetValue($data["notes"]);
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
