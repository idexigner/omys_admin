<?php
error_reporting(0);
// session_start();
include('DBConfig.php');	


$json = file_get_contents('php://input');
 
	 // decoding the received JSON and store into $obj variable.
	 $obj = json_decode($json,true);

	 $username = $obj['username'];
	 $password = $obj['pass'];
// $username = $_POST['username'];
// $password = $_POST['password'];
	

    //  $pass= password_hash($password,PASSWORD_BCRYPT,["cost"=>7]);


	// $pre_stmt = $con->prepare("select * from census_users where username = ? ");
	// $pre_stmt->bind_param("s",$username);
	// $pre_stmt->execute();
	// $result = $pre_stmt->get_result();
	$proceed = true;
	$field = array("$username","$password");
	$words = array("<",";","like","update","img","error");
	
	// 
	// 
	for($i=0 ; $i<sizeof($field); $i++){
		for($j=0 ; $j<sizeof($words) ; $j++){
			if(strpos($field[$i],$words[$j]) !== false){
				$proceed = false;
				echo json_encode('invalid');
				break;break;
			}
		}
	}

	// if (strpos($username, '<') !== false || strpos($password, '<') !== false || strpos($username, ';') !== false || strpos($password, ';') !== false ) {
	// 	echo json_encode('goog');	
		
	// }
	if($proceed){

	$username = strip_tags(mysqli_real_escape_string($con,trim($username)));
	$password = strip_tags(mysqli_real_escape_string($con,trim($password)));

	$username = htmlspecialchars($username);
	$password= htmlspecialchars($password);

	$query = "select * from census_users where username='".$username."'";
	// $result= $con->query("select * from census_users where username='$username'");


	$tbl = mysqli_query($con,$query);
	if(mysqli_num_rows($tbl)>0){
		$row = mysqli_fetch_array($tbl);
		$password_hash = $row['pass'];

		// print_r($row);
		 if(password_verify($password,$password_hash)){

			$tem = $row;

			session_start();
			$_SESSION['username'] = $username;
			$_SESSION['password'] = $password;
		
			$json = json_encode($tem);
			echo $json;	
		 }
	}
	else{
		echo json_encode('Wrong Details');	
	}
}

// echo json_encode('last');
	// $result= $con->query("select * from census_users where username = '$username' and pass = '$password'");
	
// $result= $conn->query("SELECT * FROM users where username='$username' and password='$password'");
	
	// if($result->num_rows==0){
	// 	echo json_encode('Wrong Details');				
	// }
	// else{		
	// // //  echo $result->fetch_assoc();	

	// while($row[] = $result->fetch_assoc()) {
	// // 	print_r($row['pass']);
	// 	// $hash = password_hash($row['pass'])
	// 	if(password_verify($password,$row['pass'])){
	// 		// echo "<pre>";
	// 		// echo $row;
	// 		// echo "</pre>";
	// 		// echo '<pre>';
	// 		// print_r($row[0]);
	// 		// echo '</pre>';

	// 		// echo $row;
	// 		$tem = $row;
		
	// 		$json = json_encode($tem);
			
	// 	}
	// 	else{
	// 		$tem = $row;
		
	// 		$json = json_encode("Hi");
	// 		//echo $json;	
	// 	}
		
	// 	echo $json;	
		
	// 	}	
		
	// }
		


	// while($row[] = $result->fetch_assoc()) {

	// 	$tem = $row;
		
	// 	$json = json_encode($tem);
		
		
	// 	}	
	// 	echo $json;	
	// }
?>