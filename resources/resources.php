<?php

/*
* PHP code generated with wxFormBuilder (version May 20 2012)
* http://www.wxformbuilder.org/
*
* PLEASE DO "NOT" EDIT THIS FILE!
*/

const id_cancel_button = 1000;

/*
 * Class SideBarPanel
 */

class SideBarPanel extends wxPanel {
	
	function __construct( $parent=null ){
		parent::__construct( $parent, wxID_ANY, wxDefaultPosition, new wxSize( -1,-1 ), wxTAB_TRAVERSAL );
		
		$this->SetBackgroundColour( new wxColour( 255, 255, 255 ) );
		
		$mainSizer = new wxBoxSizer( wxVERTICAL );
		
		$incomeStaticSizer = new wxStaticBoxSizer( new wxStaticBox( $this, wxID_ANY, _("Income") ), wxVERTICAL );
		
		$bSizer23 = new wxBoxSizer( wxHORIZONTAL );
		
		$this->m_staticText21 = new wxStaticText( $this, wxID_ANY, _("Estimates"), wxDefaultPosition, wxDefaultSize, 0 );
		$this->m_staticText21->Wrap( -1 );
		$this->m_staticText21->SetFont( new wxFont( wxC2D(wxNORMAL_FONT)->GetPointSize(), 70, 90, 92, false, wxEmptyString ) );
		
		$bSizer23->Add( $this->m_staticText21, 1, wxALL, 5 );
		
		$this->newEstimatesLink = new wxHyperlinkCtrl( $this, wxID_ANY, _("New"), wxEmptyString, wxDefaultPosition, wxDefaultSize, wxHL_DEFAULT_STYLE );
		
		$this->newEstimatesLink->SetVisitedColour( new wxColour( 13, 35, 199 ) );
		$this->newEstimatesLink->SetBackgroundColour( new wxColour( 255, 255, 255 ) );
		
		$bSizer23->Add( $this->newEstimatesLink, 0, wxALL, 5 );
		
		$this->listEstimatesLink = new wxHyperlinkCtrl( $this, wxID_ANY, _("List"), wxEmptyString, wxDefaultPosition, wxDefaultSize, wxHL_DEFAULT_STYLE );
		
		$this->listEstimatesLink->SetVisitedColour( new wxColour( 13, 35, 199 ) );
		$this->listEstimatesLink->SetBackgroundColour( new wxColour( 255, 255, 255 ) );
		
		$bSizer23->Add( $this->listEstimatesLink, 0, wxALL, 5 );
		
		
		$incomeStaticSizer->Add( $bSizer23, 0, wxEXPAND, 5 );
		
		$bSizer231 = new wxBoxSizer( wxHORIZONTAL );
		
		$this->m_staticText211 = new wxStaticText( $this, wxID_ANY, _("Invoices"), wxDefaultPosition, wxDefaultSize, 0 );
		$this->m_staticText211->Wrap( -1 );
		$this->m_staticText211->SetFont( new wxFont( wxC2D(wxNORMAL_FONT)->GetPointSize(), 70, 90, 92, false, wxEmptyString ) );
		
		$bSizer231->Add( $this->m_staticText211, 1, wxALL, 5 );
		
		$this->newInvoicesLink = new wxHyperlinkCtrl( $this, wxID_ANY, _("New"), wxEmptyString, wxDefaultPosition, wxDefaultSize, wxHL_DEFAULT_STYLE );
		
		$this->newInvoicesLink->SetVisitedColour( new wxColour( 13, 35, 199 ) );
		$this->newInvoicesLink->SetBackgroundColour( new wxColour( 255, 255, 255 ) );
		
		$bSizer231->Add( $this->newInvoicesLink, 0, wxALL, 5 );
		
		$this->listInvoicesLink = new wxHyperlinkCtrl( $this, wxID_ANY, _("List"), wxEmptyString, wxDefaultPosition, wxDefaultSize, wxHL_DEFAULT_STYLE );
		
		$this->listInvoicesLink->SetVisitedColour( new wxColour( 13, 35, 199 ) );
		$this->listInvoicesLink->SetBackgroundColour( new wxColour( 255, 255, 255 ) );
		
		$bSizer231->Add( $this->listInvoicesLink, 0, wxALL, 5 );
		
		
		$incomeStaticSizer->Add( $bSizer231, 0, wxEXPAND, 5 );
		
		$bSizer232 = new wxBoxSizer( wxHORIZONTAL );
		
		$this->m_staticText212 = new wxStaticText( $this, wxID_ANY, _("Receive Payments"), wxDefaultPosition, wxDefaultSize, 0 );
		$this->m_staticText212->Wrap( -1 );
		$this->m_staticText212->SetFont( new wxFont( wxC2D(wxNORMAL_FONT)->GetPointSize(), 70, 90, 92, false, wxEmptyString ) );
		
		$bSizer232->Add( $this->m_staticText212, 1, wxALL, 5 );
		
		$this->newReceivePaymentsLink = new wxHyperlinkCtrl( $this, wxID_ANY, _("New"), wxEmptyString, wxDefaultPosition, wxDefaultSize, wxHL_DEFAULT_STYLE );
		
		$this->newReceivePaymentsLink->SetVisitedColour( new wxColour( 13, 35, 199 ) );
		$this->newReceivePaymentsLink->SetBackgroundColour( new wxColour( 255, 255, 255 ) );
		
		$bSizer232->Add( $this->newReceivePaymentsLink, 0, wxALL, 5 );
		
		$this->listReseivePaymentsLink = new wxHyperlinkCtrl( $this, wxID_ANY, _("List"), wxEmptyString, wxDefaultPosition, wxDefaultSize, wxHL_DEFAULT_STYLE );
		
		$this->listReseivePaymentsLink->SetVisitedColour( new wxColour( 13, 35, 199 ) );
		$this->listReseivePaymentsLink->SetBackgroundColour( new wxColour( 255, 255, 255 ) );
		
		$bSizer232->Add( $this->listReseivePaymentsLink, 0, wxALL, 5 );
		
		
		$incomeStaticSizer->Add( $bSizer232, 0, wxEXPAND, 5 );
		
		$bSizer233 = new wxBoxSizer( wxHORIZONTAL );
		
		$this->m_staticText213 = new wxStaticText( $this, wxID_ANY, _("Sales Recipient"), wxDefaultPosition, wxDefaultSize, 0 );
		$this->m_staticText213->Wrap( -1 );
		$this->m_staticText213->SetFont( new wxFont( wxC2D(wxNORMAL_FONT)->GetPointSize(), 70, 90, 92, false, wxEmptyString ) );
		
		$bSizer233->Add( $this->m_staticText213, 1, wxALL, 5 );
		
		$this->newSalesRecipientLink = new wxHyperlinkCtrl( $this, wxID_ANY, _("New"), wxEmptyString, wxDefaultPosition, wxDefaultSize, wxHL_DEFAULT_STYLE );
		
		$this->newSalesRecipientLink->SetVisitedColour( new wxColour( 13, 35, 199 ) );
		$this->newSalesRecipientLink->SetBackgroundColour( new wxColour( 255, 255, 255 ) );
		
		$bSizer233->Add( $this->newSalesRecipientLink, 0, wxALL, 5 );
		
		$this->listSalesRecipientLink = new wxHyperlinkCtrl( $this, wxID_ANY, _("List"), wxEmptyString, wxDefaultPosition, wxDefaultSize, wxHL_DEFAULT_STYLE );
		
		$this->listSalesRecipientLink->SetVisitedColour( new wxColour( 13, 35, 199 ) );
		$this->listSalesRecipientLink->SetBackgroundColour( new wxColour( 255, 255, 255 ) );
		
		$bSizer233->Add( $this->listSalesRecipientLink, 0, wxALL, 5 );
		
		
		$incomeStaticSizer->Add( $bSizer233, 0, wxEXPAND, 5 );
		
		$bSizer234 = new wxBoxSizer( wxHORIZONTAL );
		
		$this->m_staticText214 = new wxStaticText( $this, wxID_ANY, _("Deposits"), wxDefaultPosition, wxDefaultSize, 0 );
		$this->m_staticText214->Wrap( -1 );
		$this->m_staticText214->SetFont( new wxFont( wxC2D(wxNORMAL_FONT)->GetPointSize(), 70, 90, 92, false, wxEmptyString ) );
		
		$bSizer234->Add( $this->m_staticText214, 1, wxALL, 5 );
		
		$this->newDepositsLink = new wxHyperlinkCtrl( $this, wxID_ANY, _("New"), wxEmptyString, wxDefaultPosition, wxDefaultSize, wxHL_DEFAULT_STYLE );
		
		$this->newDepositsLink->SetVisitedColour( new wxColour( 13, 35, 199 ) );
		$this->newDepositsLink->SetBackgroundColour( new wxColour( 255, 255, 255 ) );
		
		$bSizer234->Add( $this->newDepositsLink, 0, wxALL, 5 );
		
		$this->listDepositsLink = new wxHyperlinkCtrl( $this, wxID_ANY, _("List"), wxEmptyString, wxDefaultPosition, wxDefaultSize, wxHL_DEFAULT_STYLE );
		
		$this->listDepositsLink->SetVisitedColour( new wxColour( 13, 35, 199 ) );
		$this->listDepositsLink->SetBackgroundColour( new wxColour( 255, 255, 255 ) );
		
		$bSizer234->Add( $this->listDepositsLink, 0, wxALL, 5 );
		
		
		$incomeStaticSizer->Add( $bSizer234, 0, wxEXPAND, 5 );
		
		
		$mainSizer->Add( $incomeStaticSizer, 0, wxALL|wxEXPAND, 5 );
		
		$buisnessStaticSizer = new wxStaticBoxSizer( new wxStaticBox( $this, wxID_ANY, _("Business") ), wxVERTICAL );
		
		$bSizer3 = new wxBoxSizer( wxHORIZONTAL );
		
		$this->m_staticText2 = new wxStaticText( $this, wxID_ANY, _("Customers"), wxDefaultPosition, wxDefaultSize, 0 );
		$this->m_staticText2->Wrap( -1 );
		$this->m_staticText2->SetFont( new wxFont( wxC2D(wxNORMAL_FONT)->GetPointSize(), 70, 90, 92, false, wxEmptyString ) );
		
		$bSizer3->Add( $this->m_staticText2, 1, wxALL, 5 );
		
		$this->newCustomersLink = new wxHyperlinkCtrl( $this, wxID_ANY, _("New"), wxEmptyString, wxDefaultPosition, wxDefaultSize, wxHL_DEFAULT_STYLE );
		
		$this->newCustomersLink->SetVisitedColour( new wxColour( 13, 35, 199 ) );
		$this->newCustomersLink->SetBackgroundColour( new wxColour( 255, 255, 255 ) );
		
		$bSizer3->Add( $this->newCustomersLink, 0, wxALL, 5 );
		
		$this->listCustomersLink = new wxHyperlinkCtrl( $this, wxID_ANY, _("List"), wxEmptyString, wxDefaultPosition, wxDefaultSize, wxHL_DEFAULT_STYLE );
		
		$this->listCustomersLink->SetVisitedColour( new wxColour( 13, 35, 199 ) );
		$this->listCustomersLink->SetBackgroundColour( new wxColour( 255, 255, 255 ) );
		
		$bSizer3->Add( $this->listCustomersLink, 0, wxALL, 5 );
		
		
		$buisnessStaticSizer->Add( $bSizer3, 0, wxEXPAND, 5 );
		
		$bSizer31 = new wxBoxSizer( wxHORIZONTAL );
		
		$this->m_staticText22 = new wxStaticText( $this, wxID_ANY, _("Vendors"), wxDefaultPosition, wxDefaultSize, 0 );
		$this->m_staticText22->Wrap( -1 );
		$this->m_staticText22->SetFont( new wxFont( wxC2D(wxNORMAL_FONT)->GetPointSize(), 70, 90, 92, false, wxEmptyString ) );
		
		$bSizer31->Add( $this->m_staticText22, 1, wxALL, 5 );
		
		$this->newVendordsLink = new wxHyperlinkCtrl( $this, wxID_ANY, _("New"), wxEmptyString, wxDefaultPosition, wxDefaultSize, wxHL_DEFAULT_STYLE );
		
		$this->newVendordsLink->SetVisitedColour( new wxColour( 13, 35, 199 ) );
		$this->newVendordsLink->SetBackgroundColour( new wxColour( 255, 255, 255 ) );
		
		$bSizer31->Add( $this->newVendordsLink, 0, wxALL, 5 );
		
		$this->listVendorsLink = new wxHyperlinkCtrl( $this, wxID_ANY, _("List"), wxEmptyString, wxDefaultPosition, wxDefaultSize, wxHL_DEFAULT_STYLE );
		
		$this->listVendorsLink->SetVisitedColour( new wxColour( 13, 35, 199 ) );
		$this->listVendorsLink->SetBackgroundColour( new wxColour( 255, 255, 255 ) );
		
		$bSizer31->Add( $this->listVendorsLink, 0, wxALL, 5 );
		
		
		$buisnessStaticSizer->Add( $bSizer31, 0, wxEXPAND, 5 );
		
		$bSizer32 = new wxBoxSizer( wxHORIZONTAL );
		
		$this->bankAccountsLabel = new wxStaticText( $this, wxID_ANY, _("Bank Accounts"), wxDefaultPosition, wxDefaultSize, 0 );
		$this->bankAccountsLabel->Wrap( -1 );
		$this->bankAccountsLabel->SetFont( new wxFont( wxC2D(wxNORMAL_FONT)->GetPointSize(), 70, 90, 92, false, wxEmptyString ) );
		
		$bSizer32->Add( $this->bankAccountsLabel, 1, wxALL, 5 );
		
		$this->newBankAccountsLink = new wxHyperlinkCtrl( $this, wxID_ANY, _("New"), wxEmptyString, wxDefaultPosition, wxDefaultSize, wxHL_DEFAULT_STYLE );
		
		$this->newBankAccountsLink->SetVisitedColour( new wxColour( 13, 35, 199 ) );
		$this->newBankAccountsLink->SetBackgroundColour( new wxColour( 255, 255, 255 ) );
		
		$bSizer32->Add( $this->newBankAccountsLink, 0, wxALL, 5 );
		
		$this->listBankAccountsLink = new wxHyperlinkCtrl( $this, wxID_ANY, _("List"), wxEmptyString, wxDefaultPosition, wxDefaultSize, wxHL_DEFAULT_STYLE );
		
		$this->listBankAccountsLink->SetVisitedColour( new wxColour( 13, 35, 199 ) );
		$this->listBankAccountsLink->SetBackgroundColour( new wxColour( 255, 255, 255 ) );
		
		$bSizer32->Add( $this->listBankAccountsLink, 0, wxALL, 5 );
		
		
		$buisnessStaticSizer->Add( $bSizer32, 0, wxEXPAND, 5 );
		
		$bSizer33 = new wxBoxSizer( wxHORIZONTAL );
		
		$this->m_staticText24 = new wxStaticText( $this, wxID_ANY, _("Profits and Loss"), wxDefaultPosition, wxDefaultSize, 0 );
		$this->m_staticText24->Wrap( -1 );
		$this->m_staticText24->SetFont( new wxFont( wxC2D(wxNORMAL_FONT)->GetPointSize(), 70, 90, 92, false, wxEmptyString ) );
		
		$bSizer33->Add( $this->m_staticText24, 1, wxALL, 5 );
		
		$this->newProfitsAndLossLink = new wxHyperlinkCtrl( $this, wxID_ANY, _("New"), wxEmptyString, wxDefaultPosition, wxDefaultSize, wxHL_DEFAULT_STYLE );
		
		$this->newProfitsAndLossLink->SetVisitedColour( new wxColour( 13, 35, 199 ) );
		$this->newProfitsAndLossLink->SetBackgroundColour( new wxColour( 255, 255, 255 ) );
		
		$bSizer33->Add( $this->newProfitsAndLossLink, 0, wxALL, 5 );
		
		$this->listProfitsAndLossLink = new wxHyperlinkCtrl( $this, wxID_ANY, _("List"), wxEmptyString, wxDefaultPosition, wxDefaultSize, wxHL_DEFAULT_STYLE );
		
		$this->listProfitsAndLossLink->SetVisitedColour( new wxColour( 13, 35, 199 ) );
		$this->listProfitsAndLossLink->SetBackgroundColour( new wxColour( 255, 255, 255 ) );
		
		$bSizer33->Add( $this->listProfitsAndLossLink, 0, wxALL, 5 );
		
		
		$buisnessStaticSizer->Add( $bSizer33, 0, wxEXPAND, 5 );
		
		
		$mainSizer->Add( $buisnessStaticSizer, 0, wxALL|wxEXPAND, 5 );
		
		$expensesStaticSizer = new wxStaticBoxSizer( new wxStaticBox( $this, wxID_ANY, _("Expenses") ), wxVERTICAL );
		
		$bSizer34 = new wxBoxSizer( wxHORIZONTAL );
		
		$this->m_staticText23 = new wxStaticText( $this, wxID_ANY, _("Write Checks"), wxDefaultPosition, wxDefaultSize, 0 );
		$this->m_staticText23->Wrap( -1 );
		$this->m_staticText23->SetFont( new wxFont( wxC2D(wxNORMAL_FONT)->GetPointSize(), 70, 90, 92, false, wxEmptyString ) );
		
		$bSizer34->Add( $this->m_staticText23, 1, wxALL, 5 );
		
		$this->newWriteChecksLink = new wxHyperlinkCtrl( $this, wxID_ANY, _("New"), wxEmptyString, wxDefaultPosition, wxDefaultSize, wxHL_DEFAULT_STYLE );
		
		$this->newWriteChecksLink->SetVisitedColour( new wxColour( 13, 35, 199 ) );
		$this->newWriteChecksLink->SetBackgroundColour( new wxColour( 255, 255, 255 ) );
		
		$bSizer34->Add( $this->newWriteChecksLink, 0, wxALL, 5 );
		
		$this->listWriteChecksLink = new wxHyperlinkCtrl( $this, wxID_ANY, _("List"), wxEmptyString, wxDefaultPosition, wxDefaultSize, wxHL_DEFAULT_STYLE );
		
		$this->listWriteChecksLink->SetVisitedColour( new wxColour( 13, 35, 199 ) );
		$this->listWriteChecksLink->SetBackgroundColour( new wxColour( 255, 255, 255 ) );
		
		$bSizer34->Add( $this->listWriteChecksLink, 0, wxALL, 5 );
		
		
		$expensesStaticSizer->Add( $bSizer34, 0, wxEXPAND, 5 );
		
		$bSizer311 = new wxBoxSizer( wxHORIZONTAL );
		
		$this->m_staticText221 = new wxStaticText( $this, wxID_ANY, _("Record Expenses"), wxDefaultPosition, wxDefaultSize, 0 );
		$this->m_staticText221->Wrap( -1 );
		$this->m_staticText221->SetFont( new wxFont( wxC2D(wxNORMAL_FONT)->GetPointSize(), 70, 90, 92, false, wxEmptyString ) );
		
		$bSizer311->Add( $this->m_staticText221, 1, wxALL, 5 );
		
		$this->cashRecordExpensesLink = new wxHyperlinkCtrl( $this, wxID_ANY, _("Cash"), wxEmptyString, wxDefaultPosition, wxDefaultSize, wxHL_DEFAULT_STYLE );
		
		$this->cashRecordExpensesLink->SetVisitedColour( new wxColour( 13, 35, 199 ) );
		$this->cashRecordExpensesLink->SetBackgroundColour( new wxColour( 255, 255, 255 ) );
		
		$bSizer311->Add( $this->cashRecordExpensesLink, 0, wxALL, 5 );
		
		$this->creditRecordExpensesLink = new wxHyperlinkCtrl( $this, wxID_ANY, _("Credit"), wxEmptyString, wxDefaultPosition, wxDefaultSize, wxHL_DEFAULT_STYLE );
		
		$this->creditRecordExpensesLink->SetVisitedColour( new wxColour( 13, 35, 199 ) );
		$this->creditRecordExpensesLink->SetBackgroundColour( new wxColour( 255, 255, 255 ) );
		
		$bSizer311->Add( $this->creditRecordExpensesLink, 0, wxALL, 5 );
		
		
		$expensesStaticSizer->Add( $bSizer311, 0, wxEXPAND, 5 );
		
		$bSizer321 = new wxBoxSizer( wxHORIZONTAL );
		
		$this->bankAccountsLabel1 = new wxStaticText( $this, wxID_ANY, _("Issue Refunds"), wxDefaultPosition, wxDefaultSize, 0 );
		$this->bankAccountsLabel1->Wrap( -1 );
		$this->bankAccountsLabel1->SetFont( new wxFont( wxC2D(wxNORMAL_FONT)->GetPointSize(), 70, 90, 92, false, wxEmptyString ) );
		
		$bSizer321->Add( $this->bankAccountsLabel1, 1, wxALL, 5 );
		
		$this->newIssueRefundsLink = new wxHyperlinkCtrl( $this, wxID_ANY, _("New"), wxEmptyString, wxDefaultPosition, wxDefaultSize, wxHL_DEFAULT_STYLE );
		
		$this->newIssueRefundsLink->SetVisitedColour( new wxColour( 13, 35, 199 ) );
		$this->newIssueRefundsLink->SetBackgroundColour( new wxColour( 255, 255, 255 ) );
		
		$bSizer321->Add( $this->newIssueRefundsLink, 0, wxALL, 5 );
		
		$this->listIssueRefundsLink = new wxHyperlinkCtrl( $this, wxID_ANY, _("List"), wxEmptyString, wxDefaultPosition, wxDefaultSize, wxHL_DEFAULT_STYLE );
		
		$this->listIssueRefundsLink->SetVisitedColour( new wxColour( 13, 35, 199 ) );
		$this->listIssueRefundsLink->SetBackgroundColour( new wxColour( 255, 255, 255 ) );
		
		$bSizer321->Add( $this->listIssueRefundsLink, 0, wxALL, 5 );
		
		
		$expensesStaticSizer->Add( $bSizer321, 0, wxEXPAND, 5 );
		
		
		$mainSizer->Add( $expensesStaticSizer, 1, wxALL|wxEXPAND, 5 );
		
		
		$this->SetSizer( $mainSizer );
		$this->Layout();
		$mainSizer->Fit( $this );
	}
	
	
	function __destruct( ){
	}
	
}

