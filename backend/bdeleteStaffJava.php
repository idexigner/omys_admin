<?php 

include 'DBConfig.php';

//    $conn = new mysqli($HostName, $HostUser, $HostPass, $DatabaseName);

	$json = file_get_contents('php://input');
 
	 // decoding the received JSON and store into $obj variable.
	 $obj = json_decode($json,true);

     $updateU_id = $obj['updateU_id'];
     


	// $result= $con->query("update purchase set name='$pname' where p_id='$p_id'");


    $result= $con->query("delete from census_users where u_id='$updateU_id'");
	
    if($result){
				echo json_encode("Success");
			}
			else{
			   echo json_encode(mysqli_error($con)); // our query fail 		

                echo "Unsuccesfull";
			}


		
	

?>


