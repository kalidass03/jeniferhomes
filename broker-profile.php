<?php require_once('includes/connection.php'); ?>
<?php //require_once('auth_broker.php');  ?>
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
            .brokerbar .navbar {
                margin-bottom:0px;
            }
            .brokerbar .navbar-nav {
            }
            .brokerbar .navbar-right {
                /*    float:none !important;*/
            }
            .brokerbar .navbar .collapse .nav li a {
                background-color: #1396e2;
                color: #fff;
                border: 1px solid #fff;
                font-weight: 700;
            }
        </style>
    </head>

    <body class="page-sub-page page-agencies-listing" id="page-top">
        <!-- Wrapper -->
        <div class="wrapper">
            <!-- Navigation -->
            <div class="navigation">
            </div><!-- /.navigation -->
            <div class="container brokerbar"> </div>
            <!-- Page Content -->
            <div id="page-content">
                <style>
                    .thetitles
                    {
                        margin-top: 32px;
                    }
                    section
                    {
                        margin-top: 50px;
                    }
                </style>                <!-- Agent Detail -->

                <div class="container">
                    <div class="row">
                        <!-- Agent Detail -->
                        <?php
                        if (isset($_GET) && isset($_GET['id']))
                        {
                            $id = $_GET['id'];
                        } else
                        {
                            $id = $_SESSION['SESS_USER_ID'];
                        }
                        $sql = "SELECT * FROM users where user_id='" . $id . "'";

                        $res = mysqli_query($GLOBALS["___mysqli_ston"], $sql);
                        $current_user = mysqli_fetch_object($res);



                        ;
                        ?>
                        <div class="col-md-offset-1 col-md-10 col-sm-10">
                            <section id="agent-detail">
                                <header><h1><?php echo $current_user->first_name; ?> <?php echo $current_user->last_name; ?> (<?php echo $current_user->user_type; ?>)</h1></header>
                                <?php if (isset($_SESSION['edit_broker_info']))
                                { ?>
                                    <div class="alert alert-success"> <strong><?php echo $_SESSION['edit_broker_info']; ?></strong> </div>
    <?php unset($_SESSION['edit_broker_info']); ?>
<?php } else
{

} ?>
                                <section id="agent-info">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-2">
                                            <figure class="agent-image"><?php if (!empty($property->profile_pic))
{ ?>
                                                    <img class="padIMG" src="<?php echo IMG; ?><?php echo $property->profile_pic ?>" height="auto" width="100%">
<?php } else
{ ?>
                                                    <img class="padIMG" src="<?php echo IMG; ?>avatar.png" height="auto" width="100%">
<?php } ?></figure>
                                        </div><!-- /.col-md-3 -->
                                        <div class="col-md-5 col-sm-5">
                                            <h3>Contact Info</h3>
                                            <dl>
                                                <dt>Office Phone:</dt>
                                                <dd><?php echo $current_user->phone_number; ?></dd>
                                                <dt>Email:</dt>
                                                <dd><a href="mailto:#"><?php echo $current_user->email; ?></a></dd>
                                                <dt>Company Name:</dt>
                                                <dd><?php echo $current_user->company_name; ?></dd>
                                            </dl>
                                        </div><!-- /.col-md-5 -->
                                        <div class="col-md-4 col-sm-4">
                                            <h3>Shortly About Me</h3>
                                            <p><?php echo $current_user->shortly_about_me; ?>
                                            </p>
<?php if ($_SESSION['SESS_USER_ROLE'] == "broker")
{ ?>
                                                <a href="edit-broker-profile.php?id=<?php echo $current_user->user_id; ?>"><button class="btn btn-default pull-right" type="submit">Edit Profile</button></a>
                                            <?php } ?>
                                        </div><!-- /.col-md-4 -->
                                    </div><!-- /.row -->
                                </section><!-- /#agent-info -->
                                <hr class="thick">
                                <section id="agent-properties">
                                    <header><h3>Broker's Portfolio</h3></header>
                                    <div class="" style="height:auto !important">
                                        <div class="row">
