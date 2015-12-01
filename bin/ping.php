<?php

error_reporting(E_ERROR | E_PARSE);

function ping($host, $port){
	if($fp = fsockopen($host,$port,$errCode,$errStr, 1)){   
	   return true;
	} else {
	   return false;
	} 
	fclose($fp);
}

?>