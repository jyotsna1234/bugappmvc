<?php
class CI_Controller
{
	function viewfile($file){
	include '/var/www/bugsappmvc/view/'.$file;
}
}
?>