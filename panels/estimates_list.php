<?php

namespace xiaris\panels;

use wxSize, EstimatesListPanel;

class EstimatesList extends EstimatesListPanel
{
	function __construct($parent)
	{
		parent::__construct( $parent, wxID_ANY, wxDefaultPosition, new wxSize( 600,500 ), wxTAB_TRAVERSAL );
		
		$this->listEstimates->InsertColumn(0, _("Customer"));
		$this->listEstimates->InsertColumn(1, _("Number"));
		$this->listEstimates->InsertColumn(2, _("Date"));
		$this->listEstimates->InsertColumn(3, _("Aging"));
		$this->listEstimates->InsertColumn(4, _("Active"));
		$this->listEstimates->InsertColumn(5, _("Amount"));
		$this->listEstimates->InsertColumn(6, _("Open Balance"));
	}
}

?>
