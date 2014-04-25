<?php 
include "/var/www/bugsappmvc/model/model.php";
class Controller 
  {
  	public $lvresult;
	public function loginvalidation($data)
	{
		if(isset($_POST['submit']))
		{
		$model=new Model();	
		$this->lvresult=$model->loginvalidation($data);
		
		if($this->lvresult=="sucess")
				{  
					$model->bugsdata();
					
				}
		
		}
	}
	
  }
	   
?>