<?php

namespace xiaris\panels;

use wxSize, EstimatePanel;

class NewEstimate extends EstimatePanel
{
	function __construct($parent)
	{	
		parent::__construct( $parent, wxID_ANY, wxDefaultPosition, new wxSize( 500,500 ), wxTAB_TRAVERSAL );
		
		$this->parent = $parent;
		
		$this->gridItems->SetColMinimalWidth(1, 500);
		$this->gridItems->SetColSize(1, 500);
		$this->gridItems->ForceRefresh();
		
		//$time = strtotime($this->dpDate->GetValue()->FormatDate(), time());
		
		$this->btnCancel->Connect(wxEVT_COMMAND_BUTTON_CLICKED, array($this,"onCancelClick"));
	}
	
	function SetMainFrame($frame)
	{
		$this->mainFrame = $frame;
	}
	
	function onCancelClick($event)
	{
		$this->parent->DeletePage($this->parent->GetPageIndex($this));
		unset($this->mainFrame->newEstimate);
	}
}