/*
 * Class CompanyDialog
 */

class CompanyDialog extends wxDialog {
	
	function __construct( $parent=null ){
		parent::__construct( $parent, wxID_ANY, _("Company Details"), wxDefaultPosition, wxDefaultSize, wxDEFAULT_DIALOG_STYLE );
		
		$this->SetSizeHints( wxDefaultSize, wxDefaultSize );
		
		$mainSizer = new wxBoxSizer( wxVERTICAL );
		
		$bSizer4 = new wxBoxSizer( wxHORIZONTAL );
		
		$this->m_staticText3 = new wxStaticText( $this, wxID_ANY, _("Company Name:"), wxDefaultPosition, wxDefaultSize, 0 );
		$this->m_staticText3->Wrap( -1 );
		$bSizer4->Add( $this->m_staticText3, 0, wxALIGN_CENTER_VERTICAL|wxALL, 5 );
		
		$this->txtCompany = new wxTextCtrl( $this, wxID_ANY, wxEmptyString, wxDefaultPosition, wxDefaultSize, 0 );
		$bSizer4->Add( $this->txtCompany, 2, wxALIGN_CENTER_VERTICAL|wxALL, 5 );
		
		
		$mainSizer->Add( $bSizer4, 0, wxEXPAND, 5 );
		
		
		$mainSizer->Add( 1, 5, 0, wxALL|wxEXPAND, 5, null );
		
		$sbSizer3 = new wxStaticBoxSizer( new wxStaticBox( $this, wxID_ANY, _("Address") ), wxVERTICAL );
		
		$bSizer5 = new wxBoxSizer( wxHORIZONTAL );
		
		$this->m_staticText4 = new wxStaticText( $this, wxID_ANY, _("Line 1:"), wxDefaultPosition, wxDefaultSize, 0 );
		$this->m_staticText4->Wrap( -1 );
		$bSizer5->Add( $this->m_staticText4, 0, wxALIGN_CENTER_VERTICAL|wxALL, 5 );
		
		$this->txtAddressLineOne = new wxTextCtrl( $this, wxID_ANY, wxEmptyString, wxDefaultPosition, wxDefaultSize, 0 );
		$bSizer5->Add( $this->txtAddressLineOne, 1, wxALL, 5 );
		
		
		$sbSizer3->Add( $bSizer5, 1, wxEXPAND, 5 );
		
		$bSizer51 = new wxBoxSizer( wxHORIZONTAL );
		
		$this->m_staticText41 = new wxStaticText( $this, wxID_ANY, _("Line 2:"), wxDefaultPosition, wxDefaultSize, 0 );
		$this->m_staticText41->Wrap( -1 );
		$bSizer51->Add( $this->m_staticText41, 0, wxALIGN_CENTER_VERTICAL|wxALL, 5 );
		
		$this->txtAddressLineTwo = new wxTextCtrl( $this, wxID_ANY, wxEmptyString, wxDefaultPosition, wxDefaultSize, 0 );
		$bSizer51->Add( $this->txtAddressLineTwo, 1, wxALL, 5 );
		
		
		$sbSizer3->Add( $bSizer51, 1, wxEXPAND, 5 );
		
		$bSizer521 = new wxBoxSizer( wxHORIZONTAL );
		
		$this->m_staticText421 = new wxStaticText( $this, wxID_ANY, _("City:"), wxDefaultPosition, wxDefaultSize, 0 );
		$this->m_staticText421->Wrap( -1 );
		$bSizer521->Add( $this->m_staticText421, 0, wxALIGN_CENTER_VERTICAL|wxALL, 5 );
		
		$this->txtCity = new wxTextCtrl( $this, wxID_ANY, wxEmptyString, wxDefaultPosition, wxDefaultSize, 0 );
		$bSizer521->Add( $this->txtCity, 3, wxALL, 5 );
		
		$this->m_staticText131 = new wxStaticText( $this, wxID_ANY, _("State:"), wxDefaultPosition, wxDefaultSize, 0 );
		$this->m_staticText131->Wrap( -1 );
		$bSizer521->Add( $this->m_staticText131, 0, wxALIGN_CENTER_VERTICAL|wxALL, 5 );
		
		$this->txtState = new wxTextCtrl( $this, wxID_ANY, wxEmptyString, wxDefaultPosition, wxDefaultSize, 0 );
		$bSizer521->Add( $this->txtState, 3, wxALL, 5 );
		
		
		$sbSizer3->Add( $bSizer521, 1, wxEXPAND, 5 );
		
		$bSizer522 = new wxBoxSizer( wxHORIZONTAL );
		
		$this->m_staticText422 = new wxStaticText( $this, wxID_ANY, _("Zip Code:"), wxDefaultPosition, wxDefaultSize, 0 );
		$this->m_staticText422->Wrap( -1 );
		$bSizer522->Add( $this->m_staticText422, 0, wxALIGN_CENTER_VERTICAL|wxALL, 5 );
		
		$this->txtZipcode = new wxTextCtrl( $this, wxID_ANY, wxEmptyString, wxDefaultPosition, wxDefaultSize, 0 );
		$bSizer522->Add( $this->txtZipcode, 3, wxALL, 5 );
		
		$this->m_staticText132 = new wxStaticText( $this, wxID_ANY, _("Country:"), wxDefaultPosition, wxDefaultSize, 0 );
		$this->m_staticText132->Wrap( -1 );
		$bSizer522->Add( $this->m_staticText132, 0, wxALIGN_CENTER_VERTICAL|wxALL, 5 );
		
		$this->txtCountry = new wxTextCtrl( $this, wxID_ANY, wxEmptyString, wxDefaultPosition, wxDefaultSize, 0 );
		$bSizer522->Add( $this->txtCountry, 3, wxALL, 5 );
		
		
		$sbSizer3->Add( $bSizer522, 1, wxEXPAND, 5 );
		
		
		$mainSizer->Add( $sbSizer3, 0, wxEXPAND, 5 );
		
		
		$mainSizer->Add( 1, 5, 0, wxALL|wxEXPAND, 5, null );
		
		$sbSizer7 = new wxStaticBoxSizer( new wxStaticBox( $this, wxID_ANY, _("Contact Information") ), wxVERTICAL );
		
		$bSizer52 = new wxBoxSizer( wxHORIZONTAL );
		
		$this->m_staticText42 = new wxStaticText( $this, wxID_ANY, _("Phone:"), wxDefaultPosition, wxDefaultSize, 0 );
		$this->m_staticText42->Wrap( -1 );
		$bSizer52->Add( $this->m_staticText42, 1, wxALIGN_CENTER_VERTICAL|wxALL, 5 );
		
		$this->txtPhone = new wxTextCtrl( $this, wxID_ANY, wxEmptyString, wxDefaultPosition, wxDefaultSize, 0 );
		$bSizer52->Add( $this->txtPhone, 3, wxALL, 5 );
		
		$this->m_staticText13 = new wxStaticText( $this, wxID_ANY, _("Fax:"), wxDefaultPosition, wxDefaultSize, 0 );
		$this->m_staticText13->Wrap( -1 );
		$bSizer52->Add( $this->m_staticText13, 1, wxALIGN_CENTER_VERTICAL|wxALL, 5 );
		
		$this->txtFax = new wxTextCtrl( $this, wxID_ANY, wxEmptyString, wxDefaultPosition, wxDefaultSize, 0 );
		$bSizer52->Add( $this->txtFax, 3, wxALL, 5 );
		
		
		$sbSizer7->Add( $bSizer52, 1, wxEXPAND, 5 );
		
		$bSizer53 = new wxBoxSizer( wxHORIZONTAL );
		
		$this->m_staticText43 = new wxStaticText( $this, wxID_ANY, _("E-mail:"), wxDefaultPosition, wxDefaultSize, 0 );
		$this->m_staticText43->Wrap( -1 );
		$bSizer53->Add( $this->m_staticText43, 1, wxALIGN_CENTER_VERTICAL|wxALL, 5 );
		
		$this->txtEmail = new wxTextCtrl( $this, wxID_ANY, wxEmptyString, wxDefaultPosition, wxDefaultSize, 0 );
		$bSizer53->Add( $this->txtEmail, 4, wxALL, 5 );
		
		
		$sbSizer7->Add( $bSizer53, 1, wxEXPAND, 5 );
		
		$bSizer54 = new wxBoxSizer( wxHORIZONTAL );
		
		$this->m_staticText44 = new wxStaticText( $this, wxID_ANY, _("Website:"), wxDefaultPosition, wxDefaultSize, 0 );
		$this->m_staticText44->Wrap( -1 );
		$bSizer54->Add( $this->m_staticText44, 1, wxALIGN_CENTER_VERTICAL|wxALL, 5 );
		
		$this->txtWebsite = new wxTextCtrl( $this, wxID_ANY, wxEmptyString, wxDefaultPosition, wxDefaultSize, 0 );
		$bSizer54->Add( $this->txtWebsite, 4, wxALL, 5 );
		
		
		$sbSizer7->Add( $bSizer54, 1, wxEXPAND, 5 );
		
		
		$mainSizer->Add( $sbSizer7, 0, wxEXPAND, 5 );
		
		$bSizer16 = new wxBoxSizer( wxHORIZONTAL );
		
		$this->btnCancel = new wxButton( $this, id_cancel_button, _("C&ancel"), wxDefaultPosition, wxDefaultSize, 0 );
		$bSizer16->Add( $this->btnCancel, 0, wxALIGN_BOTTOM|wxALL, 5 );
		
		$this->btnSave = new wxButton( $this, wxID_ANY, _("&Create"), wxDefaultPosition, wxDefaultSize, 0 );
		$this->btnSave->SetDefault(); 
		$bSizer16->Add( $this->btnSave, 0, wxALIGN_BOTTOM|wxALL, 5 );
		
		
		$mainSizer->Add( $bSizer16, 1, wxALIGN_RIGHT|wxBOTTOM, 5 );
		
		
		$this->SetSizer( $mainSizer );
		$this->Layout();
		$mainSizer->Fit( $this );
		
		$this->Centre( wxBOTH );
	}
	
	
	function __destruct( ){
	}
	
}

