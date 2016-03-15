<?php
  if(!isset($_SESSION['SESS_USER_ID']) || (trim($_SESSION['SESS_USER_ID']) == '') || (trim($_SESSION['SESS_USER_ROLE']) != 'broker') || (trim($_SESSION['SESS_USER_STATUS']) != '1') ) {
    		echo "<script type='text/javascript'>
    					 window.location = 'login.php';
     				</script>";
					exit;
    	}
    ?>