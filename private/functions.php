<?php
    function url_for($script_path) {
	    // add the leading '/' if not present
	    if($script_path[0] != '/') {
	        $script_path = "/" . $script_path;
	    }
	    return WWW_ROOT . $script_path;
    }	
    // shorter url encode
    function u($string = ""){
    	return urlencode($string);
    }
    // shorter rawurlencode
    function raw_u($string = "") {
    	return rawurlencode($string);
    }
    // shorter htmlspecialchars
    function h($string = "") {
    	return htmlspecialchars($string);
    }
?>