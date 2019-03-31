<?php 

include 'DBConfig.php';

//    $conn = new mysqli($HostName, $HostUser, $HostPass, $DatabaseName);

	$json = file_get_contents('php://input');
 
	 // decoding the received JSON and store into $obj variable.
	 $obj = json_decode($json,true);

    $updateU_id = $obj['updateU_id'];
    $uname = $obj['uname'];
    $ukhundi = $obj['ukhundi'];
    $ucontact = $obj['ucontact'];
    $uusername = $obj['uusername'];
    $upass = $obj['upass'];
    $uroleValue = $obj['uroleValue'];



   $result= $con->query("update census_users set name='$uname',khundi='$ukhundi',contact='$ucontact',username='$uusername',pass='$upass',role='$uroleValue' where u_id='$updateU_id'");
	
    if($result){
				echo json_encode("Success");
			}
			else{
			   echo json_encode(mysqli_error($con)); // our query fail 		

                echo "Failed";
			}



?>