/*
 * Class StartPagePanel
 */

class StartPagePanel extends wxPanel {
	
	function __construct( $parent=null ){
		parent::__construct( $parent, wxID_ANY, wxDefaultPosition, new wxSize( 500,300 ), wxTAB_TRAVERSAL );
		
		$bSizer37 = new wxBoxSizer( wxVERTICAL );
		
		$this->htmlWindow = new wxHtmlWindow( $this, wxID_ANY, wxDefaultPosition, wxDefaultSize, wxHW_SCROLLBAR_AUTO );
		$bSizer37->Add( $this->htmlWindow, 1, wxALL|wxEXPAND, 5 );
		
		
		$this->SetSizer( $bSizer37 );
		$this->Layout();
	}
	
	
	function __destruct( ){
	}
	
}

/*
 * Class MainMenu
 */

class MainMenu extends wxMenuBar {
	
	function __construct( ){
		parent::__construct( 0 );
		
		$this->fileMenu = new wxMenu();
		$this->newCompanyMenuItem = new wxMenuItem( $this->fileMenu, wxID_ANY, _("New Company"). "\t" . "Ctrl+N", _("Create a new company file."), wxITEM_NORMAL );
		$this->fileMenu->Append( $this->newCompanyMenuItem );
		
		$this->openCompanyMenuItem = new wxMenuItem( $this->fileMenu, wxID_ANY, _("Open Company"). "\t" . "Ctrl+O", _("Open a company file to start working."), wxITEM_NORMAL );
		$this->fileMenu->Append( $this->openCompanyMenuItem );
		
		$this->backupCompanyMenuItem = new wxMenuItem( $this->fileMenu, wxID_ANY, _("Backup Company"). "\t" . "Ctrl+B", _("Backup your company file to another location."), wxITEM_NORMAL );
		$this->fileMenu->Append( $this->backupCompanyMenuItem );
		
		$this->passwordProtectMenuItem = new wxMenuItem( $this->fileMenu, wxID_ANY, _("Password Protect"), _("Encrypt the company file with a password."), wxITEM_NORMAL );
		$this->fileMenu->Append( $this->passwordProtectMenuItem );
		
		$this->companyInformationMenuItem = new wxMenuItem( $this->fileMenu, wxID_ANY, _("Company Information"). "\t" . "Ctrl+I", _("Modify current company details."), wxITEM_NORMAL );
		$this->fileMenu->Append( $this->companyInformationMenuItem );
		
		$this->preferencesMenuItem = new wxMenuItem( $this->fileMenu, wxID_ANY, _("Preferences"). "\t" . "Ctrl+R", _("Edit company settings."), wxITEM_NORMAL );
		$this->fileMenu->Append( $this->preferencesMenuItem );
		
		$this->quitMenuItem = new wxMenuItem( $this->fileMenu, wxID_ANY, _("Quit"). "\t" . "Alt+F4", _("Exit Xiaris"), wxITEM_NORMAL );
		$this->fileMenu->Append( $this->quitMenuItem );
		
		$this->Append( $this->fileMenu, _("File") ); 
		
		$this->companyMenu = new wxMenu();
		$this->customerMenuItem = new wxMenuItem( $this->companyMenu, wxID_ANY, _("Customers"), wxEmptyString, wxITEM_NORMAL );
		$this->companyMenu->Append( $this->customerMenuItem );
		
		$this->vendorsMenuItem = new wxMenuItem( $this->companyMenu, wxID_ANY, _("Vendors"), wxEmptyString, wxITEM_NORMAL );
		$this->companyMenu->Append( $this->vendorsMenuItem );
		
		$this->othersMenuItem = new wxMenuItem( $this->companyMenu, wxID_ANY, _("Others"), wxEmptyString, wxITEM_NORMAL );
		$this->companyMenu->Append( $this->othersMenuItem );
		
		$this->accountsMenuItem = new wxMenuItem( $this->companyMenu, wxID_ANY, _("Accounts"), wxEmptyString, wxITEM_NORMAL );
		$this->companyMenu->Append( $this->accountsMenuItem );
		
		$this->itemsMenuItem = new wxMenuItem( $this->companyMenu, wxID_ANY, _("Items"), wxEmptyString, wxITEM_NORMAL );
		$this->companyMenu->Append( $this->itemsMenuItem );
		
		$this->termsMenuItem = new wxMenuItem( $this->companyMenu, wxID_ANY, _("Terms"), wxEmptyString, wxITEM_NORMAL );
		$this->companyMenu->Append( $this->termsMenuItem );
		
		$this->customerMessageMenuItem = new wxMenuItem( $this->companyMenu, wxID_ANY, _("Customer Message"), wxEmptyString, wxITEM_NORMAL );
		$this->companyMenu->Append( $this->customerMessageMenuItem );
		
		$this->paymentMethodsMenuItem = new wxMenuItem( $this->companyMenu, wxID_ANY, _("Payment Methods"), wxEmptyString, wxITEM_NORMAL );
		$this->companyMenu->Append( $this->paymentMethodsMenuItem );
		
		$this->Append( $this->companyMenu, _("Company") ); 
		
		$this->reportsMenu = new wxMenu();
		$this->totalSalesCustomerMenuItem = new wxMenuItem( $this->reportsMenu, wxID_ANY, _("Total Sales by Customer"), wxEmptyString, wxITEM_NORMAL );
		$this->reportsMenu->Append( $this->totalSalesCustomerMenuItem );
		
		$this->totalSalesByItemMenuItem = new wxMenuItem( $this->reportsMenu, wxID_ANY, _("Total Sales by Item"), wxEmptyString, wxITEM_NORMAL );
		$this->reportsMenu->Append( $this->totalSalesByItemMenuItem );
		
		$this->allActivityByCustomerMenuItem = new wxMenuItem( $this->reportsMenu, wxID_ANY, _("All Activity by Customer"), wxEmptyString, wxITEM_NORMAL );
		$this->reportsMenu->Append( $this->allActivityByCustomerMenuItem );
		
		$this->customerBalanceMenuItem = new wxMenuItem( $this->reportsMenu, wxID_ANY, _("Customer Balance"), wxEmptyString, wxITEM_NORMAL );
		$this->reportsMenu->Append( $this->customerBalanceMenuItem );
		
		$this->accountsReceivableMenuItem = new wxMenuItem( $this->reportsMenu, wxID_ANY, _("Accounts Receivable"), wxEmptyString, wxITEM_NORMAL );
		$this->reportsMenu->Append( $this->accountsReceivableMenuItem );
		
		$this->totalExpensesByPayeeMenuItem = new wxMenuItem( $this->reportsMenu, wxID_ANY, _("Total Expenses by Payee"), wxEmptyString, wxITEM_NORMAL );
		$this->reportsMenu->Append( $this->totalExpensesByPayeeMenuItem );
		
		$this->allTransactionsByVendorMenuItem = new wxMenuItem( $this->reportsMenu, wxID_ANY, _("All Transactions by Vendor"), wxEmptyString, wxITEM_NORMAL );
		$this->reportsMenu->Append( $this->allTransactionsByVendorMenuItem );
		
		$this->taxReportsMenu = new wxMenu();
		$this->incomeTaxSummaryMenuItem = new wxMenuItem( $this->taxReportsMenu, wxID_ANY, _("Income Tax Summary"), wxEmptyString, wxITEM_NORMAL );
		$this->taxReportsMenu->Append( $this->incomeTaxSummaryMenuItem );
		
		$this->incomeTaxDetailsMenuItem = new wxMenuItem( $this->taxReportsMenu, wxID_ANY, _("Income Tax Details"), wxEmptyString, wxITEM_NORMAL );
		$this->taxReportsMenu->Append( $this->incomeTaxDetailsMenuItem );
		
		$this->reportsMenu->AppendSubMenu( $this->taxReportsMenu, _("Tax Reports") );
		
		$this->accountantReportsMenu = new wxMenu();
		$this->profitsAndLossMenuItem = new wxMenuItem( $this->accountantReportsMenu, wxID_ANY, _("Profits and Loss"), wxEmptyString, wxITEM_NORMAL );
		$this->accountantReportsMenu->Append( $this->profitsAndLossMenuItem );
		
		$this->balanceSheetSummaryMenuItem = new wxMenuItem( $this->accountantReportsMenu, wxID_ANY, _("Balance Sheet Summary"), wxEmptyString, wxITEM_NORMAL );
		$this->accountantReportsMenu->Append( $this->balanceSheetSummaryMenuItem );
		
		$this->generalLedgerMenuItem = new wxMenuItem( $this->accountantReportsMenu, wxID_ANY, _("General Ledger"), wxEmptyString, wxITEM_NORMAL );
		$this->accountantReportsMenu->Append( $this->generalLedgerMenuItem );
		
		$this->journalMenuItem = new wxMenuItem( $this->accountantReportsMenu, wxID_ANY, _("Journal"), wxEmptyString, wxITEM_NORMAL );
		$this->accountantReportsMenu->Append( $this->journalMenuItem );
		
		$this->trialBalanceMenuItem = new wxMenuItem( $this->accountantReportsMenu, wxID_ANY, _("Trial Balance"), wxEmptyString, wxITEM_NORMAL );
		$this->accountantReportsMenu->Append( $this->trialBalanceMenuItem );
		
		$this->auditTrailMenuItem = new wxMenuItem( $this->accountantReportsMenu, wxID_ANY, _("Audit Trail"), wxEmptyString, wxITEM_NORMAL );
		$this->accountantReportsMenu->Append( $this->auditTrailMenuItem );
		
		$this->reportsMenu->AppendSubMenu( $this->accountantReportsMenu, _("Accountant Reports") );
		
		$this->Append( $this->reportsMenu, _("Reports") ); 
		
		$this->helpMenu = new wxMenu();
		$this->aboutMenuItem = new wxMenuItem( $this->helpMenu, wxID_ANY, _("About..."). "\t" . "F1", wxEmptyString, wxITEM_NORMAL );
		$this->helpMenu->Append( $this->aboutMenuItem );
		
		$this->Append( $this->helpMenu, _("Help") ); 
		
	}
	
	
	function __destruct( ){
	}
	
}

