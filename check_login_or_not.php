<?php 
if(!isset($_SESSION['SESS_USER_ID']) || !isset($_SESSION['SESS_USER_NAME'])){
	
	 echo "<script type='text/javascript'>
     		window.location = 'login.php';
     		</script>";
	
}