<?php

namespace xiaris\panels;

use \xiaris\data\Customer, \wxSize, \wxMessageDialog, \ListPanel;

class CustomersList extends ListPanel
{
	function __construct($parent, &$company)
	{
		parent::__construct( $parent, wxID_ANY, wxDefaultPosition, new wxSize( 500,300 ), wxTAB_TRAVERSAL );
		
		$this->listItems->InsertColumn(0, _("Customer Name"), wxLIST_FORMAT_LEFT, 200);
		$this->listItems->InsertColumn(1, _("Balance Total"), wxLIST_FORMAT_LEFT, 200);
		$this->listItems->InsertColumn(2, _("Notes"), wxLIST_FORMAT_LEFT, 400);
		
		Customer::SetCompanyDB($company);
		
		$this->customers = Customer::CustomersList();
		
		$index = 0;
		foreach($this->customers as $customer_data)
		{
			$this->listItems->InsertItem($index, $customer_data["customer_name"]);
			$this->listItems->SetItem($index, 1, "$" . number_format(floatval($customer_data["opening_balance"]), 2, ".", ","));
			$this->listItems->SetItem($index, 2, $customer_data["notes"]);
			$index++;
		}
		
		$this->listItems->Connect(wxEVT_COMMAND_LIST_ITEM_SELECTED, array($this, "onCustomerSelected"));
		$this->listItems->Connect(wxEVT_LEFT_DCLICK, array($this, "onListLeftDoubleClick"));
		
		$this->btnNew->Connect(wxEVT_COMMAND_BUTTON_CLICKED, array($this, "onNewClick"));
		$this->btnEdit->Connect(wxEVT_COMMAND_BUTTON_CLICKED, array($this, "onEditClick"));
		$this->btnDelete->Connect(wxEVT_COMMAND_BUTTON_CLICKED, array($this, "onDeleteClick"));
	}
	
	function ReloadList()
	{
		$this->btnEdit->Enable(false);
		$this->btnDelete->Enable(false);
		
		$this->listItems->DeleteAllItems();
		
		$this->customers = Customer::CustomersList();
		
		$index = 0;
		foreach($this->customers as $customer_data)
		{
			$this->listItems->InsertItem($index, $customer_data["customer_name"]);
			$this->listItems->SetItem($index, 1, "$" . number_format(floatval($customer_data["opening_balance"]), 2, ".", ","));
			$this->listItems->SetItem($index, 2, $customer_data["notes"]);
			$index++;
		}
	}
	
	function SetMainFrame($mainFrame)
	{
		$this->mainFrame = $mainFrame;
	}
	
	function EditCustomer()
	{
		if(isset($this->selectedItem) && $this->selectedItem < count($this->customers))
		{
			if(!isset($this->mainFrame->editCustomer))
			{
				$this->mainFrame->editCustomer = new EditCustomer($this->mainFrame->windowsPanel);
				$this->mainFrame->editCustomer->SetMainFrame($this->mainFrame);
				$this->mainFrame->windowsPanel->AddPage($this->mainFrame->editCustomer, _("Edit Customer"));
			}
			
			$this->mainFrame->editCustomer->LoadCustomer($this->customers[$this->selectedItem]["id"]);
			$this->mainFrame->windowsPanel->SetSelection($this->mainFrame->windowsPanel->GetPageIndex($this->mainFrame->editCustomer));
		}
	}
	
	function onCustomerSelected($event)
	{
		$this->selectedItem = $event->GetIndex();
		
		$this->btnEdit->Enable(true);
		$this->btnDelete->Enable(true);
	}
	
	function onListLeftDoubleClick($event)
	{
		$this->EditCustomer();
	}
	
	function onNewClick($event)
	{
		$this->mainFrame->AddCustomer();
	}
	
	function onEditClick($event)
	{
		$this->EditCustomer();
	}
	
	function onDeleteClick($event)
	{
		$message = new wxMessageDialog($this, 
		_("Are you sure you want to delete this customer?") . "\n" . _("Name:") . " " . $this->customers[$this->selectedItem]["customer_name"] , 
		_("Delete Customer"), 
		wxYES_NO
		);
		
		if($message->ShowModal() == wxID_YES)
		{
			Customer::Delete($this->customers[$this->selectedItem]["id"]);
			$this->ReloadList();
		}
	}
}

?>
