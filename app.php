<?php

dl("wxwidgets.so");

include("all_includes.php");


use xiaris\XiarisFrame;

class myApp extends wxApp 
{
	function OnInit()
	{
		global $mf;
		
		wxInitAllImageHandlers();
		
		$mf = new XiarisFrame();
		$mf->Show();
		
		return 0;
	}
	
	function OnExit()
	{
		return 1;
	}
}

$xt = new myApp();

wxApp::SetInstance($xt);
wxEntry();

?>
