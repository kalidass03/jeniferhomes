<?php require_once('includes/connection.php'); ?>
<?php require_once('check_login_or_not.php'); //check suer login or not ?  ?>
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
            <div class="navigation"> </div>
            <!-- /.navigation -->
            <div class="container brokerbar"> ehifjaskldfjkl
                <!-- /.navbar -->
            </div>
            <!-- Page Content -->
            <div id="page-content">
                <style>
                    .thetitles
                    {
                        margin-top: 32px;
                    }
                    #property-detail img
                    {
                        width:100%
                    }
                    td
                    {width:50%}
                    td:first-child
                    {
                        text-align:right
                    }
                </style>
                <!-- Agent Detail -->

                <?php
                if (isset($_GET['id']))
                {

                    $p_id = $_GET['id'];
                    $single_p_data = get_table_data('property', 'property_id=' . $p_id . '', false, false);
                }
                ?>
                <div class="container">
                    <?php if (isset($_SESSION['bid_info']))
                    { ?>
                        <div class="alert alert-success"> <strong><?php echo $_SESSION['bid_info']; ?></strong> </div>
    <?php unset($_SESSION['bid_info']); ?>
<?php } else
{

} ?>
                    <header class="thetitles">
                        <h1>Property Details</h1>
                    </header>
                    <div class="row">
                        <!-- Property Detail Content -->
                        <div class=" col-md-offset-1 col-md-10 col-sm-12">
                            <section id="property-detail">
                                <header class="property-title">
                                    <h1>
                                        <?php if (!empty($single_p_data[0]->property_title)) echo $single_p_data[0]->property_title;
                                        else echo "Untitled - Property ID = " . $single_p_data[0]->property_id; ?>
                                    </h1>
                                    <figure>
                                            <?php if ($_SESSION['SESS_USER_ROLE'] == "seller" and $_SESSION['SESS_USER_ID'] == $single_p_data[0]->user_id)
                                            { ?>
                                            Listing Status Status: <?php echo $single_p_data[0]->bid_status; ?> -
                                            <?php
                                            if ($single_p_data[0]->bid_status == "Posted")
                                            {
                                                $toal_bids = find_total('bids', 'property_id=' . $single_p_data[0]->property_id . '');
                                                ?>
                                                <a href="bidders-listing.php?property_id=<?php echo $single_p_data[0]->property_id; ?>">
        <?php echo $toal_bids . " Bids Received.";
    } ?>
                                            </a>
    <?php if ($single_p_data[0]->bid_status == "Awarded" or $single_p_data[0]->bid_status == "In Progress" or $single_p_data[0]->bid_status == "Incomplete" or $single_p_data[0]->bid_status == "Completed")
    {
        echo "Awarded to: " . $single_p_data[0]->awarded_to;
    }
    ?>
<?php }
?>
                                    </figure>
                                </header>
                                <style>
                                    .thehead
                                    {
                                        background-color: #073855;
                                        border: none;
                                        color: #fff;
                                        padding: 3px 10px 3px 10px;
                                        font-size: 18px;
                                    }
                                    tr td:first-child,
                                    tr td:last-child {
                                        padding: 6px 10px;
                                    }
                                    tr td:first-child
                                    {
                                        text-align:right;
                                    }
                                    table
                                    {
                                        width: 100%;
                                        color: #5a5a5a;
                                        font-weight:bold;
                                    }
                                    .comments .comment {
                                        margin-bottom: 0px;
                                        padding-left: 8px;
                                    }
                                    #file-upload
                                    {
                                        height: 40px;
                                    }
                                    .biddingbox
                                    {
                                        margin: 15px 0px;
                                        border: 2px solid #f3f3f3;
                                        padding: 22px;
                                    }
                                </style>
