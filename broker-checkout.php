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
  <link rel="stylesheet" href="style_checkout.css">
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
	{	margin-bottom:0px;}
	.brokerbar .navbar .collapse .nav li a	{
		background-color: #1396e2;
    	color: #fff;
    	border: 1px solid #fff;
    	font-weight: 700;}
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

    <div class="container">
            <header class="thetitles"><h1>Check out Now</h1></header>
            <div class="row">
                <div class="cart">
                    <div class="cart-top">
                      <div class="cart-top-info">Check Out</div>
                    </div>
                    <ul>
                      <li class="cart-item">
                        <?php if($_GET['plan'] == "gold"){?>Gold Membership
                             <span class="cart-item-desc">Broker's Membership Upgrade</span>
                            <span class="cart-item-price">$20.00</span>
						<?php }?>
                        <?php if($_GET['plan'] == "platinum"){?>Platinum Membership
                             <span class="cart-item-desc">Broker's Membership Upgrade</span>
                            <span class="cart-item-price">$40.00</span>
						<?php } ?>
                       
                      </li>
                    </ul>
            <div class="cart-bottom">
              Total: <?php if($_GET['plan'] == "gold"){?> $20.00<?php }else{ echo "$40.00";}?>
             <!-- <a href="#" class="cart-button">Continue</a>-->
                <form action="payment.php" method="POST">
                	<input type="hidden" name="acount_type" value="<?php if($_GET['plan'] == "gold"){?>Gold<?php }else{ ?>Platinum<?php }?>" />
                	<input type="hidden" name="amount" value="<?php if($_GET['plan'] == "gold"){?>2000<?php }else{ ?>4000<?php }?>" />
                    <script
                    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                    data-key="pk_test_LVOPw9JFcR0aKWRSp92ieXn9"
                    data-amount="<?php if($_GET['plan'] == "gold"){?> 2000<?php }else{ ?>4000<?php }?>">
                    </script>
                </form>
            </div>
      </div>
            <header class="center">By clicking continue you agree <a href="#">terms and conditions of services</a>. You'll be redirected to Stripe Payment system. </header>
            </div><!-- /.row -->
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