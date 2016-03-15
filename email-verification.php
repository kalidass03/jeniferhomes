<?php require_once('includes/connection.php');?>
<!DOCTYPE html>

<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="ThemeStarz">

    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
    <link href="assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="assets/css/jquery.slider.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">

    <title>Property | Home Page</title>
<style>

body {
    max-width: 100% !important;
    overflow-x: hidden !important;
}

</style>
</head>

<body class="page-sub-page page-agencies-listing" id="page-top">
<!-- Wrapper -->
<div class="wrapper">
    <!-- Navigation -->
    <div class="navigation">
    </div><!-- /.navigation -->
    <!-- end Navigation -->
    <!-- Page Content -->
    <div id="page-content">
<style>
.thetitles
{
	    margin-top: 32px;
}
</style>                <!-- Agent Detail -->

    <div class="container">
        <?php if(isset($_SESSION['SELLER_REGISTRATION_SUCCESS_MSG'])){?>
             
                <section class="center submission-message" id="before_email_verification">
                    <header>Email Verification Required !!!</header>
                    <p>You need to verify your Email before listing your property.</p>
                 
                    <a href="#">A verification Email has been sent to your registered Email.</a>
                </section>
                
			 <?php unset($_SESSION['SELLER_REGISTRATION_SUCCESS_MSG']); ?>
			 <?php }
			 
			   if(isset($_SESSION['BROKER_REGISTRATION_SUCCESS_MSG'])){?>
             
                <section class="center submission-message" id="before_email_verification">
                    <header>Email Verification Required !!!</header>
                    <p>You need to verify your Email before going to your home.</p>
                 
                    <a href="#">A verification Email has been sent to your registered Email.</a>
                </section>
                
			 <?php unset($_SESSION['BROKER_REGISTRATION_SUCCESS_MSG']); ?>
			 <?php }
             
         if(isset($_GET['code']) && $_GET['code']!=""){    
             
$table_name="users";
$activation_key_column_name ="activation_key";
$status_column_name  ="status";
$activation_key1=$_GET['code'];
  if(activation_page($table_name,$activation_key_column_name,$status_column_name)){
   $count123=mysql_query("SELECT * FROM users WHERE activation_key='$activation_key1'"); 
    $member = mysql_fetch_assoc($count123);
	//print_r($member);
    $_SESSION['SESS_USER_ID'] = $member['user_id'];
    $_SESSION['SESS_USER_NAME'] = $member['username'];
    $_SESSION['SESS_USER_ROLE'] = $member['user_type'];
 	$_SESSION['SESS_USER_PIC'] = $member['profile_pic'];
	$_SESSION['SESS_USER_STATUS'] = $member['status'];
 if( $_SESSION['SESS_USER_ROLE']=="broker"){
 
  echo "<script type='text/javascript'>
     				window.location = 'broker-home.php';
     				</script>";
					exit;
 
 }
       ?>      
             
             
                <section class="center submission-message" id="after_email_verification">
                    <header>Hurrah !!! You have successfully verified your Email</header>
                    
                  <p>You can list property without restrictions.</p> 
                  
                  
                  
                  
                <?php   
			//	 print_r( $_SESSION['property']);
				
				
				if(isset($_SESSION['property']) && !empty($_SESSION['property'])){ ?>
                  
                   <form role="form" id="form-sidebar" class="form-search" method="post" action="seller-finish.php" enctype="multipart/form-data">
                                            
                                            
                                          <div class="form-group has-feedback" id="property_location_div">
                                        <label class="control-label pickertitle" for="text-field">Property Title</label>
                                        <input id="property_title" class="form-control empty_field" type="text" placeholder="Property Title" aria-describedby="property_titleStatus" name="property_title" required><span id="property_titleStatus" class="sr-only">(error)</span>
                                         <input type="checkbox" id="not_sure_property_title" name="not_sure_property_title">Not Sure   
                                         </div>
                                                
                                                             
                                                <div class="form-group">
                                                    <button type="submit" id="property_finish" class="btn nextbtn btn-default link-arrow">
                                                    Finish
                                                    </button>
                                                </div>
                                   <input type="hidden" class="form-control" id="property_finish" name="action" value="property_finish">  
                                                
                                                
                                                
                                                
                                                
                                            </form><!-- /#form-map -->
                  
                  
                <?php   }else{ ?>
                  
                    <div class="form-group">
                            <a href="<?php echo HTTP_PATH ?>">  <button type="button" class="btn btn-success">List Property Now!!!</button></a> 
                    </div>
                   <?php  }?>
                    <a href="<?php echo HTTP_PATH.'seller-dashboard.php' ?>">Go to your dashboard!!!</a>
                </section>
             <?php   }} ?>
    </div>

    </div>
    <!-- end Page Content -->
    <!-- Page Footer -->
    <footer id="page-footer">
        <!-- /.inner -->
    </footer>
    <!-- end Page Footer -->
</div>

<script type="text/javascript" src="assets/js/jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/smoothscroll.js"></script>
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="assets/js/icheck.min.js"></script>
<script type="text/javascript" src="assets/js/retina-1.1.0.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="assets/js/jshashtable-2.1_src.js"></script>
<script type="text/javascript" src="assets/js/jquery.numberformatter-1.2.3.js"></script>
<script type="text/javascript" src="assets/js/tmpl.js"></script>
<script type="text/javascript" src="assets/js/jquery.dependClass-0.1.js"></script>
<script type="text/javascript" src="assets/js/draggable-0.1.js"></script>
<script type="text/javascript" src="assets/js/jquery.slider.js"></script>
<script type="text/javascript" src="assets/js/custom.js"></script>

<!--[if gt IE 8]>
<script type="text/javascript" src="assets/js/ie.js"></script>
<![endif]-->
<script>
$( "#page-footer" ).load( "footer.php" );
$( ".navigation" ).load( "header.php" );

$(document).ready(function(){

	
	
	$("#not_sure_property_title").on("click", function(){
    if(not_sure_property_title.checked) {
	
	$('#property_title').val('N/A');
	
	}else {
	
	$('#property_title').val('');
	   
		   }
		   
	
	}); 
	
	}); 
</script>

</body>
</html>