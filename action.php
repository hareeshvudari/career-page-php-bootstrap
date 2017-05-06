<?php
	mysql_connect('localhost', 'root', '') or die("I can't connect");
	mysql_query("use liberent") or die("DB ERROR". mysql_error());
	
	function insertDataAction()
	{
		if(isSet($_POST['subBtn']))
		{
			$fullname = $_POST['fullname'];
			$email = $_POST['email'];
			$mobile = $_POST['mobile'];
			$textarea = $_POST['textarea'];
			$address=$_POST['address'];
			$inputfile=$_POST['inputfile'];
			
			
			$sql = mysql_query("SELECT * FROM `members` WHERE `EMAIL_ID` ='$email'");
			
			
			if( mysql_num_rows($sql) > 0 )
			{
				echo 'already updated';
			}
			else
			{
			$result = mysql_query("INSERT INTO `members`(`FULLNAME`,`EMAIL_ID`, `MOBILE`,`TEXTAREA`,`ADDRESS`,`FILE`) VALUES ( '$fullname','$email', '$mobile','$textarea','$address','$inputfile')");
			
			} 
			
		}
	}
	
	
?>