<?php require_once('includes/connection.php'); ?>
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
      <style>
	.brokerbar .navbar
	{
		margin-bottom:0px;
		
	}
	.brokerbar .navbar-nav
	{
	}
	.brokerbar .navbar-right 
	{
		/*	float:none !important;*/
	}
	.brokerbar .navbar .collapse .nav li a
	{
		    background-color: #1396e2;
    color: #fff;
    border: 1px solid #fff;
    font-weight: 700;
	}
	</style>
     	<div class="container brokerbar"> 
    	<!-- /.navbar --> 
  		</div>
    <!-- Page Content -->
    <div id="page-content">
<style>
.thetitles
{
	    margin-top: 32px;
}
</style>                <!-- Agent Detail -->

	<?php $current_user = get_table_data('users','user_id='.$_SESSION['SESS_USER_ID'].'');		
	?>
    <div class="container">
        <header class="thetitles"><h1>Upgrade Your Package</h1></header>
        <section id="select-package">
                        <div class="table-responsive submit-pricing">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Your Package:</th>
                                    <th class="title">Silver(Free)</th>
                                    <th class="title">Gold</th>
                                    <th class="title">Platinum</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="prices">
                                    <td></td>
                                    <td>$0</td>
                                    <td>$20</td>
                                    <td>$40</td>
                                </tr>
                                <tr>
                                    <td>Unlimited Property View</td>
                                    <td class="available"><i class="fa fa-check"></i></td>
                                    <td class="available"><i class="fa fa-check"></i></td>
                                    <td class="available"><i class="fa fa-check"></i></td>
                                </tr>
                                <tr>
                                    <td>Advanced Searched Filters</td>
                                    <td class="not-available"><i class="fa fa-times"></i></td>
                                    <td class="available"><i class="fa fa-check"></i></td>
                                    <td class="available"><i class="fa fa-check"></i></td>
                                </tr>
                                <tr>
                                    <td>Bid on Properties</td>
                                    <td class="not-available"><i class="fa fa-times"></i></td>
                                    <td class="available"><i class="fa fa-check"></i></td>
                                    <td class="available"><i class="fa fa-check"></i></td>
                                </tr>
                                <tr>
                                    <td>Communicate with Seller</td>
                                    <td class="not-available"><i class="fa fa-times"></i></td>
                                    <td class="available"><i class="fa fa-check"></i></td>
                                    <td class="available"><i class="fa fa-check"></i></td>
                                </tr>
                                <tr>
                                    <td>Property Address details</td>
                                    <td class="not-available"><i class="fa fa-times"></i></td>
                                    <td class="available"><i class="fa fa-check"></i></td>
                                    <td class="available"><i class="fa fa-check"></i></td>
                                </tr>
                                <tr>
                                    <td>Top bidders listing</td>
                                    <td class="not-available"><i class="fa fa-times"></i></td>
                                    <td class="not-available"><i class="fa fa-times"></i></td>
                                    <td class="available"><i class="fa fa-check"></i></td>
                                </tr>
                                <tr class="buttons">
                                    <td></td>
                                   <td <?php if($current_user[0]->account_type == "Silver"){?>class="package-selected"<?php }?> data-package="free">
                                   <button type="button" class="btn btn-default small disabled">Select</button></td>
                                   <td <?php if($current_user[0]->account_type == "Gold"){?>class="package-selected"<?php }?>data-package="silver">
                                    <a href="broker-checkout.php?plan=gold"><button type="button" class="btn btn-default small">Select</button></a></td>
                                   <td <?php if($current_user[0]->account_type == "Platinum"){?>class="package-selected"<?php }?>data-package="gold">
                                    <a href="broker-checkout.php?plan=platinum"><button type="button" class="btn btn-default small">Select</button></a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div><!-- /.submit-pricing -->
                    </section>

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
$( ".brokerbar" ).load( "brokerbar.php" );
</script>

</body>
</html>