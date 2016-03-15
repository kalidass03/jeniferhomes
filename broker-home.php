<?php require_once('includes/connection.php'); ?>
<?php require_once('auth_broker.php'); ?>
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
                    /*    float:none !important;*/
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
                </style>
                <!-- Agent Detail -->
                <style>
                    .thetitles
                    {
                        margin-top: 32px;
                    }
                    #property-detail img
                    {
                        width:100%;
                    }
                    td:first-child
                    {
                        text-align:right
                    }
                </style>
                <!-- Agent Detail -->
                <style>
                    .thehead
                    {
                        background-color: #073855;
                        border: none;
                        color: #fff;
                        padding: 3px 10px 3px 10px;
                        font-size: 18px;
                    }
                    .thehead a
                    {
                        color: #FFFFFF;
                    }
                    tr td:first-child,
                    tr td:last-child {
                        padding: 0px 10px;
                    }
                    tr td:last-child {
                        text-align:center;
                    }
                    tr td:first-child
                    {
                        text-align:right;
                        width:15%;
                        padding: 10px;
                    }
                    tr td:first-child img
                    {
                        width:100%;
                    }
                    tr td.toright
                    {
                        text-align:right;
                        padding: 0px 10px;
                    }
                    tr td.toleft
                    {
                        text-align:left;
                        padding:0px;
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
                    .propertysearch
                    {
                        padding: 15px;
                        border: 1px solid #073855;
                        border-radius: 5px;
                        margin-bottom: 25px;
                    }
                </style>
                <div class="container">
                    <?php if (isset($_SESSION['payment']))
                    { ?>
                        <div class="alert alert-success"> <strong><?php echo $_SESSION['payment']; ?></strong> </div>
                        <?php unset($_SESSION['payment']); ?>
<?php } else
{

} ?>
                    <header class="thetitles">
                        <h1>Welcome <?php echo $_SESSION['SESS_USER_NAME']; ?></h1>
                    </header>
                    <div class="propertysearch">
                        <form role="form" id="form-sidebar"  action="" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="text-field" class="pickertitle">Property Type</label>
                                        <select name="property_type" id="property_type">
                                            <option></option>
                                            <option <?php if (isset($_POST['property_type']) && $_POST['property_type'] == "Office" || isset($_GET['property_type']) && $_GET['property_type'] == "Office")
{ ?> selected="selected" <?php } ?>>Office</option>
                                            <option <?php if (isset($_POST['property_type']) && $_POST['property_type'] == "Multifamily" || isset($_GET['property_type']) && $_GET['property_type'] == "Multifamily")
{ ?> selected="selected" <?php } ?>>Multifamily</option>
                                            <option <?php if (isset($_POST['property_type']) && $_POST['property_type'] == "Retail" || isset($_GET['property_type']) && $_GET['property_type'] == "Retail")
{ ?> selected="selected" <?php } ?>>Retail</option>
                                            <option <?php if (isset($_POST['property_type']) && $_POST['property_type'] == "Industrial" || isset($_GET['property_type']) && $_GET['property_type'] == "Industrial")
{ ?> selected="selected" <?php } ?>>Industrial</option>
                                            <option <?php if (isset($_POST['property_type']) && $_POST['property_type'] == "Land" || isset($_GET['property_type']) && $_GET['property_type'] == "Land")
{ ?> selected="selected" <?php } ?>>Land</option>
                                        </select>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="text-field" class="pickertitle">Enter Location</label>
                                        <input type="text" class="form-control" placeholder="e.g. Chicago, IL, or California or 10017"  name="property_location" id="property_location"      value="<?php if (isset($_POST['property_location']) || isset($_GET['property_location']))
{
    if (isset($_POST['property_location']))
    {
        echo $_POST['property_location'];
    } else
    {
        echo $_GET['property_location'];
    }
} else
{
    echo "";
} ?>"  >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="text-field" class="pickertitle">Include Properties Within</label>
                                        <select name="property_distance_miles" id="property_distance_miles" >
                                            <option></option>
                                            <option  <?php if (isset($_POST['property_distance_miles']) && $_POST['property_distance_miles'] == "5  Mile")
{ ?> selected="selected" <?php } ?>>5  Mile</option>
                                            <option <?php if (isset($_POST['property_distance_miles']) && $_POST['property_distance_miles'] == "10 Mile")
{ ?> selected="selected" <?php } ?>>10 Mile</option>
                                            <option<?php if (isset($_POST['property_distance_miles']) && $_POST['property_distance_miles'] == "25 Mile")
{ ?> selected="selected" <?php } ?>>25 Mile</option>
                                            <option<?php if (isset($_POST['property_distance_miles']) && $_POST['property_distance_miles'] == "50 Mile")
{ ?> selected="selected" <?php } ?>>50 Mile</option>
                                        </select>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group" id="property_rentable_square_ft_div">
                                        <label for="text-field" class="pickertitle" id="property_rentable_square_ft_label">Rentable Sq. Ft</label>
                                        <input type="text" class="form-control" placeholder="" id="property_rentable_square_ft" name="property_rentable_square_ft"                           value="<?php if (isset($_POST['property_rentable_square_ft']))
{
    echo $_POST['property_rentable_square_ft'];
} else
{
    echo "";
} ?>">
                                        <label for="text-field" class="pickertitle hide" id="property_number_unit_label">Number of Units</label>
                                        <input type="text" class="form-control hide" placeholder="" id="property_number_unit" name="property_number_unit"                                    value="<?php if (isset($_POST['property_number_unit']))
{
    echo $_POST['property_number_unit'];
} else
{
    echo "";
} ?>">
                                        <label for="text-field" class="pickertitle hide" id="property_lot_size_label">Lot Size</label>
                                        <input type="text" class="form-control hide" placeholder="" id="property_lot_size" name="property_lot_size" value="<?php if (isset($_POST['property_lot_size']))
{
    echo $_POST['property_lot_size'];
} else
{
    echo "";
} ?>">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="text-field" class="pickertitle" >Building Class</label>
                                        <select name="property_class" id="property_class" >
                                            <option></option>
                                            <option <?php if (isset($_POST['property_class']) && $_POST['property_class'] == "A")
{ ?> selected="selected" <?php } ?>>A</option>
                                            <option <?php if (isset($_POST['property_class']) && $_POST['property_class'] == "B")
                        { ?> selected="selected" <?php } ?>>B</option>
                                            <option <?php if (isset($_POST['property_class']) && $_POST['property_class'] == "C")
                        { ?> selected="selected" <?php } ?>>C</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="text-field" class="pickertitle">Net Operating Income</label>
                                        <select name="property_net_operating_income" id="property_net_operating_income" >
                                            <option></option>
                                            <option<?php if (isset($_POST['property_net_operating_income']) && $_POST['property_net_operating_income'] == "$0 - $50000")
                        { ?> selected="selected" <?php } ?>>$0 - $50000</option>
                                            <option<?php if (isset($_POST['property_net_operating_income']) && $_POST['property_net_operating_income'] == "$50001 - $100000")
                        { ?> selected="selected" <?php } ?>>$50001 - $100000</option>
                                            <option<?php if (isset($_POST['property_net_operating_income']) && $_POST['property_net_operating_income'] == "$100001 - $250000")
                        { ?> selected="selected" <?php } ?>>$100001 - $250000</option>
                                            <option<?php if (isset($_POST['property_net_operating_income']) && $_POST['property_net_operating_income'] == "$250001 - $500000")
                        { ?> selected="selected" <?php } ?>>$250001 - $500000</option>
                                            <option<?php if (isset($_POST['property_net_operating_income']) && $_POST['property_net_operating_income'] == "$500001 - $1000000")
                        { ?> selected="selected" <?php } ?>>$500001 - $1000000</option>
                                            <option<?php if (isset($_POST['property_net_operating_income']) && $_POST['property_net_operating_income'] == "$1000001+")
                        { ?> selected="selected" <?php } ?>>$1000001+</option>
                                        </select>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="text-field" class="pickertitle">-</label>
                                        <br>
                                        <button type="submit" class="btn nextbtn btn-default" id="ser_form"> Search </button>
                                        <input type="hidden" class="form-control"  id="property_ser" name="property_ser" value="property_ser" >
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="showproperty">
                        <header class="section-title">
                            <h2>Listing Leads</h2>
                        </header>
                        <?php
                        if (isset($_POST) && isset($_POST['property_ser']) == "property_ser" || isset($_GET) && !empty($_GET))
                        {



                            if (isset($_POST['property_location']) && !empty($_POST['property_location']) || isset($_GET['property_location']) && !empty($_GET['property_location']))
                            {
                                if (isset($_POST['property_location']) && !empty($_POST['property_location']))
                                {
                                    $property_location = " AND property_location='" . $_POST['property_location'] . "'";
                                } else
                                {
                                    $property_location = " AND property_location='" . $_GET['property_location'] . "'";
                                }
                            } else
                            {
                                $property_location = "";
                            }

                            if (isset($_POST['property_type']) && !empty($_POST['property_type']) || isset($_GET['property_type']) && !empty($_GET['property_type']))
                            {
                                if (isset($_POST['property_type']) && !empty($_POST['property_type']))
                                {
                                    $property_type = " AND property_type='" . $_POST['property_type'] . "'";
                                } else
                                {
                                    $property_type = " AND property_type='" . $_GET['property_type'] . "'";
                                }
                            } else
                            {
                                $property_type = "";
                            }



                            if (isset($_POST['property_distance_miles']) && !empty($_POST['property_distance_miles']))
                            {
                                $property_distance_miles = " AND property_within_distance='" . $_POST['property_distance_miles'] . "'";
                            } else
                            {
                                $property_distance_miles = "";
                            }


                            if (isset($_POST[' AND property_rentable_square_ft']) && !empty($_POST['property_rentable_square_ft']))
                            {
                                $property_rentable_square_ft = "rentable_square_feet='" . $_POST['property_rentable_square_ft'] . "'";
                            } else
                            {
                                $property_rentable_square_ft = "";
                            }


                            if (isset($_POST['property_number_unit']) && !empty($_POST['property_number_unit']))
                            {
                                $property_number_unit = " AND number_of_units='" . $_POST['property_number_unit'] . "'";
                            } else
                            {
                                $property_number_unit = "";
                            }


                            if (isset($_POST['property_lot_size']) && !empty($_POST['property_lot_size']))
                            {
                                $property_lot_size = " AND lot_size='" . $_POST['property_lot_size'] . "'";
                            } else
                            {
                                $property_lot_size = "";
                            }


                            if (isset($_POST['property_class']) && !empty($_POST['property_class']))
                            {
                                $property_class = " AND property_class='" . $_POST['property_class'] . "'";
                            } else
                            {
                                $property_class = "";
                            }


                            if (isset($_POST['property_net_operating_income']) && !empty($_POST['property_net_operating_income']))
                            {
                                $find_range = explode("-", $_POST['property_net_operating_income']);
//echo $pieces[0]; // piece1
                                $min = explode("$", $find_range[0]);
//echo $pieces1[0];
                                $min[1];
//echo $pieces[1];
                                if (isset($find_range[1]))
                                {
                                    $max = explode("$", $find_range[1]);
                                }


//echo $pieces2[0];
                                //$max[1];
                                if ($min[1] == '1000001+')
                                {
                                    $min = explode("+", $min[1]);
                                    $property_net_operating_income = " AND net_operating_income >= $min[0]";
                                } else
                                {
//exit;
                                    // WHERE Price BETWEEN 10 AND 20;
                                    // $property_net_operating_income=" AND net_operating_income='".$_POST['property_net_operating_income']."'";
                                    $property_net_operating_income = " AND net_operating_income   BETWEEN $min[1] AND $max[1]";                // ='".$_POST['property_net_operating_income']."'";
                                }
                            } else
                            {
                                $property_net_operating_income = "";
                            }




                            //echo "SELECT COUNT(*) as num FROM property WHERE 1=1 $property_location  $property_type  $property_distance_miles  $property_rentable_square_ft  $property_class  $property_net_operating_income";
                            //exit;

                            $sql = "SELECT COUNT(*) as num FROM property WHERE 1=1 $property_location  $property_type  $property_distance_miles  $property_rentable_square_ft  $property_class  $property_net_operating_income";

                            $total_pages = mysqli_fetch_array(mysqli_query($GLOBALS["___mysqli_ston"], $sql));
                            $total_records = $total_pages['num'];
                        } else
                        {
                            $total_records = find_total('property');
                        }


                        $adjacents = 3;
                        $per_page_records = NO_OF_PAGES;
                        $ppage = 'pagenum';
                        $targetpage = $_SERVER['REQUEST_URI'];
                        list($targetpage) = explode("?" . $ppage . "=", $targetpage);
                        if (isset($_GET[$ppage]))
                            $pagenum = $_GET[$ppage];
                        else
                            $pagenum = '';
                        if ($pagenum == 0)
                            $pagenum = 1;
                        $max = ' limit ' . ($pagenum - 1) * $per_page_records . ',' . $per_page_records;

                        //  $sql = "SELECT * FROM property";
                        if (isset($_POST) && isset($_POST['property_ser']) == "property_ser" || isset($_GET) && !empty($_GET))
                        {


                            $sql = "SELECT * FROM property WHERE 1=1 $property_location  $property_type  $property_distance_miles  $property_rentable_square_ft  $property_class  $property_net_operating_income";

                            //exit;
                        } else
                        {
                            $sql = "SELECT * FROM property ORDER BY property_id DESC";
                        }
                        $res = mysqli_query($GLOBALS["___mysqli_ston"], $sql . $max);
                        // $property = mysql_fetch_object($res);
                        //print_r($property);
                        //exit;
                        while ($property = mysqli_fetch_object($res))
                        {
                            ?>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="thehead"><a href="property-details.php?id=<?php echo $property->property_id ?>">
    <?php if (!empty($property->property_title)) echo $property->property_title;
    else echo "Untitled - Property ID = " . $property->property_id;
    echo " - " . date("d-m-Y", strtotime($property->added_date)) ?></a></div>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td rowspan="4"><?php if (!empty($property->documents))
                                            { ?>
                                                        <img class="padIMG" src="<?php echo IMG; ?><?php echo $property->documents ?>" height="auto" width="100%">
                                                <?php } else
                                                { ?>
                                                        <img class="padIMG" src="<?php echo IMG; ?>propertyimage.jpg" height="auto" width="100%">
                                                <?php } ?></td>
                                                <td class="toright">Property Type:</td>
                                                <td><?php
                                                if (!empty($property->property_type))
                                                {
                                                    echo $property->property_type;
                                                } else
                                                {
                                                    echo "";
                                                }
                                                ?></td>
                                                <td class="toright">Availability:</td>
                                                <td><?php
                                                if (!empty($property->availability))
                                                {
                                                    echo $property->availability;
                                                } else
                                                {
                                                    echo "Not Found";
                                                }
                                                ?></td>
                                                <td>
                            <?php $seller_name = get_table_data('users', 'user_id=' . $property->user_id . '', false, false); ?>
                                                    <a href="seller-profile.php?id=<?php echo $property->user_id; ?>"><?php echo $seller_name[0]->username; ?></a>
                                                </td>
                                            </tr>
                                            <tr>
                            <?php if (!empty($property->lot_size))
                            { // if property type is Multifamily than number of units will showing?>
                                                    <td class="toright">Lot size:</td>
                                                    <td><?php echo $property->lot_size; ?> sq.ft.</td>
                            <?php } else
                            { ?>

                                                    <td class="toright"></td>
                                                    <td></td>
    <?php } ?>
    <?php if (!empty($property->building_size) && $property->property_type != "Land")
    { ?>
                                                    <td class="toright">Building Size:</td>
                                                    <td><?php echo $property->building_size; ?>sq.ft.</td>
    <?php } else
    { ?>
                                                    <td class="toright"></td>
                                                    <td></td>
    <?php } ?>
                                                <td rowspan="3">

    <!--<a href="property-details.php?id=<?php echo $property->property_id; ?>&bidding=yes"><button type="button" class="btn btn-default small">BID NOW</button></a>-->  <!-- matt work start here-->
    <?php $already_bid = find_total('bids', 'property_id=' . $property->property_id . ' AND broker_id=' . $_SESSION['SESS_USER_ID'] . ''); ?>
    <?php if ($already_bid > 0)
    { ?>
                                                        <button type="button" class="btn btn-default small disabled">You place bid already</button>
    <?php } else
    { ?>
                                                        <a href="property-details.php?id=<?php echo $property->property_id; ?>&bidding=yes">
                                                            <button type="button" class="btn btn-default small">BID NOW</button>
                                                        </a>
    <?php } ?>
                                                    <!--maat work end here -->

                                                </td>
                                            </tr>
                                            <tr>
    <?php if ((!empty($property->rentable_square_feet)) && ($property->property_type != "Multifamily" || $property->property_type != "Office"))
    { ?>
                                                    <td class="toright">Rentable Square Feet:</td>
                                                    <td class="toleft"> <?php echo $property->rentable_square_feet; ?> sq.ft.</td>
    <?php } else if ($property->property_type == "Multifamily")
    { ?>
                                                    <td class="toright">Rent per unit:</td>
                                                    <td> $<?php echo $property->averagerent_perunit; ?></td>
    <?php } else
    { ?>
                                                    <td class="toright"></td>
                                                    <td></td>
    <?php } ?>

    <?php if ((!empty($property->building_occupancy_percentage)) && ($property->property_type != "Land"))
    { ?>
                                                    <td class="toright">Building Occupancy Percentage:</td>
                                                    <td class="toleft"><?php echo $property->building_occupancy_percentage; ?>%</td>
    <?php } else
    { ?>
    <?php } ?>

                                            </tr>
                                            <tr>
    <?php if (!empty($property->property_location))
    { ?>
                                                    <td class="toright">Location:</td>
                                                    <td class="toleft"><?php echo $property->property_location; ?></td>
    <?php } else
    {

    } ?>
    <?php if (!empty($property->net_operating_income))
    { ?>
                                                    <td class="toright">NOI:</td>
                                                    <td class="toleft">$<?php echo $property->net_operating_income; ?></td>
    <?php } ?>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /.row -->

<?php } ?>
<?php
$to = $pagenum * $per_page_records;
if ($pagenum == 1)
{
    $from = $pagenum;
} else
{
    $from1 = ($pagenum - 1) * $per_page_records;
    $from = ($from1 + 1);
}
if ($to >= $total_records)
{
    $to = $total_records;
}
?>

                        <!-- /.row -->
                        <hr>
                        <div class="padding-t-40"><span><?php echo "Showing $from to $to of $total_records records" ?></span></div>
                        <div class="center">
<?php include("pagination.php"); ?>
                            <!-- /.pagination-->
                        </div>
                        <!-- /.center-->

                    </div>
                    <!-- /.show property-->
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
            $(".brokerbar").load("brokerbar.php");
            $(document).ready(function () {

                $("#list_t_search li a").on("click", function () {

                    var hrefof = $(this).attr('href');

        //alert(hrefof);
        //var hrefof1= $('#formId').attr('action', hrefof);
        //alert(hrefof1);
        //alert(  $('#form-sidebar').attr('action',hrefof));
                    $("#form-sidebar").attr('action', hrefof);
                    $("#form-sidebar").submit();
                    return false;

                });


                $("#property_type").change(function () {
                    $("#property_lot_size_label").addClass('hide');
                    $("#property_lot_size").addClass('hide');
                    $("#property_number_unit_label").addClass('hide');
                    $("#property_number_unit").addClass('hide');
                    $("#property_rentable_square_ft").removeClass('hide');
                    $("#property_rentable_square_ft_label").removeClass('hide');

                    if ($("#property_type").val() == "Land") {
                        $("#property_rentable_square_ft_label").addClass('hide');
                        $("#property_rentable_square_ft").addClass('hide');
                        $("#property_number_unit_label").addClass('hide');
                        $("#property_number_unit").addClass('hide');
                        $("#property_lot_size_label").removeClass('hide');
                        $("#property_lot_size").removeClass('hide');


                    }

                    if ($("#property_type").val() == "Multifamily") {
                        $("#property_rentable_square_ft_label").addClass('hide');
                        $("#property_rentable_square_ft").addClass('hide');
                        $("#property_lot_size_label").addClass('hide');
                        $("#property_lot_size").addClass('hide');
                        $("#property_number_unit_label").removeClass('hide');
                        $("#property_number_unit").removeClass('hide');


                    }
                });

            });
        </script>
    </body>
</html>