/*
 * Class EstimatePanel
 */

class EstimatePanel extends wxPanel {
	
	function __construct( $parent=null ){
		parent::__construct( $parent, wxID_ANY, wxDefaultPosition, new wxSize( 600,500 ), wxTAB_TRAVERSAL );
		
		$this->SetMinSize( new wxSize( 600,500 ) );
		
		$bSizer29 = new wxBoxSizer( wxVERTICAL );
		
		$bSizer291 = new wxBoxSizer( wxHORIZONTAL );
		
		$this->btnPrint = new wxButton( $this, wxID_ANY, _("Print"), wxDefaultPosition, wxDefaultSize, 0 );
		$bSizer291->Add( $this->btnPrint, 0, wxALL, 5 );
		
		$this->btnEmail = new wxButton( $this, wxID_ANY, _("E-Mail"), wxDefaultPosition, wxDefaultSize, 0 );
		$bSizer291->Add( $this->btnEmail, 0, wxALL, 5 );
		
		$this->btnCustomize = new wxButton( $this, wxID_ANY, _("Customize"), wxDefaultPosition, wxDefaultSize, 0 );
		$bSizer291->Add( $this->btnCustomize, 0, wxALL, 5 );
		
		
		$bSizer29->Add( $bSizer291, 0, wxEXPAND, 5 );
		
		$this->m_staticline1 = new wxStaticLine( $this, wxID_ANY, wxDefaultPosition, wxDefaultSize, wxLI_HORIZONTAL );
		$bSizer29->Add( $this->m_staticline1, 0, wxEXPAND | wxALL, 5 );
		
		$bSizer30 = new wxBoxSizer( wxHORIZONTAL );
		
		$cboxCustomersChoices = array();
		$this->cboxCustomers = new wxComboBox( $this, wxID_ANY, _("Select Customer"), wxDefaultPosition, wxDefaultSize, $cboxCustomersChoices, 0 );
		$bSizer30->Add( $this->cboxCustomers, 0, wxALL, 5 );
		
		$this->btnAddCustomer = new wxButton( $this, wxID_ANY, _("Add Customer"), wxDefaultPosition, wxDefaultSize, 0 );
		$bSizer30->Add( $this->btnAddCustomer, 0, wxALL, 5 );
		
		$this->chkEstimateActive = new wxCheckBox( $this, wxID_ANY, _("Is Estimate Active?"), wxDefaultPosition, wxDefaultSize, 0 );
		$bSizer30->Add( $this->chkEstimateActive, 0, wxALL, 5 );
		
		$this->chkEmailLater = new wxCheckBox( $this, wxID_ANY, _("Email Later?"), wxDefaultPosition, wxDefaultSize, 0 );
		$bSizer30->Add( $this->chkEmailLater, 0, wxALIGN_RIGHT|wxALL, 5 );
		
		
		$bSizer29->Add( $bSizer30, 0, wxEXPAND, 5 );
		
		$bSizer31 = new wxBoxSizer( wxHORIZONTAL );
		
		$bSizer34 = new wxBoxSizer( wxVERTICAL );
		
		$this->m_staticText25 = new wxStaticText( $this, wxID_ANY, _("Name/Address:"), wxDefaultPosition, wxDefaultSize, 0 );
		$this->m_staticText25->Wrap( -1 );
		$bSizer34->Add( $this->m_staticText25, 0, wxALL, 5 );
		
		$this->txtNameAddress = new wxTextCtrl( $this, wxID_ANY, wxEmptyString, wxDefaultPosition, wxDefaultSize, wxTE_MULTILINE );
		$bSizer34->Add( $this->txtNameAddress, 0, wxALL|wxEXPAND, 5 );
		
		
		$bSizer31->Add( $bSizer34, 1, wxEXPAND, 5 );
		
		$bSizer351 = new wxBoxSizer( wxVERTICAL );
		
		$this->dpDate = new wxDatePickerCtrl( $this, wxID_ANY , wxDefaultDateTime, wxDefaultPosition, wxDefaultSize, wxDP_DEFAULT );
		$bSizer351->Add( $this->dpDate, 0, wxALIGN_RIGHT|wxALL, 5 );
		
		$bSizer37 = new wxBoxSizer( wxHORIZONTAL );
		
		$this->m_staticText28 = new wxStaticText( $this, wxID_ANY, _("Estimate Number:"), wxDefaultPosition, wxDefaultSize, 0 );
		$this->m_staticText28->Wrap( -1 );
		$bSizer37->Add( $this->m_staticText28, 0, wxALIGN_CENTER|wxALIGN_RIGHT|wxSHAPED, 5 );
		
		$this->txtEstimateNumber = new wxTextCtrl( $this, wxID_ANY, wxEmptyString, wxDefaultPosition, wxDefaultSize, 0 );
		$bSizer37->Add( $this->txtEstimateNumber, 0, wxALIGN_RIGHT|wxALL, 5 );
		
		
		$bSizer351->Add( $bSizer37, 0, wxALIGN_RIGHT, 5 );
		
		
		$bSizer31->Add( $bSizer351, 1, wxEXPAND, 5 );
		
		
		$bSizer29->Add( $bSizer31, 0, wxEXPAND, 5 );
		
		$bSizer311 = new wxBoxSizer( wxVERTICAL );
		
		$this->gridItems = new wxGrid( $this, wxID_ANY, wxDefaultPosition, wxDefaultSize, 0 );
		
		# Grid
		$this->gridItems->CreateGrid( 2, 5 );
		$this->gridItems->EnableEditing( true );
		$this->gridItems->EnableGridLines( true );
		$this->gridItems->EnableDragGridSize( false );
		$this->gridItems->SetMargins( 0, 0 );
		
		# Columns
		$this->gridItems->EnableDragColMove( false );
		$this->gridItems->EnableDragColSize( true );
		$this->gridItems->SetColLabelSize( 30 );
		$this->gridItems->SetColLabelValue( 0, _("Item") );
		$this->gridItems->SetColLabelValue( 1, _("Description") );
		$this->gridItems->SetColLabelValue( 2, _("Qty") );
		$this->gridItems->SetColLabelValue( 3, _("Rate") );
		$this->gridItems->SetColLabelValue( 4, _("Total") );
		$this->gridItems->SetColLabelAlignment( wxALIGN_CENTRE, wxALIGN_CENTRE );
		
		# Rows
		$this->gridItems->EnableDragRowSize( true );
		$this->gridItems->SetRowLabelSize( 80 );
		$this->gridItems->SetRowLabelAlignment( wxALIGN_CENTRE, wxALIGN_CENTRE );
		
		# Label Appearance
		
		# Cell Defaults
		$this->gridItems->SetDefaultCellAlignment( wxALIGN_LEFT, wxALIGN_TOP );
		$bSizer311->Add( $this->gridItems, 1, wxALL|wxEXPAND, 5 );
		
		
		$bSizer29->Add( $bSizer311, 1, wxEXPAND, 5 );
		
		$bSizer32 = new wxBoxSizer( wxHORIZONTAL );
		
		$bSizer33 = new wxBoxSizer( wxVERTICAL );
		
		$this->m_staticText251 = new wxStaticText( $this, wxID_ANY, _("Customer Message:"), wxDefaultPosition, wxDefaultSize, 0 );
		$this->m_staticText251->Wrap( -1 );
		$bSizer33->Add( $this->m_staticText251, 0, wxALL, 5 );
		
		$this->txtCustomerMessage = new wxTextCtrl( $this, wxID_ANY, wxEmptyString, wxDefaultPosition, wxDefaultSize, wxTE_MULTILINE );
		$bSizer33->Add( $this->txtCustomerMessage, 0, wxALL|wxEXPAND, 5 );
		
		$bSizer361 = new wxBoxSizer( wxHORIZONTAL );
		
		$this->m_staticText29 = new wxStaticText( $this, wxID_ANY, _("Memo:"), wxDefaultPosition, wxDefaultSize, 0 );
		$this->m_staticText29->Wrap( -1 );
		$bSizer361->Add( $this->m_staticText29, 0, wxALIGN_CENTER|wxLEFT|wxSHAPED, 5 );
		
		$this->txtMemo = new wxTextCtrl( $this, wxID_ANY, wxEmptyString, wxDefaultPosition, wxDefaultSize, 0 );
		$bSizer361->Add( $this->txtMemo, 1, wxALL, 5 );
		
		
		$bSizer33->Add( $bSizer361, 1, wxEXPAND, 5 );
		
		
		$bSizer32->Add( $bSizer33, 1, wxEXPAND, 5 );
		
		$bSizer35 = new wxBoxSizer( wxVERTICAL );
		
		$bSizer38 = new wxBoxSizer( wxVERTICAL );
		
		$this->m_staticText26 = new wxStaticText( $this, wxID_ANY, _("Total"), wxDefaultPosition, wxDefaultSize, 0 );
		$this->m_staticText26->Wrap( -1 );
		$this->m_staticText26->SetFont( new wxFont( wxC2D(wxNORMAL_FONT)->GetPointSize(), 70, 90, 92, false, wxEmptyString ) );
		
		$bSizer38->Add( $this->m_staticText26, 0, wxALIGN_RIGHT|wxALL, 5 );
		
		$this->lblTotal = new wxStaticText( $this, wxID_ANY, _("0.00"), wxDefaultPosition, wxDefaultSize, 0 );
		$this->lblTotal->Wrap( -1 );
		$bSizer38->Add( $this->lblTotal, 0, wxALIGN_RIGHT|wxALL, 5 );
		
		
		$bSizer35->Add( $bSizer38, 1, wxEXPAND, 5 );
		
		$bSizer36 = new wxBoxSizer( wxHORIZONTAL );
		
		$this->btnSave = new wxButton( $this, wxID_ANY, _("Save"), wxDefaultPosition, wxDefaultSize, 0 );
		$bSizer36->Add( $this->btnSave, 0, wxALL, 5 );
		
		$this->btnCancel = new wxButton( $this, wxID_ANY, _("Cancel"), wxDefaultPosition, wxDefaultSize, 0 );
		$bSizer36->Add( $this->btnCancel, 0, wxALL, 5 );
		
		
		$bSizer35->Add( $bSizer36, 0, wxALIGN_BOTTOM|wxALIGN_RIGHT, 5 );
		
		
		$bSizer32->Add( $bSizer35, 0, wxEXPAND, 5 );
		
		
		$bSizer29->Add( $bSizer32, 0, wxEXPAND, 5 );
		
		
		$this->SetSizer( $bSizer29 );
		$this->Layout();
	}
	
	
	function __destruct( ){
	}
	
}

