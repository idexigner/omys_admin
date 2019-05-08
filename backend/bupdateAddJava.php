<?php 
error_reporting(0);
include 'DBConfig.php';

//    $conn = new mysqli($HostName, $HostUser, $HostPass, $DatabaseName);

	$json = file_get_contents('php://input');
 
	 // decoding the received JSON and store into $obj variable.
	 $obj = json_decode($json,true);

    $updateA_id = htmlspecialchars($obj['updateA_id']);
    $uTitle = htmlspecialchars($obj['uTitle']);
    $uDiscount = htmlspecialchars($obj['uDiscount']);
    $uAddress = htmlspecialchars($obj['uAddress']);
    $uDate = htmlspecialchars($obj['uDate']);
    $uCatValue = htmlspecialchars($obj['uCatValue']);
    $imgName = htmlspecialchars($obj['imgName']);



    $proceed = true;
     $field = array("$uTitle","$uDiscount","$uAddress","$uDate","$uCatValue","$imgName");
     $words = array("<",";","like","update","img","error");
     
     for($i=0 ; $i<sizeof($field); $i++){
         for($j=0 ; $j<sizeof($words) ; $j++){
             if(strpos($field[$i],$words[$j]) !== false){
                 $proceed = false;
                 echo json_encode('invalid');
                 break;break;
             }
         }
     }


     if($proceed){
   $result= $con->query("update advertise set title='$uTitle',discount='$uDiscount',address='$uAddress',expire='$uDate',category='$uCatValue',image='$imgName' where a_id='$updateA_id'");
	
    if($result){
				echo json_encode("Success");
			}
			else{
			   echo json_encode(mysqli_error($con)); // our query fail 		

                echo "Failed";
			}


      }
?>


