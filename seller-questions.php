<?php  require_once('includes/connection.php');
if(!isset($_POST['property_type']) ||  $_POST['property_type']==""){ 

 echo "<script type='text/javascript'>
     window.location = 'index.php';
     </script>";
exit();


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
									margin-bottom: 8px;
									text-align: center !important;
									width: 100%;
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
                                <header class="center"><div class="cite-title1">Tell us about your property</div></header>
                                <div class="col-md-offset-3 col-md-6 col-sm-6 pickerstart">
                                    <section id="sidebar">
                                        <aside id="edit-search">
                                           <!-- <div class="pickertitle">Select Your Property Type</div>-->
                                            <form role="form" id="form-sidebar" class="form-search" method="post" action="<?php    if(!isset($_SESSION['SESS_USER_ID']) || (trim($_SESSION['SESS_USER_ID']) == '') || (trim($_SESSION['SESS_USER_ROLE']) != 'seller') || (trim($_SESSION['SESS_USER_STATUS']) != '1')  ) { echo "login.php";}else{echo "seller-finish.php";}    ?>" enctype="multipart/form-data">
                                            
                                            
                                            <input type="hidden" name="property_type" id="property_type" value="<?php if(isset($_POST['property_type']) &&  $_POST['property_type']!=""){ echo $_POST['property_type']; } ?>">
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
                                        <div class="form-group has-feedback" id="property_location_div">
                                        <label class="control-label pickertitle" for="text-field">Where is the Property Located</label>
                                        <input id="property_location" class="form-control empty_field" type="text" placeholder="Zip Code or City and State" aria-describedby="property_locationStatus" name="property_location"><span id="property_locationStatus" class="sr-only">(error)</span>
                                         <input type="checkbox" id="not_sure_location" name="not_sure_location">Not Sure   
                                         
                            
                                         
                                        </div>
                                       
                                         
                                        
                                        
                                      <input type="hidden" class="form-control " id="property_location_hidden" name="property_location_hidden" value="">
                                      
                                      
                                      
                                               <div class="form-group  has-feedback" id="property_building_size_div">
                                                    <label for="text-field" class="control-label pickertitle">Building Size</label>
                                                    <input type="text" class="form-control empty_field"  name="property_building_size" id="property_building_size" aria-describedby="property_building_sizeStatus"  value="">
                                                        <span class="input-group-addon">ft<sup>2</sup></span>
                                                    <span id="property_building_sizeStatus" class="sr-only">(error)</span>     
                                                  <input type="checkbox" id="not_sure_building" name="not_sure_building">Not Sure  
                                                    
                                                </div>
                                                
                                           <input type="hidden" class="form-control" id="property_building_size_hidden" name="property_building_size_hidden" value="">      
                                            <div class="form-group  has-feedback" id="property_lot_size_div">
                                                    <label for="text-field" class="control-label pickertitle">Lot Size</label>
                                                    <input type="text" class="form-control empty_field" value="" id="property_lot_size" aria-describedby="property_lot_sizeStatus" name="property_lot_size"></textarea>
                                                        <span class="input-group-addon">ft<sup>2</sup></span>
                                                    <span id="property_lot_sizeStatus" class="sr-only">(error)</span>     
                                                     <input type="checkbox" id="not_sure_lot" name="not_sure_lot">Not Sure
                                                    
                                                </div> 
                                                
                                 <input type="hidden" class="form-control" id="property_lot_size_hidden" name="property_lot_size_hidden" value="">   
                                             
                                             <div class="form-group  has-feedback" id="property_number_of_units_div" >
                                                    <label for="submit-area" class="control-label pickertitle">Number of units</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control empty_field" id="property_number_of_units" name="property_number_of_units" pattern="\d*" aria-describedby="property_number_of_unitsStatus">
                                                        <span id="property_number_of_unitsStatus" class="sr-only">(error)</span>  
                                    
                                                    </div>
                                                    <input type="checkbox" id="not_sure_number_unit" name="not_sure_number_unit">Not Sure
                                                </div> 
                                             
                                             
                                  <input type="hidden" class="form-control" id="property_number_of_units_hidden" name="property_number_of_units_hidden" value="">       
                                                    
                                            
                                              <div class="form-group  has-feedback" id="property_rentable_squre_feet_div" >
                                                    <label for="submit-area" class="control-label pickertitle">Rentable Square Feet</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control empty_field" id="property_rentable_squre_feet" name="property_rentable_squre_feet" pattern="\d*" aria-describedby="property_rentable_squre_feetStatus">
                                                        <span class="input-group-addon">ft<sup>2</sup></span><br>
                                        <span id="property_number_of_unitsStatus" class="sr-only">(error)</span>
                                        
                                                    </div>
                                                     <input type="checkbox" id="not_sure_rentable_squre_feet" name="not_sure_rentable_squre_feet">Not Sure
                                                </div> 
                                             
                                             
                                  <input type="hidden" class="form-control" id="property_rentable_squre_feet_hidden" name="property_rentable_squre_feet_hidden" value="">   
                                         
                                         
                                           <div class="form-group  has-feedback" id="property_average_rent_per_unit_div">
                                        <label class="control-label pickertitle" for="text-field">Average rent per unit</label>
                                        <input id="property_average_rent_per_unit" class="form-control empty_field" type="text" aria-describedby="property_average_rent_per_unitStatus" name="property_average_rent_per_unit">
                                        
                                                        <span class="input-group-addon">$</span>
                                        <span id="property_average_rent_per_unitStatus" class="sr-only">(error)</span>
                                        <input type="checkbox" id="not_sure_rent_per_unit" name="not_sure_rent_per_unit">Not Sure
                                        </div>   
                                            
                                          <input type="hidden" class="form-control empty_field" id="property_average_rent_per_unit_hidden" name="property_average_rent_per_unit_hidden" value=""> 
                                          
                                          
                                         <div class="form-group  has-feedback" id="property_average_rent_per_sf_div">
                                        <label class="control-label pickertitle" for="text-field">Average rent per SF</label>
                                        <input id="property_average_rent_per_sf" class="form-control empty_field" type="text" aria-describedby="property_average_rent_per_sfStatus" name="property_average_rent_per_sf">
                                                        <span class="input-group-addon">$</span>
                                        <span id="property_average_rent_per_sfStatus" class="sr-only">(error)</span>
                                        <input type="checkbox" id="not_sure_rent_per_sf" name="not_sure_rent_per_sf">Not Sure
                                        </div>   
                                            
                                          <input type="hidden" class="form-control" id="property_average_rent_per_sf_hidden" name="property_average_rent_per_sf_hidden" value="">    
                                          
                                          
                                           <div class="form-group  has-feedback" id="property_building_occu_per_div">
                                        <label class="control-label pickertitle" for="text-field">Building Occupancy Percentage</label>
                                        <input id="property_building_occu_per" class="form-control empty_field" type="text" aria-describedby="property_building_occu_perStatus" name="property_building_occu_per">
                                        
                                        
                                                        <span class="input-group-addon">%</span>
                                        <span id="property_building_occu_perStatus" class="sr-only">(error)</span>
                                        <input type="checkbox" id="not_sure_building_occu_per" name="not_sure_building_occu_per">Not Sure
                                        </div>   
                                            
                                          <input type="hidden" class="form-control" id="property_building_occu_per_hidden" name="property_building_occu_per_hidden" value="">       
                              
                               <div class="form-group  has-feedback" id="property_net_oper_income_div">
                                        <label class="control-label pickertitle" for="text-field">Net operating income</label>
                                        <input id="property_net_oper_income" class="form-control empty_field" type="text" aria-describedby="property_net_oper_incomeStatus" name="property_net_oper_income">
                                                        <span class="input-group-addon">$</span>
                                        <span id="property_net_oper_incomeStatus" class="sr-only">(error)</span>
                                          <input type="checkbox" id="not_sure_net_oper_income" name="not_sure_net_oper_income">Not Sure
                                        </div>   
                                            
                                          <input type="hidden" class="form-control" id="property_net_oper_income_hidden" name="property_net_oper_income_hidden" value="">                   
                                 
                                 
                                  <div class="form-group  has-feedback" id="property_address_div">
                                        <label class="control-label pickertitle" for="text-field">Property Address</label>
                                        <input id="property_address" class="form-control empty_field" type="text" aria-describedby="property_addressStatus" name="property_address"><span id="property_addressStatus" class="sr-only">(error)</span>
                                        <input type="checkbox" id="not_sure_address" name="not_sure_address">Not Sure
                                        </div>   
                                            
                                          <input type="hidden" class="form-control" id="property_address_hidden" name="property_address_hidden" value="">                   
                                       <div class="form-group  has-feedback" id="property_any_information_div">
                                                    <label for="text-field" class="control-label pickertitle">Any information you want to add</label>
                                                    <textarea class="form-control " rows="8"  id="property_any_information" aria-describedby="property_any_informationStatus" name="property_any_information"></textarea><span id="property_any_informationStatus" class="sr-only">(error)</span>     
                                                   <input type="checkbox" id="not_sure_any" name="not_sure_any">Not Sure  
                                                    
                                                </div> 
                                                
                                 <input type="hidden" class="form-control" id="property_any_information_hidden" name="property_any_information_hidden" value="">      
                                          
                                          
                                          <div class="form-group"  id="property_file">
                                                  <input id="file-upload" type="file" name="file_doc" id="file_doc" class="file" data-show-upload="false" data-show-caption="false" data-show-remove="false" accept="image/jpeg,image/png" data-browse-class="btn btn-default" data-browse-label="Browse Images">
                                                    <figure class="note"><strong>Hint:</strong> Choose the Image!</figure>
                                                </div> 
                                               
                                          </div>
                                          
                                          
                                          <div class="form-group hide has-feedback" id="property_title_div">
                                        <label class="control-label pickertitle" for="text-field">Property Title</label>
                                        <input id="property_title" class="form-control empty_field" type="text" placeholder="Property Title" aria-describedby="property_titleStatus" name="property_title" required><span id="property_titleStatus" class="sr-only">(error)</span>
                                         <input type="checkbox" id="not_sure_property_title" name="not_sure_property_title">Not Sure   
                                         
                            
                                         
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
                                                    <button type="button" id="property_next" name="next" class="btn nextbtn btn-default link-arrow">
                                                    Next
                                                    </button>
                                                </div>
                                                  <div class="form-group">
                                                    <button type="button" id="property_back" name="prev"  class="btn nextbtn" style="background-color:#FFFFFF; border:none; box-shadow:none;">
                                                    <span style="font-size:12px; margin-top:0px">Back</span>
                                                    </button>
                                                </div>      
                                   <input type="hidden" class="form-control" id="property_submit" name="action" value="property_submit">  
                                                
                                                
                                                
                                                
                                                
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
$( "#page-footer" ).load( "footer.php" );
$( ".navigation" ).load( "header.php" );
$(document).ready(function(){
 var divs = $('.mydivs>div');
    var now = 0; // currently shown div
    divs.hide().first().show();
	
	
	$("#not_sure_location").on("click", function(){
    if(not_sure_location.checked) {
	if(now==0){
	$('#property_location').val('N/A');
	}
	}else {
	 if(now==0){
	$('#property_location').val('');
	       }
		   }
		   
	
	}); 
	
	$("#not_sure_building").on("click", function(){
    if(not_sure_building.checked) {
	if(now==1){
	$('#property_building_size').val('N/A');
	} 
	}else {
	 if(now==1){
	$('#property_building_size').val('');
	       }
		   }
		  
	
	}); 
	
	
	$("#not_sure_lot").on("click", function(){
    if(not_sure_lot.checked) {
	if(now==2){
	$('#property_lot_size').val('N/A');
	}}else {
	 if(now==2){
	$('#property_lot_size').val('');
	       }
		   }
		  
	
	});
	
	
	$("#not_sure_number_unit").on("click", function(){
    if(not_sure_number_unit.checked) {
	if(now==3){
	$('#property_number_of_units').val('N/A');
	}}else {
	 if(now==3){
	$('#property_number_of_units').val('');
	       }
		   }
		   
	
	}); 
	
	
	$("#not_sure_rentable_squre_feet").on("click", function(){
    if(not_sure_rentable_squre_feet.checked) {
	if(now==4){
	$('#property_rentable_squre_feet').val('N/A');
	}}else {
	 if(now==4){
	$('#property_rentable_squre_feet').val('');
	       }
		   }
		  
	
	});  
	
	
	$("#not_sure_rent_per_unit").on("click", function(){
    if(not_sure_rent_per_unit.checked) {
	if(now==5){
	$('#property_average_rent_per_unit').val('N/A');
	}}else {
	 if(now==5){
	$('#property_average_rent_per_unit').val('');
	       }
		   }
		
	
	});  
	
	$("#not_sure_rent_per_sf").on("click", function(){
    if(not_sure_rent_per_sf.checked) {
	if(now==6){
	$('#property_average_rent_per_sf').val('N/A');
	}}else {
	 if(now==6){
	$('#property_average_rent_per_sf').val('');
	       }
		   }
		 
	
	});  
	
	$("#not_sure_building_occu_per").on("click", function(){
    if(not_sure_building_occu_per.checked) {
	if(now==7){
	$('#property_building_occu_per').val('N/A');
	}}else {
	 if(now==7){
	$('#property_building_occu_per').val('');
	       }
		   }
	
	});  
	
	
	$("#not_sure_net_oper_income").on("click", function(){
    if(not_sure_net_oper_income.checked) {
	if(now==8){
	$('#property_net_oper_income').val('N/A');
	}}else {
	 if(now==8){
	$('#property_net_oper_income').val('');
	       }
		   }
		 
	
	});  
	
	$("#not_sure_address").on("click", function(){
    if(not_sure_address.checked) {
	if(now==9){
	$('#property_address').val('N/A');
	}}else {
	 if(now==9){
	$('#property_address').val('');
	       }
		   }
		 
		   
		});  
	
	$("#not_sure_any").on("click", function(){
    if(not_sure_any.checked) {
	if(now==10){
	$('#property_any_information').val('N/A');
	}}else {
	 if(now==10){
	$('#property_any_information').val('');
	       }
		   }
	
		   
		});  
	
	
	
	
	$("#not_sure_property_title").on("click", function(){
    if(not_sure_property_title.checked) {
	
	$('#property_title').val('N/A');
	
	}else {
	
	$('#property_title').val('');
	   
		   }
		   
	
	}); 
	
	
	 
	 
	 

	
	
    $("button[name=next]").click(function (e) {
if($('#property_submit').val()=="Login" || $('#property_submit').val()=="Finish" ){
$('#form-sidebar').submit();
return false;
}else{

	
	//alert(divs.eq(now).attr('id'));
	//return false;
	
			
	if(divs.eq(now).attr('id')=="property_location_div"){
	if($('#property_location').val()==""){
    $('#property_location_div').addClass('has-error');
    return false;
    }else{
    var property_location =$('#property_location').val();
    $('#property_location_hidden').val(property_location);
    }
	
	}
	
	
if($('#property_type').val()!= "Land"){
if(divs.eq(now).attr('id')=="property_building_size_div"){
if($('#property_building_size').val()==""){
$('#property_building_size_div').addClass('has-error');
return false;
}else{
var property_building_size =$('#property_building_size').val();
$('#property_building_size_hidden').val(property_building_size);
}}}


if(divs.eq(now).attr('id')=="property_lot_size_div"){
if($('#property_lot_size').val()==""){
$('#property_lot_size_div').addClass('has-error');
return false;
}else{
var property_lot_size =$('#property_lot_size').val();
$('#property_lot_size_hidden').val(property_lot_size);
}}


if($('#property_type').val() == "Multifamily"){
if(divs.eq(now).attr('id')=="property_number_of_units_div"){
if($('#property_number_of_units').val()==""){
$('#property_number_of_units_div').addClass('has-error');
return false;
}else{
var property_lot_size =$('#property_number_of_units').val();
$('#property_number_of_units_hidden').val(property_lot_size);
}}}

if($('#property_type').val()== "Retail" || $('#property_type').val()== "Industrial" || $('#property_type').val()== "Land"){
if(divs.eq(now).attr('id')=="property_rentable_squre_feet_div"){
if($('#property_rentable_squre_feet').val()==""){
$('#property_rentable_squre_feet_div').addClass('has-error');
return false;
}else{
var property_rentable_squre_feet =$('#property_rentable_squre_feet').val();
$('#property_rentable_squre_feet_hidden').val(property_rentable_squre_feet);
}}}

if($('#property_type').val()== "Multifamily"){
if(divs.eq(now).attr('id')=="property_average_rent_per_unit_div"){
if($('#property_average_rent_per_unit').val()==""){
$('#property_average_rent_per_unit_div').addClass('has-error');
return false;
}else{
var property_average_rent_per_unit =$('#property_average_rent_per_unit').val();
$('#property_average_rent_per_unit_hidden').val(property_average_rent_per_unit);
}}}


if($('#property_type').val()!= "Land"){
if(divs.eq(now).attr('id')=="property_average_rent_per_sf_div"){
if($('#property_average_rent_per_sf').val()==""){
$('#property_average_rent_per_sf_div').addClass('has-error');
return false;
}else{
var property_average_rent_per_sf =$('#property_average_rent_per_sf').val();
$('#property_average_rent_per_sf_hidden').val(property_average_rent_per_sf);
}}}


if($('#property_type').val()!= "Land"){
if(divs.eq(now).attr('id')=="property_building_occu_per_div"){
if($('#property_building_occu_per').val()==""){
$('#property_building_occu_per_div').addClass('has-error');
return false;
}else{
var property_average_rent_per_unit =$('#property_building_occu_per').val();
$('#property_building_occu_per_hidden').val(property_average_rent_per_unit);
}}}


if($('#property_type').val()!= "Land"){
if(divs.eq(now).attr('id')=="property_net_oper_income_div"){
if($('#property_net_oper_income').val()==""){
$('#property_net_oper_income_div').addClass('has-error');
return false;
}else{
var property_net_oper_income =$('#property_net_oper_income').val();
$('#property_net_oper_income_hidden').val(property_net_oper_income);
}}}

if(divs.eq(now).attr('id')=="property_address_div"){
if($('#property_address').val()==""){
$('#property_address_div').addClass('has-error');
return false;
}else{
var property_address =$('#property_address').val();
$('#property_address_hidden').val(property_address);
}}

if(divs.eq(now).attr('id')=="property_any_information_div"){
if($('#property_any_information').val()==""){
$('#property_any_information_div').addClass('has-error');
return false;
}else{
var property_any_information =$('#property_any_information').val();
$('#property_any_information_hidden').val(property_any_information);

}}

	
	


	
	
	
	
        divs.eq(now).hide();
		if($('#property_type').val() == "Land"  && (divs.eq(now).attr('id') == "property_location_div"  || divs.eq(now).attr('id') == "property_lot_size_div" || divs.eq(now).attr('id') == "property_number_of_units_div" || divs.eq(now).attr('id') == "property_rentable_squre_feet_div")){
		if(divs.eq(now).attr('id') == "property_rentable_squre_feet_div"){
		
		 now = (now + 5 < divs.length) ? now + 5 : 0;
		
		var di=divs.eq(now).attr('id');
		 
		  }else{
		 now = (now + 2 < divs.length) ? now + 2 : 0;
		var di=divs.eq(now).attr('id');
		 
		       }
		 }else if($('#property_type').val() == "Office"  && (divs.eq(now).attr('id') == "property_lot_size_div")){
		   now = (now + 4 < divs.length) ? now + 4 : 0;
		   var di=divs.eq(now).attr('id');
		
		
		  }else if($('#property_type').val() == "Multifamily"  && (divs.eq(now).attr('id') == "property_number_of_units_div")){
		   now = (now + 2 < divs.length) ? now + 2 : 0;
		  var di=divs.eq(now).attr('id');
		 
		
		  }else if($('#property_type').val() == "Retail"  && (divs.eq(now).attr('id') == "property_lot_size_div" || divs.eq(now).attr('id') == "property_rentable_squre_feet_div")){
		   now = (now + 2 < divs.length) ? now + 2 : 0;
		  var di=divs.eq(now).attr('id');
		  
		
		  }else if($('#property_type').val() == "Industrial"  && (divs.eq(now).attr('id') == "property_lot_size_div" || divs.eq(now).attr('id') == "property_rentable_squre_feet_div")){
		   now = (now + 2 < divs.length) ? now + 2 : 0;
		 var di=divs.eq(now).attr('id');
		
		
		  }else{
		 
		now = (now + 1 < divs.length) ? now + 1 : 0;
		
		//alert($('#'+divs.eq(now).attr('id')).closest('input').attr('id'));
		//alert(divs.eq(now).attr('id'));
		
		       }
			   
	
			   
	if(now==11)	{	   
 <?php    if(!isset($_SESSION['SESS_USER_ID']) || (trim($_SESSION['SESS_USER_ID']) == '') || (trim($_SESSION['SESS_USER_ROLE']) != 'seller') || (trim($_SESSION['SESS_USER_STATUS']) != '1')  ) {     ?> 
  divs.eq(now).show();
$('#property_next').text("Login");
$('#property_submit').val("Login");
<?php }else{?>
 divs.eq(now).show();
 $('#property_title_div').removeClass("hide");
 
$('#property_next').text("Finish");
$('#property_submit').val("Finish");
<?php }?>
}else{
  divs.eq(now).show(); // show next

}

return false;

}
});


$("button[name=prev]").click(function (e) {
	//alert(divs.eq(now).attr('id'));

	if(now==11){
	$('#property_next').text("Next");
    $('#property_submit').val("property_submit");
	            }
        divs.eq(now).hide();
		if($('#property_type').val() == "Land"  && (divs.eq(now).attr('id') == "property_location_div"  || divs.eq(now).attr('id') == "property_lot_size_div" ||  divs.eq(now).attr('id') == "property_rentable_squre_feet_div" || divs.eq(now).attr('id') == "property_address_div")){
		if(divs.eq(now).attr('id') == "property_address_div"){
		
		 now = (now - 5 < divs.length) ? now - 5 : 0;
		
		  }else if(divs.eq(now).attr('id') == "property_rentable_squre_feet_div"){
		 now = (now - 2 < divs.length) ? now - 2 : 0;
		       }else if(divs.eq(now).attr('id') == "property_lot_size_div"){
		 now = (now - 2 < divs.length) ? now - 2 : 0;
		       }
		 }else if($('#property_type').val() == "Office"  && (divs.eq(now).attr('id') == "property_average_rent_per_sf_div" || divs.eq(now).attr('id') == "property_location_div")){
		 if(divs.eq(now).attr('id') == "property_average_rent_per_sf_div"){
		   now = (now - 4 < divs.length) ? now - 4 : 0;
		   }
		     }else if($('#property_type').val() == "Multifamily"  && (divs.eq(now).attr('id') == "property_location_div" ||divs.eq(now).attr('id') == "property_average_rent_per_unit_div")){
		  if(divs.eq(now).attr('id') == "property_average_rent_per_unit_div"){
		   now = (now - 2 < divs.length) ? now - 2 : 0;
		  }
		  }else if($('#property_type').val() == "Retail"  && (divs.eq(now).attr('id') == "property_location_div" || divs.eq(now).attr('id') == "property_average_rent_per_sf_div" ||   divs.eq(now).attr('id') == "property_rentable_squre_feet_div")){
		  if(divs.eq(now).attr('id') == "property_average_rent_per_sf_div" ||   divs.eq(now).attr('id') == "property_rentable_squre_feet_div"){
		   now = (now - 2 < divs.length) ? now - 2 : 0;
		   }
		
		  }else if($('#property_type').val() == "Industrial"  && (divs.eq(now).attr('id') == "property_location_div" || divs.eq(now).attr('id') == "property_average_rent_per_sf_div" ||   divs.eq(now).attr('id') == "property_rentable_squre_feet_div")){
		  if(divs.eq(now).attr('id') == "property_average_rent_per_sf_div" ||   divs.eq(now).attr('id') == "property_rentable_squre_feet_div"){
		   now = (now - 2 < divs.length) ? now - 2 : 0;
		   }
		
		  }else{
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