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
                    <header class="thetitles">
                        <h1>Sign up as Seller</h1>
                    </header>
                    <div class="row">
                        <div class="col-md-8 col-sm-12 col-md-offset-2">
                            <?php if (isset($_SESSION['SELLER_REGISTRATION_MSG']))
                            { ?>
                                <div class="alert alert-success">
                                    <strong></strong><?php echo $_SESSION['SELLER_REGISTRATION_MSG']; ?>
                                </div>
                                <?php unset($_SESSION['SELLER_REGISTRATION_MSG']); ?>
<?php } else
{

} ?>
                            <form role="form" id="form-create-agency" method="post" action="seller_actions.php">
                                <h3>Register now to post your property and have the best brokers compete for your business</h3>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <section id="address">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="form-create-agency-address-1">First Name:</label>
                                                        <input type="text" class="form-control" id="first_name" name="first_name" required="">
                                                    </div>
                                                    <!-- /.form-group -->
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="form-create-agency-address-2">Last Name:</label>
                                                        <input type="text" class="form-control" id="last_name" name="last_name" required="">
                                                    </div>
                                                    <!-- /.form-group -->
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="form-create-agency-city">Company Name:</label>
                                                <input type="text" class="form-control" id="company_name" name="company_name" required="">
                                            </div>
                                            <!-- /.form-group -->
                                            <div class="form-group">
                                                <label for="form-create-agency-zip">Phone Number:</label>
                                                <input type="text" class="form-control" id="phone_number" name="phone_number" required="">
                                            </div>
                                            <!-- /.form-group -->
                                        </section>
                                        <!-- /#address -->
                                    </div>
                                    <!-- /.col-md-6 -->
                                    <div class="col-md-6 col-sm-6">
                                        <section id="contacts">
                                            <div class="form-group">
                                                <label for="form-create-agency-email">Email Address:</label>
                                                <input type="email" class="form-control" id="email"  name="email" required="">
                                            </div>
                                            <!-- /.form-group -->
                                            <div class="form-group">
                                                <label for="form-create-agency-phone">Password:</label>
                                                <input type="password" class="form-control" id="password" name="password" required="">
                                            </div>
                                            <!-- /.form-group -->
                                            <div class="form-group">
                                                <label for="form-create-agency-website">Confirm Password:</label>
                                                <input type="text" class="form-control" id="conform_password" name="conform_password" required="">
                                            </div>
                                            <!-- /.form-group -->
                                        </section>
                                        <!-- /#address -->
                                    </div>
                                    <!-- /.col-md-6 -->
                                </div>
                                <!-- /.row -->
                                <!-- /#select-package -->
                                <section id="submit">
                                    <div class="form-group center">
                                        <input type="hidden" name="action" value="seller_registration" id="seller_registration"/>
                                        <button type="submit" class="btn btn-default large" id="account-submit">Create Account</button>
                                    </div>
                                    <!-- /.form-group -->
                                </section>
                            </form>
                            <hr>
                            <section class="center">
                                <figure class="note">By clicking the "Create Account" button you agree with our <a href="#">Terms and conditions</a></figure>
                            </section>
                        </div>
                        <!-- /.col-md-8 -->
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

        <!--[if gt IE 8]>
        <script type="text/javascript" src="assets/js/ie.js"></script>
        <![endif]-->
        <script>
            $("#page-footer").load("footer.php");
            $(".navigation").load("header.php");
        </script>
    </body>
</html>