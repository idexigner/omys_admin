<?php 
error_reporting(0);
include 'DBConfig.php';

//    $conn = new mysqli($HostName, $HostUser, $HostPass, $DatabaseName);

	$json = file_get_contents('php://input');
 
	 // decoding the received JSON and store into $obj variable.
	 $obj = json_decode($json,true);

     $name = htmlspecialchars($obj['name']);
    //  $name = $obj['name'];
     $khundi = htmlspecialchars($obj['khundi']);
     $contact = htmlspecialchars($obj['contact']);
     $username = htmlspecialchars($obj['username']);
     $pass = htmlspecialchars($obj['pass']);

     $password= password_hash($pass,PASSWORD_BCRYPT,["cost"=>7]);
     $sroleDropValue = $obj['sroleDropValue'];
    
    $proceed = true;
	$field = array("$name","$khundi","$contact","$username","$pass","$sroleDropValue");
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

    
    $result = $con->query("insert into census_users(name,khundi,contact,username,pass,role) values('$name','$khundi','$contact','$username','$password','$sroleDropValue')");
    
    if($result){
				echo json_encode($pass);
			}
			else{
			   echo json_encode(mysqli_error($con)); // our query fail 		

                echo "Failed";
            }
            

    }


?>


