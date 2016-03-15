<?php  require_once('includes/connection.php'); ?>
<header class="navbar" id="top" role="banner">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                    <ul class="nav navbar-nav">
                   <?php  	if(isset($_SESSION['SESS_USER_ID']) && (trim($_SESSION['SESS_USER_ID']) != '') && (trim($_SESSION['SESS_USER_ROLE']) == 'broker') && (trim($_SESSION['SESS_USER_STATUS']) == '1') ) {?>
                        <li class="active"><a href="broker-home.php"><i class="fa fa-home"></i> Find Properties</a></li>
                        <?php }?>
<?php  	if(isset($_SESSION['SESS_USER_ID']) && (trim($_SESSION['SESS_USER_ID']) != '') &&  (trim($_SESSION['SESS_USER_STATUS']) == '1')  &&  (trim($_SESSION['SESS_USER_ROLE']) == 'seller') || (trim($_SESSION['SESS_USER_ROLE']) == 'broker') ) {?>
                        <li class=""><a href="<?php if($_SESSION['SESS_USER_ROLE'] == "broker"){ echo "broker-dashboard.php";}else if($_SESSION['SESS_USER_ROLE']=="seller"){ echo "seller-dashboard.php"; } ?>"><i class="fa fa-user"></i> Dashboard</a></li>
                        <?php }?>
                        <?php  	if(isset($_SESSION['SESS_USER_ID']) && (trim($_SESSION['SESS_USER_ID']) != '') && (trim($_SESSION['SESS_USER_ROLE']) == 'seller') && (trim($_SESSION['SESS_USER_STATUS']) == '1') ) {?>
                        <li class=""><a href="#"><i class="fa fa-envelope"></i> Browse Brokers</a></li>
                      <!--  <li class=""><a href="#"><i class="fa fa-envelope"></i> My Offers</a></li>
                         <li class=""><a href="message-inbox.php"><i class="fa fa-envelope"></i> InBox</a></li>-->
                        <?php }?>
                        <?php  	if(isset($_SESSION['SESS_USER_ID']) && (trim($_SESSION['SESS_USER_ID']) != '') &&  (trim($_SESSION['SESS_USER_STATUS']) == '1')  &&  (trim($_SESSION['SESS_USER_ROLE']) == 'seller') || (trim($_SESSION['SESS_USER_ROLE']) == 'broker') ) {?>
                        <li class=""><a href="<?php if($_SESSION['SESS_USER_ROLE'] == "broker"){ echo "message-broker-inbox.php";}else if($_SESSION['SESS_USER_ROLE']=="seller"){ echo "message-inbox.php"; } ?>"><i class="fa fa-envelope"></i>
                        
                        <?php 
	 if($_SESSION['SESS_USER_ROLE'] == "broker"){
	$total_records = find_total('conversations' ,'broker_id='.$_SESSION['SESS_USER_ID'].'  And  status="0"  And   user_name_last_message!="'.$_SESSION['SESS_USER_NAME'].'"');
	                                            }
												 if($_SESSION['SESS_USER_ROLE'] == "seller"){
	$total_records = find_total('conversations' ,'seller_id='.$_SESSION['SESS_USER_ID'].' And  status="0" And  user_name_last_message!="'.$_SESSION['SESS_USER_NAME'].'"');
	                                            }
						
						 ?> 
                  <span class="label label-success"><?php echo  $total_records;?></span> InBox</a></li>
                        <?php }?>
                    </ul>
                </nav><!-- /.navbar collapse-->
                
            </header>