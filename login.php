<?php
require_once('includes/connection.php');
error_reporting(E_ALL ^ E_NOTICE);
?>

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
                    <header class="thetitles"><h1>Sign In</h1></header>
                    <div class="row">
                        <?php if (isset($_SESSION['login_msg']))
                        {
                            ?>
                            <div class="alert alert-success">
                                <strong></strong><?php echo $_SESSION['login_msg']; ?>
                            </div>
                            <?php unset($_SESSION['login_msg']); ?>
                        <?php
                        } else
                        {

                        }
                        ?>

                                <?php ?>

                        <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                            <form role="form" id="form-create-account" method="post"  action="login_exec.php">
                                <?php
                                //echo "safeer";

                                if (isset($_FILES) && $_FILES != "")
                                {


                                    $property_files = array();
                                    $property_files = $_FILES;
                                    if (isset($property_files) && $property_files != "")
                                    {
                                        if (!isset($_SESSION['property_file']))
                                        // echo "sadee1";
                                            $_SESSION['property_file'] = $property_files;
                                        // print_r( $_SESSION['property_file']);
                                        $folder = "temp/";

                                        move_uploaded_file($property_files['file_doc']["tmp_name"], "$folder" . $property_files['file_doc']['name']);
                                        // session_write_close();
                                    }
                                }

                                if (isset($_POST) && $_POST != "")
                                {

                                    $property = array();
                                    $property = $_POST;
                                    if (isset($property) && !empty($property))
                                    {
                                        // if(!isset($_SESSION['property_file']))
                                        // echo "sadee1";
                                        $_SESSION['property'] = $property;
                                        // print_r( $_SESSION['property']);
                                        // $folder = "temp/";
                                        // move_uploaded_file($property_files['file_doc']["tmp_name"] , "$folder".$property_files['file_doc']['name']);
                                        // session_write_close();
                                    }
                                }
                                // print_r( $_SESSION['property']);
                                // print_r($_POST);
                                ?>
                                <div class="form-group">
                                    <label for="form-create-account-email">Email:</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    <label for="form-create-account-password">Password:</label>
                                    <input type="password" class="form-control" id="password" name="password"required>
                                </div><!-- /.form-group -->
                                <div class="form-group clearfix">
                                    <button type="submit" class="btn pull-right btn-default" id="account-submit">Sign to My Account</button>
                                </div><!-- /.form-group -->
                            </form>
                            <hr>
                            <div class="center"><a href="forgot-password.php">I don't remember my password</a></div>
                        </div>
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
            $("#page-footer").load("footer.php");
            $(".navigation").load("header.php");
        </script>

    </body>
</html>