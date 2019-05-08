<?php 
error_reporting(0);
include 'DBConfig.php';

//    $conn = new mysqli($HostName, $HostUser, $HostPass, $DatabaseName);

	$json = file_get_contents('php://input');
 
	 // decoding the received JSON and store into $obj variable.
	 $obj = json_decode($json,true);

    $updateU_id = htmlspecialchars($obj['updateU_id']);
    $uname = htmlspecialchars($obj['uname']);
    $ukhundi = htmlspecialchars($obj['ukhundi']);
    $ucontact = htmlspecialchars($obj['ucontact']);
    $uusername = htmlspecialchars($obj['uusername']);
    $upass = $obj['upass'];
    $upassOld = $obj['upassOld'];
    $upassNew = $obj['upassNew'];
    $uroleValue = htmlspecialchars($obj['uroleValue']);

    $upassword = '';
    if(password_verify($upassOld,$upass)) {
      $upassword = password_hash($upassNew,PASSWORD_BCRYPT,["cost"=>7]);
   }
  else{
   $upassword = $upass;
  }


  $proceed = true;
  $field = array("$uname","$ukhundi","$ucontact","$uusername","$upass","$uroleValue");
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
   $result= $con->query("update census_users set name='$uname',khundi='$ukhundi',contact='$ucontact',username='$uusername',pass='$upassword',role='$uroleValue' where u_id='$updateU_id'");
	
    if($result){
				echo json_encode("Success");
			}
			else{
			   echo json_encode(mysqli_error($con)); // our query fail 		

                echo "Failed";
			}

      }

?>


