<?php require_once('includes/connection.php'); ?>
<?php
// require_once('auth_seller.php');
error_reporting(0);
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
                        if (isset($_GET) && $_GET['id'])
                        {
                            $id = $_GET['id'];
                        } else
                        {
                            $id = $_SESSION['SESS_USER_ID'];
                        }
                        $sql = "SELECT * FROM users where user_id='" . $id . "'";



                        $res = mysqli_query($GLOBALS["___mysqli_ston"], $sql);
                        $current_user = mysqli_fetch_object($res);
                        ?>
                        <div class="col-md-offset-1 col-md-10 col-sm-10">
                            <section id="agent-detail">
                                <header><h1><?php echo $current_user->first_name; ?> <?php echo $current_user->last_name; ?> (<?php echo ucwords($current_user->user_type); ?>) </h1></header>
                                <div id="show_res" class="alert alert-success" style="display:none;"></div>
                                <?php if (isset($_SESSION['edit_user']))
                                {
                                    ?>
                                    <div class="alert alert-success"> <strong><?php echo $_SESSION['edit_user']; ?></strong> </div>
                                    <?php unset($_SESSION['edit_user']); ?>
                                <?php
                                } else
                                {

                                }
                                ?>
                                <section id="agent-info">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-2">
                                            <figure class="agent-image"><?php if (!empty($property->profile_pic))
                                {
                                    ?>
                                                    <img class="padIMG" src="<?php echo IMG; ?><?php echo $property->profile_pic ?>" height="auto" width="100%">
<?php } else
{
    ?>
                                                    <img class="padIMG" src="<?php echo IMG; ?>avatar.png" height="auto" width="100%">
<?php } ?></figure>
                                        </div><!-- /.col-md-3 -->
                                        <div class="col-md-5 col-sm-5">
                                            <h3>Contact Info</h3>
                                            <dl>
                                                <dt>Office Phone:</dt>
                                                <dd><?php echo $current_user->phone_number; ?></dd>

                                                <?php
                                                // if seller share contact of this property for this broker
                                                $is_address_share = find_total('sharing_info', 'property_id=' . $_GET['p_id'] . ' AND broker_id=' . $_SESSION['SESS_USER_ID'] . ' AND seller_id=' . $_GET['id'] . ' AND sharewhat="share_contact"');
                                                if ($is_address_share == 0 && $_SESSION['SESS_USER_ROLE'] != "seller")
                                                {
                                                    echo "<dd style='color:#1396e2'>Contact info not shared from seller</dd>";
                                                } else
                                                {
                                                    ?>
                                                    <dt>Email:</dt>
                                                    <dd><a href="mailto:#"><?php echo $current_user->email; ?></a></dd>
                                                    <dt> Address:</dt>
                                                    <dd><?php echo $current_user->address ?></dd>
<?php } ?>
                                                <dt>Company Name:</dt>
                                                <dd><?php echo $current_user->company_name; ?></dd>
                                            </dl>
                                        </div><!-- /.col-md-5 -->
                                        <div class="col-md-4 col-sm-4">
                                            <h3>Shortly About Me</h3>
                                            <p><?php echo $current_user->shortly_about_me; ?>
                                            </p>
<?php
if ($_SESSION['SESS_USER_ROLE'] == "broker")
{

} else
{
    ?>
                                                <a href="edit-seller-profile.php?id=<?php echo $current_user->user_id; ?>">
                                                    <button class="btn btn-default" type="submit">Edit Profile</button></a>
<?php } ?>
                                        </div><!-- /.col-md-4 -->
                                    </div><!-- /.row -->
                                </section><!-- /#agent-info -->
                                <hr class="thick">
                                <section id="agent-properties">
                                    <header><h3>Seller's Listings</h3></header>
                                    <div class="" style="height:auto !important">
                                        <div class="row">
<?php
$sql2 = "SELECT * FROM property where user_id='" . $id . "'";
$res2 = mysqli_query($GLOBALS["___mysqli_ston"], $sql2);
while ($property_sold = mysqli_fetch_object($res2))
{
    $propertytitle = $property_sold->property_title;
    ?>
                                                <div class="col-md-4 col-sm-4">
                                                    <div class="property">
                                                        <a href="<?php echo HTTP_PATH; ?>property-details.php?id=<?php echo $property_sold->property_id; ?>&bidding=yes">
                                                            <div class="property-image">
                                                                <?php /* ?><img alt="" src="<?php $documenttype=explode('/',mime_content_type("temp/".$property_sold->documents)); if($documenttype[0]=='image' or file_exists("temp/".$property_sold->documents)) echo "temp/".$property_sold->documents; else echo "assets/img/properties/property-06.jpg";?>"><?php */ ?>
    <?php if (!empty($property_sold->documents))
    {
        ?>
                                                                    <img alt="" src="<?php echo "img/" . $property_sold->documents; ?>">
    <?php } else
    {
        ?>
                                                                    <img alt="" src="<?php echo "img/propertyimage.jpg"; ?>">
    <?php } ?>
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
                                                </div>


                                                <!-- /.col-md-4 -->
<?php } ?>
                                        </div><!-- /.row-->
                                    </div>
                                </section><!-- /#agent-properties -->
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