/*
 * Class EstimatesListPanel
 */

class EstimatesListPanel extends wxPanel {
	
	function __construct( $parent=null ){
		parent::__construct( $parent, wxID_ANY, wxDefaultPosition, new wxSize( -1,-1 ), wxTAB_TRAVERSAL );
		
		$bSizer39 = new wxBoxSizer( wxVERTICAL );
		
		$bSizer40 = new wxBoxSizer( wxVERTICAL );
		
		$this->btnPrint = new wxButton( $this, wxID_ANY, _("Print"), wxDefaultPosition, wxDefaultSize, 0 );
		$bSizer40->Add( $this->btnPrint, 0, wxALL, 5 );
		
		
		$bSizer39->Add( $bSizer40, 0, wxEXPAND, 5 );
		
		$this->listEstimates = new wxListCtrl( $this, wxID_ANY, wxDefaultPosition, wxDefaultSize, wxLC_REPORT );
		$bSizer39->Add( $this->listEstimates, 1, wxALL|wxEXPAND, 5 );
		
		
		$this->SetSizer( $bSizer39 );
		$this->Layout();
		$bSizer39->Fit( $this );
	}
	
	
	function __destruct( ){
	}
	
}

/*
 * Class CustomerPanel
 */

class CustomerPanel extends wxPanel {
	
