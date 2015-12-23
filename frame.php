<?php

namespace xiaris;

use wxFrame, wxDefaultPosition, wxSize, wxIcon, wxMenuBar, wxMenu, wxStatusBar,
	wxMessageDialog, wxSplitterWindow, wxPanel, wxBoxSizer, wxColour,
	wxBitmap, wxAuiManager, wxAuiNoteBook, wxAuiPaneInfo, wxAboutDialogInfo,
	wxAboutBox, xiaris\data\Company,MainMenu, StartPagePanel, SideBarPanel;

class XiarisFrame extends wxFrame
{
	public 
		$company,
		$menuBar,
		$statusBar,
		$sideBarPanel,
		$windowsPanel,
		$startPage
	;
		
		
	function __construct()
	{
		parent::__construct(null, null, "Xiaris Crossplatform Accounting", wxDefaultPosition, new wxSize(900,600));
		
		$this->company = new Company();
		
		$this->SetIcon(new wxIcon("images/icon.xpm", wxBITMAP_TYPE_XPM));
		
		$this->AuiManager = new wxAuiManager($this, wxAUI_MGR_DEFAULT);
		
		//Load Current Settings
		Settings::Load();
		
		//Initilize menubar
		$this->menuBar = new MainMenu();
		$this->SetMenuBar($this->menuBar);
		
		//Initilize Status bar
		$this->statusBar = $this->CreateStatusBar(2);
		$this->statusBar->SetStatusText("");
		
		$this->Maximize();
		
		$windowsPanel = new wxAuiNoteBook($this);
		$startPage = new StartPagePanel($windowsPanel);
		$startPage->htmlWindow->SetPage("
		<html>
		<body bgcolor=\"#0F656E\" style=\"margin: 0\">
			<center>
					<img src=\"images/splash.png\" />
					<table bgcolor=\"#ffffff\" height=\"100%\" width=\"100%\">
						<tr>
							<td>
								Some links here
							</td>
						</tr>
					</table>
			</center>
		</body>
		</html>");
		
		
		$paneInfo = new wxAuiPaneInfo();
		$paneInfo->Name("Management");
		$paneInfo->DefaultPane();
		$paneInfo->Caption(_("Management"));
		$paneInfo->CloseButton(false);
		$paneInfo->Left();
		$paneInfo->Dockable(false);
		$paneInfo->Floatable(false);
		$paneInfo->MinSize(new wxSize(280,0));
		$paneInfo->Movable(true);
		
		$paneInfo2 = new wxAuiPaneInfo();
		$paneInfo2->Name("Pages");
		$paneInfo2->MaximizeButton();
		$paneInfo2->CaptionVisible();
		$paneInfo2->CloseButton(false);
		$paneInfo2->Centre();
		
		$sideBarPanel = new SideBarPanel($this);
		
		$this->AuiManager->AddPane($sideBarPanel,$paneInfo );
		$this->AuiManager->AddPane($windowsPanel, $paneInfo2);
		
		$windowsPanel->AddPage($startPage, _("Welcome!"));
		
		$this->AuiManager->Update();
		
		//Connect window panel methods
		$windowsPanel->Connect(wxEVT_COMMAND_AUINOTEBOOK_PAGE_CLOSE, array($this,"onWindowClosed"));
		$windowsPanel->Connect(wxEVT_COMMAND_AUINOTEBOOK_BUTTON, array($this,"onWindowCloseButtonClick"));
		
		//Connect menu methods
		$this->Connect($this->menuBar->newCompanyMenuItem->GetId(), wxEVT_COMMAND_MENU_SELECTED,array($this,"onNewCompany"));
		$this->Connect($this->menuBar->openCompanyMenuItem->GetId(), wxEVT_COMMAND_MENU_SELECTED,array($this,"onOpenCompany"));
		$this->Connect($this->menuBar->backupCompanyMenuItem->GetId(), wxEVT_COMMAND_MENU_SELECTED,array($this,"onBackupCompany"));
		$this->Connect($this->menuBar->passwordProtectMenuItem->GetId(), wxEVT_COMMAND_MENU_SELECTED,array($this, "onPasswordProtect"));
		$this->Connect($this->menuBar->companyInformationMenuItem->GetId(), wxEVT_COMMAND_MENU_SELECTED,array($this,"onCompanyInformation"));
		$this->Connect($this->menuBar->quitMenuItem->GetId(), wxEVT_COMMAND_MENU_SELECTED,array($this,"onQuit"));
		$this->Connect($this->menuBar->customerMenuItem->GetId(), wxEVT_COMMAND_MENU_SELECTED,array($this,"ViewCustomers"));
		$this->Connect($this->menuBar->aboutMenuItem->GetId(), wxEVT_COMMAND_MENU_SELECTED,array($this,"onAbout"));
		
		$this->Connect( $this->menuBar->newCompanyMenuItem->GetId(), wxEVT_UPDATE_UI, array($this, "onMenuUpdate") );
		$this->Connect( $this->menuBar->customerMenuItem->GetId(), wxEVT_UPDATE_UI, array($this, "onMenuUpdate") );
		$this->Connect( $this->menuBar->totalSalesCustomerMenuItem->GetId(), wxEVT_UPDATE_UI, array($this, "onMenuUpdate") );
		
		//Connect sidebar panel link methods
		$sideBarPanel->newEstimatesLink->Connect( wxEVT_COMMAND_HYPERLINK, array($this, "OnNewLinkClicked") );
		$sideBarPanel->newInvoicesLink->Connect( wxEVT_COMMAND_HYPERLINK, array($this, "OnNewLinkClicked") );
		$sideBarPanel->newReceivePaymentsLink->Connect( wxEVT_COMMAND_HYPERLINK, array($this, "OnNewLinkClicked") );
		$sideBarPanel->newSalesRecipientLink->Connect( wxEVT_COMMAND_HYPERLINK, array($this, "OnNewLinkClicked") );
		$sideBarPanel->newDepositsLink->Connect( wxEVT_COMMAND_HYPERLINK, array($this, "OnNewLinkClicked") );
		$sideBarPanel->newCustomersLink->Connect( wxEVT_COMMAND_HYPERLINK, array($this, "OnNewLinkClicked") );
		$sideBarPanel->newVendordsLink->Connect( wxEVT_COMMAND_HYPERLINK, array($this, "OnNewLinkClicked") );
		$sideBarPanel->newBankAccountsLink->Connect( wxEVT_COMMAND_HYPERLINK, array($this, "OnNewLinkClicked") );
		$sideBarPanel->newProfitsAndLossLink->Connect( wxEVT_COMMAND_HYPERLINK, array($this, "OnNewLinkClicked") );
		$sideBarPanel->newWriteChecksLink->Connect( wxEVT_COMMAND_HYPERLINK, array($this, "OnNewLinkClicked") );
		$sideBarPanel->cashRecordExpensesLink->Connect( wxEVT_COMMAND_HYPERLINK, array($this, "OnNewLinkClicked") );
		$sideBarPanel->newIssueRefundsLink->Connect( wxEVT_COMMAND_HYPERLINK, array($this, "OnNewLinkClicked") );
		
		$sideBarPanel->listEstimatesLink->Connect( wxEVT_COMMAND_HYPERLINK, array($this, "OnListLinkClicked") );
		$sideBarPanel->listCustomersLink->Connect( wxEVT_COMMAND_HYPERLINK, array($this, "OnListLinkClicked") );
		
		$this->Connect( wxEVT_CLOSE_WINDOW, array($this, "onQuit") );
		
		$this->sideBarPanel = $sideBarPanel;
		$this->windowsPanel = $windowsPanel;
		$this->startPage = $startPage;
		
		$this->LoadLastOpenCompany();
	}
	
	function __destruct()
	{
		
	}
	
	function AddCustomer()
	{
		if(!isset($this->newCustomer))
		{
			$panel = new \xiaris\panels\NewCustomer($this->windowsPanel);
			$panel->SetMainFrame($this);
			$this->windowsPanel->AddPage($panel ,_("New Customer"));
			$this->windowsPanel->SetSelection($this->windowsPanel->GetPageIndex($panel));
			$this->newCustomer = $panel;
		}
		else
		{
			$this->windowsPanel->SetSelection($this->windowsPanel->GetPageIndex($this->newCustomer));
		}
	}
	
	function SetTitle($title)
	{
		parent::SetTitle($title . " - " . _("Xiaris Crossplatform Accounting"));
	}
	
	function SaveLastOpenCompany()
	{
		Settings::SetSectionValue("main", "last_open_company", $this->company->GetFilePath());
	}
	
	function LoadLastOpenCompany()
	{
		if(Settings::GetSectionValue("main", "last_open_company"))
		{
			if(file_exists(Settings::GetSectionValue("main", "last_open_company")))
				$this->LoadCompany(Settings::GetSectionValue("main", "last_open_company"));
		}
	}
	
	function LoadCompany($filePath)
	{
		$this->company->Open($filePath);
			
		if(!$this->company->IsOpen())
		{
			$passwordDialog = new \wxPasswordEntryDialog($this, _("Company file password"));
			
			while(!$this->company->IsOpen() && $passwordDialog->ShowModal == wxID_OK)
			{
				$this->company->Open($fileDialog->GetPath(), $passwordDialog->GetValue());
			}
		}
		
		if($this->company->IsOpen())
		{
			$data = $this->company->GetData();
			$this->SetTitle($data["company_name"]);
			$this->SaveLastOpenCompany();
		}
	}
	
	function ViewCustomers()
	{
		//Close start page
		if(isset($this->startPage))
		{
			$this->windowsPanel->RemovePage($this->windowsPanel->GetPageIndex($this->startPage));
			$this->startPage->Hide();
		}
		
		if(!isset($this->customersList))
		{
			$panel = new \xiaris\panels\CustomersList($this->windowsPanel, $this->company);
			$panel->SetMainFrame($this);
			$this->windowsPanel->AddPage($panel ,_("Customers"));
			$this->windowsPanel->SetSelection($this->windowsPanel->GetPageIndex($panel));
			$this->customersList = $panel;
		}
		else
		{
			$this->windowsPanel->SetSelection($this->windowsPanel->GetPageIndex($this->customersList));
		}
	}
	
	function onMenuUpdate($event)
	{
		if(!$this->company->IsOpen())
		{
			//File Menu
			$this->menuBar->companyInformationMenuItem->Enable(false);
			$this->menuBar->passwordProtectMenuItem->Enable(false);
			$this->menuBar->backupCompanyMenuItem->Enable(false);
			$this->menuBar->preferencesMenuItem->Enable(false);
			
			//Company Menu
			$this->menuBar->customerMenuItem->Enable(false);
			$this->menuBar->vendorsMenuItem->Enable(false);
			$this->menuBar->othersMenuItem->Enable(false);
			$this->menuBar->accountsMenuItem->Enable(false);
			$this->menuBar->itemsMenuItem->Enable(false);
			$this->menuBar->termsMenuItem->Enable(false);
			$this->menuBar->customerMessageMenuItem->Enable(false);
			$this->menuBar->paymentMethodsMenuItem->Enable(false);
			
			//Reports Menu
			$this->menuBar->totalSalesCustomerMenuItem->Enable(false);
			$this->menuBar->totalSalesByItemMenuItem->Enable(false);
			$this->menuBar->allActivityByCustomerMenuItem->Enable(false);
			$this->menuBar->customerBalanceMenuItem->Enable(false);
			$this->menuBar->accountsReceivableMenuItem->Enable(false);
			$this->menuBar->totalExpensesByPayeeMenuItem->Enable(false);			
			$this->menuBar->allTransactionsByVendorMenuItem->Enable(false);
			$this->menuBar->incomeTaxSummaryMenuItem->Enable(false);
			$this->menuBar->incomeTaxDetailsMenuItem->Enable(false);
			$this->menuBar->profitsAndLossMenuItem->Enable(false);
			$this->menuBar->balanceSheetSummaryMenuItem->Enable(false);
			$this->menuBar->generalLedgerMenuItem->Enable(false);
			$this->menuBar->journalMenuItem->Enable(false);
			$this->menuBar->trialBalanceMenuItem->Enable(false);
			$this->menuBar->auditTrailMenuItem->Enable(false);
		}
		else
		{
			//File Menu
			$this->menuBar->companyInformationMenuItem->Enable(true);
			$this->menuBar->passwordProtectMenuItem->Enable(true);
			$this->menuBar->backupCompanyMenuItem->Enable(true);
			$this->menuBar->preferencesMenuItem->Enable(true);
			
			//Company Menu
			$this->menuBar->customerMenuItem->Enable(true);
			$this->menuBar->vendorsMenuItem->Enable(true);
			$this->menuBar->othersMenuItem->Enable(true);
			$this->menuBar->accountsMenuItem->Enable(true);
			$this->menuBar->itemsMenuItem->Enable(true);
			$this->menuBar->termsMenuItem->Enable(true);
			$this->menuBar->customerMessageMenuItem->Enable(true);
			$this->menuBar->paymentMethodsMenuItem->Enable(true);
			
			//Reports Menu
			$this->menuBar->totalSalesCustomerMenuItem->Enable(true);
			$this->menuBar->totalSalesByItemMenuItem->Enable(true);
			$this->menuBar->allActivityByCustomerMenuItem->Enable(true);
			$this->menuBar->customerBalanceMenuItem->Enable(true);
			$this->menuBar->accountsReceivableMenuItem->Enable(true);
			$this->menuBar->totalExpensesByPayeeMenuItem->Enable(true);			
			$this->menuBar->allTransactionsByVendorMenuItem->Enable(true);
			$this->menuBar->incomeTaxSummaryMenuItem->Enable(true);
			$this->menuBar->incomeTaxDetailsMenuItem->Enable(true);
			$this->menuBar->profitsAndLossMenuItem->Enable(true);
			$this->menuBar->balanceSheetSummaryMenuItem->Enable(true);
			$this->menuBar->generalLedgerMenuItem->Enable(true);
			$this->menuBar->journalMenuItem->Enable(true);
			$this->menuBar->trialBalanceMenuItem->Enable(true);
			$this->menuBar->auditTrailMenuItem->Enable(true);
		}
	}
	
	function onQuit()
	{
		$this->AuiManager->UnInit();
		$this->Destroy();
	}
	
	function onNewCompany($event)
	{
		$newCompanyDialog = new \xiaris\dialogs\NewCompany($this);
		if($newCompanyDialog->ShowModal() == wxID_OK)
		{
			$this->company = $newCompanyDialog->GetCompany();
			$data = $this->company->GetData();
			$this->SetTitle($data["company_name"]);
			
			$this->SaveLastOpenCompany();
		}
	}
	
	function onOpenCompany($event)
	{
		$fileDialog = new \wxFileDialog($this, "Select a company file", "", "", "Xiaris Company File|*.xia", wxFD_OPEN|wxFD_FILE_MUST_EXIST);
		
		if($fileDialog->ShowModal() != wxID_CANCEL)
		{
			$this->LoadCompany($fileDialog->GetPath());
		}
		
		$fileDialog->Destroy();
	}
	
	function onBackupCompany($event)
	{
		$fileDialog = new \wxFileDialog($this, _("Backup to output file"), "", "", "Xiaris Company File|*.xia", wxFD_SAVE);
		
		if($fileDialog->ShowModal() != wxID_CANCEL)
		{
			$path = str_ireplace(".xia", "", $fileDialog->GetPath());
			
			$fileDialog->Destroy();
			
			$path .= ".xia";
			
			if(file_exists($path))
			{
				if(wxMessageBox(_("The file already exists. Do you want to overwrite it?"), _("Warning!"), wxYES_NO) != wxYES)
				{
					print "test";
					return;
				}
			}
			
			copy($this->company->GetFilePath(), $path);
		}
	}
	
	function onPasswordProtect($event)
	{
		if(!$this->company->IsPasswordProtected())
		{
			$passwordDialog = new \wxPasswordEntryDialog($this, _("Ecrypting password"));
			$verifyPasswordDialog = new \wxPasswordEntryDialog($this, _("Re-enter ecrypting password"));
			
			$passwordMatch = false;
			
			while(!$passwordMatch)
			{
				if($passwordDialog->ShowModal() != wxID_OK)
				{
					break;
				}
				
				if($verifyPasswordDialog->ShowModal() != wxID_OK)
				{
					break;
				}
				
				if($passwordDialog->GetValue() == $verifyPasswordDialog->GetValue())
				{
					$passwordMatch = true;
				}
				else
				{
					$error = new \wxMessageDialog($this, _("Original password and password verify doesn't match. Try again"), _("Password Mismatch"), wxOK|wxICON_ERROR);
					$error->ShowModal();
					
					$passwordDialog->SetValue("");
					$verifyPasswordDialog->SetValue("");
				}
			}
			
			if($passwordMatch)
			{
				$this->company->Open($this->company->GetFilePath(), $passwordDialog->GetValue());
			}
		}
	}
	
	function onCompanyInformation($event)
	{
		$editCompanyDialog = new \xiaris\dialogs\EditCompany($this);
		$editCompanyDialog->SetCompany($this->company);
		$editCompanyDialog->ShowModal();
		
		$data = $this->company->GetData();
		$this->SetTitle($data["company_name"]);
	}
	
	function onWindowClosed($event)
	{
		switch($this->windowsPanel->GetSelection())
		{
			//Create and edit panels
			case $this->windowsPanel->GetPageIndex($this->newEstimate):
				$message = new wxMessageDialog($this, _("Do you want to save the changes?"), _("New Estimate"), wxYES_NO);
				if($message->ShowModal() == wxID_YES)
				{
					//Implement Save Changes
				}
				unset($this->newEstimate);
				break;
				
			case $this->windowsPanel->GetPageIndex($this->newCustomer):
				$message = new wxMessageDialog($this, _("Do you want to save the changes?"), _("New Customer"), wxYES_NO);
				if($message->ShowModal() == wxID_YES)
				{
					$this->newCustomer->SaveChanges();
				}
				$message->Destroy();
				unset($this->newCustomer);
				break;
				
			case $this->windowsPanel->GetPageIndex($this->editCustomer):
				$message = new wxMessageDialog($this, _("Do you want to save the changes?"), _("Edit Customer"), wxYES_NO);
				if($message->ShowModal() == wxID_YES)
				{
					$this->editCustomer->SaveChanges();
				}
				unset($this->editCustomer);
				break;
			
			//Data list panels	
			case $this->windowsPanel->GetPageIndex($this->estimatesList):
				unset($this->estimatesList);
				break;
				
			case $this->windowsPanel->GetPageIndex($this->customersList):
				unset($this->customersList);
				break;
				
			default: 
				$event->Skip();
		}
		
		if($this->windowsPanel->GetSelection() == 0)
		{
			$this->windowsPanel->AddPage($this->startPage, _("Welcome"));
		}
		
		$event->Skip();
	}
	
	function onWindowCloseButtonClick($event)
	{
		if($this->windowsPanel->GetPageIndex($this->startPage) != $this->windowsPanel->GetSelection())
		{
			$event->Skip();
		}
	}
	
	function OnNewLinkClicked($event)
	{
		//Check if company file is open
		if(!$this->company->IsOpen())
		{
			$message = new \wxMessageDialog($this, _("You must open or create a company file before starting any work."), _("Warning"), wxOK);
			$message->ShowModal();
			return;
		}
		
		//Close start page
		if(isset($this->startPage))
		{
			$this->windowsPanel->RemovePage($this->windowsPanel->GetPageIndex($this->startPage));
			$this->startPage->Hide();
		}
		
		switch($event->GetId())
		{
			case $this->sideBarPanel->newEstimatesLink->GetId():
				if(!isset($this->newEstimate))
				{
					$panel = new \xiaris\panels\NewEstimate($this->windowsPanel);
					$panel->SetMainFrame($this);
					$this->windowsPanel->AddPage($panel ,_("New Estimate"));
					$this->windowsPanel->SetSelection($this->windowsPanel->GetPageIndex($panel));
					$this->newEstimate = $panel;
				}
				else
				{
					$this->windowsPanel->SetSelection($this->windowsPanel->GetPageIndex($this->newEstimate));
				}
				
				break;
			case $this->sideBarPanel->newInvoicesLink->GetId():
				break;
			case $this->sideBarPanel->newReceivePaymentsLink->GetId():
				break;
			case $this->sideBarPanel->newSalesRecipientLink->GetId():
				break;
			case $this->sideBarPanel->newDepositsLink->GetId():
				break;
			case $this->sideBarPanel->newCustomersLink->GetId():
				$this->AddCustomer();
				break;
			case $this->sideBarPanel->newVendordsLink->GetId():
				break;
			case $this->sideBarPanel->newBankAccountsLink->GetId():
				break;
			case $this->sideBarPanel->newProfitsAndLossLink->GetId():
				break;
			case $this->sideBarPanel->newWriteChecksLink->GetId():
				break;
			case $this->sideBarPanel->cashRecordExpensesLink->GetId():
				break;
			case $this->sideBarPanel->newIssueRefundsLink->GetId():
				break;
			default:
				echo $event->GetId();
		}
	}
	
	function OnListLinkClicked($event)
	{
		//Check if company file is open
		if(!$this->company->IsOpen())
		{
			$message = new \wxMessageDialog($this, _("You must open or create a company file before starting any work."), _("Warning"), wxOK);
			$message->ShowModal();
			return;
		}
		
		//Close start page
		if(isset($this->startPage))
		{
			$this->windowsPanel->RemovePage($this->windowsPanel->GetPageIndex($this->startPage));
			$this->startPage->Hide();
		}
		
		switch($event->GetId())
		{
			case $this->sideBarPanel->listEstimatesLink->GetId():
				if(!isset($this->estimatesList))
				{
					$panel = new \xiaris\panels\EstimatesList($this->windowsPanel);
					$this->windowsPanel->AddPage($panel ,_("Estimates"));
					$this->windowsPanel->SetSelection($this->windowsPanel->GetPageIndex($panel));
					$this->estimatesList = $panel;
				}
				else
				{
					$this->windowsPanel->SetSelection($this->windowsPanel->GetPageIndex($this->estimatesList));
				}
				break;
			case $this->sideBarPanel->listInvoicesLink->GetId():
				break;
			case $this->sideBarPanel->listReseivePaymentsLink->GetId():
				break;
			case $this->sideBarPanel->listSalesRecipientLink->GetId():
				break;
			case $this->sideBarPanel->listDepositsLink->GetId():
				break;
			case $this->sideBarPanel->listCustomersLink->GetId():
				$this->ViewCustomers();
				break;
			case $this->sideBarPanel->listVendordsLink->GetId():
				break;
			case $this->sideBarPanel->listBankAccountsLink->GetId():
				break;
			case $this->sideBarPanel->listProfitsAndLossLink->GetId():
				break;
			case $this->sideBarPanel->listWriteChecksLink->GetId():
				break;
			case $this->sideBarPanel->cashRecordExpensesLink->GetId():
				break;
			case $this->sideBarPanel->listIssueRefundsLink->GetId():
				break;
			default:
				echo $event->GetId();
		}
	}
	
	function onAbout()
	{
		$info = new wxAboutDialogInfo();
		$info->SetName("Xiaris");
		$info->SetVersion("v1.0");
		$info->SetWebsite("http://xiaris.org/");
		$info->SetDescription(_("Open Source Crossplatform Accounting Software"));
		$info->SetLicence(file_get_contents("license.txt"));
		$info->AddArtist("Yaritza Luyando");
		$info->AddDeveloper("Jefferson González");
		$info->SetIcon(new wxIcon("images/splash.png", wxBITMAP_TYPE_PNG));
		
		wxAboutBox($info);	
	}
	
	function OnCreateStatusBar($number, $style, $id, $name)
	{	
		$status = new wxStatusBar($this, $id, $style, $name);
		$status->SetFieldsCount(2, array(100, 200));
		return $status;
	}
}

?>
