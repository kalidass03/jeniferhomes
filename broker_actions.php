<?php  require_once('includes/connection.php'); 
if (isset($_POST['action'])) {
    switch($_POST['action']){
	
	
	
		case 'broker_registration':
		echo broker_registration();
		break;
		
		case 'edit_broker_profile';
		echo edit_broker_profile_function();
		break;
		
		case 'place_bid';
		echo place_bid_function();
		break;
		
		
		
		}
} 


//seller_registration
function broker_registration(){
	extract($_POST);
	
	
	
	if($password != $conform_password)
	{
		
 		$_SESSION['BROKER_REGISTRATION_MSG'] = "Password not match!";
    	session_write_close();
		 echo "<script type='text/javascript'>
     		window.location = 'signup-broker.php';
     		</script>";
	}
	else{
$password=md5($password); // encrypted password
$activation=md5($email.time()); // encrypted email+timestamp

$curr_d_t =date("Y-m-d H:i:s");  //current data nd time
$array = array("username"=>$first_name,
				"first_name"=>$first_name,
				"last_name"=>$last_name,
				"company_name"=>$company_name,
				"phone_number"=>$phone_number,
				"email"=>$email,
				"password"=>$password,
				"last_name"=>$last_name,
				"user_type"=>"broker",
				"status"=>"0",
				"registration_date"=>$curr_d_t,
				"activation_key"=>$activation,
				"account_type"=>"Free",
				"user_rand_key"=>"789",
				"license_number"=>$license_number);
$table_name="users";
$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/';
if(preg_match($regex, $email))
{
	
	$count=mysql_query("SELECT * FROM $table_name WHERE email='$email'"); 
   
if(@mysql_num_rows($count) < 1)
{
	
	
	

if(matching_Formfields_TableColumn_insert($array,$table_name)){

	$base_url=HTTP_PATH;
	//$base_url="http://localhost/property_listing/";
 	$msg=  activation_mail($email,$activation,$base_url);
	
   
 	 $_SESSION['BROKER_REGISTRATION_SUCCESS_MSG'] = $msg;
	
    session_write_close();
	
	 echo "<script type='text/javascript'>
     		window.location = 'email-verification.php';
     		</script>";
}

 }
else
 {
 	$msg = 'The email is already taken, please try new.'; 
 	$_SESSION['BROKER_REGISTRATION_MSG'] = $msg;
    session_write_close();
	 echo "<script type='text/javascript'>
     		window.location = 'signup-broker.php';
     		</script>";
 }
 }
else
 {
 	$msg = "The email you have entered is invalid, please try again."; 
 	$_SESSION['BROKER_REGISTRATION_MSG'] = $msg;
 	session_write_close();
	//header("Location: ".HTTP_PATH."seller_signup.php");
	 echo "<script type='text/javascript'>
     		window.location = 'signup-broker.php';
     		</script>";
 }
 
	}
	//header("Location: ".HTTP_PATH."seller_signup.php");
	 echo "<script type='text/javascript'>
     		window.location = 'signup-broker.php';
     		</script>";
exit;
}
//edit_broker_profile_function();
function edit_broker_profile_function(){	
extract($_POST);
if(empty($password)){
 $data  = "first_name='".$first_name."',
			   last_name='".$last_name."',
			   email='".$email."',
			   phone_number='".$phone_number."',
			   company_name='".$company_name."',
			   license_number='".$license_number."',
			   address='".$address."',
			    shortly_about_me='".$shortly_about_me."'
			   ";   		     
}else{
 $data  = "first_name='".$first_name."',
			   last_name='".$last_name."',
			   password='".md5($password)."',
			   email='".$email."',
			   phone_number='".$phone_number."',
			   company_name='".$company_name."',
			   license_number='".$license_number."',
			   address='".$address."',
			    shortly_about_me='".$shortly_about_me."'
			   ";   		   
}
	
	$edit =	update_table_data('users',$data,'user_id='.$user_id.'' );
	if($edit){
		$_SESSION['edit_broker_info'] ="Your Info has beed updated successfully!";
		echo "<script type='text/javascript'>window.location = 'broker-profile.php?id=".$user_id."';</script>";
			exit;
	}else{
			$_SESSION['edit_broker_info'] ="Sorry try again!";
		echo "<script type='text/javascript'>window.location = 'broker-profile.php?id=".$user_id."';</script>";
			exit;

		}
		
}
//place_bid_function();
function place_bid_function(){
extract($_POST);
$today = date("Y-m-d H:i:s"); 

$already_bid =find_total('bids','property_id='.$property_id.' AND broker_id='.$broker_id.'');

if($already_bid==0){
$folder = "bids_files/";
$doc=time().$_FILES['bid_document']['name'];
move_uploaded_file($_FILES['bid_document']["tmp_name"] , "$folder".$doc);
	$data = array("low_price"=>$low_val,
				"amount"=>$target_val,
				"high_price"=>$high_val,
				"cover_letter"=>$proposal_on_project,
				"property_id"=>$property_id,
				"broker_id"=>$broker_id,
				"bid_date"=>$today,
				"Comission"=>$broker_commission,
				"bid_document"=>$doc
	);
if(matching_Formfields_TableColumn_insert($data,'bids')){
	//send email to proerty owner 
	$get_seller_info =get_table_data('users','user_id='.$seller_id.'');
	$get_broker_info =get_table_data('users','user_id='.$broker_id.'');
				
	$to=$get_seller_info[0]->email;
	$subject="Bid on your property";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	$body='Hi, <br/>'.$get_seller_info[0]->username.' <br/> The username  "'.$get_broker_info[0]->username.'"   palce a bid on your property ,The property link is given below <br/> <a href="'.HTTP_PATH.'/property-details.php?id='.$property_id.'">'.HTTP_PATH.'/property-details.php?id='.$property_id.'</a>';
	$well="";
	if(mail($to,$subject,$body,$headers)){
		$_SESSION['bid_info'] ="Your bid placed successfully!";
		echo "<script type='text/javascript'>window.location = 'property-details.php?id=".$property_id."'</script>";
		exit;
	}
 }else{
		 $_SESSION['bid_info'] ="Sorry try again!";
		echo "<script type='text/javascript'>window.location = 'property-details.php?id=".$property_id."'</script>";
		exit;
 }
}else{
	   $_SESSION['bid_info'] ="Sorry! you have alrady palce bid on this property";
	   echo "<script type='text/javascript'>window.location = 'property-details.php?id=".$property_id."'</script>";
		exit;
}
		exit;
}
