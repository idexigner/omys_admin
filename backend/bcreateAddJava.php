<?php 
error_reporting(0);
include 'DBConfig.php';

//    $conn = new mysqli($HostName, $HostUser, $HostPass, $DatabaseName);

	$json = file_get_contents('php://input');
 
	 // decoding the received JSON and store into $obj variable.
	 $obj = json_decode($json,true);

     $title = htmlspecialchars($obj['title']);
    //  $name = $obj['name'];
     $discount = htmlspecialchars($obj['discount']);
     $address = htmlspecialchars($obj['address']);
     $expire = htmlspecialchars($obj['expire']);
     $sCatDropValue = htmlspecialchars($obj['sCatDropValue']);
     $imgName = htmlspecialchars($obj['imgName']);
     
     $proceed = true;
     $field = array("$title","$discount","$address","$expire","$sCatDropValue","$imgName");
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
     

	// $result= $con->query("update purchase set name='$pname' where p_id='$p_id'");
     if($proceed){

     
    $result = $con->query("insert into advertise(title,discount,address,expire,category,image) values('$title','$discount','$address','$expire','$sCatDropValue','$imgName')");
    
	
    if($result){
				echo json_encode($pass);
			}
			else{
			   echo json_encode(mysqli_error($con)); // our query fail 		

                echo "Failed";
            }
            
        }



?>


