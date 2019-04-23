<?php 
error_reporting(0);
include 'DBConfig.php';

//    $conn = new mysqli($HostName, $HostUser, $HostPass, $DatabaseName);

	$json = file_get_contents('php://input');
 
	 // decoding the received JSON and store into $obj variable.
	 $obj = json_decode($json,true);

     $date = $obj['date'];
     $name = $obj['name'];
     $dateOfBirth = $obj['dateOfBirth'];
     $gender = $obj['gender'];
     $cnic = $obj['cnic'];
     $khundi = $obj['khundi'];
     $group = $obj['group'];
   //  $age = $obj['age'];
     $omjCard = $obj['omjCard'];
     $birthPlace = $obj['birthPlace'];
     $omysCard = $obj['omysCard'];
     $email = $obj['email'];
     $contact = $obj['contact'];
     $whatsapp = $obj['whatsapp'];
     $residentialAddress = $obj['residentialAddress'];   
     $area = $obj['area'];   
     $maritualStatus = $obj['maritualStatus'];
     $stu_occupation = $obj['stu_occupation'];
     $fatherHusbandName = $obj['fatherHusbandName'];
     $fatherHusbandCnic = $obj['fatherHusbandCnic'];
     $fatherHusbandContact = $obj['fatherHusbandContact'];
     $fatherHusbandOmjCard = $obj['fatherHusbandOmjCard'];
     $father_occupation = $obj['father_occupation'];
     $motherName = $obj['motherName'];
     $motherCnic = $obj['motherCnic'];
     $motherContact = $obj['motherContact'];
     $mother_occupation = $obj['mother_occupation'];
     $bloodGroup = $obj['bloodGroup'];
     $additionalSkills = $obj['additionalSkills'];
     $otherSkill = $obj['otherSkill'];
     $instituteName = $obj['instituteName'];
     $presentClass = $obj['presentClass'];
    // $lastAchievement = $obj['lastAchievement'];
     $futureInterest = $obj['futureInterest'];
     $companyName = $obj['companyName'];
     $officeAddress = $obj['officeAddress'];
     $currentDesignation = $obj['currentDesignation'];   
   //  $lastAchievementemp = $obj['lastAchievementemp'];
     $futureInterestemp = $obj['futureInterestemp'];     
     $hobbies = $obj['hobbies'];
     $professionalAchievement = $obj['professionalAchievement'];
     $personalAchievement = $obj['personalAchievement'];
     $sportInterest = $obj['sportInterest'];
     $ifStudent = $obj['ifStudent'];
     $otherReason = $obj['otherReason'];
     $omysMember = $obj['omysMember'];
     $fatherMember = $obj['fatherMember'];
     $academicStr = $obj['academicStr'];
     $professionalStr = $obj['professionalStr'];
     $imgName=$obj['imgName'];
     $cardNumber=$obj['cardNumber'];
     $user_id = $obj['user_id'];

	// $result= $con->query("update purchase set name='$pname' where p_id='$p_id'");

    $result = $con->query("insert into census(date,name,dob,gender,cnic,khundi,s_group,omj_card,birth_place,omys_card,email,contact,whatsapp,address,area,status,occupation,fh_name,fh_cnic,fh_contact,fh_omjCard,fh_occupation,m_name,m_cnic,m_contact,m_occupation,AQ,bloodGrp,PQ,addSkills,otherSkill,insName,presClass,futInt,cmpName,offAdd,currDesg,ebfutInt,hobbies,profAch,persAch,sportsInt,leftEdu,otherReason,omysMember,fh_omysMember,imgName,cardNumber,u_id) values ('$date','$name','$dateOfBirth','$gender','$cnic','$khundi','$group','$omjCard','$birthPlace','$omysCard','$email','$contact','$whatsapp','$residentialAddress','$area','$maritualStatus','$stu_occupation','$fatherHusbandName','$fatherHusbandCnic','$fatherHusbandContact','$fatherHusbandOmjCard','$father_occupation','$motherName','$motherCnic','$motherContact','$mother_occupation','$academicStr','$bloodGroup','$professionalStr','$additionalSkills','$otherSkill','$instituteName','$presentClass','$futureInterest','$companyName','$officeAddress','$currentDesignation','$futureInterestemp','$hobbies','$professionalAchievement','$personalAchievement','$sportInterest','$ifStudent','$otherReason','$omysMember','$fatherMember','$imgName','$cardNumber','$user_id')");

    if($result){
				echo json_encode("Success");
			}
			else{
			   echo json_encode(mysqli_error($con)); // our query fail 		

                echo "assad";
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


