<?php
error_reporting(0);
// $protocol = $_SERVER['HTTPS'] == 'on' ? 'https' : 'http';
$protocol = 'http';
$url= $protocol.'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

if (strpos($url, "localhost")) { 
    //Define your host here.
    $HostName = "localhost";
    
    //Define your database name here.
    $DatabaseName = "omys";
    // $DatabaseName = "omys_faraz";
    
    //Define your database username here.
    $HostUser = "root";
    
    //Define your database password here.
    $HostPass = "";

}
else {

    $HostName = "omysstudent.com";
 
    // //Define your database name here.
     $DatabaseName = "omysstud_omys";
     
    // //Define your database username here.
     $HostUser = "omysstud_omys";
     
    // //Define your database password here.
     $HostPass = "Census_Omys_Okhai786!";


     
}




 /*
//Define your host here.
$HostName = "localhost";
 
//Define your database name here.
// $DatabaseName = "omys";
$DatabaseName = "omys_faraz";
 
//Define your database username here.
$HostUser = "root";
 
//Define your database password here.
$HostPass = "";


$con = new mysqli($HostName, $HostUser, $HostPass, $DatabaseName);


// //Define your host here.
 $HostName = "omysstudent.com";
 
// //Define your database name here.
 $DatabaseName = "omysstud_omys";
 
// //Define your database username here.
 $HostUser = "omysstud_omys";
 
// //Define your database password here.
 $HostPass = "Census_Omys_Okhai786!";
 */

 $con = new mysqli($HostName, $HostUser, $HostPass, $DatabaseName);
 

 
?>