<?php $already_bid = find_total('bids', 'property_id=' . $_GET['id'] . ' AND broker_id=' . $_SESSION['SESS_USER_ID'] . ''); ?>
<?php if ($already_bid > 0)
{ ?>
                                    <div class="alert alert-danger"> <strong>Sorry!</strong>You can't palce bid twice on same property </div>
<?php } else
{ ?>
                                    <div class="row biddingbox  <?php if (isset($_GET['bidding']) && $_GET['bidding'] == 'yes' && $_SESSION['SESS_USER_ROLE'] == "broker")
    {
        echo '';
    } else
    {
        echo 'hide';
    } ?>">
                                        <form role="form" id="form-create-agency" method="post" action="broker_actions.php" enctype="multipart/form-data">
                                            <h3>Please fill in the user details</h3>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <section id="address">
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12">
                                                                <label for="form-create-agency-address-1">Broker Opinion Value</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-4">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" Placeholder="Low" id="low_val" name="low_val" required>
                                                                </div>
                                                                <!-- /.form-group -->
                                                            </div>
                                                            <div class="col-md-4 col-sm-4">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" Placeholder="Target" id="target_val"  name="target_val" required>
                                                                </div>
                                                                <!-- /.form-group -->
                                                            </div>
                                                            <div class="col-md-4 col-sm-4">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" Placeholder="High" id="high_val"  name="high_val" required>
                                                                </div>
                                                                <!-- /.form-group -->
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="form-create-agency-city">Broker Commission:</label>
                                                            <input type="text" class="form-control" placeholder="In %" id="broker_commission"  name="broker_commission" required>
                                                        </div>
                                                        <!-- /.form-group -->
                                                        <div class="row"> </div>
                                                    </section>
                                                    <!-- /#address -->
                                                </div>
                                                <!-- /.col-md-6 -->
                                                <div class="col-md-6 col-sm-6">
                                                    <section id="contacts">
                                                        <div class="form-group">
                                                            <label for="form-create-agency-email">Attach File:</label>
                                                            <input type="file" name="bid_document" id="bid_document" />
                                                        </div>
                                                        <!-- /.form-group -->
                                                        <div class="form-group">
                                                            <label for="form-create-agency-phone">Link to Profile:</label>
                                                            <input type="text" class="form-control" name="link_to_profile" id="link_to_profile" value="<?php echo HTTP_PATH; ?>seller-profile.php?id=<?php echo $single_p_data[0]->user_id; ?>"  readonly>
                                                        </div>
                                                        <!-- /.form-group -->
                                                    </section>
                                                    <!-- /#address -->
                                                </div>
                                                <!-- /.col-md-6 -->
                                            </div>
                                            <!-- /.row -->
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="form-create-agency-phone">Proposal:</label>
                                                        <textarea class="form-control " rows="8" name="proposal_on_project" id="proposal_on_project"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /#select-package -->
                                            <section id="submit">
                                                <div class="form-group center">
                                                    <input type="hidden" name="property_id" id="property_id" value="<?php echo $_GET['id']; ?>"/>
                                                    <input type="hidden" name="broker_id" id="broker_id" value="<?php echo $_SESSION['SESS_USER_ID']; ?>"/>
                                                    <input type="hidden" name="seller_id" value="<?php echo $single_p_data[0]->user_id ?>" />
                                                    <input type="hidden" name="action" value="place_bid" />
                                                    <button type="submit" class="btn btn-default" id="place_the_bid">Place Bid Now</button>
                                                </div>
                                                <!-- /.form-group -->
                                            </section>
                                        </form>
                                    </div>
                                                        <?php } ?>
                                <div class="row">
                                    <div class="col-md-8 col-sm-12">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="thehead">Property Information</div>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td> Property Type:</td>
                                                        <td><?php
                                                        if (!empty($single_p_data[0]->property_type))
                                                        {
                                                            echo $single_p_data[0]->property_type;
                                                        } else
                                                        {
                                                            echo "";
                                                        }
                                                        ?></td>
                                                    </tr>
                                                    <tr>

