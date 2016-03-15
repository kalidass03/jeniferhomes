<?php require_once('includes/connection.php'); ?>
        <div class="secondary-navigation">
            <div class="container">
                <style>
				.actions a
				{
					padding: 8px 14px;
					/*border-right: 1px solid #F2F2F2*/;
					margin-left:0px !important;
				}
				.actions .signinnow
				{
					color: #fff !important;
					background-color: #1396E2 !important;
				}
				
				.actions .signinnow_m
				{
				display:none;
				}
				.navigation .add-your-property {
				right: -40px !important;
				}
				@media (max-width: 767px){
				.actions .signinnow
				{
					display:none;
				}
				
				.actions .signinnow_m
				{
				display:block;
				}
				.actions a
				{
					display:inherit;
				}
				}
				</style>
                
                
             <?php    if(!isset($_SESSION['SESS_USER_ID']) || (trim($_SESSION['SESS_USER_ID']) == '') || (trim($_SESSION['SESS_USER_ROLE']) != 'seller') && (trim($_SESSION['SESS_USER_ROLE']) !='broker') || (trim($_SESSION['SESS_USER_STATUS']) != '1')  ) {?> 
                
                <div class="user-area">
                    <div class="actions">
                        <a href="sign-in.html"><figure><strong>Phone:</strong>+1 810-991-3842</figure></a>
                        <a href="signup-broker.php" class="signinnow">Brokers – Join Our Network</a>
                        <a href="signup-seller.php" class="signinnow"><strong>Register as a Seller</strong></a>
                        <a href="login.php" class="signinnow">Sign In</a>
                   <!--     <a href="sign-in.html" class="signinnow_m">Sign In</a>-->
                    </div>
                </div>
               <?php }else{?>
			   
			   
			 <div class="user-area">
                    <div class="actions">
                        <a href="sign-in.html"><figure><strong>Phone:</strong>+1 810-991-3842</figure></a>
                        <a href="logout.php" class="signinnow">Log Out</a>
                   <!--     <a href="sign-in.html" class="signinnow_m">Sign In</a>-->
                    </div>
                </div>   
			   
			   
		<?php	   }    ?>   
                
            </div>
        </div>
        <div class="container">
            <header class="navbar" id="top" role="banner">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-brand nav" id="brand">
                        <a href="index-google-map-fullscreen.html"><img src="logo.png" style="width: 100px;" alt="brand"></a>
                    </div>
                </div>
                <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                    <ul class="nav navbar-nav">
                        <li class="active">
                        <?php    if(isset($_SESSION['SESS_USER_ID']) && (trim($_SESSION['SESS_USER_ID']) != '') && (trim($_SESSION['SESS_USER_ROLE']) == 'broker') && (trim($_SESSION['SESS_USER_STATUS']) == '1')  ) {?> 
                        <a href="broker-dashboard.php">Homepage</a>
                        <?php }else{?>
                        <a href="seller-dashboard.php">Homepage</a>
                        <?php }?>
                        </li>
                        <li class=""><a href="#">About us</a>
                        </li>
                        <li class=""><a href="#">Help & Support</a>
                        </li>
                        <li class=""><a href="#">Contact Us</a>
                        </li>
                    </ul>
                </nav><!-- /.navbar collapse-->
                  <?php    if(isset($_SESSION['SESS_USER_ID']) && (trim($_SESSION['SESS_USER_ID']) != '') && (trim($_SESSION['SESS_USER_ROLE']) == 'seller') && (trim($_SESSION['SESS_USER_STATUS']) == '1')  ) {?> 
                
                <div class="add-your-property">
                   <!-- <a href="submit.html" class="btn btn-default"><i class="fa fa-plus"></i><span class="text">Add Your Property</span></a>-->
                </div>
                   <?php }?>
            </header><!-- /.navbar -->
        </div><!-- /.container -->
