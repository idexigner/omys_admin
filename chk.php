<?php 
include 'DBConfig.php';
// Create connection
$conn = new mysqli($HostName, $HostUser, $HostPass, $DatabaseName);

	$json = file_get_contents('php://input');
 
	 // decoding the received JSON and store into $obj variable.
	 $obj = json_decode($json,true);
	 

	 //retrieving data from react states states
	$name = htmlspecialchars($obj['name']);
	$dob = htmlspecialchars($obj['dob']);
	$gender = htmlspecialchars($obj['gender']);
	$cnic = htmlspecialchars($obj['cnic']);
	$khundi = htmlspecialchars($obj['khundi']);
	$group = htmlspecialchars($obj['group']);
	$age = htmlspecialchars($obj['age']);
	$omj_card = htmlspecialchars($obj['omj_card']);
	$birth_place = htmlspecialchars($obj['birth_place']);
	$omys_card = htmlspecialchars($obj['omys_card']);
	$email = htmlspecialchars($obj['email']);
	$contact = htmlspecialchars($obj['contact']);
	$whatsapp = htmlspecialchars($obj['whatsapp']);
	$address = htmlspecialchars($obj['address']);
	$area = htmlspecialchars($obj['area']);
	$status = htmlspecialchars($obj['status']);
	$occupation = htmlspecialchars($obj['occupation']);
	$fh_name = htmlspecialchars($obj['fh_name']);
	$fh_cnic = htmlspecialchars($obj['fh_cnic']);
	$fh_contact = htmlspecialchars($obj['fh_contact']);
	$fh_omjCard = htmlspecialchars($obj['fh_omjCard']);
	$fh_occupation = htmlspecialchars($obj['fh_occupation']);
	$m_name = htmlspecialchars($obj['m_name']);
	$m_cnic = htmlspecialchars($obj['m_cnic']);
	$m_contact = htmlspecialchars($obj['m_contact']);
	$m_occupation = htmlspecialchars($obj['m_occupation']);

	$AQ = $obj['AQ']; 
	// $arrayAQ = serialize([$AQ]);
	$bloodGrp = htmlspecialchars($obj['bloodGrp']);
	$PQ = $obj['PQ']; 
	// $arrayPQ = serialize([$PQ]);
	$addSkills = htmlspecialchars($obj['addSkills']); 
	// $arrayAddSkills = serialize([$addSkills]);

	$insName = htmlspecialchars($obj['insName']);
    $presClass = htmlspecialchars($obj['presClass']);
    //$lastAch = htmlspecialchars($obj['lastAch']);
	$futInt = htmlspecialchars($obj['futInt']);
	
	$cmpName = htmlspecialchars($obj['cmpName']);
    $offAdd = htmlspecialchars($obj['offAdd']);
	$currDesg = htmlspecialchars($obj['currDesg']);
    //$ebLastAch = htmlspecialchars($obj['ebLastAch']);
	$ebfutInt = htmlspecialchars($obj['ebfutInt']);

	$hobbies = htmlspecialchars($obj['hobbies']);
    $profAch = htmlspecialchars($obj['profAch']);
	$persAch = htmlspecialchars($obj['persAch']);
	$sportsInt = htmlspecialchars($obj['sportsInt']);
	
	$leftEdu = htmlspecialchars($obj['leftEdu']);
	$otherReason = htmlspecialchars($obj['otherReason']);

	$omysMember = htmlspecialchars($obj['omysMember']);
	$fh_omysMember = htmlspecialchars($obj['fh_omysMember']);

	$imgName = htmlspecialchars($obj['imgName']);
	$cardNumber = htmlspecialchars($obj['cardNumber']);

	// echo json_encode($otherReason);
	$proceed = true;
	$field = array("$name","$dob","$gender","$cnic","$khundi","$group","$age","$omj_card","$birth_place","$omys_card","$email","$contact","$whatsapp","$address","$area","$status","$occupation","$fh_name","$fh_cnic","$fh_contact","$fh_omjCard","$fh_occupation","$m_name","$m_cnic","$m_contact","$m_occupation","$bloodGrp","$addSkills","$insName","$presClass","$futInt","$cmpName","$offAdd","$currDesg","$ebfutInt","$hobbies","$profAch","$persAch","$sportsInt","$leftEdu","$otherReason","$omysMember","$fh_omysMember","$cardNumber");
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
		$add = $conn->query("INSERT INTO `census` (`name`, `dob`, `gender`, `cnic`, `khundi`, `s_group`, `omj_card`, `birth_place`, `omys_card`, `email`, `contact`, `whatsapp`, `address`, `area`,`status`, `occupation`, `fh_name`, `fh_cnic`, `fh_contact`,`fh_omjCard`, `fh_occupation`, `m_name`, `m_cnic`, `m_contact`, `m_occupation`, `AQ`, `bloodGrp`, `PQ`, `addSkills`, `insName`, `presClass`,  `futInt`, `cmpName`,`offAdd`,`currDesg`,`ebfutInt`, `hobbies`, `profAch`, `persAch`, `sportsInt`, `leftEdu`,`otherReason`, `omysMember`, `fh_omysMember`, `imgName`,`cardNumber`,`s_id`,`u_id`) VALUES ('$name', '$dob', '$gender', '$cnic', '$khundi', '$group', '$omj_card', '$birth_place', '$omys_card', '$email', '$contact', '$whatsapp', '$address', '$area' , '$status', '$occupation', '$fh_name', '$fh_cnic', '$fh_contact','$fh_omjCard', '$fh_occupation', '$m_name', '$m_cnic', '$m_contact', '$m_occupation', '$AQ', '$bloodGrp', '$PQ', '$addSkills', '$insName', '$presClass', '$futInt', '$cmpName', '$offAdd', '$currDesg', '$ebfutInt', '$hobbies', '$profAch', '$persAch', '$sportsInt', '$leftEdu','$otherReason', '$omysMember', '$fh_omysMember','$imgName','$cardNumber',NULL,'47');");
			
			if($add){
				echo  json_encode('Form Submitted Successfully'); // alert msg in react native
			}
			else{
				echo json_encode("Error");
			   echo json_encode(mysqli_error($conn)); // our query fail 		
            }
            
        }
	
?>