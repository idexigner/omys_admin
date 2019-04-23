<?php 
error_reporting(0);
include 'DBConfig.php';


	 $json = file_get_contents('php://input');
	 $obj = json_decode($json,true);

     $status = $obj['status'];
     $u_id = $obj['u_id'];
	 $date = $obj['date'];
	 $u_name = $obj['u_name'];


    $result = $con->query("insert into logs (u_id,log_name,date,status) values('$u_id','$u_name','$date','$status')");

    if($result){
				echo json_encode("Success");
			}
			else{
			   echo json_encode(mysqli_error($con)); // our query fail 		

                echo "assad";
			}
?>

