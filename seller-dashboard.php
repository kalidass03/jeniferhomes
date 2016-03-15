<?php //unset($_SESSION['property']); 
// unset($_SESSION['property_files']); 
 require_once('includes/connection.php');
 require_once('auth_seller.php');  ?>
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
.change_status{
	cursor:pointer;
}
div.status_chg :hover{
    color:#1396e2;
}
</style>
<style>
.brokerbar .navbar {
	margin-bottom:0px;
}
.brokerbar .navbar-nav {
}
.brokerbar .navbar-right {
/*	float:none !important;*/
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
<!-- end Navigation -->
<div class="container brokerbar"> </div>

<!-- Page Content -->
<div id="page-content">
  <style>
        .thetitles
        {
                margin-top: 32px;
        }
        
        
        
        /* CSS used here will be applied after bootstrap.css */
        
        a.list-group-item.read { color: #222;background-color: #F3F3F3; }
        hr { margin-top: 5px;margin-bottom: 10px; }
        .nav-pills>li>a {padding: 5px 10px;}
        
        .progress-sm {
          height: 10px;
        }
        
        .ad { padding: 5px;background: #F5F5F5;color: #222;font-size: 80%;border: 1px solid #E5E5E5; }
        .ad a.title {color: #15C;text-decoration: none;font-weight: bold;font-size: 110%;}
        .ad a.url {color: #093;text-decoration: none;}
        
        .unread {
         font-weight:800;
        }
        a, .help-block  {
          color:#262626;
        }
        a:hover {
          color:#333;	
        }
        h1,h2,h3,h4{
          color:#666;
          font-weight:light;
        }
        p.lead {
          font-family:arial, sans-serif;
          color:#777;
          font-size:16px;
          font-weight:700;
        }
        .well{
          background: #f8f8f8;
          color:#777;
          border-radius:0;
          box-shadow:0 0 0;
        }
        .well,.page-header,input,.form-control,.table-bordered,.table-bordered>thead>tr>th, .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>tbody>tr>td, .table-bordered>tfoot>tr>td,hr{
          border-color: #f0f0f0;
        }
        .table-hover>tbody>tr:hover>td,.table-hover>tbody>tr:hover>th {
          background-color: #fafafa;
        }
        .table-striped>tbody>tr:nth-child(odd)>td, .table-striped>tbody>tr:nth-child(odd)>th {
          background-color: #f7f7f7;
        }
        .table>thead>tr>th {
          border-bottom-width: 1px;
        }
        .table>thead>tr td {
          font-weight:800;
          color:#454545; 
        }    
        .form-control {
          background: #fdfdfd;
          color:#444;
          border-radius:2px;
          border-color:#ddd;
          box-shadow:#ddd 2px 2px 0px;
        }
        .form-control:active,.form-control:focus {
          box-shadow:#bbb 2px 2px 0px;
          border-color:#ccc;
        }
        .panel,.panel-heading,
        .list-group-item:first-child,.list-group-item:last-child,
        .nav-tabs>li>a,
        .navbar, .dropdown-menu {
          border-radius:0;
        }
        .nav-pills>li>a {border-radius:2px;}
        .panel-primary>.panel-heading {
          background-color:#006890;
        }
        .list-group-item {
          border-color:#f6f6f6;
          color:#666;
        }
        a.list-group-item.active, .nav-pills>li.active>a, .nav-pills>li.active>a:hover, .nav-pills>li.active>a:focus {
          color: #fff;
          background-color: #5bc0de;
          border-color: #5bc0de; 
        }
        .badge {
          border-radius:2px;
          font-size:10px;
        }
        .has-warning,.has-error,.has-success {
           opacity:.6;
           color:#000;
        }
        .pagination li > a, .pager li>a, .pager li>span, .pager li>a:hover, .pager li>a:focus, .pager .disabled>a, .pager .disabled>a:hover, .pager .disabled>a:focus, .pager .disabled>span{
           background-color: transparent;
           border-color: #eee;
           border-radius:0;
        }
        /* end theme */
                                .thehead
                                {
                                        background-color: #073855;
                                        border: none;
                                        color: #fff;
                                        padding: 3px 10px 3px 10px;
                                        font-size: 18px;
                                }
                                .share-badge
                                {
                                    background-color: #5cb85c !important;
                                }
                                .col-md-2, .col-md-10{
            padding:0;
        }
        .panel{
            margin-bottom: 0px;
        }
        .chat-window{
            bottom:0;
            position:fixed;
            float:right;
            margin-left:10px;
        }
        .chat-window > div > .panel{
            border-radius: 5px 5px 0 0;
        }
        .icon_minim{
            padding:2px 10px;
        }
        .msg_container_base{
          background: #e5e5e5;
          margin: 0;
          padding: 0 10px 10px;
          max-height:300px;
          overflow-x:hidden;
        }
        .top-bar {
          background: #666;
          color: white;
          padding: 10px;
          position: relative;
          overflow: hidden;
        }
        .msg_receive{
            padding-left:0;
            margin-left:0;
        }
        .msg_sent{
            padding-bottom:20px !important;
            margin-right:0;
        }
        .messages {
          background: white;
          padding: 10px;
          border-radius: 2px;
          box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
          max-width:100%;
        }
        .messages > p {
            font-size: 13px;
            margin: 0 0 0.2rem 0;
          }
        .messages > time {
            font-size: 11px;
            color: #ccc;
        }
        .msg_container {
            padding: 10px;
            overflow: hidden;
            display: flex;
        }
        img {
            display: block;
            width: 100%;
        }
        .avatar {
            position: relative;
        }
        .base_receive > .avatar:after {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            width: 0;
            height: 0;
            border: 5px solid #FFF;
            border-left-color: rgba(0, 0, 0, 0);
            border-bottom-color: rgba(0, 0, 0, 0);
        }
        
        .base_sent {
          justify-content: flex-end;
          align-items: flex-end;
        }
        .base_sent > .avatar:after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 0;
            border: 5px solid white;
            border-right-color: transparent;
            border-top-color: transparent;
            box-shadow: 1px 1px 2px rgba(black, 0.2); // not quite perfect but close
        }
        
        .msg_sent > time{
            float: right;
        }
        
        
        
        .msg_container_base::-webkit-scrollbar-track
        {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
            background-color: #F5F5F5;
        }
        
        .msg_container_base::-webkit-scrollbar
        {
            width: 12px;
            background-color: #F5F5F5;
        }
        
        .msg_container_base::-webkit-scrollbar-thumb
        {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
            background-color: #555;
        }
        #inbox table tbody tr
        {
            cursor:pointer;
        }
        .agent
        {
		padding-left: 90px;
		margin-bottom: none;	
		}
		.agent .agent-image {
		width: 75px !important;	
		}
		.recentproperty
		{
			border: 1px solid rgba(0, 0, 0, 0.1);
			margin: 1%;
			width:48% !important;
		}
		.propertytitle
		{
			font-size: 22px;
			color: #073855;
		}
		    .rating-overall img
			{
				width:auto !important;
				display:inline-block;
			}

        
        
                                        @media (max-width: 767px){
                                        .chat_window_1 {
                                            position:inherit; 
                                        }
										.recentproperty
										{
										margin: 1%;
										width:98% !important;
										}

                                        }
        </style>
  <!-- Agent Detail -->
  
  <div class="container-fluid">
    <div class="row" style="margin-top: 40px;">
      <div class="col-md-10 col-md-offset-1"> 
        <!--Dashboard-->
        <div class="col-sm-12 col-md-8"> 
          <!-- tabs -->
          <header class="section-title">
            <h2>Dashboard</h2>
          </header>
          <!-- tab panes -->
          <div class="tab-content">
            <div class="tab-pane fade in active" id="inbox">
              <?php if(isset($_SESSION['Property_MSG_Finish'])){?>
              <div class="alert alert-success"> <strong></strong><?php echo $_SESSION['Property_MSG_Finish']; ?> </div>
              <?php unset($_SESSION['Property_MSG_Finish']); ?>
              <?php }else{} ?>
              <!--maat work start-->
			 <?php if(isset($_SESSION['propert_status'])){?>
              <div class="alert alert-success"> <strong></strong><?php echo $_SESSION['propert_status']; ?> </div>
              <?php unset($_SESSION['propert_status']); ?>
              <?php }else{} ?>

              <!--matt work end-->
            </div>
          </div>
          <div class="row">
            <?php 
                $total_records = find_total('property' ,'user_id='.$_SESSION['SESS_USER_ID'].''); 
                $adjacents = 3;
                $per_page_records =  NO_OF_PAGES;
                $ppage = 'pagenum';
                $targetpage = $_SERVER['REQUEST_URI'];
                list($targetpage) = explode("?".$ppage."=",$targetpage);
                if(isset($_GET[$ppage]))
                  $pagenum =  $_GET[$ppage];
                  else
                  $pagenum =  '';
                  if ($pagenum == 0) $pagenum = 1;
                  $max = ' limit ' .($pagenum - 1) * $per_page_records .',' .$per_page_records;
                 $sql = "SELECT * FROM property where user_id='".$_SESSION['SESS_USER_ID']."' ORDER BY last_status_change DESC";
                
                  $res = mysql_query($sql.$max);
                  while($property = mysql_fetch_object($res)) {?>
            		<div class="col-md-6 col-sm-6 recentproperty">
                      <h3>
                        <div class="tag price"><?php echo $property->bid_status;?></div>
                        <span class="pull-right"><?php echo time_elapsed_string(strtotime($property->last_status_change));?></span></h3>
                      <address>
                      <strong><span class="propertytitle"><?php echo $property->property_title;?></span></strong><br>
                      <?php echo $property->property_type; ?><br>
                      <?php echo $property->property_address; ?> <br>
                      <span class=""><a  href="property-details.php?id=<?php echo $property->property_id;?>" class="btn btn-default small">View Property</a></span>
                      </address>
                      <dl>
                      	<?php if($property->bid_status == "Posted"){
						 $toal_bids =find_total('bids', 'property_id='.$property->property_id.'');
						?>
                        <dt><strong><?php echo $toal_bids; ?></strong> Bids Received:</dt>
                        <dd><a href="bidders-listing.php?property_id=<?php echo $property->property_id; ?>">View Bids</a></dd>
                        <dt>Messages:</dt>
                        <dd>No New Message (<a href="message-inbox.php">View Inbox</a>)</dd>
                        <dt>Expiration:</dt>
                        <dd><?php echo convert_format_like_zoho($property->expiry_date)?> - Restart </dd>
                        
                        <?php }else if($property->bid_status == "In Progress"){
							$awarded_to =get_table_data('users', 'user_id='.$property->awarded_to.'');
							?>
                         	<dt>Awarded to:</dt>
                            <dd><?php echo $awarded_to[0]->first_name." ".$awarded_to[0]->last_name; ?> (<a href="broker-profile.php?id=<?php echo $property->awarded_to?>">View Profile</a>)</dd>
                            <dt>Messages:</dt>
                            <?php $unread_msg =find_total('conversations', 'property_id='.$property->property_id.' AND status="0"')?>
                            <dd><span class="badge"><?php echo $unread_msg; ?></span> New Message (<a href="message-inbox.php">View Inbox</a>)</dd>
                            <dt>Update Property Status:</dt>
                            <dd>
                            	<!-- <select class="form-control col-md-1" id="property_status" name="property_status">
                                    <option value="Complete">Complete</option>
                                    <option value="Incomplete">Incomplete</option>
                                  </select>-->
                                  <div id="<?php echo $property->property_id; ?>" class="status_chg">
                                  <a class="change_status" id="Completed" >Complete</a>/<a class="change_status" id="In Completed">Incomplete</a>
                                  </div>
                             </dd>
                        
                        <?php }else if($property->bid_status =="Completed" || $property->bid_status =="In Completed"){
							$awarded_to =get_table_data('users', 'user_id='.$property->awarded_to.'');
							?>
                        	<dt>Awarded to:</dt>
                            <dd><?php echo $awarded_to[0]->first_name." ".$awarded_to[0]->last_name; ?> (<a href="broker-profile.php?id=<?php echo $property->awarded_to?>">View Profile</a>)</dd>
                            <dt>Completion Date:</dt>
                            <dd><?php echo convert_format_like_zoho($property->last_status_change);?></dd>
                            <dt>Reviews:</dt>
                            <dd>4.0<div class="rating rating-overall" data-score="4" title="good" style="width: 100px;"><img src="assets/img/star-on.png" alt="1" title="good">&nbsp;<img src="assets/img/star-on.png" alt="2" title="good">&nbsp;<img src="assets/img/star-on.png" alt="3" title="good">&nbsp;<img src="assets/img/star-on.png" alt="4" title="good">&nbsp;<img src="assets/img/star-off.png" alt="5" title="good"><input name="score" value="4" readonly="readonly" type="hidden"></div></dd>
                        <?php }?>
                      </dl>
                    </div>
            <?php }?>
            <?php 
                   $to = $pagenum * $per_page_records;
                   if($pagenum==1){
                       $from = $pagenum;
                       }
                   else{
                   $from1 = ($pagenum-1)*$per_page_records;
                   $from =($from1+1);
                   }
                   if($to>=$total_records)
                   {$to=$total_records;}
                    ?>
          </div>
          <hr>
          <div class="padding-t-40"><span><?php echo "Showing $from to $to of $total_records records" ?></span></div>
          <div class="center">
            <?php include("pagination.php");?>
            <!-- /.pagination--> 
          </div>
          
          <?php /*?>
                    <div class="col-md-6 col-sm-6 recentproperty">
                        <h3><div class="tag price">In Progress</div><span class="pull-right">2 Days Ago</span></h3>
                        <address>
                            <strong><span class="propertytitle">Property Title</span></strong><br>
                            4877 Spruce Drive<br>
                            West Newton, PA 15089
                            <br>
                            <span class=""><a href="#">View Property</a></span>
                        </address>
                        <dl>
                            <dt>Awarded to:</dt>
                            <dd>Charles Bran (View Profile)</dd>
                            <dt>Messages:</dt>
                            <dd><span class="badge">2</span> New Message (View Inbox)</dd>
                            <dt>Update Project Status:</dt>
                            <dd>Complete / Incomplete</dd>
                        </dl>
                    </div>
                    <div class="row">
                    <div class="col-md-6 col-sm-6 recentproperty">
                        <h3><div class="tag price">Completed</div><span class="pull-right">1 Month Ago</span></h3>
                        <address>
                            <strong><span class="propertytitle">Property Title</span></strong><br>
                            4877 Spruce Drive<br>
                            West Newton, PA 15089<br>
                            <span class=""><a href="#">View Property</a></span>
                        </address>
                        <dl>
                            <dt>Awarded to:</dt>
                            <dd>Charles Bran (View Profile)</dd>
                            <dt>Completion Date:</dt>
                            <dd>10 February, 2016</dd>
                            <dt>Reviews:</dt>
                            <dd>4.0<div class="rating rating-overall" data-score="4" title="good" style="width: 100px;"><img src="assets/img/star-on.png" alt="1" title="good">&nbsp;<img src="assets/img/star-on.png" alt="2" title="good">&nbsp;<img src="assets/img/star-on.png" alt="3" title="good">&nbsp;<img src="assets/img/star-on.png" alt="4" title="good">&nbsp;<img src="assets/img/star-off.png" alt="5" title="good"><input name="score" value="4" readonly="readonly" type="hidden"></div></dd>
                        </dl>
                    </div>
                    </div>
                    <?php */?>
                    
                    
                    
                    
        </div>
        
        <!--right nevigation start-->
        <div class="col-md-4 col-lg-4 col-sm-12">
          <?php  $single_p_data =get_table_data('users', 'user_id='.$_SESSION['SESS_USER_ID'].'', false, false); ?>
          <div class="agent"> <a href="http://www.gocharli.com/www.work247.info/sf/property/seller-profile.php?id=<?php echo $_SESSION['SESS_USER_ID'] ?>" class="agent-image">
            <?php  if(!empty($single_p_data[0]->profile_pic)){?>
            <img class="padIMG" src="<?php echo IMG; ?><?php echo $single_p_data[0]->profile_pic?>" height="auto" width="100%">
            <?php }else{?>
            <img class="padIMG" src="<?php echo IMG; ?>avatar.png" height="auto" width="100%">
            <?php }?>
            </a>
            <div class="wrapper">
              <header><a href="http://www.gocharli.com/www.work247.info/sf/property/seller-profile.php?id=<?php echo $_SESSION['SESS_USER_ID'] ?>">
                <h2><?php echo  $single_p_data[0]->first_name;?> <?php echo  $single_p_data[0]->last_name;?> </h2>
                </a></header>
              <aside><?php echo $single_p_data[0]->company_name?></aside>
              <dl>
                <dt>Office Phone:</dt>
                <dd><?php echo  $single_p_data[0]->phone_number;?></dd>
                <dt>Email:</dt>
                <dd><a href="mailto:#"><?php echo $single_p_data[0]->email ;?></a></dd>
              </dl>
            </div>
          </div>
          	<!--maat work start-->
          <a href="seller-profile.php"><button type="button" class="btn nextbtn btn-default" style="width:30%">View Profile</button></a>
          <!-- maat work end -->
          <hr>
          <form role="form" id="form-sidebar" class="" action="seller-questions.php" method="post" enctype="multipart/form-data">
            <div class="col-md-10 col-md-offset-1 col-lg-offset-1 col-lg-10 col-sm-12">
              <div class="form-group center">
                <h3><strong>
                  <div class="form-group">
                    <label for="text-field" class="pickertitle">Select Property Type</label>
                    <select name="property_type" id="property_type" required/>
                    
                    <option>Office</option>
                    <option>Multifamily</option>
                    <option>Retail</option>
                    <option>Industrial</option>
                    <option>Land</option>
                    </select>
                  </div>
                  <!-- /.form-group --> 
                  </strong></h3>
                <div class="form-group">
                    <button type="submit" class="btn nextbtn btn-default" style="width:100%">Add Property</button>
                </div>
              </div>
            </div>
          </form>
        </div>
        
      </div>
    </div>
    <style>
            .thetitles
            {
            margin-top: 32px;
            }
            .thetitles
            {
            margin-top: 32px;
            }
            #property-detail img
            {
            width:100%;
            }
            .theproperty td:first-child
            {
            text-align:right
            }
            .thehead
            {
            background-color: #073855;
            border: none;
            color: #fff;
            padding: 3px 10px 3px 10px;
            font-size: 18px;
            }
            .theproperty tr td:first-child,
            .theproperty tr td:last-child {
            padding: 0px 10px;
            }
            .theproperty tr td:last-child {
            text-align:center;
            }
            .theproperty tr td:first-child
            {
            text-align:right;
            width:15%;
            padding: 10px;
            }
            .theproperty tr td:first-child img
            {
            width:100%;
            }
            .theproperty tr td.toright
            {
            text-align:right;
            padding: 0px 10px;
            }
            .theproperty tr td.toleft
            {
            text-align:left;
            padding:0px;
            }
            .theproperty
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
    
    <!-- /.show property--> 
  </div>
  <style>
            #page-footer {
            display: block;
            }
        </style>
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
<script type="text/javascript" src="assets/js/jquery-2.1.0.min.js"></script>
<!--[if gt IE 8]>
<script type="text/javascript" src="assets/js/ie.js"></script>
<![endif]--> 
<script>
$( "#page-footer" ).load( "footer.php" );
$( ".navigation" ).load( "header.php" );
$( ".brokerbar" ).load( "brokerbar.php" );
</script> 

<script>
$(document).ready(function(){
	
	/*matt work start*/
	$('.change_status').click(function(){
		var property_id =$(this).parent().attr('id');
		var status =$(this).attr('id');
		$.post("seller_actions.php", {action:'change_property_status',status:status,property_id:property_id },function(data) {
			if(data = 'done'){
				location.reload();
			}
			else{
				location.reload();
			}
		 });
	});
/*matt work end*/
	
$("#share_address").click(function(){
var doc_name=$("#hidden_doc").val();
file_name =doc_name;

$.post("seller_actions.php", {action:'share_address',file_name:file_name },function(data) {
	
  });

});

$("#share_contact").click(function(){
var doc_name=$("#hidden_doc").val();
file_name =doc_name;

$.post("seller_actions.php", {action:'share_contact',file_name:file_name },function(data) {
	
  });

});


$("#property_bider").change(function(){
var broker_id_property_id =$("#property_bider").val();
var seller_id =<?php echo $_SESSION['SESS_USER_ID']; ?>;
var   chat_doc_id =broker_id_property_id+"_"+seller_id;
$("#hidden_doc").val(chat_doc_id);
$(".doc_id").css("background-color", "");
$(".doc_id").attr('id',"");
//attr('id',chat_doc_id);
});


$(".doc_id").click(function(){
var doc_name=$("#hidden_doc").val();
$(".doc_id").attr('id',doc_name);
//$(this).attr('id');
if(doc_name==""){
alert("Select The Broker First");
return false;

}
$(".doc_id").css("background-color", "");
$(this).css("background-color", "#4CAF50");
file_name =doc_name;

$.post("seller_actions.php", {action:'load_conversation',file_name:file_name },function(data) {
	var oldscrollHeight = $("#chat-box").attr("scrollHeight") - 20; //Scroll height before the request
		$.ajax({
			url: data,
			cache: false,
			success: function(html){	
			$("#chat-box").html(html); //Insert chat log into the #chatbox div	
				
				//Auto-scroll			
				var newscrollHeight = $("#chat-box").attr("scrollHeight") - 20; //Scroll height after the request
				if(newscrollHeight > oldscrollHeight){
					$("#chat-box").animate({ scrollTop: newscrollHeight }, 'normal'); //Autoscroll to bottom of div
				}				
		  	},
		});  
  });
  
  
});

	//If user wants to end session
	$("#chat_input_submit").click(function(){
	
	/*var count=0;
	$( ".select_user" ).each(function() {
	if($( this ).hasClass( "active_tr" )){
	//count=1;
	 count++;
     }
});
if(count==1){
}else{
alert("Select the user to want chat");
	 return false;
}*/
	
	
	
	if( $("#chat_input").val()==""){
	alert("Enter the message");
	return false;
	
	}
	
	var doc_name=$("#hidden_doc").val();
	var file_name =doc_name;
	var clientmsg = $("#chat_input").val();
		$.post("seller_actions.php", {action:'chat',text:clientmsg,file_name:file_name});				
		$("#chat_input").val("");
		return false;

	});




$(".icon_minim").click(function(){
    $(".panel-body").hide();
    $(".panel-footer").hide();
});
$(".panel-title").click(function(){
	$(".panel-body").show();
    $(".panel-footer").show();

});
$("#inbox table tbody tr").click(function(){
	$(".panel-body").show();
    $(".panel-footer").show();
});


});


setInterval (loadLog, 2500);
//Load the file containing the chat log
	function loadLog(){	
	var doc_name=$(".doc_id").attr('id');
	//var file_name =doc_name;
	if(doc_name != ""){
	var page= doc_name+'.html';
	var oldscrollHeight = $("#chat-box").attr("scrollHeight") - 20; //Scroll height before the request
		$.ajax({
			url: page,
			cache: false,
			success: function(html){		
				$("#chat-box").html(html); //Insert chat log into the #chatbox div	
				
				//Auto-scroll			
				var newscrollHeight = $("#chat-box").attr("scrollHeight") - 20; //Scroll height after the request
				if(newscrollHeight > oldscrollHeight){
					$("#chat-box").animate({ scrollTop: newscrollHeight }, 'normal'); //Autoscroll to bottom of div
				}				
		  	},
		});
		
		}
		
	}

</script>
</body>
</html>