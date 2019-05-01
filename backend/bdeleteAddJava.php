<?php 
error_reporting(0);
include 'DBConfig.php';

//    $conn = new mysqli($HostName, $HostUser, $HostPass, $DatabaseName);

	$json = file_get_contents('php://input');
 
	 // decoding the received JSON and store into $obj variable.
	 $obj = json_decode($json,true);

     $updateA_id = $obj['updateA_id'];
     


	// $result= $con->query("update purchase set name='$pname' where p_id='$p_id'");


    $result= $con->query("delete from advertise where a_id='$updateA_id'");
	
    if($result){
				echo json_encode("Success");
			}
			else{
			   echo json_encode(mysqli_error($con)); // our query fail 		

                echo "Unsuccesfull";
			}


?>


