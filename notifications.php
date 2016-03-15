<?php
require_once('includes/connection.php');




/*welcome email to seller after 12 hours where send him/her lcontact info about site*/ //this function have to run after 12 hours .

//seller_welcome_email_function();
function seller_welcome_email_function(){
	
	
	$all_users =get_table_data('users','status="1"',false,false);
	$current_date = date("Y-m-d H:i:s");
	 foreach( $all_users as $user){
		 
		 $registration_date = $user->registration_date;
		 $time_diff=(strtotime($current_date))-(strtotime($registration_date));
		 if($time_diff > "39600" && $time_diff < "46800"){ // if reg date > 11 hours and less than 13 hours than send an email
			//	echo "user_name=".$user->username."---".$user->registration_date; 
			$to=$user->email;
			$subject="Welcome";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			$body='Hi, <br/>'.$user->username.' <br/> Welcome to our site , if you have any query than you can contact to this <br/>phone number='.CONTACT_PHONE_NUMBER.'<br/>and email'.CONTACT_EMAIL.'. <br/> <br/>';
			$well="";
			if(mail($to,$subject,$body,$headers)){
				echo $well.="email sent ";			
				exit;
			}
		 }
	 }	
}

/////////////////////////////////////////////////*Sign up but not added any property than send email after 24 hours than you can add property  *///////////////////////
//signup_but_not_added_property();
function signup_but_not_added_property(){
	$qry="SELECT * FROM users WHERE user_type='seller'";
	$result   = mysql_query($qry);
	$count=mysql_num_rows($result);
	if($count>0){
		while($result_user=  mysql_fetch_object($result)) {
			$total_records = find_total('property','user_id='.$result_user->user_id.'');
			if($total_records == 0){
				//echo "user_name=".$result_user->username."---".$result_user->registration_date."---".$result_user->user_id."<br>"; 
				$current_date = date("Y-m-d H:i:s");
				$registration_date_time = $result_user->registration_date;
				$different_date_time=strtotime($current_date)-strtotime($registration_date_time);
				//echo $different_date_time."zoh".$registration_date_time."<br>";
				if($different_date_time>86400 && $different_date_time>87400){
					$to=$result_user->email;
					$subject="Add Property";
					$headers .= "MIME-Version: 1.0\r\n";
					$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
					$body='Hi, <br/>'.$result_user->username.' <br/> Go to this link to add a property page. <br/> <br/> <a href="'.HTTP_PATH.'">'.HTTP_PATH.'</a>';
					$well="";
					if(mail($to,$subject,$body,$headers)){
							echo $well.="email sent";
							exit;
					}	
				}
			}
		}
	}
} 

// sending email if property not awarded within 30 days ,7 , 3 and 1 day before the expiry date of propery /////////////////////////////////////////////////
//not_awarding_yet();
function not_awarding_yet(){

$qry="SELECT * FROM property where awarded_to='0'";
$result   = mysql_query($qry);
$count=mysql_num_rows($result);
if($count>0){
	
	while($result_property=  mysql_fetch_object($result)) {
	 $result_property->property_id;
	//exit;
	
	$total_records = find_total('users','user_id='.$result_property->user_id.'');
		if($total_records>0){
		$current_date = date("Y-m-d H:i:s");
		$expiry_date_time = $result_property->expiry_date;
		 $different_date_time=(strtotime($expiry_date_time))-(strtotime($current_date));
		//	echo $different_date_time."zzz".$result_property->property_id."----------".$result_property->expiry_date."<br>";
		if($different_date_time>604000 && $different_date_time< 606000){// for 1 week before  604800 691475
			$qry_user="SELECT * FROM users WHERE user_id='".$result_property->user_id."'"; 
			$result_qry_user   = mysql_query($qry_user);
			$result_qry_user_final=  mysql_fetch_object($result_qry_user);
			$to=$result_qry_user_final->email;
			$subject="Reminder About property";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			$body='Hi, <br/> '.$result_qry_user_final->username.'<br/> You was added property 23 days ago ,after 1 week this propert will be expire so befor this time assign to any broker!. <br/> <br/>';
			$well="";
		if(mail($to,$subject,$body,$headers)){
			echo $well.="email sent for 7";			
			}
		}else if($different_date_time>258300 && $different_date_time< 258400){// for 3 days before of expiry date 
		
			$qry_user="SELECT * FROM users WHERE user_id='".$result_property->user_id."'"; 
			$result_qry_user   = mysql_query($qry_user);
			$result_qry_user_final=  mysql_fetch_object($result_qry_user);
			$to=$result_qry_user_final->email;
			$subject="Reminder About property";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			$body='Hi, <br/> '.$result_qry_user_final->username.'<br/> You was added property 27 days ago ,after 3 days this propert will be expire so befor this time assign to any broker ! <br/>';
			$well="";
			if(mail($to,$subject,$body,$headers)){
			//	echo $to."<br>";
			//	echo $well.="email sent for 3";					
			}
		}else if($different_date_time>86200 && $different_date_time <86600){// 1 day before of expiray date 
		
		
		$qry_user="SELECT * FROM users WHERE user_id='".$result_property->user_id."'"; 
		$result_qry_user   = mysql_query($qry_user);
		$result_qry_user_final=  mysql_fetch_object($result_qry_user);
		$to=$result_qry_user_final->email;
		$subject="Reminder About property";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			$body='Hi, <br/> '.$result_qry_user_final->username.'<br/> You was added property 29 days ago ,after 24 hours this propert will be expire so befor this time assign to any broker ! <br/>';
		$well="";
		if(mail($to,$subject,$body,$headers)){
		//	echo $to."<br>";
		//	echo $well.="email sent for 1";
		}
	  }
		
	}
  }
}
	
} 

//////////////////////////////////////////send broker summary of last week to all selelrs ////////////////////////////////////////
broker_summary_of_1_week();
function broker_summary_of_1_week(){

	$get_all_sellers= get_table_data('users','user_type="seller"');
	$broker_of_last_week = get_table_data('users','user_type="broker" AND  registration_date between date_sub(now(),INTERVAL 1 WEEK) and now();');
	foreach($broker_of_last_week as $broker){
		$inner_body .= "Brker name is =".$broker->username." <img src='".HTTP_PATH."img/avatar.png' style='width:90px;height:90px;'>"."<br>";
	}
			
	foreach($get_all_sellers as $seller){
		$to =$seller->email;
		$subject="Last Week Top brokers ";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		
		$body='Hi, <br/> '.$seller->username.'<br/> There is list of top brokers.You can select anyone for your property !good luck<br/>';	
		$body .=$inner_body;
		if(mail($to,$subject,$body,$headers)){
			echo $well.="email sent to sellers ";
		}
				
	}

}

echo "z_test";
exit;




?>