<?php if ((!empty($single_p_data[0]->rentable_square_feet)) && ($single_p_data[0]->property_type != "Multifamily" || $single_p_data[0]->property_type != "Office"))
{ ?>
                                                            <td class="toright">Rentable Square Feet:</td>
                                                            <td class="toleft"> <?php echo $single_p_data[0]->rentable_square_feet; ?> sq.ft.</td>
<?php } else if ($single_p_data[0]->property_type == "Multifamily")
{ ?>
                                                            <td class="toright">Rent per unit:</td>
                                                            <td> $<?php echo $single_p_data[0]->averagerent_perunit; ?></td>
                                                        <?php } else
                                                        { ?>
                                                            <td class="toright"></td>
                                                            <td></td>
                                                        <?php } ?>

                                                    </tr>
                                                    <tr>
                                                        <td>Year Built:</td>
                                                        <td><?php echo "N/A"; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Building Class:</td>
                                                        <td><?php
                                                        if (!empty($single_p_data[0]->property_class))
                                                        {
                                                            echo $single_p_data[0]->property_class;
                                                        } else
                                                        {
                                                            echo "N/A";
                                                        }
                                                        ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <div class="thehead">Property Location</div>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Street Address:</td>
                                                            <?php
                                                            //    if seller share address of this property for this broker
                                                            $is_address_share = find_total('sharing_info', 'property_id=' . $_GET['id'] . ' AND broker_id=' . $_SESSION['SESS_USER_ID'] . ' AND seller_id=' . $single_p_data[0]->user_id . ' AND sharewhat="share_address"');

                                                            if ($is_address_share == 0 && $_SESSION['SESS_USER_ROLE'] != "seller")
                                                            {
                                                                ?>
                                                            <td>
    <?php echo "<dd style='color:#1396e2'>Contact not shared from seller</dd>"; ?>
                                                            </td>
                                            <?php } else
                                            { ?>

                                                            <td><?php
                                            if (!empty($single_p_data[0]->property_address))
                                            {
                                                echo $single_p_data[0]->property_address;
                                            }
                                            ?></td>
<?php } ?>
                                                    </tr>
                                                    <tr>
                                                        <td>City and stata or Zip:</td>
                                                        <td><strong>
<?php
if (!empty($single_p_data[0]->city_state))
{
    echo $single_p_data[0]->city_state;
} else
{
    echo "";
}
?>
                                                            </strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Neighborhood:</td>
                                                        <td><?php
                                                            if (!empty($single_p_data[0]->property_address))
                                                            {
                                                                echo $single_p_data[0]->property_address;
                                                            } else
                                                            {
                                                                echo "";
                                                            }
?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <header>
                                            <h3>Property Image</h3>
                                        </header>
                                        <section id="sidebar">
                                                            <?php if (!empty($single_p_data[0]->documents))
                                                            { ?>
                                                <img class="padIMG" src="<?php echo IMG; ?><?php echo $single_p_data[0]->documents ?>" height="auto" width="100%">
                                                            <?php } else
                                                            { ?>
                                                <img class="padIMG" src="assets/img/properties/property-06.jpg" height="auto" width="100%">
<?php } ?>
                                        </section>
                                        <!-- /#sidebar -->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-12">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="thehead">Financials</div>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Net Operating Income:</td>
                                                        <td><?php
if (!empty($single_p_data[0]->net_operating_income))
{
    echo $single_p_data[0]->net_operating_income;
} else
{
    echo "";
}
?></td>
                                                    </tr>
                                                    <tr>

<?php if ((!empty($single_p_data[0]->building_occupancy_percentage)) && ($single_p_data[0]->property_type != "Land"))
{ ?>
                                                            <td class="toright">Building Occupancy Percentage:</td>
                                                            <td class="toleft"><?php echo $single_p_data[0]->building_occupancy_percentage; ?>%</td>
<?php } else
{ ?>
<?php } ?>
                                                    </tr>
                                                    <tr>
<?php if ((!empty($single_p_data[0]->rentable_square_feet)) && ($single_p_data[0]->property_type != "Multifamily" || $single_p_data[0]->property_type != "Office"))
{ ?>
                                                            <td class="toright">Rentable Square Feet:</td>
                                                            <td class="toleft"> <?php echo $single_p_data[0]->rentable_square_feet; ?> sq.ft.</td>
                                                            <?php } else if ($single_p_data[0]->property_type == "Multifamily")
                                                            { ?>
                                                            <td class="toright">Rent per unit:</td>
                                                            <td> $<?php echo $single_p_data[0]->averagerent_perunit; ?></td>
                                                            <?php } else
                                                            { ?>
                                                            <td class="toright"></td>
                                                            <td></td>
<?php } ?>
                                                    </tr>
                                                    <tr>
                                                        <td>Property Description:</td>
                                                        <td><?php
