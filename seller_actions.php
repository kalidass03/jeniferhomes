<?php  require_once('includes/connection.php'); 
if (isset($_POST['action'])) {
    switch($_POST['action']){
	
	
	
		case 'seller_registration':
		echo seller_registration();
		break;
		
		case 'forget_password';
		echo forget_password_function();
		break;
		
		case 'change_password';
		echo change_password_function();
		break;
		
		case 'chat':
		echo chat();
		break;
		
		case  'load_conversation':
		echo load_conversation();
		break;
		
		case  'share_address':
		echo share_address();
		break;
		
		case  'share_contact':
		echo share_contact();
		break;
		
		case  'award_property':
		echo award_property();
		break;
		
		
		
		case 'edit_seller_profile';
		echo edit_seller_profile_function();
		break;
		
		case 'share_all_info';
		echo share_all_info_function();
		break;
		
		}
}
?> 

<style>
.color-div{
color: #428bca;
}
</style>

<?php 


function award_property(){
 extract($_POST);
$today = date("Y-m-d H:i:s");
$dateconversation=time_elapsed_string(strtotime($today));
$dateconversation1=$dateconversation;
$file_name_final=$file_name.'.html';
if(file_exists($file_name_final)){
$conversation=  explode("_",$file_name);
$broker_id = $conversation[0];  
$property_id = $conversation[1];
$seller_id = $conversation[2];
$file_name=$file_name.'.html';
$single_p_data =get_table_data('property', 'property_id='.$property_id.'', false, false);
$text="Awarding Property to you";
//$array = array("last_message"=>$text);
$array = array("status"=>"0","dateconversation"=>$today,"last_message"=>$text,"user_name_last_message"=>$_SESSION['SESS_USER_NAME']);
$table_name="conversations";
$where= array("file_name"=>$file_name);
matching_Formfields_TableColumn_update($array,$table_name,$where,$operator);


	   $fp = fopen($file_name, 'a');
	  
	fwrite($fp, '<div class="row msg_container base_sent"><div class="col-md-10 col-xs-10"><div class="messages msg_sent"><div>'.$_SESSION['SESS_USER_NAME'].'</div><p>'
                                   .stripslashes(htmlspecialchars($text)).
                                '</p> <time datetime=""> '.$today.'</time></div>
                                    </div>
                                   
                                </div>');
	
	   fclose($fp);
	   
	 //send email to all other broker which are not in gold or platinum category 
   $get_user_name =get_table_data('users','user_id='.$broker_id.'');
	$get_silvers_broker_info =get_table_data('users','user_type="broker" AND account_type="Silver" And user_id!='.$broker_id.'');
	
	foreach($get_silvers_broker_info as $silver_brokers){
		
		$to=$silver_brokers->email;
	$subject="Property Assign to someone else";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	$body='Hi, <br/>'.$silver_brokers->username.' <br/> 
	 The property <a href="'.HTTP_PATH.'/property-details.php?id='.$property_id.'">'.HTTP_PATH.'/property-details.php?id='.$property_id.'</a> Assigned to  "'.$get_user_name[0]->username.'",You have to upgrade your membership to increase your chance to win bid<br>';
		if(mail($to,$subject,$body,$headers)){
			echo "email sent";
		}
	}
	//send email to all other broker which are not in gold or platinum category 

  
   $data  = "bid_status='In Progress',awarded_to='".$broker_id."'";         
   if(update_table_data('property',$data,'property_id='.$property_id.'' )){
    $_SESSION['share_info'] ="Awarded!";
    echo 'done';
    exit;
    
   }
   
   exit;
  
  
 }
 }








function share_contact(){
extract($_POST);
$today = date("Y-m-d H:i:s");
$dateconversation=time_elapsed_string(strtotime($today));
$dateconversation1=$dateconversation;
$file_name_final=$file_name.'.html';
if(file_exists($file_name_final)){
$conversation=  explode("_",$file_name);
$broker_id = $conversation[0];  
$property_id = $conversation[1];
$seller_id = $conversation[2];
$file_name=$file_name.'.html';
$single_p_data =get_table_data('users', 'user_id='.$seller_id.'', false, false);
$text=$single_p_data[0]->email;
$text1=$single_p_data[0]->phone_number;
$text2=$single_p_data[0]->company_name;
$text4=$text.' '.$text1.' '.$text2;
//$array = array("last_message"=>$text);
$array = array("status"=>"0","dateconversation"=>$today,"last_message"=>$text4,"user_name_last_message"=>$_SESSION['SESS_USER_NAME']);
$table_name="conversations";
$where= array("file_name"=>$file_name);
matching_Formfields_TableColumn_update($array,$table_name,$where,$operator);


	   $fp = fopen($file_name, 'a');
	  
	fwrite($fp, '<div class="row msg_container base_sent"><div class="col-md-10 col-xs-10"><div class="messages msg_sent"><div>'.$_SESSION['SESS_USER_NAME'].'</div><p>
                                   Email:' .stripslashes(htmlspecialchars($text)).'<br>
								   Phone #:' .stripslashes(htmlspecialchars($text1)).'<br>
								   Company Name:' .stripslashes(htmlspecialchars($text2)).
								  
                                '</p> <time datetime=""> '.$today.'</time></div>
                                    </div>
                                   
                                </div>');
	
	   fclose($fp);
	   /////////////////////////
	   
	  
  
  $total_rec =find_total('sharing_info', 'property_id='.$property_id.' AND broker_id='.$broker_id.' AND sharewhat="share_contact"');
  
  if($total_rec ==0){
   $data = array("property_id"=>$property_id,
       "broker_id"=>$broker_id,
       "seller_id"=>$seller_id,
       "sharewhat"=>'share_contact'
       );
   if(matching_Formfields_TableColumn_insert($data,'sharing_info')){
    $_SESSION['share_info'] ="Info share!";
    echo 'done';
    exit;
    
   }
   }else{
    $_SESSION['share_info'] ="Already share!";
    echo "fail";
	exit;
  }
 
 
	   
	   
	   /////////////////////////
	   
	   
	   


 exit;




}


}




function share_address(){
// $seller_id =$_SESSION['SESS_USER_ID'];
 extract($_POST);
$today = date("Y-m-d H:i:s");
$dateconversation=time_elapsed_string(strtotime($today));
$dateconversation1=$dateconversation;
$file_name_final=$file_name.'.html';
if(file_exists($file_name_final)){
$conversation=  explode("_",$file_name);
$broker_id = $conversation[0];  
$property_id = $conversation[1];
$seller_id = $conversation[2];
$file_name=$file_name.'.html';
$single_p_data =get_table_data('property', 'property_id='.$property_id.'', false, false);
$text=$single_p_data[0]->property_address;
//$array = array("last_message"=>$text);
$array = array("status"=>"0","dateconversation"=>$today,"last_message"=>$text,"user_name_last_message"=>$_SESSION['SESS_USER_NAME']);
$table_name="conversations";
$where= array("file_name"=>$file_name);
matching_Formfields_TableColumn_update($array,$table_name,$where,$operator);


	   $fp = fopen($file_name, 'a');
	  
	fwrite($fp, '<div class="row msg_container base_sent"><div class="col-md-10 col-xs-10"><div class="messages msg_sent"><div>'.$_SESSION['SESS_USER_NAME'].'</div><p>'
                                   .stripslashes(htmlspecialchars($text)).
                                '</p> <time datetime=""> '.$today.'</time></div>
                                    </div>
                                   
                                </div>');
	
	   fclose($fp);
	   
///////////////

 $total_rec =find_total('sharing_info', 'property_id='.$property_id.' AND broker_id='.$broker_id.' AND sharewhat="share_address"');
  
  if($total_rec ==0){
   $data = array("property_id"=>$property_id,
       "broker_id"=>$broker_id,
       "seller_id"=>$seller_id,
       "sharewhat"=>'share_address'
       );
   if(matching_Formfields_TableColumn_insert($data,'sharing_info')){
    $_SESSION['share_info'] ="Info share!";
    echo 'done';
    exit;
    
   }
   }else{
    $_SESSION['share_info'] ="Already share!";
    echo "fail";
	exit;
   }



////////////////	   
	   
	   


 exit;




}


}

function load_conversation(){
extract($_POST);
$conversation=  explode("_",$file_name);
$broker_id = $conversation[0];  
$property_id = $conversation[1];
$seller_id = $conversation[2];
$file_name=$file_name.'.html';
  
  
   
  
//echo $file_name;
if(file_exists($file_name)){

$qry="SELECT * FROM conversations WHERE file_name='$file_name'";
$result   = mysql_query($qry);
//$conversation_data=  mysql_fetch_object($result);
 
$count=mysql_num_rows($result);
if($count==1)
{
echo $file_name;
} else{

$today = date("Y-m-d H:i:s");
$array = array("seller_id"=>$seller_id,"broker_id"=>$broker_id,"property_id"=>$property_id,"file_name"=>$file_name,"status"=>"0","dateconversation"=>$today,"last_message"=>'I want to start chat with you if you are free.',"user_name_last_message"=>$_SESSION['SESS_USER_NAME']);
$table_name="conversations";
	if(matching_Formfields_TableColumn_insert($array,$table_name)){
	
	echo $file_name;
	
	}

}
 
 
 
	}else{
	$qry="SELECT * FROM conversations WHERE file_name='$file_name'";
	$result   = mysql_query($qry);
	$conversation_data=  mysql_fetch_object($result);
	
	$count=mysql_num_rows($result);
	if($count==1)
	{
	$dateconversation=time_elapsed_string(strtotime($conversation_data->dateconversation));
	$dateconversation1=$dateconversation;
	$fp = fopen($file_name, 'a');
	
	fwrite($fp, '<div class="row msg_container base_sent"><div class="col-md-10 col-xs-10"><div class="messages msg_sent"><div>'.$conversation_data->user_name_last_message.'</div><p>'  .stripslashes(htmlspecialchars($conversation_data->last_message)).'</p> <time datetime=""> '.$conversation_data->dateconversation.'</time></div>
									</div>
								   
								</div>');
	
	fclose($fp);
	
		//echo "hi i am here upper in db !"."---".$file_name."<br>";
		  echo  $file_name;
		  
		 
	}else{
	
	$today = date("Y-m-d H:i:s");
	$dateconversation=time_elapsed_string(strtotime($today));
	$dateconversation1=$dateconversation;
	$array = array("seller_id"=>$seller_id,"broker_id"=>$broker_id,"property_id"=>$property_id,"file_name"=>$file_name,"status"=>"0","dateconversation"=>$today,"last_message"=>'I want to start chat with you if you are free.',"user_name_last_message"=>$_SESSION['SESS_USER_NAME']);
	$table_name="conversations";
	}
	if(matching_Formfields_TableColumn_insert($array,$table_name)){
		$fp = fopen($file_name, 'a');
		fwrite($fp, '<div class="row msg_container base_sent"><div class="col-md-10 col-xs-10"><div class="messages msg_sent"><div>'.$_SESSION['SESS_USER_NAME'].'</div><p> I want to start chat with you if you are free.</p> <time datetime="">'.$today.'</time></div>
									</div>
								</div>');
	
		fclose($fp);
		//echo "hi i am here !"."---".$file_name."<br>";
		
		/* sending email to broker if seller send him/her msg first time  start*/
		$get_broker_info =get_table_data('users','user_id='.$broker_id .'',false,false);
		$get_seller_info =get_table_data('users','user_id='.$seller_id .'',false,false);
		
					$to=$get_broker_info[0]->email;
					$subject="Received a message";
					$headers .= "MIME-Version: 1.0\r\n";
					$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
					$body='Hi, <br/>'.$get_broker_info[0]->username.' <br/> You have received a message form  "'.$get_seller_info[0]->username.'"<br/>';
					$body .= 'you can go to your inbis and read it  <a href="'.HTTP_PATH.'message-broker-inbox.php">'.Inbox.'</a>';
					$well="";
					if(mail($to,$subject,$body,$headers)){
							echo $well.="email sent";
							exit;
					}			
		/* sending email to broker if seller send him/her msg first time  end*/
		echo  $file_name;
		}
	}
 exit;
}



function chat(){
extract($_POST);
if(isset($_SESSION['SESS_USER_NAME'])){
$file_name_or=$file_name.'.html';
  if(!file_exists($file_name_or)){

$conversation=  explode("_",$file_name);
$broker_id = $conversation[0];  
$property_id = $conversation[1];
$seller_id = $conversation[2];
$file_name=$file_name.'.html';
	
$today = date("Y-m-d H:i:s");
$dateconversation=time_elapsed_string(strtotime($today));
$dateconversation1=$dateconversation;
$array = array("seller_id"=>$seller_id,"broker_id"=>$broker_id,"property_id"=>$property_id,"file_name"=>$file_name,"status"=>"0","dateconversation"=>$today,"last_message"=>'I want to start chat with you if you are free.',"user_name_last_message"=>$_SESSION['SESS_USER_NAME']);
$table_name="conversations";
	if(matching_Formfields_TableColumn_insert($array,$table_name)){
	   $fp = fopen($file_name, 'a');
	fwrite($fp, '<div class="row msg_container base_sent"><div class="col-md-10 col-xs-10"><div class="messages msg_sent"><div><a calss="color-div">'.$_SESSION['SESS_USER_NAME'].'</a></div><p>'
                                   .stripslashes(htmlspecialchars($text)).
                                '</p> <time datetime=""> '.$today.'</time></div>
                                    </div>
                                 
                                </div>');
								
	fclose($fp);
	   
	   echo  "true";
	}
	}else{
		
$conversation=  explode("_",$file_name);
$broker_id = $conversation[0];  
$property_id = $conversation[1];
$seller_id = $conversation[2];
$file_name=$file_name.'.html';

$today = date("Y-m-d H:i:s");
$dateconversation=time_elapsed_string(strtotime($today));
$dateconversation1=$dateconversation;
$array = array("status"=>"0","dateconversation"=>$today,"last_message"=>$text,"user_name_last_message"=>$_SESSION['SESS_USER_NAME']);
$table_name="conversations";
$where= array("file_name"=>$file_name);
matching_Formfields_TableColumn_update($array,$table_name,$where,$operator);


	   $fp = fopen($file_name, 'a');
	   if($_SESSION['SESS_USER_ROLE']=="seller"){
	fwrite($fp, '<div class="row msg_container base_sent"><div class="col-md-10 col-xs-10"><div class="messages msg_sent"><div><a calss="color-div">'.$_SESSION['SESS_USER_NAME'].'</a></div><p>'
                                   .stripslashes(htmlspecialchars($text)).
                                '</p> <time datetime=""> '.$today.'</time></div>
                                    </div>
                                   
                                </div>');
	
	   fclose($fp);
	   }else  if($_SESSION['SESS_USER_ROLE']=="broker"){
	   
	   fwrite($fp, '<div class="row msg_container base_receive">
                                        <div class="col-xs-10 col-md-10">
                                        <div class="messages msg_receive">
										<div><a calss="color-div">'.$_SESSION['SESS_USER_NAME'].'</a></div>
                                            <p>'
                                   .stripslashes(htmlspecialchars($text)).
                                '</p>
                                            <time datetime="">'.$today.'</time>
                                        </div>
                                    </div>
                                </div>');
	
	   fclose($fp);
	   
	   }
	   
	   echo  "true";
	
	}
   
  
	   exit;
}


}










//seller_registration
function seller_registration(){
	extract($_POST);
	
	
	
	if($password != $conform_password)
	{
		
 		$_SESSION['SELLER_REGISTRATION_MSG'] = "Password not match!";
    	session_write_close();
		 echo "<script type='text/javascript'>
     		window.location = 'signup-seller.php';
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
				"user_type"=>"seller",
				"status"=>"0",
				"registration_date"=>$curr_d_t,
				"activation_key"=>$activation,
				"account_type"=>"Free",
				"user_rand_key"=>"789");
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
	
   
 	 $_SESSION['SELLER_REGISTRATION_SUCCESS_MSG'] = $msg;
	
    session_write_close();
	
	 echo "<script type='text/javascript'>
     		window.location = 'email-verification.php';
     		</script>";
}

 }
else
 {
 	$msg = 'The email is already taken, please try new.'; 
 	$_SESSION['SELLER_REGISTRATION_MSG'] = $msg;
    session_write_close();
	 echo "<script type='text/javascript'>
     		window.location = 'signup-seller.php';
     		</script>";
 }
 }
else
 {
 	$msg = "The email you have entered is invalid, please try again."; 
 	$_SESSION['SELLER_REGISTRATION_MSG'] = $msg;
 	session_write_close();
	//header("Location: ".HTTP_PATH."seller_signup.php");
	 echo "<script type='text/javascript'>
     		window.location = 'signup-seller.php';
     		</script>";
 }
 
	}
	//header("Location: ".HTTP_PATH."seller_signup.php");
	 echo "<script type='text/javascript'>
     		window.location = 'signup-seller.php';
     		</script>";
exit;
}
//forget_password_function
function forget_password_function(){

extract($_POST);
$forget_email;
$qry="SELECT * FROM users WHERE email='$forget_email'";
$result   = mysql_query($qry);
$activation_key=  mysql_fetch_object($result);
//print_r($activation_key->activation_key);
		//exit;
$count=mysql_num_rows($result);
if($count==1){
	$to=$forget_email;
	$subject="Email verification";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	$body='Hi, <br/> <br/> Go to this link to Change the password. <br/> <br/> <a href="'.HTTP_PATH.'changepassword.php?activation_key='.$activation_key->activation_key.'">'.HTTP_PATH.'changepassword.php?activation_key='.$activation_key->activation_key.'</a>';
	if(mail($to,$subject,$body,$headers)){
	$msg = "Please visit your email account to Change the Password."; 
		$_SESSION['SELLER_forgot_MSG'] = $msg;
		 echo "<script type='text/javascript'>
				window.location = 'forgot-password.php';
				</script>";
	exit;	
	}
}else{
	
	$msg = "Email not found in database.You have to enter valid email."; 
		$_SESSION['SELLER_forgot_MSG'] = $msg;
		 echo "<script type='text/javascript'>
				window.location = 'forgot-password.php';
				</script>";
	exit;	
}
	
}



function change_password_function(){
//print_r($_POST);
//exit;

extract($_POST);
if($forget_password != $retype_password)
	{
 		$_SESSION['SELLER_change_MSG'] = "Password not match!";
    	session_write_close();
		 echo "<script type='text/javascript'>
     		window.location = 'changepassword.php';
     		</script>";
			exit;
	}
$forget_email;

$qry="SELECT * FROM users WHERE activation_key='$check_email'";
$result   = mysql_query($qry);
$count=mysql_num_rows($result);
if($count==1)
{
$forget_password=md5($forget_password);
$array3 = array("password"=>$forget_password);
$table_name="users";
$where=array("activation_key"=>$check_email);
if(matching_Formfields_TableColumn_update($array3,$table_name,$where,null)){

$msg = "You have Successfully  Change the Password."; 
 	$_SESSION['SELLER_change_MSG'] = $msg;
	 echo "<script type='text/javascript'>
     		window.location = 'changepassword.php';
     		</script>";
exit;

}
$qry="Update set password FROM users WHERE email='$check_maile'";
$result   = mysql_query($qry);
$to=$forget_email;
$subject="Email verification";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$body='Hi, <br/> <br/> Go to this link to Change the password. <br/> <br/> <a href="'.HTTP_PATH.'changepassword.php?code='.$activation.'">'.$base_url.'activation.php?code='.$activation.'</a>';
if(mail($to,$subject,$body,$headers)){
return "Registration successful, please activate email.";
}
}
	
}
//edit_seller_profile_function();
function edit_seller_profile_function(){
	
extract($_POST);

if(empty($password)){
 $data  = "first_name='".$first_name."',
			   last_name='".$last_name."',
			   email='".$email."',
			   phone_number='".$phone_number."',
			   company_name='".$company_name."',
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
			   address='".$address."',
			   shortly_about_me='".$shortly_about_me."'
			   ";   
}
			   
	$edit =	update_table_data('users',$data,'user_id='.$user_id.'' );
	if($edit){
		$_SESSION['edit_user'] ="Your Info has beed updated successfully!";
		echo "<script type='text/javascript'>window.location = 'seller-profile.php?id=".$user_id."';</script>";
			exit;
	}else{
			$_SESSION['edit_user'] ="Sorry try again!";
		echo "<script type='text/javascript'>window.location = 'seller-profile.php?id=".$user_id."';</script>";
			exit;

		}
		


}



// matt work start
//change_property_status_function();

function change_property_status_function(){

extract($_POST);
$today = date("Y-m-d H:i:s"); 
  $data  = "bid_status='".$status."',
      last_status_change='".$today."'
      ";        
$edit = update_table_data('property',$data,'property_id='.$property_id.'' );
 if($edit){
  $_SESSION['propert_status'] ="Your propert status has beed updated successfully!";
  echo "done";
   exit;
 }else{
  $_SESSION['propert_status'] ="Sorry try again!";
  echo "failed";
   exit;

  }

}
//share_all_info_function
function share_all_info_function(){
 	extract($_POST);
 	$seller_id =$_SESSION['SESS_USER_ID'];
 	/////////
	$today = date("Y-m-d H:i:s");
	$dateconversation=time_elapsed_string(strtotime($today));
	$dateconversation1=$dateconversation;
	$file_name=$broker_id.'_'.$property_id.'_'.$seller_id;
	$file_name_final=$file_name.'.html';
	if(file_exists($file_name_final)){
		$conversation=  explode("_",$file_name);
		$broker_id = $conversation[0];  
		$property_id = $conversation[1];
		$seller_id = $conversation[2];
		$file_name=$file_name.'.html';
		$single_p_data =get_table_data('property', 'property_id='.$property_id.'', false, false);
		$text=$single_p_data[0]->property_address;
		//$array = array("last_message"=>$text);
		$array = array("status"=>"0","dateconversation"=>$today,"last_message"=>$text,"user_name_last_message"=>$_SESSION['SESS_USER_NAME']);
		$table_name="conversations";
		$where= array("file_name"=>$file_name);
		matching_Formfields_TableColumn_update($array,$table_name,$where,$operator);
			$fp = fopen($file_name, 'a');
			fwrite($fp, '<div class="row msg_container base_sent"><div class="col-md-10 col-xs-10"><div class="messages msg_sent"><div>'.$_SESSION['SESS_USER_NAME'].'</div><p>'.stripslashes(htmlspecialchars($text)).'</p> <time datetime=""> '.$today.'</time></div></div></div>');
			//fclose($fp);
		   }
 ////////
		 if($func =="share_address"){
		 
			  $total_rec =find_total('sharing_info', 'property_id='.$property_id.' AND broker_id='.$broker_id.' AND sharewhat="share_address"');
			  if($total_rec ==0){
			   $data = array("property_id"=>$property_id,
				   "broker_id"=>$broker_id,
				   "seller_id"=>$seller_id,
				   "sharewhat"=>'share_address'
				   );
			   if(matching_Formfields_TableColumn_insert($data,'sharing_info')){
				$_SESSION['share_info'] ="Info share!";
				echo 'done'; exit;
				
			   }
			   }else{
				$_SESSION['share_info'] ="Already share!";
				echo "fail";exit;
			   }
		  
		 
		 }else if($func =="share_contact"){
 
			$today = date("Y-m-d H:i:s");
			$dateconversation=time_elapsed_string(strtotime($today));
			$dateconversation1=$dateconversation;
			$file_name=$broker_id.'_'.$property_id.'_'.$seller_id;
			$file_name_final=$file_name.'.html';
			if(file_exists($file_name_final)){
			$conversation=  explode("_",$file_name);
			$broker_id = $conversation[0];  
			$property_id = $conversation[1];
			$seller_id = $conversation[2];
			$file_name=$file_name.'.html';
			$single_p_data =get_table_data('users', 'user_id='.$seller_id.'', false, false);
			$text=$single_p_data[0]->email;
			$text1=$single_p_data[0]->phone_number;
			$text2=$single_p_data[0]->company_name;
			$text4=$text.' '.$text1.' '.$text2;
			//$array = array("last_message"=>$text);
			$array = array("status"=>"0","dateconversation"=>$today,"last_message"=>$text4,"user_name_last_message"=>$_SESSION['SESS_USER_NAME']);
			$table_name="conversations";
			$where= array("file_name"=>$file_name);
			matching_Formfields_TableColumn_update($array,$table_name,$where,$operator);
			$fp = fopen($file_name, 'a');
			fwrite($fp, '<div class="row msg_container base_sent"><div class="col-md-10 col-xs-10"><div class="messages msg_sent"><div>'.$_SESSION['SESS_USER_NAME'].'</div><p>
            Email:' .stripslashes(htmlspecialchars($text)).'<br>
			Phone #:' .stripslashes(htmlspecialchars($text1)).'<br>
			Company Name:' .stripslashes(htmlspecialchars($text2)).
			'</p> <time datetime=""> '.$today.'</time></div></div></div>');
			fclose($fp);
 } 
 //////////////
  
  $total_rec =find_total('sharing_info', 'property_id='.$property_id.' AND broker_id='.$broker_id.' AND sharewhat="share_contact"');
  
  if($total_rec ==0){
   $data = array("property_id"=>$property_id,
       "broker_id"=>$broker_id,
       "seller_id"=>$seller_id,
       "sharewhat"=>'share_contact'
       );
   if(matching_Formfields_TableColumn_insert($data,'sharing_info')){
    $_SESSION['share_info'] ="Info share!";
    echo 'done';
    exit;
    
   }
   }else{
    $_SESSION['share_info'] ="Already share!";
    echo "fail";exit;
  }
 
 }else if($func == "award_listing"){
 	$today = date("Y-m-d H:i:s");
	$dateconversation=time_elapsed_string(strtotime($today));
	$dateconversation1=$dateconversation;
	$file_name=$broker_id.'_'.$property_id.'_'.$seller_id;
	$file_name_final=$file_name.'.html';
	if(file_exists($file_name_final)){
		$conversation=  explode("_",$file_name);
		$broker_id = $conversation[0];  
		$property_id = $conversation[1];
		$seller_id = $conversation[2];
		$file_name=$file_name.'.html';
		$single_p_data =get_table_data('property', 'property_id='.$property_id.'', false, false);
		$text="Awarding Property to you";
		//$array = array("last_message"=>$text);
		$array = array("status"=>"0","dateconversation"=>$today,"last_message"=>$text,"user_name_last_message"=>$_SESSION['SESS_USER_NAME']);
		$table_name="conversations";
		$where= array("file_name"=>$file_name);
		matching_Formfields_TableColumn_update($array,$table_name,$where,$operator);
			 $fp = fopen($file_name, 'a');
			 fwrite($fp, '<div class="row msg_container base_sent"><div class="col-md-10 col-xs-10"><div class="messages msg_sent"><div>'.$_SESSION['SESS_USER_NAME'].'</div><p>'.stripslashes(htmlspecialchars($text)).'</p> <time datetime=""> '.$today.'</time></div></div></div>');
			 fclose($fp);
		}
		
   //send email to all other broker which are not in gold or platinum category 
   $get_user_name =get_table_data('users','user_id='.$broker_id.'');
	$get_silvers_broker_info =get_table_data('users','user_type="broker" AND account_type="Silver" And user_id!='.$broker_id.'');
	
	foreach($get_silvers_broker_info as $silver_brokers){
		
		$to=$silver_brokers->email;
	$subject="Property Assign to someone else";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	$body='Hi, <br/>'.$silver_brokers->username.' <br/> 
	 The property <a href="'.HTTP_PATH.'/property-details.php?id='.$property_id.'">'.HTTP_PATH.'/property-details.php?id='.$property_id.'</a> Assigned to  "'.$get_user_name[0]->username.'",You have to upgrade your membership to increase your chance to win bid<br>';
		if(mail($to,$subject,$body,$headers)){
			echo "email sent";
		}
	}
	//send email to all other broker which are not in gold or platinum category 
	

   $data  = "bid_status='In Progress',awarded_to='".$broker_id."'";        
   if(update_table_data('property',$data,'property_id='.$property_id.'' )){
    $_SESSION['share_info'] ="Awarded!";
    echo 'done';
    exit;
    
   }
  
  
 }
}
//maat work end