	function __construct( $parent=null ){
		parent::__construct( $parent, wxID_ANY, wxDefaultPosition, new wxSize( -1,-1 ), wxTAB_TRAVERSAL );
		
		$bSizer41 = new wxBoxSizer( wxVERTICAL );
		
		$bSizer42 = new wxBoxSizer( wxHORIZONTAL );
		
		$bSizer44 = new wxBoxSizer( wxHORIZONTAL );
		
		$this->m_staticText30 = new wxStaticText( $this, wxID_ANY, _("Customer Name:"), wxDefaultPosition, wxDefaultSize, 0 );
		$this->m_staticText30->Wrap( -1 );
		$bSizer44->Add( $this->m_staticText30, 0, wxALIGN_CENTER|wxALL, 5 );
		
		$this->txtCustomerName = new wxTextCtrl( $this, wxID_ANY, wxEmptyString, wxDefaultPosition, wxDefaultSize, 0 );
		$bSizer44->Add( $this->txtCustomerName, 1, wxALL, 5 );
		
		
		$bSizer42->Add( $bSizer44, 1, wxEXPAND, 5 );
		
		$bSizer43 = new wxBoxSizer( wxHORIZONTAL );
		
		$this->btnCancel = new wxButton( $this, wxID_ANY, _("Cancel"), wxDefaultPosition, wxDefaultSize, 0 );
		$bSizer43->Add( $this->btnCancel, 0, wxALL, 5 );
		
		$this->btnSave = new wxButton( $this, wxID_ANY, _("Save"), wxDefaultPosition, wxDefaultSize, 0 );
		$bSizer43->Add( $this->btnSave, 0, wxALL, 5 );
		
		
		$bSizer42->Add( $bSizer43, 0, wxALIGN_RIGHT|wxEXPAND|wxSHAPED, 5 );
		
		
		$bSizer41->Add( $bSizer42, 0, wxEXPAND, 5 );
		
		$bSizer45 = new wxBoxSizer( wxHORIZONTAL );
		
		$this->m_staticText31 = new wxStaticText( $this, wxID_ANY, _("Opening balance:"), wxDefaultPosition, wxDefaultSize, 0 );
		$this->m_staticText31->Wrap( -1 );
		$bSizer45->Add( $this->m_staticText31, 0, wxALIGN_CENTER|wxALL, 5 );
		
		$this->txtOpeningBalance = new wxTextCtrl( $this, wxID_ANY, wxEmptyString, wxDefaultPosition, wxDefaultSize, 0 );
		$bSizer45->Add( $this->txtOpeningBalance, 0, wxALL, 5 );
		
		$this->m_staticText32 = new wxStaticText( $this, wxID_ANY, _("as of"), wxDefaultPosition, wxDefaultSize, 0 );
		$this->m_staticText32->Wrap( -1 );
		$bSizer45->Add( $this->m_staticText32, 0, wxALIGN_CENTER|wxALL, 5 );
		
		$this->dpOpeningBalance = new wxDatePickerCtrl( $this, wxID_ANY , wxDefaultDateTime, wxDefaultPosition, wxDefaultSize, wxDP_DEFAULT );
		$bSizer45->Add( $this->dpOpeningBalance, 0, wxALL, 5 );
		
		
		$bSizer41->Add( $bSizer45, 0, wxEXPAND, 5 );
		
		$bSizer46 = new wxBoxSizer( wxVERTICAL );
		
		$this->m_notebook1 = new wxNotebook( $this, wxID_ANY, wxDefaultPosition, wxDefaultSize, wxNB_LEFT );
		$this->m_panel1 = new wxPanel( $this->m_notebook1, wxID_ANY, wxDefaultPosition, wxDefaultSize, wxTAB_TRAVERSAL );
		$bSizer47 = new wxBoxSizer( wxVERTICAL );
		
		$bSizer48 = new wxBoxSizer( wxHORIZONTAL );
		
		$bSizer49 = new wxBoxSizer( wxVERTICAL );
		
		$bSizer52 = new wxBoxSizer( wxHORIZONTAL );
		
		$this->m_staticText33 = new wxStaticText( $this->m_panel1, wxID_ANY, _("Company Name:"), wxDefaultPosition, wxDefaultSize, 0 );
		$this->m_staticText33->Wrap( -1 );
		$bSizer52->Add( $this->m_staticText33, 0, wxALIGN_CENTER|wxALL, 5 );
		
		$this->txtCompanyName = new wxTextCtrl( $this->m_panel1, wxID_ANY, wxEmptyString, wxDefaultPosition, wxDefaultSize, 0 );
		$bSizer52->Add( $this->txtCompanyName, 1, wxALL, 5 );
		
		
		$bSizer49->Add( $bSizer52, 0, wxEXPAND, 5 );
		
		$bSizer521 = new wxBoxSizer( wxHORIZONTAL );
		
		$this->m_staticText331 = new wxStaticText( $this->m_panel1, wxID_ANY, _("Mr./Ms./..."), wxDefaultPosition, wxDefaultSize, 0 );
		$this->m_staticText331->Wrap( -1 );
		$bSizer521->Add( $this->m_staticText331, 0, wxALIGN_CENTER|wxALL, 5 );
		
		$this->txtTitle = new wxTextCtrl( $this->m_panel1, wxID_ANY, wxEmptyString, wxDefaultPosition, wxDefaultSize, 0 );
		$bSizer521->Add( $this->txtTitle, 1, wxALL, 5 );
		
		
		$bSizer49->Add( $bSizer521, 0, wxEXPAND, 5 );
		
		$bSizer522 = new wxBoxSizer( wxHORIZONTAL );
		
		$this->m_staticText332 = new wxStaticText( $this->m_panel1, wxID_ANY, _("First Name:"), wxDefaultPosition, wxDefaultSize, 0 );
		$this->m_staticText332->Wrap( -1 );
		$bSizer522->Add( $this->m_staticText332, 0, wxALIGN_CENTER|wxALL, 5 );
		
		$this->txtFirstName = new wxTextCtrl( $this->m_panel1, wxID_ANY, wxEmptyString, wxDefaultPosition, wxDefaultSize, 0 );
		$bSizer522->Add( $this->txtFirstName, 1, wxALL, 5 );
		
		
		$bSizer49->Add( $bSizer522, 0, wxEXPAND, 5 );
		
		$bSizer523 = new wxBoxSizer( wxHORIZONTAL );
		
		$this->m_staticText333 = new wxStaticText( $this->m_panel1, wxID_ANY, _("Middle Name Initial:"), wxDefaultPosition, wxDefaultSize, 0 );
		$this->m_staticText333->Wrap( -1 );
		$bSizer523->Add( $this->m_staticText333, 0, wxALIGN_CENTER|wxALL, 5 );
		
		$this->txtMiddleName = new wxTextCtrl( $this->m_panel1, wxID_ANY, wxEmptyString, wxDefaultPosition, wxDefaultSize, 0 );
		$bSizer523->Add( $this->txtMiddleName, 1, wxALL, 5 );
		
		
		$bSizer49->Add( $bSizer523, 0, wxEXPAND, 5 );
		
		$bSizer5221 = new wxBoxSizer( wxHORIZONTAL );
		
		$this->m_staticText3321 = new wxStaticText( $this->m_panel1, wxID_ANY, _("Last Name:"), wxDefaultPosition, wxDefaultSize, 0 );
		$this->m_staticText3321->Wrap( -1 );
		$bSizer5221->Add( $this->m_staticText3321, 0, wxALIGN_CENTER|wxALL, 5 );
		
		$this->txtLastName = new wxTextCtrl( $this->m_panel1, wxID_ANY, wxEmptyString, wxDefaultPosition, wxDefaultSize, 0 );
		$bSizer5221->Add( $this->txtLastName, 1, wxALL, 5 );
		
		
		$bSizer49->Add( $bSizer5221, 0, wxEXPAND, 5 );
		
		
		$bSizer48->Add( $bSizer49, 1, wxEXPAND, 5 );
		
		$bSizer51 = new wxBoxSizer( wxVERTICAL );
		
		$bSizer524 = new wxBoxSizer( wxHORIZONTAL );
		
		$this->m_staticText334 = new wxStaticText( $this->m_panel1, wxID_ANY, _("Contact:"), wxDefaultPosition, wxDefaultSize, 0 );
		$this->m_staticText334->Wrap( -1 );
		$bSizer524->Add( $this->m_staticText334, 0, wxALIGN_CENTER|wxALL, 5 );
		
		$this->txtContact = new wxTextCtrl( $this->m_panel1, wxID_ANY, wxEmptyString, wxDefaultPosition, wxDefaultSize, 0 );
		$bSizer524->Add( $this->txtContact, 1, wxALL, 5 );
		
		
		$bSizer51->Add( $bSizer524, 0, wxEXPAND, 5 );
		
		$bSizer525 = new wxBoxSizer( wxHORIZONTAL );
		
		$this->m_staticText335 = new wxStaticText( $this->m_panel1, wxID_ANY, _("Phone:"), wxDefaultPosition, wxDefaultSize, 0 );
		$this->m_staticText335->Wrap( -1 );
		$bSizer525->Add( $this->m_staticText335, 0, wxALIGN_CENTER|wxALL, 5 );
		
		$this->txtPhone = new wxTextCtrl( $this->m_panel1, wxID_ANY, wxEmptyString, wxDefaultPosition, wxDefaultSize, 0 );
		$bSizer525->Add( $this->txtPhone, 1, wxALL, 5 );
		
		
		$bSizer51->Add( $bSizer525, 0, wxEXPAND, 5 );
		
		$bSizer526 = new wxBoxSizer( wxHORIZONTAL );
		
		$this->m_staticText336 = new wxStaticText( $this->m_panel1, wxID_ANY, _("Fax:"), wxDefaultPosition, wxDefaultSize, 0 );
		$this->m_staticText336->Wrap( -1 );
		$bSizer526->Add( $this->m_staticText336, 0, wxALIGN_CENTER|wxALL, 5 );
		
		$this->txtFax = new wxTextCtrl( $this->m_panel1, wxID_ANY, wxEmptyString, wxDefaultPosition, wxDefaultSize, 0 );
		$bSizer526->Add( $this->txtFax, 1, wxALL, 5 );
		
		
		$bSizer51->Add( $bSizer526, 0, wxEXPAND, 5 );
		
		$bSizer527 = new wxBoxSizer( wxHORIZONTAL );
		
		$this->m_staticText337 = new wxStaticText( $this->m_panel1, wxID_ANY, _("Alt. Phone:"), wxDefaultPosition, wxDefaultSize, 0 );
		$this->m_staticText337->Wrap( -1 );
		$bSizer527->Add( $this->m_staticText337, 0, wxALIGN_CENTER|wxALL, 5 );
		
		$this->txtAltPhone = new wxTextCtrl( $this->m_panel1, wxID_ANY, wxEmptyString, wxDefaultPosition, wxDefaultSize, 0 );
		$bSizer527->Add( $this->txtAltPhone, 1, wxALL, 5 );
		
		
		$bSizer51->Add( $bSizer527, 0, wxEXPAND, 5 );
		
		$bSizer528 = new wxBoxSizer( wxHORIZONTAL );
		
		$this->m_staticText338 = new wxStaticText( $this->m_panel1, wxID_ANY, _("Alt. Contact:"), wxDefaultPosition, wxDefaultSize, 0 );
		$this->m_staticText338->Wrap( -1 );
		$bSizer528->Add( $this->m_staticText338, 0, wxALIGN_CENTER|wxALL, 5 );
		
		$this->txtAltContact = new wxTextCtrl( $this->m_panel1, wxID_ANY, wxEmptyString, wxDefaultPosition, wxDefaultSize, 0 );
		$bSizer528->Add( $this->txtAltContact, 1, wxALL, 5 );
		
		
		$bSizer51->Add( $bSizer528, 0, wxEXPAND, 5 );
		
		$bSizer529 = new wxBoxSizer( wxHORIZONTAL );
		
		$this->m_staticText339 = new wxStaticText( $this->m_panel1, wxID_ANY, _("E-mail:"), wxDefaultPosition, wxDefaultSize, 0 );
		$this->m_staticText339->Wrap( -1 );
		$bSizer529->Add( $this->m_staticText339, 0, wxALIGN_CENTER|wxALL, 5 );
		
		$this->txtEmail = new wxTextCtrl( $this->m_panel1, wxID_ANY, wxEmptyString, wxDefaultPosition, wxDefaultSize, 0 );
		$bSizer529->Add( $this->txtEmail, 1, wxALL, 5 );
		
		
		$bSizer51->Add( $bSizer529, 0, wxEXPAND, 5 );
		
		$bSizer5210 = new wxBoxSizer( wxHORIZONTAL );
		
		$this->m_staticText3310 = new wxStaticText( $this->m_panel1, wxID_ANY, _("Cc:"), wxDefaultPosition, wxDefaultSize, 0 );
		$this->m_staticText3310->Wrap( -1 );
		$bSizer5210->Add( $this->m_staticText3310, 0, wxALIGN_CENTER|wxALL, 5 );
		
		$this->txtCc = new wxTextCtrl( $this->m_panel1, wxID_ANY, wxEmptyString, wxDefaultPosition, wxDefaultSize, 0 );
		$bSizer5210->Add( $this->txtCc, 1, wxALL, 5 );
		
		
		$bSizer51->Add( $bSizer5210, 0, wxEXPAND, 5 );
		
		
		$bSizer48->Add( $bSizer51, 1, wxEXPAND, 5 );
		
		
		$bSizer47->Add( $bSizer48, 0, wxEXPAND, 5 );
		
		$sbSizer7 = new wxStaticBoxSizer( new wxStaticBox( $this->m_panel1, wxID_ANY, _("Addresses") ), wxHORIZONTAL );
		
		$bSizer69 = new wxBoxSizer( wxVERTICAL );
		
		$this->m_staticText41 = new wxStaticText( $this->m_panel1, wxID_ANY, _("Bill To"), wxDefaultPosition, wxDefaultSize, 0 );
		$this->m_staticText41->Wrap( -1 );
		$bSizer69->Add( $this->m_staticText41, 0, wxALL, 5 );
		
		$this->txtBillTo = new wxTextCtrl( $this->m_panel1, wxID_ANY, wxEmptyString, wxDefaultPosition, wxDefaultSize, wxTE_MULTILINE );
		$bSizer69->Add( $this->txtBillTo, 0, wxALL|wxEXPAND, 5 );
		
		
		$sbSizer7->Add( $bSizer69, 1, wxEXPAND, 5 );
		
		$bSizer71 = new wxBoxSizer( wxVERTICAL );
		
		$this->m_staticText42 = new wxStaticText( $this->m_panel1, wxID_ANY, _("Ship To"), wxDefaultPosition, wxDefaultSize, 0 );
		$this->m_staticText42->Wrap( -1 );
		$bSizer71->Add( $this->m_staticText42, 0, wxALL, 5 );
		
		$this->txtShipTo = new wxTextCtrl( $this->m_panel1, wxID_ANY, wxEmptyString, wxDefaultPosition, wxDefaultSize, wxTE_MULTILINE );
		$bSizer71->Add( $this->txtShipTo, 0, wxALL|wxEXPAND, 5 );
		
		
		$sbSizer7->Add( $bSizer71, 1, wxEXPAND, 5 );
		
		
		$bSizer47->Add( $sbSizer7, 0, wxEXPAND, 5 );
		
		
		$this->m_panel1->SetSizer( $bSizer47 );
		$this->m_panel1->Layout();
		$bSizer47->Fit( $this->m_panel1 );
		$this->m_notebook1->AddPage( $this->m_panel1, _("Address Info"), true );
		$this->m_panel2 = new wxPanel( $this->m_notebook1, wxID_ANY, wxDefaultPosition, wxDefaultSize, wxTAB_TRAVERSAL );
		$bSizer87 = new wxBoxSizer( wxVERTICAL );
		
		$bSizer88 = new wxBoxSizer( wxHORIZONTAL );
		
		$this->m_staticText51 = new wxStaticText( $this->m_panel2, wxID_ANY, _("Terms:"), wxDefaultPosition, wxDefaultSize, 0 );
		$this->m_staticText51->Wrap( -1 );
		$bSizer88->Add( $this->m_staticText51, 0, wxALIGN_CENTER|wxALL, 5 );
		
		$cboxTermsChoices = array();
		$this->cboxTerms = new wxComboBox( $this->m_panel2, wxID_ANY, wxEmptyString, wxDefaultPosition, wxDefaultSize, $cboxTermsChoices, 0 );
		$bSizer88->Add( $this->cboxTerms, 0, wxALL, 5 );
		
		
		$bSizer87->Add( $bSizer88, 0, wxEXPAND, 5 );
		
		
		$this->m_panel2->SetSizer( $bSizer87 );
		$this->m_panel2->Layout();
		$bSizer87->Fit( $this->m_panel2 );
		$this->m_notebook1->AddPage( $this->m_panel2, _("Additional Info"), false );
		$this->m_panel3 = new wxPanel( $this->m_notebook1, wxID_ANY, wxDefaultPosition, wxDefaultSize, wxTAB_TRAVERSAL );
		$bSizer89 = new wxBoxSizer( wxVERTICAL );
		
		$sbSizer8 = new wxStaticBoxSizer( new wxStaticBox( $this->m_panel3, wxID_ANY, _("Preferred Payment Method") ), wxVERTICAL );
		
		$bSizer90 = new wxBoxSizer( wxHORIZONTAL );
		
		$this->m_staticText52 = new wxStaticText( $this->m_panel3, wxID_ANY, _("Type:"), wxDefaultPosition, wxDefaultSize, 0 );
		$this->m_staticText52->Wrap( -1 );
		$bSizer90->Add( $this->m_staticText52, 0, wxALIGN_CENTER|wxALL, 5 );
		
		$cboxPaymentMethodChoices = array();
		$this->cboxPaymentMethod = new wxComboBox( $this->m_panel3, wxID_ANY, wxEmptyString, wxDefaultPosition, wxDefaultSize, $cboxPaymentMethodChoices, 0 );
		$bSizer90->Add( $this->cboxPaymentMethod, 0, wxALL, 5 );
		
		
		$sbSizer8->Add( $bSizer90, 0, wxEXPAND, 5 );
		
		$bSizer91 = new wxBoxSizer( wxHORIZONTAL );
		
		$this->m_staticText53 = new wxStaticText( $this->m_panel3, wxID_ANY, _("Credit Card Number:"), wxDefaultPosition, wxDefaultSize, 0 );
		$this->m_staticText53->Wrap( -1 );
		$bSizer91->Add( $this->m_staticText53, 0, wxALIGN_CENTER|wxALL, 5 );
		
		$this->txtCCNumber = new wxTextCtrl( $this->m_panel3, wxID_ANY, wxEmptyString, wxDefaultPosition, wxDefaultSize, 0 );
		$bSizer91->Add( $this->txtCCNumber, 1, wxALL, 5 );
		
		
		$sbSizer8->Add( $bSizer91, 0, wxEXPAND, 5 );
		
		$sbSizer9 = new wxStaticBoxSizer( new wxStaticBox( $this->m_panel3, wxID_ANY, _("Card Expiration Date") ), wxHORIZONTAL );
		
		$this->m_staticText54 = new wxStaticText( $this->m_panel3, wxID_ANY, _("Month"), wxDefaultPosition, wxDefaultSize, 0 );
		$this->m_staticText54->Wrap( -1 );
		$sbSizer9->Add( $this->m_staticText54, 0, wxALIGN_CENTER|wxALL, 5 );
		
		$this->txtCCExpirationMonth = new wxTextCtrl( $this->m_panel3, wxID_ANY, wxEmptyString, wxDefaultPosition, wxDefaultSize, 0 );
		$sbSizer9->Add( $this->txtCCExpirationMonth, 0, wxALL, 5 );
		
		$this->m_staticText55 = new wxStaticText( $this->m_panel3, wxID_ANY, _("Year"), wxDefaultPosition, wxDefaultSize, 0 );
		$this->m_staticText55->Wrap( -1 );
		$sbSizer9->Add( $this->m_staticText55, 0, wxALIGN_CENTER|wxALL, 5 );
		
		$this->txtCCExpirationYear = new wxTextCtrl( $this->m_panel3, wxID_ANY, wxEmptyString, wxDefaultPosition, wxDefaultSize, 0 );
		$sbSizer9->Add( $this->txtCCExpirationYear, 0, wxALL, 5 );
		
		
		$sbSizer8->Add( $sbSizer9, 0, wxEXPAND, 5 );
		
		$bSizer92 = new wxBoxSizer( wxHORIZONTAL );
		
		$this->m_staticText56 = new wxStaticText( $this->m_panel3, wxID_ANY, _("Name on Card:"), wxDefaultPosition, wxDefaultSize, 0 );
		$this->m_staticText56->Wrap( -1 );
		$bSizer92->Add( $this->m_staticText56, 0, wxALIGN_CENTER|wxALL, 5 );
		
		$this->txtCCNameOnCard = new wxTextCtrl( $this->m_panel3, wxID_ANY, wxEmptyString, wxDefaultPosition, wxDefaultSize, 0 );
		$bSizer92->Add( $this->txtCCNameOnCard, 1, wxALL, 5 );
		
		
		$sbSizer8->Add( $bSizer92, 0, wxEXPAND, 5 );
		
		$bSizer93 = new wxBoxSizer( wxHORIZONTAL );
		
		$this->m_staticText57 = new wxStaticText( $this->m_panel3, wxID_ANY, _("Address"), wxDefaultPosition, wxDefaultSize, 0 );
		$this->m_staticText57->Wrap( -1 );
		$bSizer93->Add( $this->m_staticText57, 0, wxALIGN_CENTER|wxALL, 5 );
		
		$this->txtCCAddress = new wxTextCtrl( $this->m_panel3, wxID_ANY, wxEmptyString, wxDefaultPosition, wxDefaultSize, 0 );
		$bSizer93->Add( $this->txtCCAddress, 1, wxALL, 5 );
		
		
		$sbSizer8->Add( $bSizer93, 0, wxEXPAND, 5 );
		
		$bSizer94 = new wxBoxSizer( wxHORIZONTAL );
		
		$this->m_staticText58 = new wxStaticText( $this->m_panel3, wxID_ANY, _("Zip Code:"), wxDefaultPosition, wxDefaultSize, 0 );
		$this->m_staticText58->Wrap( -1 );
		$bSizer94->Add( $this->m_staticText58, 0, wxALIGN_CENTER|wxALL, 5 );
		
		$this->txtCCZipCode = new wxTextCtrl( $this->m_panel3, wxID_ANY, wxEmptyString, wxDefaultPosition, wxDefaultSize, 0 );
		$bSizer94->Add( $this->txtCCZipCode, 1, wxALL, 5 );
		
		
		$sbSizer8->Add( $bSizer94, 0, wxEXPAND, 5 );
		
		
		$bSizer89->Add( $sbSizer8, 0, wxEXPAND, 5 );
		
		
		$this->m_panel3->SetSizer( $bSizer89 );
		$this->m_panel3->Layout();
		$bSizer89->Fit( $this->m_panel3 );
		$this->m_notebook1->AddPage( $this->m_panel3, _("Payment Info"), false );
		$this->m_panel4 = new wxPanel( $this->m_notebook1, wxID_ANY, wxDefaultPosition, wxDefaultSize, wxTAB_TRAVERSAL );
		$bSizer74 = new wxBoxSizer( wxVERTICAL );
		
		$bSizer75 = new wxBoxSizer( wxHORIZONTAL );
		
		$this->dpTimeStamp = new wxDatePickerCtrl( $this->m_panel4, wxID_ANY , wxDefaultDateTime, wxDefaultPosition, wxDefaultSize, wxDP_DEFAULT );
		$bSizer75->Add( $this->dpTimeStamp, 0, wxALL, 5 );
		
		$this->btnTimeStamp = new wxButton( $this->m_panel4, wxID_ANY, _("Insert Timestamp"), wxDefaultPosition, wxDefaultSize, 0 );
		$bSizer75->Add( $this->btnTimeStamp, 0, wxALL, 5 );
		
		
		$bSizer74->Add( $bSizer75, 0, wxEXPAND, 5 );
		
		$this->txtNotes = new wxTextCtrl( $this->m_panel4, wxID_ANY, wxEmptyString, wxDefaultPosition, wxDefaultSize, wxTE_AUTO_URL|wxTE_MULTILINE|wxTE_RICH|wxTE_WORDWRAP );
		$bSizer74->Add( $this->txtNotes, 1, wxALL|wxEXPAND, 5 );
		
		
		$this->m_panel4->SetSizer( $bSizer74 );
		$this->m_panel4->Layout();
		$bSizer74->Fit( $this->m_panel4 );
		$this->m_notebook1->AddPage( $this->m_panel4, _("Notes"), false );
		
		$bSizer46->Add( $this->m_notebook1, 1, wxEXPAND | wxALL, 5 );
		
		
		$bSizer41->Add( $bSizer46, 1, wxEXPAND, 5 );
		
		
		$this->SetSizer( $bSizer41 );
		$this->Layout();
		$bSizer41->Fit( $this );
	}
	
	
	function __destruct( ){
	}
	
}

