<?php 
error_reporting(0);
include 'DBConfig.php';

//    $conn = new mysqli($HostName, $HostUser, $HostPass, $DatabaseName);

	$json = file_get_contents('php://input');
 
	 // decoding the received JSON and store into $obj variable.
	 $obj = json_decode($json,true);

     $s_id = htmlspecialchars($obj['s_id']);
     $sname = htmlspecialchars($obj['sname']);
     $updateDateOfBirth = htmlspecialchars($obj['updateDateOfBirth']);
     $sgender = htmlspecialchars($obj['sgender']);
     $scnic = htmlspecialchars($obj['scnic']);
     $skhundi = htmlspecialchars($obj['skhundi']);
     $sgroup = htmlspecialchars($obj['sgroup']);
    //  $sage = htmlspecialchars($obj['sage']);
     $somjCard = htmlspecialchars($obj['somjCard']);
     $sbirthPlace = htmlspecialchars($obj['sbirthPlace']);
     $somysCard = htmlspecialchars($obj['somysCard']);
     $semail = htmlspecialchars($obj['semail']);
     $scontact = htmlspecialchars($obj['scontact']);
     $swhatsapp = htmlspecialchars($obj['swhatsapp']);   
     $sresidentialAddress = htmlspecialchars($obj['sresidentialAddress']);
     $sarea = htmlspecialchars($obj['sarea']);
     $smaritualStatus = htmlspecialchars($obj['smaritualStatus']);
     $stu_occupation = htmlspecialchars($obj['stu_occupation']);
     $sfatherHusbandName = htmlspecialchars($obj['sfatherHusbandName']);
     $sfatherHusbandCnic = htmlspecialchars($obj['sfatherHusbandCnic']);
     $sfatherHusbandContact = htmlspecialchars($obj['sfatherHusbandContact']);
     $sfather_occupation = htmlspecialchars($obj['sfather_occupation']);
     $sfatherHusbandOmjCard = htmlspecialchars($obj['sfatherHusbandOmjCard']);
     $smotherName = htmlspecialchars($obj['smotherName']);
     $smotherCnic = htmlspecialchars($obj['smotherCnic']);
     $smotherContact = htmlspecialchars($obj['smotherContact']);
     $smother_occupation = htmlspecialchars($obj['smother_occupation']);
     $sbirthPlace = htmlspecialchars($obj['sbirthPlace']);
     $sbloodGroup = htmlspecialchars($obj['sbloodGroup']);
     $sadditionalSkills = htmlspecialchars($obj['sadditionalSkills']);
     $sotherSkill = htmlspecialchars($obj['sotherSkill']);
     $sinstituteName = htmlspecialchars($obj['sinstituteName']);
     $spresentClass = htmlspecialchars($obj['spresentClass']);
    //  $slastAchievement = htmlspecialchars($obj['slastAchievement']);
     $sfutureInterest = htmlspecialchars($obj['sfutureInterest']);
     $scompanyName = htmlspecialchars($obj['scompanyName']);
     $sofficeAddress = htmlspecialchars($obj['sofficeAddress']);
     $scurrentDesignation = htmlspecialchars($obj['scurrentDesignation']);
    //  $slastAchievementemp = htmlspecialchars($obj['slastAchievementemp']);   
     $sfutureInterestemp = htmlspecialchars($obj['sfutureInterestemp']);
     $shobbies = htmlspecialchars($obj['shobbies']);
     $sprofessionalAchievement = htmlspecialchars($obj['sprofessionalAchievement']);
     $spersonalAchievement = htmlspecialchars($obj['spersonalAchievement']);
     $ssportInterest = htmlspecialchars($obj['ssportInterest']);
     $sifStudent = htmlspecialchars($obj['sifStudent']);
     $sotherReason = htmlspecialchars($obj['sotherReason']);
     $somysMember = htmlspecialchars($obj['somysMember']);
     $sfatherMember = htmlspecialchars($obj['sfatherMember']);
     $academicStr = strip_tags(mysqli_real_escape_string($con,trim($obj['academicStr'])));
     $professionalStr = strip_tags(mysqli_real_escape_string($con,trim($obj['professionalStr'])));
     $imgName=$obj['imgName'];
     $edit=$obj['edit'];
     $print=$obj['print'];

    $proceed = true;
	$field = array("$sname","$updateDateOfBirth","$sgender","$scnic","$skhundi","$sgroup","$somjCard","$sbirthPlace","$somysCard","$semail","$scontact","$swhatsapp","$sresidentialAddress","$sarea","$smaritualStatus","$stu_occupation","$sfatherHusbandName","$sfatherHusbandCnic","$sfatherHusbandContact","$sfatherHusbandOmjCard","$sfather_occupation","$smotherName","$smotherCnic","$smotherContact","$smother_occupation","$sbloodGroup","$sadditionalSkills","$sotherSkill","$sinstituteName","$spresentClass","$futureInterest","$companyName","$officeAddress","$currentDesignation","$sfutureInterestemp","$shobbies","$sprofessionalAchievement","$spersonalAchievement","$ssportInterest","$sifStudent","$sotherReason","$somysMember","$sfatherMember");
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
    $result= $con->query("update census set name='$sname',dob='$updateDateOfBirth',gender='$sgender',cnic='$scnic',khundi='$skhundi',s_group='$sgroup',omj_card='$somjCard',birth_place='$sbirthPlace',omys_card='$somysCard',email='$semail',contact='$scontact',whatsapp='$swhatsapp',address='$sresidentialAddress',area='$sarea',status='$smaritualStatus',occupation='$stu_occupation',fh_name='$sfatherHusbandName',fh_cnic='$sfatherHusbandCnic',fh_contact='$sfatherHusbandContact',fh_occupation='$sfather_occupation',	fh_omjCard='$sfatherHusbandOmjCard',m_name='$smotherName',m_cnic='$smotherCnic',m_contact='$smotherContact',m_occupation='$smother_occupation',AQ='$academicStr',bloodGrp='$sbloodGroup',PQ='$professionalStr',addSkills='$sadditionalSkills',otherSkill='$sotherSkill',insName='$sinstituteName',presClass='$spresentClass',futInt='$sfutureInterest',cmpName='$scompanyName',offAdd='$sofficeAddress',currDesg='$scurrentDesignation',ebfutInt='$sfutureInterestemp',hobbies='$shobbies',profAch='$sprofessionalAchievement',persAch='$spersonalAchievement',sportsInt='$ssportInterest',leftEdu='$sifStudent',otherReason='$sotherReason',omysMember='$somysMember',fh_omysMember='$sfatherMember',imgName='$imgName', edit='$edit', print='$print' where s_id='$s_id'");
	
    if($result){
				echo json_encode("Success");
			}
			else{
			   echo json_encode(mysqli_error($con)); // our query fail 		

                echo "Failed";
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


