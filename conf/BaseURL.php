<?php
function base_url() {
	$base_url = "http://".$_SERVER['HTTP_HOST'];
	$base_url .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
	return $base_url;
}
function getContentAdmin ($url,$target,$action=null) {
	$path = str_replace("http://localhost/bismillah_ta/","", $url);
	$selectedfolder = $path."file_data/".$target."/";
	if($action == null) {
		$selectedfile = $selectedfolder."views/list_".$target.".php";
		@include($selectedfile);

	}
	else{

		if($action == "list" or $action == "form" or $action == "edit" or $action == "detail") {

			$selectedfile = $selectedfolder."views/".$action."_".$target.".php";
			@include($selectedfile);
		}
		elseif ($action == "delete" or $action == "input" or $action == "update")
		{
			$selectedfile = $selectedfolder."controllers/".$target."_controllers.php";
			@include($selectedfile);
			
		}
	}
}
?>