<?php //unset($_SESSION['property']); 
 //unset($_SESSION['property_files']); 
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
		.property.small , .property
		{
			margin-bottom:1px !important !important;
		}
		@media (max-width: 767px){
			.chat_window_1 {
				position:inherit;
			}
		}
        </style>
      <!-- Agent Detail -->
      
      <div class="container-fluid">
        <div class="row" style="margin-top: 40px;"> 
          <div class="col-sm-12 col-md-12"> 
            <header class="section-title">
              <h2>Bidders List - Property Title</h2>
            </header>
          </div>
        </div>
			<style>
            .rating-overall img
			{
				width:auto !important;
				display:inline-block;
			}
			.displayabid
			{
				    margin: 15px 0px;
    border: 2px solid #f3f3f3;
    padding: 22px;
			}
			
			
			
            </style>
        <div class="row"> 
        	<div class="col-md-6 col-md-offset-3"> 
            <!-- Bid box start --> 
        <?php     $sql = "SELECT * FROM bids where property_id='".$_GET['property_id']."' ";
			
			 $res = mysql_query($sql);
			  while($bids = mysql_fetch_object($res)) {?>
		   <?php     $sql1 = "SELECT * FROM users where user_id='".$bids->broker_id."'";
		             $res1 = mysql_query($sql1);
					$user=  mysql_fetch_object($res1)
		   
		   ?>
            	<div class="displayabid">
                    <div class="property small"> 
                        <a href="property-detail.html">
                            <div class="property-image">
                               <?php  if(!empty($user->profile_pic)){?>
                    <img class="padIMG" src="<?php echo IMG; ?><?php echo $user->profile_pic?>" height="auto" width="100%">
                    <?php }else{?>
                    <img class="padIMG" src="<?php echo IMG; ?>propertyimage.jpg" height="auto" width="100%">
                    <?php }?>
                            </div>
                        </a>
                        <div class="info">
                            <div class="col-md-6">
                                <dl>
                                    <dt><a href="profile.php?brokerid=1"><h4><?php  echo $user->username;?></h4></a></dt>
                                        <dd><?php echo "  (".date("d-m-Y",strtotime($bids->bid_date)).")"?></dd>
                                    <dt><div class="rating rating-overall" data-score="4" title="good" style="width: 100px;"><img src="assets/img/star-on.png" alt="1" title="good">&nbsp;<img src="assets/img/star-on.png" alt="2" title="good">&nbsp;<img src="assets/img/star-on.png" alt="3" title="good">&nbsp;<img src="assets/img/star-on.png" alt="4" title="good">&nbsp;<img src="assets/img/star-off.png" alt="5" title="good"><input type="hidden" name="score" value="4" readonly="readonly"></div></dt>
                                        <dd>Verified</dd>
                                </dl>
                            </div>
                            <div class="col-md-6 pull-right">
                                <dl>
                                    <dt>BOV</dt>
                                        <dd><span class="tag price">$<?php  echo $bids->low_price;?></span> - <span class="tag price">$<?php  echo $bids->high_price;?></span></dd>
                                    <dt>Comission:</dt>
                                        <dd><?php  echo $bids->Comission;?>%</dd>
                                </dl> 
                            </div>
                            <div class="col-md-12">
                            <figure><?php  echo $bids->cover_letter;?></figure>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                <div class="col-md-3 form-group">
                    <button type="submit" class="btn pull-right btn-default doc_id" id="">Send a Message</button>
                    <input type="hidden" class="hidden_doc"; id="hidden_doc" value="<?php echo $bids->broker_id."_".$bids->property_id."_".$_SESSION['SESS_USER_ID'];?>" name="hidden_doc" >
            <!--          <a  id="" class="btn btn-default small doc_id">Start Chat</a>-->
                </div>
                <div class="col-md-3 form-group">
                    <button type="submit" class="btn pull-right btn-default" id="form-contact-agent-submit">Share Address</button>
                </div>
                <div class="col-md-3 form-group">
                    <button type="submit" class="btn pull-right btn-default" id="form-contact-agent-submit">Share Contact</button>
                </div>
                <div class="col-md-3 form-group">
                    <button type="submit" class="btn pull-right btn-default" id="form-contact-agent-submit">Award Listing</button>
                </div>
            </div>
        		</div>
                <?php }?>
                
            <!-- Bid Box End -->
            </div>
                   <?php  include('chat.php'); ?>
        </div>
        
        
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

<!--[if gt IE 8]>
<script type="text/javascript" src="assets/js/ie.js"></script>
<![endif]--> 
<script>
$( "#page-footer" ).load( "footer.php" );
$( ".navigation" ).load( "header.php" );
$( ".brokerbar" ).load( "brokerbar.php" );
</script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> 
<script>

$(document).ready(function(){
//alert("safeer");
$("#chat_window_1").hide();




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


/*$("#property_bider").change(function(){
var broker_id_property_id =$("#property_bider").val();
var seller_id =<php //echo $_SESSION['SESS_USER_ID']; //>;
var   chat_doc_id =broker_id_property_id+"_"+seller_id;
$("#hidden_doc").val(chat_doc_id);
$(".doc_id").css("background-color", "");
$(".doc_id").attr('id',"");
//attr('id',chat_doc_id);
});*/


$(".doc_id").click(function(){
$("#chat_window_1").show();

var doc_name=$(".hidden_doc").val();
$(".doc_id").attr('id',doc_name);
//$(this).attr('id');
if(doc_name==""){
alert("Select The Broker First");
return false;

}
$(".doc_id").css("background-color", "");
$(this).css("background-color", "#4CAF50");
// $("#chat_window_1").show();
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




$(".icon_close").click(function(){
    $("#chat_window_1").hide();
});
$(".icon_minim").click(function(){
    $(".panel-body").hide();
    $(".panel-footer").hide();
});
$(".panel-title").click(function(){
    $("#chat_window_1").show();
	$(".panel-body").show();
    $(".panel-footer").show();

});
$("#inbox table tbody tr").click(function(){
    $("#chat_window_1").show();
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