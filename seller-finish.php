<?php
require_once('includes/connection.php');
require_once('auth_seller.php');
//print_r($_POST );
//exit;

if (isset($_POST['action']))
{
    switch ($_POST['action'])
    {

        case 'property_finish':
            echo property_finish();
            break;

        case 'Finish':
            echo property_finish();
            break;
    }
}

function property_finish()
{


    if (isset($_POST['action']) && $_POST['action'] == "property_finish")
    {
        $property = array();
        $property = $_SESSION['property'];
        $property_files = array();
        $property_files = $_SESSION['property_file'];
        //print_r($property_files['file_doc']['name']);
        //exit;
        $property_title = $_POST['property_title'];
    } elseif (isset($_POST['action']) && $_POST['action'] == "Finish")
    {
        $property = array();

//print_r($_FILES);
//exit;
        $property = $_POST;
        $property_files = $_FILES;
        $property_title = $property['property_title'];
    }



    if (isset($property) && $property != "")
    {
        $curr_d_t = date("Y-m-d H:i:s");  //current data nd time
        $property_data = array("property_location" => $property['property_location_hidden'],
            "building_size" => $property['property_building_size_hidden'],
            "availability" => "Available",
            "property_type" => $property['property_type'],
            "property_address" => $property['property_address'],
            "lot_size" => $property['property_lot_size_hidden'],
            "city_state" => $property['property_building_size'],
            "zip" => "",
            "number_of_units" => $property['property_number_of_units_hidden'],
            "rentable_square_feet" => $property['property_rentable_squre_feet_hidden'],
            "averagerent_perunit" => $property['property_average_rent_per_unit_hidden'],
            "averagerent_persf" => $property['property_average_rent_per_sf_hidden'],
            "building_occupancy_percentage" => $property['property_building_occu_per_hidden'],
            "property_description" => $property['property_any_information_hidden'],
            "net_operating_income" => $property['property_building_size'],
            "documents" => $property_files['file_doc']['name'],
            "user_id" => $_SESSION['SESS_USER_ID'],
            "added_date" => $curr_d_t,
            "property_title" => $property_title,
            "bid_status" => 'Posted',
            "last_status_change" => $curr_d_t
        );

//print_r($property_data);
//exit;

        $tbl = 'property';
        if (matching_Formfields_TableColumn_insert($property_data, $tbl))
        {
            $folder = "img/";
            if (isset($_SESSION['property_file']) && !empty($_SESSION['property_file']))
            {
                $property_files = $_SESSION['property_file'];
                $path = "temp/";
                copy("$path" . $property_files['file_doc']['name'], "$folder" . $property_files['file_doc']['name']);
                unset($_SESSION['property_file']);

                /* send  email to all brokers that new propery has been added start */
                $last_property_id = last_id();
                $get_all_brokers = get_table_data('users', 'user_type="broker"');
                foreach ($get_all_brokers as $broker)
                {
                    $to = $broker->email;
                    $subject = "New property has been added!";
                    $headers .= "MIME-Version: 1.0\r\n";
                    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

                    $body = 'Hi, <br/> ' . $broker->username . '<br/> New property is added .You can palce bid on it !good luck<br/>';
                    $body .=' link is  =<a href="' . HTTP_PATH . 'property-details.php?id=' . $last_property_id . '&bidding=yes">Click here </a>';
                    if (mail($to, $subject, $body, $headers))
                    {
                        //echo $well.="email sent to broker.<br>";
                    }
                }
                /* send  email to all brokers that new propery has been added end */

                //echo "safeer";
                //exit;
                //if(unlink($path.$property_files['file_doc']['name'])){
                // deleted
//}
//0exit;
            }
            //print_r($property_files['file_doc']["tmp_name"]);
            //print_r("$folder".$property_files['file_doc']['name']);
            //exit;
            //echo "waseem";
            //exit;
//echo 	 $property_files['file_doc']["tmp_name"];
//echo      $property_files['file_doc']['name'];
            //exit;
            move_uploaded_file($property_files['file_doc']["tmp_name"], "$folder" . $property_files['file_doc']['name']);
            $profile_pic = $property_files['file_doc']['name'];

            $msg = "Your Property added  successfully!";
            $_SESSION['Property_MSG_Finish'] = $msg;
            unset($_SESSION['property']);
            session_write_close();
            //header("Location: ".HTTP_PATH."dashboard_broker.php");
            echo "<script type='text/javascript'>
    					 window.location = 'seller-dashboard.php';
     				</script>";
        }
    }
}
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
                <!-- Agent Detail -->
                <section id="banner">
                    <div class="block has-dark-background background-color-default-darker center text-banner">
                        <div class="container">
                            <h1 class="no-bottom-margin no-border">
                                <div class=" col-md-offset-2 col-md-8 col-sm-4">
                                    <style>
                                        #banner .feature-box
                                        {
                                            height: 350px !important;
                                            background-color: #fff;
                                            color: #073855;
                                            padding: 20px;
                                        }
                                        .cite-title1
                                        {
                                            font-size: 36px;
                                            font-weight:700;
                                            text-transform:uppercase;
                                        }
                                        .btn
                                        {
                                            height: 50px;
                                        }
                                        .pickertitle
                                        {
                                            font-size: 16px;
                                            font-weight: 700;
                                            text-align: left !important;
                                            margin-bottom: 8px;
                                        }
                                        .pickerstart
                                        {
                                            margin-top: 30px;
                                        }
                                        .boxfooter
                                        {
                                            font-size:13px;
                                            clear:both;
                                        }
                                        #sidebar aside {
                                            margin-bottom:0px;
                                        }
                                        .col-md-6 img
                                        {
                                            width: 100%;
                                        }
                                        .nextbtn
                                        {
                                            font-size: 20px;
                                        }
                                        .form-group ,.checkbox
                                        {
                                            text-align:left;
                                            font-size: 12px;
                                        }
                                        .feature-box
                                        {
                                            display:inline-table;
                                        }
                                        @media (max-width: 767px){
                                            .cite-title1 {
                                                line-height: normal !important;
                                                font-size: 20px;
                                                font-weight:100;
                                            }
                                            .feature-box h3 {
                                                font-size: 12px;
                                            }
                                            .pickerstart
                                            {
                                                margin-top: 30px;
                                            }
                                            .form-group, .checkbox
                                            {
                                                text-align:left;
                                                font-size: 12px;
                                            }
                                            .pickertitle
                                            {
                                                font-size: 12px;
                                                font-weight: 100;
                                                text-align: left !important;
                                                margin-bottom: 5px;
                                            }
                                            .boxfooter {
                                                font-size: 6px;
                                                clear: both;
                                                line-height: initial;
                                            }
                                            .howwork {
                                                padding:2px 5px
                                            }


                                        }
                                    </style>
                                    <div class="feature-box" style="height: 250px;">
                                        <header class="center"><div class="cite-title1">To add  property Click on Finish</div></header>
                                        <div class="col-md-offset-3 col-md-6 col-sm-6 pickerstart">
                                            <section id="sidebar">
                                                <aside id="edit-search">
                                                    <!-- <div class="pickertitle">Select Your Property Type</div>-->
                                                    <form role="form" id="form-sidebar" class="form-search" method="post" action="" enctype="multipart/form-data">



                                                        <div class="form-group has-feedback" id="property_location_div">
                                                            <label class="control-label pickertitle" for="text-field">Property Title</label>
                                                            <input id="property_title" class="form-control empty_field" type="text" placeholder="Property Title" aria-describedby="property_titleStatus" name="property_title" required><span id="property_titleStatus" class="sr-only">(error)</span>
                                                            <input type="checkbox" id="not_sure_property_title" name="not_sure_property_title">Not Sure



                                                        </div>

                                                        <div class="form-group">
                                                            <button type="submit" id="property_finish" class="btn nextbtn btn-default link-arrow">
                                                                Finish
                                                            </button>
                                                        </div>
                                                        <input type="hidden" class="form-control" id="property_finish" name="action" value="property_finish">





                                                    </form><!-- /#form-map -->

                                                </aside><!-- /#edit-search -->
                                            </section><!-- /#sidebar -->
                                        </div>
                                        <div class="boxfooter">*Once you submit your preperty information local brokers will review and submit their best offer to list your property. There is <span style="text-transform:uppercase"><strong>no obligation</strong></span> to hire these brokers</div>

                                    </div><!-- /.feature-box -->
                                </div>
                            </h1>
                        </div>
                    </div>
                </section>
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

            $(document).ready(function () {



                $("#not_sure_property_title").on("click", function () {
                    if (not_sure_property_title.checked) {

                        $('#property_title').val('N/A');

                    } else {

                        $('#property_title').val('');

                    }


                });

            });

        </script>

    </body>
</html>