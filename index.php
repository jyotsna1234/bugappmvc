<?php
ini_set("display_errors",1);
include '/var/www/bugsappmvc/controller/controller.php';
include '/var/www/bugsappmvc/view/home.html';
$controller=new Controller();
$controller->loginvalidation($_POST);


	  

?>