if (!empty($single_p_data[0]->property_description))
{
    $prop_description = $single_p_data[0]->property_description;
    echo $single_p_data[0]->property_description;
} else
{
    echo "";
}
?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12 hide">
                                        <div class="thehead">Seller Comments</div>
                                        <section id="description">
                                            <p style="padding: 10px;">
                                                                <?php
                                                                if (!empty($prop_description))
                                                                {
                                                                    echo $prop_description;
                                                                } else
                                                                {
                                                                    echo "(Seller has added no comments).";
                                                                }
                                                                ?>
                                            </p>
                                        </section>
<?php
if ($_GET['bidding'] != 'yes' && $_SESSION['SESS_USER_ROLE'] == "broker")
{
    ?>
                                            <section id="sidebar">
                                                <aside id="edit-search">
                                                    <form  class="" >
                                                        <button type="button" class="btn btn-default bid_now_button" id="bid_now_button">Bid Now</button>
                                                    </form>
                                                    <!-- /#form-map -->
                                                </aside>
                                                <!-- /#edit-search -->
                                            </section>
<?php } ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-12">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="thehead">Seller Comments</div>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td colspan="2" style="text-align:left"><?php
if (!empty($single_p_data[0]->property_description))
{
    $prop_description = $single_p_data[0]->property_description;
    echo $single_p_data[0]->property_description;
} else
{
    echo "";
}
?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <hr class="thick">
                                        <section id="similar-properties">
                                            <header>
                                                <h2 class="no-border">Similar Properties</h2>
                                            </header>
                                            <div class="row">
<?php
$sql2 = "SELECT * FROM property where bid_status='Posted' LIMIT 3";
$res2 = mysqli_query($GLOBALS["___mysqli_ston"], $sql2);
while ($property_sold = mysqli_fetch_object($res2))
{
    $propertytitle = $property_sold->property_title;
    ?>
                                                    <div class="col-md-4 col-sm-4">
                                                        <div class="property"> <a href="property-details.php?id=<?php echo $property_sold->property_id ?>&bidding=yes">
                                                                <div class="property-image">
    <?php /* ?><img alt="" src="<?php $documenttype=explode('/',mime_content_type("temp/".$property_sold->documents)); if($documenttype[0]=='image' or file_exists("temp/".$property_sold->documents)) echo "temp/".$property_sold->documents; else echo "assets/img/properties/property-06.jpg";?>">            <?php */ ?>
    <?php if (!empty($property_sold->documents))
    { ?>
                                                                        <img alt="" src="<?php echo "img/" . $property_sold->documents; ?>">
    <?php } else
    { ?>
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
                                                            </a> </div>
                                                    </div>
                                                    <!-- /.col-md-4 -->
<?php } ?>
                                            </div>
                                            <!-- /.row-->
                                        </section>
                                        <!-- /#similar-properties -->
                                    </div>
                                    <!-- /.col-md-12 -->
                                </div>
                                <!-- /.row -->
                            </section>
                            <!-- /#property-detail -->
                        </div>
                        <!-- /.col-md-9 -->
                        <!-- end Property Detail Content -->

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
        <!--[if gt IE 8]>
        <script type="text/javascript" src="assets/js/ie.js"></script>
        <![endif]-->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script>
            $("#page-footer").load("footer.php");
            $(".navigation").load("header.php");
            $(".brokerbar").load("brokerbar.php");

        </script>
        <script>
            $(document).ready(function () {
                $(".bid_now_button").on("click", function () {
                    $(".biddingbox").removeClass('hide');
                });
            });



        </script>
        <!--<script>
          //  _latitude = 48.87;
          //  _longitude = 2.29;
           // google.maps.event.addDomListener(window, 'load', contactUsMap(_latitude,_longitude));
        </script>-->

    </body>
</html>