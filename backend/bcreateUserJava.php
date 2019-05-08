<?php 
error_reporting(0);
include 'DBConfig.php';

//    $conn = new mysqli($HostName, $HostUser, $HostPass, $DatabaseName);

	$json = file_get_contents('php://input');
 
	 // decoding the received JSON and store into $obj variable.
	 $obj = json_decode($json,true);

     $date = htmlspecialchars($obj['date']);
     $name = htmlspecialchars($obj['name']);
     $dateOfBirth = htmlspecialchars($obj['dateOfBirth']);
     $gender = htmlspecialchars($obj['gender']);
     $cnic = htmlspecialchars($obj['cnic']);
     $khundi = htmlspecialchars($obj['khundi']);
     $group = htmlspecialchars($obj['group']);
   //  $age = htmlspecialchars($obj['age']);
     $omjCard = htmlspecialchars($obj['omjCard']);
     $birthPlace = htmlspecialchars($obj['birthPlace']);
     $omysCard = htmlspecialchars($obj['omysCard']);
     $email = htmlspecialchars($obj['email']);
     $contact = htmlspecialchars($obj['contact']);
     $whatsapp = htmlspecialchars($obj['whatsapp']);
     $residentialAddress = htmlspecialchars($obj['residentialAddress']);   
     $area = htmlspecialchars($obj['area']);   
     $maritualStatus = htmlspecialchars($obj['maritualStatus']);
     $stu_occupation = htmlspecialchars($obj['stu_occupation']);
     $fatherHusbandName = htmlspecialchars($obj['fatherHusbandName']);
     $fatherHusbandCnic = htmlspecialchars($obj['fatherHusbandCnic']);
     $fatherHusbandContact = htmlspecialchars($obj['fatherHusbandContact']);
     $fatherHusbandOmjCard = htmlspecialchars($obj['fatherHusbandOmjCard']);
     $father_occupation = htmlspecialchars($obj['father_occupation']);
     $motherName = htmlspecialchars($obj['motherName']);
     $motherCnic = htmlspecialchars($obj['motherCnic']);
     $motherContact = htmlspecialchars($obj['motherContact']);
     $mother_occupation = htmlspecialchars($obj['mother_occupation']);
     $bloodGroup = htmlspecialchars($obj['bloodGroup']);
     $additionalSkills = htmlspecialchars($obj['additionalSkills']);
     $otherSkill = htmlspecialchars($obj['otherSkill']);
     $instituteName = htmlspecialchars($obj['instituteName']);
     $presentClass = htmlspecialchars($obj['presentClass']);
    // $lastAchievement = htmlspecialchars($obj['lastAchievement']);
     $futureInterest = htmlspecialchars($obj['futureInterest']);
     $companyName = htmlspecialchars($obj['companyName']);
     $officeAddress = htmlspecialchars($obj['officeAddress']);
     $currentDesignation = htmlspecialchars($obj['currentDesignation']);   
   //  $lastAchievementemp = htmlspecialchars($obj['lastAchievementemp']);
     $futureInterestemp = htmlspecialchars($obj['futureInterestemp']);     
     $hobbies = htmlspecialchars($obj['hobbies']);
     $professionalAchievement = htmlspecialchars($obj['professionalAchievement']);
     $personalAchievement = htmlspecialchars($obj['personalAchievement']);
     $sportInterest = htmlspecialchars($obj['sportInterest']);
     $ifStudent = htmlspecialchars($obj['ifStudent']);
     $otherReason = htmlspecialchars($obj['otherReason']);
     $omysMember = htmlspecialchars($obj['omysMember']);
     $fatherMember = htmlspecialchars($obj['fatherMember']);
     $academicStr = strip_tags(mysqli_real_escape_string($con,trim($obj['academicStr'])));
     $professionalStr = strip_tags(mysqli_real_escape_string($con,trim($obj['professionalStr'])));
     $imgName= htmlspecialchars($obj['imgName']);
     $cardNumber= htmlspecialchars($obj['cardNumber']);
     $user_id = htmlspecialchars($obj['user_id']);

    $proceed = true;
    $field = array("$date","$name","$dateOfBirth","$gender","$cnic","$khundi","$group","$omjCard","$birthPlace","$omysCard","$email","$contact","$whatsapp","$residentialAddress","$area","$maritualStatus","$stu_occupation","$fatherHusbandName","$fatherHusbandCnic","$fatherHusbandContact","$fatherHusbandOmjCard","$father_occupation","$motherName","$motherCnic","$motherContact","$mother_occupation","$bloodGroup","$additionalSkills","$otherSkill","$instituteName","$presentClass","$futureInterest","$companyName","$officeAddress","$currentDesignation","$futureInterestemp","$hobbies","$professionalAchievement","$personalAchievement","$sportInterest","$ifStudent","$otherReason","$omysMember","$fatherMember","$imgName","$cardNumber","$user_id");
    $words = array("<",";","like","update","img","error");
    $fields = array("$date","$dateOfBirth","$gender","$khundi","$companyName");
    for($i=0 ; $i<sizeof($field); $i++){
      for($j=0 ; $j<sizeof($words) ; $j++){
        if(strpos($field[$i],$words[$j]) !== false){
          $proceed = false;
          echo    json_encode('invalid');
          break;break;
        }
      }
    }

	// $result= $con->query("update purchase set name='$pname' where p_id='$p_id'");
    if($proceed){

    
    $result = $con->query("insert into census(date,name,dob,gender,cnic,khundi,s_group,omj_card,birth_place,omys_card,email,contact,whatsapp,address,area,status,occupation,fh_name,fh_cnic,fh_contact,fh_omjCard,fh_occupation,m_name,m_cnic,m_contact,m_occupation,AQ,bloodGrp,PQ,addSkills,otherSkill,insName,presClass,futInt,cmpName,offAdd,currDesg,ebfutInt,hobbies,profAch,persAch,sportsInt,leftEdu,otherReason,omysMember,fh_omysMember,imgName,cardNumber,u_id) values ('$date','$name','$dateOfBirth','$gender','$cnic','$khundi','$group','$omjCard','$birthPlace','$omysCard','$email','$contact','$whatsapp','$residentialAddress','$area','$maritualStatus','$stu_occupation','$fatherHusbandName','$fatherHusbandCnic','$fatherHusbandContact','$fatherHusbandOmjCard','$father_occupation','$motherName','$motherCnic','$motherContact','$mother_occupation','$academicStr','$bloodGroup','$professionalStr','$additionalSkills','$otherSkill','$instituteName','$presentClass','$futureInterest','$companyName','$officeAddress','$currentDesignation','$futureInterestemp','$hobbies','$professionalAchievement','$personalAchievement','$sportInterest','$ifStudent','$otherReason','$omysMember','$fatherMember','$imgName','$cardNumber','$user_id')");

    if($result){
				echo json_encode("Success");
			}
			else{
			   echo json_encode(mysqli_error($con)); // our query fail 		

                echo "assad";
			}
    }

		// if($result->num_rows>0){

        //     while($row[] = $result->fetch_assoc()) {

        //         $tem = $row;
                
        //         $json = json_encode($tem);
                
        //         }
        //         echo $json;	
		// }
		// else
		// {		
		//     echo  json_encode('No Update'); // alert msg in react native

		// }
	

?>