<?php
$sql2 = "SELECT * FROM property where awarded_to='" . $id . "'";
$res2 = mysqli_query($GLOBALS["___mysqli_ston"], $sql2);
while ($property_sold = mysqli_fetch_object($res2))
{
    $propertytitle = $property_sold->property_title;
    ?>
                                                <div class="col-md-4 col-sm-4">
                                                    <div class="property">
                                                        <a href="">
                                                            <div class="property-image">
                                                                <img alt="" src="temp/<?php echo $property_sold->documents; ?>">
                                                            </div>
                                                            <div class="overlay">
                                                                <div class="info">
                                                                    <div class="tag price"><?php echo $property_sold->bid_status; ?></div>
                                                                    <h3><?php echo $propertytitle; ?></h3>
                                                                </div>
                                                                <ul class="additional-info">
                                                                    <li>
                                                                        <header>Property Type:</header>
                                                                        <figure><?php echo $property_sold->property_type; ?></figure>
                                                                    </li>
                                                                    <li>
                                                                        <header>No. of Units:</header>
                                                                        <figure><?php echo $property_sold->number_of_units; ?></figure>
                                                                    </li>
                                                                    <li>
                                                                        <header>NOI:</header>
                                                                        <figure><?php echo $property_sold->net_operating_income; ?></figure>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div><!-- /.col-md-4 -->
<?php } ?>
                                        </div><!-- /.row-->
                                    </div>
                                </section><!-- /#agent-properties -->
                                <hr class="thick">
                                <section id="comments">
                                    <header><h2 class="no-border">Seller's Feedback</h2></header>
                                    <ul class="comments">
                                        <li class="comment">
                                            <figure>
                                                <div class="image">
                                                    <img alt="" src="assets/img/client-01.jpg">
                                                </div>
                                            </figure>
                                            <div class="comment-wrapper">
                                                <div class="name pull-left">Catherine Brown</div>
                                                <span class="date pull-right"><span class="fa fa-calendar"></span>12.05.2014</span>
                                                <div class="rating rating-individual" data-score="4"></div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vestibulum, sem ut sollicitudin consectetur,
                                                    augue diam ornare massa, ac vehicula leo turpis eget purus. Nunc pellentesque vestibulum mauris, eget suscipit
                                                    mauris imperdiet vel. Nulla et massa metus. Nam porttitor quam eget ante elementum consectetur. Aenean ac nisl
                                                    et nulla placerat suscipit eu a mauris. Curabitur quis augue condimentum, varius mi in, ultricies velit.
                                                    Suspendisse potenti.
                                                </p>
                                                <hr>
                                            </div>
                                        </li>
                                        <li class="comment">
                                            <figure>
                                                <div class="image">
                                                    <img alt="" src="assets/img/user-02.jpg">
                                                </div>
                                            </figure>
                                            <div class="comment-wrapper">
                                                <div class="name">John Doe</div>
                                                <span class="date"><span class="fa fa-calendar"></span>08.05.2014</span>
                                                <div class="rating rating-individual" data-score="5"></div>
                                                <p>Quisque iaculis neque at dui cursus posuere. Sed tristique pharetra orci, eu malesuada ante tempus nec.
                                                    Phasellus enim odio, facilisis et ante vel, tempor congue sapien. Praesent eget ligula
                                                    eu libero cursus facilisis vel non arcu. Sed vitae quam enim.
                                                </p>
                                                <hr>
                                            </div>
                                        </li>
                                    </ul>
                                </section><!-- /.row -->
                            </section><!-- /#agent-detail -->
                        </div><!-- /.col-md-9 -->
                        <!-- end Agent Detail -->

                        <!-- sidebar -->
                        <!-- /.col-md-3 -->
                        <!-- end Sidebar -->
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
        <script type="text/javascript" src="assets/js/jquery.raty.min.js"></script>
        <!--[if gt IE 8]>
        <script type="text/javascript" src="assets/js/ie.js"></script>
        <![endif]-->
        <script>
            $("#page-footer").load("footer.php");
            $(".navigation").load("header.php");
            $(".brokerbar").load("brokerbar.php");

        </script>

    </body>
</html>