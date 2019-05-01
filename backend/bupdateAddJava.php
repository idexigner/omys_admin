<?php 
error_reporting(0);
include 'DBConfig.php';

//    $conn = new mysqli($HostName, $HostUser, $HostPass, $DatabaseName);

	$json = file_get_contents('php://input');
 
	 // decoding the received JSON and store into $obj variable.
	 $obj = json_decode($json,true);

    $updateA_id = $obj['updateA_id'];
    $uTitle = $obj['uTitle'];
    $uDiscount = $obj['uDiscount'];
    $uAddress = $obj['uAddress'];
    $uDate = $obj['uDate'];
    $uCatValue = $obj['uCatValue'];
    $imgName = $obj['imgName'];



   $result= $con->query("update advertise set title='$uTitle',discount='$uDiscount',address='$uAddress',expire='$uDate',category='$uCatValue',image='$imgName' where a_id='$updateA_id'");
	
    if($result){
				echo json_encode("Success");
			}
			else{
			   echo json_encode(mysqli_error($con)); // our query fail 		

                echo "Failed";
			}



?>


