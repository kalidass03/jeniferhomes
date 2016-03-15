<?php
    	//Start session
    
    	//Check whether the session variable SESS_MEMBER_ID is present or not
    	if(!isset($_SESSION['SESS_USER_ID']) || (trim($_SESSION['SESS_USER_ID']) == '') || (trim($_SESSION['SESS_USER_ROLE']) != 'seller') || (trim($_SESSION['SESS_USER_STATUS']) != '1')  ) {
    		echo "<script type='text/javascript'>
    					 window.location = 'login.php';
     				</script>";
					exit;
    	}
    ?>