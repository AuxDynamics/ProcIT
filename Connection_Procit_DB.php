<?php 

$mysql_host = 'localhost'; 

$mysql_user = 'root'; 

$DB_name = 'ictquizportal';
  
$con =  mysqli_connect($mysql_host, $mysql_user);

 


if (! ($con)) 
{ 
    die('Cannot connect to database'); 
} 
else
{ 

    if ( mysqli_select_db($con,$DB_name)) 
    { 
        date_default_timezone_set("Asia/kolkata");
        $get_current_time = date("H:i:sa");
        $get_today_date = date("Y-m-d");

        $new_time = date("Y-m-d H:i:s");
    } 
    else
    { 
        die('Cannot connect to database'); 
    } 
} 
?>