/*
 * Class ListPanel
 */

class ListPanel extends wxPanel {
	
	function __construct( $parent=null ){
		parent::__construct( $parent, wxID_ANY, wxDefaultPosition, new wxSize( 500,300 ), wxTAB_TRAVERSAL );
		
		$mainSizer = new wxBoxSizer( wxVERTICAL );
		
		$buttonsSizer = new wxBoxSizer( wxHORIZONTAL );
		
		$this->btnNew = new wxButton( $this, wxID_ANY, _("New"), wxDefaultPosition, wxDefaultSize, 0 );
		$buttonsSizer->Add( $this->btnNew, 0, wxALL, 5 );
		
		$this->btnEdit = new wxButton( $this, wxID_ANY, _("Edit"), wxDefaultPosition, wxDefaultSize, 0 );
		$this->btnEdit->Enable( false );
		
		$buttonsSizer->Add( $this->btnEdit, 0, wxALL, 5 );
		
		$this->btnDelete = new wxButton( $this, wxID_ANY, _("Delete"), wxDefaultPosition, wxDefaultSize, 0 );
		$this->btnDelete->Enable( false );
		
		$buttonsSizer->Add( $this->btnDelete, 0, wxALL, 5 );
		
		
		$mainSizer->Add( $buttonsSizer, 0, wxEXPAND, 5 );
		
		$this->listItems = new wxListCtrl( $this, wxID_ANY, wxDefaultPosition, wxDefaultSize, wxLC_REPORT );
		$mainSizer->Add( $this->listItems, 1, wxALL|wxEXPAND, 5 );
		
		
		$this->SetSizer( $mainSizer );
		$this->Layout();
	}
	
	
	function __destruct( ){
	}
	
}

?>
