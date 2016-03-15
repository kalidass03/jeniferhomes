<?php  require_once('includes/connection.php'); ?>
<?php  require_once('auth_seller.php'); ?>
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
  <div class="navigation"> </div>
  <!-- /.navigation --> 
  <!-- end Navigation --> 
  <!-- Page Content -->
  <div id="page-content">
    <style>
.thetitles
{
	    margin-top: 32px;
}
</style>
    <!-- Agent Detail -->
    
    <div class="container">
      <div class="row"> 
        <!-- Agent Detail -->
        <?php    $sql = "SELECT * FROM users where user_id='".$_GET['id']."'";
				 $res = mysql_query($sql);
			    $current_user = mysql_fetch_object($res);
		?>
        <div class="col-md-offset-1 col-md-10 col-sm-10">
          <section id="agent-detail">
          <header><h1>You can edit your data here ! </h1></header>
            <section id="agent-info">
              <div class="row">
                <div class="col-md-3 col-sm-3">
                  <figure class="agent-image">
                    <?php  if(!empty($property->profile_pic)){?>
                    <img class="padIMG" src="<?php echo IMG; ?><?php echo $property->profile_pic?>" height="auto" width="100%">
                    <?php }else{?>
                    <img class="padIMG" src="<?php echo IMG; ?>avatar.png" height="auto" width="100%">
                    <?php }?>
                  </figure>
                </div>
                <!-- /.col-md-3 -->
                <div class="col-md-5 col-sm-5">
                  <form action="seller_actions.php" method="post" id="form-create-agency" role="form">
                    <div class="row">
                      <div class="col-md-12 col-sm-12">
                       <div class="col-md-6 col-sm-6">
                              <div class="form-group">
                                <label for="form-create-agency-address-2">First Name:</label>
                                <input type="text" required="" name="first_name" id="first_name" class="form-control" value="<?php echo $current_user->first_name;?>">
                              </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                              <div class="form-group">
                                <label for="form-create-agency-address-2">Last Name:</label>
                                <input type="text" required="" name="last_name" id="last_name" class="form-control" value="<?php echo $current_user->last_name;?>">
                              </div>
                              <!-- /.form-group --> 
                            </div>
                       </div>
                    
                      <div class="col-md-12 col-sm-12">
                       <div class="col-md-6 col-sm-6">
                              <div class="form-group">
                                <label for="form-create-agency-address-2">Password:</label>
                                <input type="text" name="password" id="password" class="form-control" value="">
                              </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                              <div class="form-group">
                                <label for="form-create-agency-address-2">Email:</label>
                                <input type="text" required="" name="email" id="email" class="form-control" value="<?php echo $current_user->email;?>">
                              </div>
                              <!-- /.form-group --> 
                            </div>
                       </div>
                       
                      <div class="col-md-12 col-sm-12">
                       <div class="col-md-6 col-sm-6">
                              <div class="form-group">
                                <label for="form-create-agency-address-2">Phone Number:</label>
                                <input type="text" required="" name="phone_number" id="phone_number" class="form-control" value="<?php echo $current_user->phone_number;?>">
                              </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                              <div class="form-group">
                                <label for="form-create-agency-address-2">Company Name:</label>
                                <input type="text" required="" name="company_name" id="company_name" class="form-control" value="<?php echo $current_user->company_name;?>">
                              </div>
                              <!-- /.form-group --> 
                            </div>
                       </div>
                       
                      <div class="col-md-12 col-sm-12">
                       <div class="col-md-12 col-sm-12">
                              <div class="form-group">
                                <label for="form-create-agency-address-2">Address:</label>
                                <textarea name="address" id="address" class="form-control"><?php echo $current_user->address;?></textarea>
                              </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                              <div class="form-group">
                                <label for="form-create-agency-address-2">About Me:</label>
                                <textarea name="shortly_about_me" id="shortly_about_me" class="form-control"><?php echo $current_user->shortly_about_me;?></textarea>
                              </div>
                        </div>
                        
                       </div>
                    </div>
                    <!-- /.row --> 
                    <!-- /#select-package -->
                    <section id="submit">
                      <div class="form-group center">
                      <input type="hidden" id="user_id" name="user_id" value="<?php echo $current_user->user_id;?>"/>
                        <input type="hidden" id="edit_seller_profile" value="edit_seller_profile" name="action">
                        <button id="account-submit" class="btn btn-default large" type="submit">Edit Info</button>
                      </div>
                      <!-- /.form-group --> 
                    </section>
                  </form>
                </div>
                <!-- /.col-md-5 --> 
              </div>
              <!-- /.row --> 
            </section>
            <!-- /#agent-info --> 
          </section>
          <!-- /#agent-detail --> 
        </div>
        <!-- /.col-md-9 --> 
        <!-- end Agent Detail --> 
        
        <!-- sidebar --> 
        <!-- /.col-md-3 --> 
        <!-- end Sidebar --> 
      </div>
      <!-- /.row --> 
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
<script type="text/javascript" src="assets/js/jquery.raty.min.js"></script> 
<!--[if gt IE 8]>
<script type="text/javascript" src="assets/js/ie.js"></script>
<![endif]--> 
<script>
$( "#page-footer" ).load( "footer.php" );
$( ".navigation" ).load( "header.php" );
</script>
</body>

</html>