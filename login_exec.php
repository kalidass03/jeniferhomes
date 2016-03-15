<?php
require_once('includes/connection.php');
$errmsg_arr = array();
$errflag = false;

//Function to sanitize values received from the form. Prevents SQL injection
function clean($str)
{
    $str = @trim($str);
    if (get_magic_quotes_gpc())
    {
        $str = stripslashes($str);
    }
    return ((isset($GLOBALS["___mysqli_ston"]) && is_object($GLOBALS["___mysqli_ston"])) ? mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $str) : ((trigger_error("[MySQLConverterToo] Fix the mysql_escape_string() call! This code does not work.", E_USER_ERROR)) ? "" : ""));
}

$email = clean($_POST['email']);
$password = md5(clean($_POST['password'])); //change by zohaib
//Input Validations
if ($email == '' || $password == '')
{
    $errmsg_arr = 'Email or Password missing';
    $errflag = true;
}
//If there are input validations, redirect back to the login form
if ($errflag)
{
    $_SESSION['login_msg'] = $errmsg_arr;
    session_write_close();
    //header('Location: '.HTTP_PATH.'index.php');
    echo "<script type='text/javascript'>
                         window.location = 'login.php';
                     </script>";
}

//Create query
$qry = "SELECT * FROM users WHERE email='$email' AND password='$password'";

$result = mysqli_query($GLOBALS["___mysqli_ston"], $qry);
//echo $result;
//exit;
//Check whether the query was successful or not
if ($result)
{
    if (mysqli_num_rows($result) > 0)
    {
        $member = mysqli_fetch_assoc($result);
        $_SESSION['SESS_USER_ID'] = $member['user_id'];
        $_SESSION['SESS_USER_NAME'] = $member['username'];
        $_SESSION['SESS_USER_ROLE'] = $member['user_type'];
        $_SESSION['SESS_USER_PIC'] = $member['profile_pic'];
        $_SESSION['SESS_USER_STATUS'] = $member['status'];
        session_write_close();
        if ($_SESSION['SESS_USER_ROLE'] == "broker")
        {
            //header('Location: '.HTTP_PATH.'create_task.php');
            echo "<script type='text/javascript'>
                     window.location = 'broker-home.php';
                     </script>";
        } else
        {
            //header('Location: '.HTTP_PATH.'task_sheet.php');

            $property = array();
            $property = $_SESSION['property'];
            //print_r($_SESSION['property']);
            //exit;
            if (isset($property) && !empty($property))
            {



                //header("Location: ".HTTP_PATH."dashboard_broker.php");
                echo "<script type='text/javascript'>
                         window.location = 'seller-finish.php';
                     </script>";
            } else
            {

                echo "<script type='text/javascript'>
                         window.location = 'seller-dashboard.php';
                     </script>";
            }
        }
    } else
    {
        //Login failed
        $errmsg_arr = 'Email or  Password not found';
        $errflag = true;
        if ($errflag)
        {
            $_SESSION['login_msg'] = $errmsg_arr;
            session_write_close();
            echo "<script type='text/javascript'>
                         window.location = 'login.php';
                     </script>";
        }
    }
} else
{
    die("Query failed");
}
?>


Top