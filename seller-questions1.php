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

                                    <div class="feature-box" style="height: 250px;">
                                        <header class="center"><div class="cite-title1">Tell us about your property</div></header>
                                        <div class="col-md-offset-3 col-md-6 col-sm-6 pickerstart pt-main">
                                            <section id="sidebar">
                                                <aside id="edit-search">
                                                    <!-- <div class="pickertitle">Select Your Property Type</div>-->

                                                    <form  role="form" id="form-sidebar" class="form-search" method="post" action="<?php
                                                    if (!isset($_SESSION['SESS_USER_ID']) || (trim($_SESSION['SESS_USER_ID']) == '') || (trim($_SESSION['SESS_USER_ROLE']) != 'seller') || (trim($_SESSION['SESS_USER_STATUS']) != '1'))
                                                    {
                                                        echo "login.php";
                                                    } else
                                                    {
                                                        echo "seller-finish.php";
                                                    }
                                                    ?>" enctype="multipart/form-data">


                                                        <input type="hidden" name="property_type" id="property_type" value="<?php
                                                               if (isset($_POST['property_type']) && $_POST['property_type'] != "")
                                                               {
                                                                   echo $_POST['property_type'];
                                                               }
                                                               ?>">
                                                        <!--  <div class="form-group">
                                                              <select name="type">
                                                                  <option>Office</option>
                                                                  <option>Multifamily</option>
                                                                  <option>Retail</option>
                                                                  <option>Industrial</option>
                                                                  <option>Land</option>
                                                              </select>
                                                          </div><!-- /.form-group -->
                                                        <!-- <div class="form-group" id="property_location_div1">
                                                             <label for="text-field" class="pickertitle">Where is the Property Located</label>
                                                             <input type="text" class="form-control" id="property_location" name="property_location" aria-describedby="inputError2Status" >

                                                         </div>-->
                                                        <div class="mydivs">
                                                            <div class="form-group has-feedback pt-page" id="property_location_div">
                                                                <label class="control-label pickertitle" for="text-field">Where is the Property Located</label>
                                                                <input id="property_location" class="form-control empty_field" type="text" placeholder="Zip Code or City and State" aria-describedby="property_locationStatus" name="property_location">
                                                                <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                                                                <span id="property_locationStatus" class="sr-only">(error)</span>
                                                            </div>



                                                            <input type="hidden" class="form-control " id="property_location_hidden" name="property_location_hidden" value="">



                                                            <div class="form-group  has-feedback pt-page" id="property_building_size_div">
                                                                <label for="text-field" class="control-label pickertitle">Building Size</label>
                                                                <input type="text" class="form-control empty_field"  name="property_building_size" id="property_building_size" aria-describedby="property_building_sizeStatus"  value="">
                                                                <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                                                                <span id="property_building_sizeStatus" class="sr-only">(error)</span>


                                                            </div>

                                                            <input type="hidden" class="form-control" id="property_building_size_hidden" name="property_building_size_hidden" value="">
                                                            <div class="form-group  has-feedback pt-page" id="property_lot_size_div">
                                                                <label for="text-field" class="control-label pickertitle">Lot Size</label>
                                                                <input type="text" class="form-control empty_field" value="" id="property_lot_size" aria-describedby="property_lot_sizeStatus" name="property_lot_size"></textarea>
                                                                <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                                                                <span id="property_lot_sizeStatus" class="sr-only">(error)</span>


                                                            </div>

                                                            <input type="hidden" class="form-control" id="property_lot_size_hidden" name="property_lot_size_hidden" value="">

                                                            <div class="form-group  has-feedback pt-page" id="property_number_of_units_div" >
                                                                <label for="submit-area" class="control-label pickertitle">Number of units</label>
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control empty_field" id="property_number_of_units" name="property_number_of_units" pattern="\d*" aria-describedby="property_number_of_unitsStatus">
                                                                    <span class="input-group-addon">m<sup>2</sup></span>
                                                                    <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                                                                    <span id="property_number_of_unitsStatus" class="sr-only">(error)</span>
                                                                </div>
                                                            </div>


                                                            <input type="hidden" class="form-control" id="property_number_of_units_hidden" name="property_number_of_units_hidden" value="">


                                                            <div class="form-group  has-feedback" id="property_rentable_squre_feet_div" >
                                                                <label for="submit-area" class="control-label pickertitle">Rentable Square Feet</label>
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control empty_field" id="property_rentable_squre_feet" name="property_rentable_squre_feet" pattern="\d*" aria-describedby="property_rentable_squre_feetStatus">
                                                                    <span class="input-group-addon">m<sup>2</sup></span>
                                                                    <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                                                                    <span id="property_number_of_unitsStatus" class="sr-only">(error)</span>
                                                                </div>
                                                            </div>


                                                            <input type="hidden" class="form-control" id="property_rentable_squre_feet_hidden" name="property_rentable_squre_feet_hidden" value="">


                                                            <div class="form-group  has-feedback" id="property_average_rent_per_unit_div">
                                                                <label class="control-label pickertitle" for="text-field">Average rent per unit</label>
                                                                <input id="property_average_rent_per_unit" class="form-control empty_field" type="text" aria-describedby="property_average_rent_per_unitStatus" name="property_average_rent_per_unit">
                                                                <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                                                                <span id="property_average_rent_per_unitStatus" class="sr-only">(error)</span>
                                                            </div>

                                                            <input type="hidden" class="form-control empty_field" id="property_average_rent_per_unit_hidden" name="property_average_rent_per_unit_hidden" value="">


                                                            <div class="form-group  has-feedback" id="property_average_rent_per_sf_div">
                                                                <label class="control-label pickertitle" for="text-field">Average rent per SF</label>
                                                                <input id="property_average_rent_per_sf" class="form-control empty_field" type="text" aria-describedby="property_average_rent_per_sfStatus" name="property_average_rent_per_sf">
                                                                <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                                                                <span id="property_average_rent_per_sfStatus" class="sr-only">(error)</span>
                                                            </div>

                                                            <input type="hidden" class="form-control" id="property_average_rent_per_sf_hidden" name="property_average_rent_per_sf_hidden" value="">


                                                            <div class="form-group  has-feedback" id="property_building_occu_per_div">
                                                                <label class="control-label pickertitle" for="text-field">Building Occupancy Percentage</label>
                                                                <input id="property_building_occu_per" class="form-control empty_field" type="text" aria-describedby="property_building_occu_perStatus" name="property_building_occu_per">
                                                                <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                                                                <span id="property_building_occu_perStatus" class="sr-only">(error)</span>
                                                            </div>

                                                            <input type="hidden" class="form-control" id="property_building_occu_per_hidden" name="property_building_occu_per_hidden" value="">

                                                            <div class="form-group  has-feedback" id="property_net_oper_income_div">
                                                                <label class="control-label pickertitle" for="text-field">Net operating income</label>
                                                                <input id="property_net_oper_income" class="form-control empty_field" type="text" aria-describedby="property_net_oper_incomeStatus" name="property_net_oper_income">
                                                                <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                                                                <span id="property_net_oper_incomeStatus" class="sr-only">(error)</span>
                                                            </div>

                                                            <input type="hidden" class="form-control" id="property_net_oper_income_hidden" name="property_net_oper_income_hidden" value="">


                                                            <div class="form-group  has-feedback" id="property_address_div">
                                                                <label class="control-label pickertitle" for="text-field">Property Address</label>
                                                                <input id="property_address" class="form-control empty_field" type="text" aria-describedby="property_addressStatus" name="property_address">
                                                                <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                                                                <span id="property_addressStatus" class="sr-only">(error)</span>
                                                            </div>

                                                            <input type="hidden" class="form-control" id="property_address_hidden" name="property_address_hidden" value="">
                                                            <div class="form-group  has-feedback" id="property_any_information_div">
                                                                <label for="text-field" class="control-label pickertitle">Any information you want to add</label>
                                                                <textarea class="form-control " rows="8"  id="property_any_information" aria-describedby="property_any_informationStatus" name="property_any_information"></textarea>
                                                                <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                                                                <span id="property_any_informationStatus" class="sr-only">(error)</span>


                                                            </div>

                                                            <input type="hidden" class="form-control" id="property_any_information_hidden" name="property_any_information_hidden" value="">


                                                            <div class="form-group" hide id="property_file";>
                                                                <input id="file-upload" type="file" name="file_doc" id="file_doc" class="file" data-show-upload="false" data-show-caption="false" data-show-remove="false" accept="image/jpeg,image/png" data-browse-class="btn btn-default" data-browse-label="Browse Images">
                                                                <figure class="note"><strong>Hint:</strong> Choose the Image!</figure>
                                                            </div>


                                                        </div>


                                                        <!--   <div class="form-group">
                                                              <input id="file-upload" type="file" class="file" data-show-upload="false" data-show-caption="false" data-show-remove="false" accept="image/jpeg,image/png" data-browse-class="btn btn-default" data-browse-label="Browse Images">
                                                              <figure class="note"><strong>Hint:</strong> Choose the Image!</figure>
                                                          </div>
                                                          <div class="form-group">
                                                              <label for="submit-area" class="pickertitle">Area</label>
                                                              <div class="input-group">
                                                                  <input type="text" class="form-control" id="submit-area" name="area" pattern="\d*" required="">
                                                                  <span class="input-group-addon">m<sup>2</sup></span>
                                                              </div>
                                                          </div>
                                                          <div class="checkbox">
                                                                  <label>
                                                                      <input type="checkbox">Using Checkbox
                                                                      <i class="fa fa-question-circle tool-tip"  data-toggle="tooltip" data-placement="right" title="We can use something to guide the users"></i>
                                                                  </label>
                                                          </div>   -->


                                                        <div class="form-group">
                                                            <button type="submit" id="property_next" name="next" class="btn nextbtn btn-default link-arrow">
                                                                Next
                                                            </button>
                                                        </div>
                                                        <div class="form-group">
                                                            <button type="submit" id="property_back" name="prev"  class="btn nextbtn btn-default link-arrow">
                                                                Back
                                                            </button>
                                                        </div>

                                                        <input type="hidden" class="form-control" id="property_submit" name="action" value="property_submit">

                                                        </div>









                                                        <!-- </form> /#form-map -->



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
                                                                $('#property_next1').click(function () {

                                                                    if ($('#property_submit').val() == "Login" || $('#property_submit').val() == "Finish") {
                                                                        $('#form-sidebar').submit();

                                                                        return false;
                                                                    } else {
                                                                        if ($('#property_location').val() == "" && $('#property_location_hidden').val() == "") {
                                                                            $('#property_location_div').addClass('has-error');
                                                                            return false;
                                                                        } else {
                                                                            var property_location = $('#property_location').val();
                                                                            $('#property_location_hidden').val(property_location);
                                                                            $('#property_location_div').hide();
                                                                        }


                                                                        if ($('#property_type').val() != "Land") {
                                                                            $('#property_building_size_div').removeClass('hide');
                                                                            if ($('#property_building_size_hidden').val() == "" && $('#property_building_size').val() == "") {
                                                                                $('#property_building_size_div').addClass('has-error');
                                                                                return false;
                                                                            } else {
                                                                                var property_building_size = $('#property_building_size').val();
                                                                                $('#property_building_size_hidden').val(property_building_size);
                                                                                $('#property_building_size_div').hide();
                                                                            }
                                                                        }

                                                                        $('#property_lot_size_div').removeClass('hide');
                                                                        if ($('#property_lot_size_hidden').val() == "" && $('#property_lot_size').val() == "") {
                                                                            $('#property_lot_size_div').addClass('has-error');
                                                                            return false;
                                                                        } else {
                                                                            var property_lot_size = $('#property_lot_size').val();
                                                                            $('#property_lot_size_hidden').val(property_lot_size);
                                                                            $('#property_lot_size_div').hide();
                                                                        }

                                                                        if ($('#property_type').val() == "Multifamily") {
                                                                            $('#property_number_of_units_div').removeClass('hide');
                                                                            if ($('#property_number_of_units_hidden').val() == "" && $('#property_number_of_units').val() == "") {
                                                                                $('#property_number_of_units_div').addClass('has-error');
                                                                                return false;
                                                                            } else {
                                                                                var property_lot_size = $('#property_number_of_units').val();
                                                                                $('#property_number_of_units_hidden').val(property_lot_size);
                                                                                $('#property_number_of_units_div').hide();
                                                                            }
                                                                        }

                                                                        if ($('#property_type').val() == "Retail" || $('#property_type').val() == "Industrial" || $('#property_type').val() == "Land") {
                                                                            $('#property_rentable_squre_feet_div').removeClass('hide');
                                                                            if ($('#property_rentable_squre_feet_hidden').val() == "" && $('#property_rentable_squre_feet').val() == "") {
                                                                                $('#property_rentable_squre_feet_div').addClass('has-error');
                                                                                return false;
                                                                            } else {
                                                                                var property_rentable_squre_feet = $('#property_rentable_squre_feet').val();
                                                                                $('#property_rentable_squre_feet_hidden').val(property_rentable_squre_feet);
                                                                                $('#property_rentable_squre_feet_div').hide();
                                                                            }
                                                                        }

                                                                        if ($('#property_type').val() == "Multifamily") {
                                                                            $('#property_average_rent_per_unit_div').removeClass('hide');
                                                                            if ($('#property_average_rent_per_unit_hidden').val() == "" && $('#property_average_rent_per_unit').val() == "") {
                                                                                $('#property_average_rent_per_unit_div').addClass('has-error');
                                                                                return false;
                                                                            } else {
                                                                                var property_average_rent_per_unit = $('#property_average_rent_per_unit').val();
                                                                                $('#property_average_rent_per_unit_hidden').val(property_average_rent_per_unit);
                                                                                $('#property_average_rent_per_unit_div').hide();
                                                                            }
                                                                        }


                                                                        if ($('#property_type').val() != "Land") {
                                                                            $('#property_average_rent_per_sf_div').removeClass('hide');
                                                                            if ($('#property_average_rent_per_sf_hidden').val() == "" && $('#property_average_rent_per_sf').val() == "") {
                                                                                $('#property_average_rent_per_sf_div').addClass('has-error');
                                                                                return false;
                                                                            } else {
                                                                                var property_average_rent_per_sf = $('#property_average_rent_per_sf').val();
                                                                                $('#property_average_rent_per_sf_hidden').val(property_average_rent_per_sf);
                                                                                $('#property_average_rent_per_sf_div').hide();
                                                                            }
                                                                        }
                                                                        if ($('#property_type').val() != "Land") {
                                                                            $('#property_building_occu_per_div').removeClass('hide');
                                                                            if ($('#property_building_occu_per_hidden').val() == "" && $('#property_building_occu_per').val() == "") {
                                                                                $('#property_building_occu_per_div').addClass('has-error');
                                                                                return false;
                                                                            } else {
                                                                                var property_average_rent_per_unit = $('#property_building_occu_per').val();
                                                                                $('#property_building_occu_per_hidden').val(property_average_rent_per_unit);
                                                                                $('#property_building_occu_per_div').hide();
                                                                            }
                                                                        }


                                                                        if ($('#property_type').val() != "Land") {
                                                                            $('#property_net_oper_income_div').removeClass('hide');
                                                                            if ($('#property_net_oper_income_hidden').val() == "" && $('#property_net_oper_income').val() == "") {
                                                                                $('#property_net_oper_income_div').addClass('has-error');
                                                                                return false;
                                                                            } else {
                                                                                var property_net_oper_income = $('#property_net_oper_income').val();
                                                                                $('#property_net_oper_income_hidden').val(property_net_oper_income);
                                                                                $('#property_net_oper_income_div').hide();
                                                                            }
                                                                        }
                                                                        $('#property_address_div').removeClass('hide');
                                                                        if ($('#property_address_hidden').val() == "" && $('#property_address').val() == "") {
                                                                            $('#property_address_div').addClass('has-error');
                                                                            return false;
                                                                        } else {
                                                                            var property_address = $('#property_address').val();
                                                                            $('#property_address_hidden').val(property_address);
                                                                            $('#property_address_div').hide();
                                                                        }
                                                                        $('#property_any_information_div').removeClass('hide');
                                                                        if ($('#property_any_information_hidden').val() == "" && $('#property_any_information').val() == "") {
                                                                            $('#property_any_information_div').addClass('has-error');
                                                                            return false;
                                                                        } else {
                                                                            var property_any_information = $('#property_any_information').val();
                                                                            $('#property_any_information_hidden').val(property_any_information);
                                                                            $('#property_any_information_div').hide();
                                                                        }
                                                                        $('#property_file').removeClass('hide');

<?php if (!isset($_SESSION['SESS_USER_ID']) || (trim($_SESSION['SESS_USER_ID']) == '') || (trim($_SESSION['SESS_USER_ROLE']) != 'seller') || (trim($_SESSION['SESS_USER_STATUS']) != '1'))
{
    ?>
                                                                            $('#property_next').text("Login");
                                                                            $('#property_submit').val("Login");
<?php } else
{
    ?>
                                                                            $('#property_next').text("Finish");
                                                                            $('#property_submit').val("Finish");
<?php } ?>

                                                                        return false;

                                                                    }
                                                                });



                                                                var divs = $('.mydivs>div');
                                                                var now = 0; // currently shown div
                                                                divs.hide().first().show();
                                                                $("button[name=next]").click(function (e) {



                                                                    if ($('#property_submit').val() == "Login" || $('#property_submit').val() == "Finish") {


                                                                        $('#form-sidebar').submit();

                                                                        return false;
                                                                    } else {


                                                                        //alert(divs.eq(now).attr('id'));
                                                                        //return false;
                                                                        if (divs.eq(now).attr('id') == "property_location_div") {
                                                                            if ($('#property_location').val() == "" && $('#property_location_hidden').val() == "") {
                                                                                $('#property_location_div').addClass('has-error');
                                                                                return false;
                                                                            } else {
                                                                                var property_location = $('#property_location').val();
                                                                                $('#property_location_hidden').val(property_location);
                                                                            }

                                                                        }


                                                                        if ($('#property_type').val() != "Land") {
                                                                            if (divs.eq(now).attr('id') == "property_building_size_div") {
                                                                                if ($('#property_building_size_hidden').val() == "" && $('#property_building_size').val() == "") {
                                                                                    $('#property_building_size_div').addClass('has-error');
                                                                                    return false;
                                                                                } else {
                                                                                    var property_building_size = $('#property_building_size').val();
                                                                                    $('#property_building_size_hidden').val(property_building_size);
                                                                                }
                                                                            }
                                                                        }


                                                                        if (divs.eq(now).attr('id') == "property_lot_size_div") {
                                                                            if ($('#property_lot_size_hidden').val() == "" && $('#property_lot_size').val() == "") {
                                                                                $('#property_lot_size_div').addClass('has-error');
                                                                                return false;
                                                                            } else {
                                                                                var property_lot_size = $('#property_lot_size').val();
                                                                                $('#property_lot_size_hidden').val(property_lot_size);
                                                                            }
                                                                        }


                                                                        if ($('#property_type').val() == "Multifamily") {
                                                                            if (divs.eq(now).attr('id') == "property_number_of_units_div") {
                                                                                if ($('#property_number_of_units_hidden').val() == "" && $('#property_number_of_units').val() == "") {
                                                                                    $('#property_number_of_units_div').addClass('has-error');
                                                                                    return false;
                                                                                } else {
                                                                                    var property_lot_size = $('#property_number_of_units').val();
                                                                                    $('#property_number_of_units_hidden').val(property_lot_size);
                                                                                }
                                                                            }
                                                                        }

                                                                        if ($('#property_type').val() == "Retail" || $('#property_type').val() == "Industrial" || $('#property_type').val() == "Land") {
                                                                            if (divs.eq(now).attr('id') == "property_rentable_squre_feet_div") {
                                                                                if ($('#property_rentable_squre_feet_hidden').val() == "" && $('#property_rentable_squre_feet').val() == "") {
                                                                                    $('#property_rentable_squre_feet_div').addClass('has-error');
                                                                                    return false;
                                                                                } else {
                                                                                    var property_rentable_squre_feet = $('#property_rentable_squre_feet').val();
                                                                                    $('#property_rentable_squre_feet_hidden').val(property_rentable_squre_feet);
                                                                                }
                                                                            }
                                                                        }

                                                                        if ($('#property_type').val() == "Multifamily") {
                                                                            if (divs.eq(now).attr('id') == "property_average_rent_per_unit_div") {
                                                                                if ($('#property_average_rent_per_unit_hidden').val() == "" && $('#property_average_rent_per_unit').val() == "") {
                                                                                    $('#property_average_rent_per_unit_div').addClass('has-error');
                                                                                    return false;
                                                                                } else {
                                                                                    var property_average_rent_per_unit = $('#property_average_rent_per_unit').val();
                                                                                    $('#property_average_rent_per_unit_hidden').val(property_average_rent_per_unit);
                                                                                }
                                                                            }
                                                                        }


                                                                        if ($('#property_type').val() != "Land") {
                                                                            if (divs.eq(now).attr('id') == "property_average_rent_per_sf_div") {
                                                                                if ($('#property_average_rent_per_sf_hidden').val() == "" && $('#property_average_rent_per_sf').val() == "") {
                                                                                    $('#property_average_rent_per_sf_div').addClass('has-error');
                                                                                    return false;
                                                                                } else {
                                                                                    var property_average_rent_per_sf = $('#property_average_rent_per_sf').val();
                                                                                    $('#property_average_rent_per_sf_hidden').val(property_average_rent_per_sf);
                                                                                }
                                                                            }
                                                                        }


                                                                        if ($('#property_type').val() != "Land") {
                                                                            if (divs.eq(now).attr('id') == "property_building_occu_per_div") {
                                                                                if ($('#property_building_occu_per_hidden').val() == "" && $('#property_building_occu_per').val() == "") {
                                                                                    $('#property_building_occu_per_div').addClass('has-error');
                                                                                    return false;
                                                                                } else {
                                                                                    var property_average_rent_per_unit = $('#property_building_occu_per').val();
                                                                                    $('#property_building_occu_per_hidden').val(property_average_rent_per_unit);
                                                                                }
                                                                            }
                                                                        }


                                                                        if ($('#property_type').val() != "Land") {
                                                                            if (divs.eq(now).attr('id') == "property_net_oper_income_div") {
                                                                                if ($('#property_net_oper_income_hidden').val() == "" && $('#property_net_oper_income').val() == "") {
                                                                                    $('#property_net_oper_income_div').addClass('has-error');
                                                                                    return false;
                                                                                } else {
                                                                                    var property_net_oper_income = $('#property_net_oper_income').val();
                                                                                    $('#property_net_oper_income_hidden').val(property_net_oper_income);
                                                                                }
                                                                            }
                                                                        }

                                                                        if (divs.eq(now).attr('id') == "property_address_div") {
                                                                            if ($('#property_address_hidden').val() == "" && $('#property_address').val() == "") {
                                                                                $('#property_address_div').addClass('has-error');
                                                                                return false;
                                                                            } else {
                                                                                var property_address = $('#property_address').val();
                                                                                $('#property_address_hidden').val(property_address);
                                                                            }
                                                                        }

                                                                        if (divs.eq(now).attr('id') == "property_any_information_div") {
                                                                            if ($('#property_any_information_hidden').val() == "" && $('#property_any_information').val() == "") {
                                                                                $('#property_any_information_div').addClass('has-error');
                                                                                return false;
                                                                            } else {
                                                                                var property_any_information = $('#property_any_information').val();
                                                                                $('#property_any_information_hidden').val(property_any_information);

                                                                            }
                                                                        }









                                                                        divs.eq(now).hide();
                                                                        if ($('#property_type').val() == "Land" && (divs.eq(now).attr('id') == "property_location_div" || divs.eq(now).attr('id') == "property_lot_size_div" || divs.eq(now).attr('id') == "property_number_of_units_div" || divs.eq(now).attr('id') == "property_rentable_squre_feet_div")) {
                                                                            if (divs.eq(now).attr('id') == "property_rentable_squre_feet_div") {

                                                                                now = (now + 5 < divs.length) ? now + 5 : 0;

                                                                            } else {
                                                                                now = (now + 2 < divs.length) ? now + 2 : 0;
                                                                            }
                                                                        } else if ($('#property_type').val() == "Office" && (divs.eq(now).attr('id') == "property_lot_size_div")) {
                                                                            now = (now + 4 < divs.length) ? now + 4 : 0;

                                                                        } else if ($('#property_type').val() == "Multifamily" && (divs.eq(now).attr('id') == "property_number_of_units_div")) {
                                                                            now = (now + 2 < divs.length) ? now + 2 : 0;

                                                                        } else if ($('#property_type').val() == "Retail" && (divs.eq(now).attr('id') == "property_lot_size_div" || divs.eq(now).attr('id') == "property_rentable_squre_feet_div")) {
                                                                            now = (now + 2 < divs.length) ? now + 2 : 0;

                                                                        } else if ($('#property_type').val() == "Industrial" && (divs.eq(now).attr('id') == "property_lot_size_div" || divs.eq(now).attr('id') == "property_rentable_squre_feet_div")) {
                                                                            now = (now + 2 < divs.length) ? now + 2 : 0;

                                                                        } else {
                                                                            now = (now + 1 < divs.length) ? now + 1 : 0;
                                                                        }



                                                                        if (now == 11) {
<?php if (!isset($_SESSION['SESS_USER_ID']) || (trim($_SESSION['SESS_USER_ID']) == '') || (trim($_SESSION['SESS_USER_ROLE']) != 'seller') || (trim($_SESSION['SESS_USER_STATUS']) != '1'))
{
    ?>
                                                                                divs.eq(now).show();
                                                                                $('#property_next').text("Login");
                                                                                $('#property_submit').val("Login");
<?php } else
{
    ?>
                                                                                $('#property_next').text("Finish");
                                                                                $('#property_submit').val("Finish");
<?php } ?>
                                                                        } else {
                                                                            divs.eq(now).show(); // show next

                                                                        }

                                                                        return false;

                                                                    }

                                                                });







                                                                $("button[name=prev]").click(function (e) {
                                                                    //alert(divs.eq(now).attr('id'));

                                                                    if (now == 11) {
                                                                        $('#property_next').text("Next");
                                                                        $('#property_submit').val("property_submit");
                                                                    }
                                                                    divs.eq(now).hide();
                                                                    if ($('#property_type').val() == "Land" && (divs.eq(now).attr('id') == "property_location_div" || divs.eq(now).attr('id') == "property_lot_size_div" || divs.eq(now).attr('id') == "property_rentable_squre_feet_div" || divs.eq(now).attr('id') == "property_address_div")) {
                                                                        if (divs.eq(now).attr('id') == "property_address_div") {

                                                                            now = (now - 5 < divs.length) ? now - 5 : 0;

                                                                        } else if (divs.eq(now).attr('id') == "property_rentable_squre_feet_div") {
                                                                            now = (now - 2 < divs.length) ? now - 2 : 0;
                                                                        } else if (divs.eq(now).attr('id') == "property_lot_size_div") {
                                                                            now = (now - 2 < divs.length) ? now - 2 : 0;
                                                                        }
                                                                    } else if ($('#property_type').val() == "Office" && (divs.eq(now).attr('id') == "property_average_rent_per_sf_div" || divs.eq(now).attr('id') == "property_location_div")) {
                                                                        if (divs.eq(now).attr('id') == "property_average_rent_per_sf_div") {
                                                                            now = (now - 4 < divs.length) ? now - 4 : 0;
                                                                        }



                                                                    } else if ($('#property_type').val() == "Multifamily" && (divs.eq(now).attr('id') == "property_location_div" || divs.eq(now).attr('id') == "property_average_rent_per_unit_div")) {
                                                                        if (divs.eq(now).attr('id') == "property_average_rent_per_unit_div") {
                                                                            now = (now - 2 < divs.length) ? now - 2 : 0;
                                                                        }
                                                                    } else if ($('#property_type').val() == "Retail" && (divs.eq(now).attr('id') == "property_location_div" || divs.eq(now).attr('id') == "property_average_rent_per_sf_div" || divs.eq(now).attr('id') == "property_rentable_squre_feet_div")) {
                                                                        if (divs.eq(now).attr('id') == "property_average_rent_per_sf_div" || divs.eq(now).attr('id') == "property_rentable_squre_feet_div") {
                                                                            now = (now - 2 < divs.length) ? now - 2 : 0;
                                                                        }

                                                                    } else if ($('#property_type').val() == "Industrial" && (divs.eq(now).attr('id') == "property_location_div" || divs.eq(now).attr('id') == "property_average_rent_per_sf_div" || divs.eq(now).attr('id') == "property_rentable_squre_feet_div")) {
                                                                        if (divs.eq(now).attr('id') == "property_average_rent_per_sf_div" || divs.eq(now).attr('id') == "property_rentable_squre_feet_div") {
                                                                            now = (now - 2 < divs.length) ? now - 2 : 0;
                                                                        }

                                                                    } else {
                                                                        now = (now - 1 < divs.length) ? now - 1 : 0;
                                                                    }






                                                                    //  now = (now > 0) ? now - 1 : divs.length - 1;
                                                                    divs.eq(now).show(); // or .css('display','block');
                                                                    //console.log(divs.length, now);
                                                                });


                                                            });








                                                        </script>

                                                        </body>
                                                        </html>