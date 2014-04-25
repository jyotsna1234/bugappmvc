<?php	
include("db.php");
$databasee = new database('localhost', 'root', 'vsspl');
$databasee->connectdb();
$databasee->select('bug_tracker');
class Model {
	public function loginvalidation($data)
	{
		
		  $UserNamef = $data['UserName'];
					$Passwordf = $data['Password'];
					 $checklogin = mysql_query('SELECT * from login_users where UserName = "'. $UserNamef.'" ') or die(mysql_error());
				  $row = mysql_fetch_array($checklogin);
			
				  $UserNamedb = $row['UserName'];
				  $Passworddb = $row['Password'];
			  //comparison start
				  if($UserNamef != $UserNamedb)
				   {
					$feedback="Your account was not found, please try again.";
								  }
			  else
				  {
					  if($Passwordf != $Passworddb)
					  {
					  $feedback="Your password is incorrect";
					  }
					  else
					  {
					  $_SESSION['UserName2']= $_POST['UserName'];
					  return "sucess";	
					  }
				  }
		  	
	}
	public function bugsdata()
	{
		include "/var/www/bugsappmvc/model/bugs_page.php";
	}

}
?>