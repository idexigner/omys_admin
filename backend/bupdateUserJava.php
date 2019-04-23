<?php 
error_reporting(0);
include 'DBConfig.php';

//    $conn = new mysqli($HostName, $HostUser, $HostPass, $DatabaseName);

	$json = file_get_contents('php://input');
 
	 // decoding the received JSON and store into $obj variable.
	 $obj = json_decode($json,true);

     $s_id = $obj['s_id'];
     $sname = $obj['sname'];
     $updateDateOfBirth = $obj['updateDateOfBirth'];
     $sgender = $obj['sgender'];
     $scnic = $obj['scnic'];
     $skhundi = $obj['skhundi'];
     $sgroup = $obj['sgroup'];
    //  $sage = $obj['sage'];
     $somjCard = $obj['somjCard'];
     $sbirthPlace = $obj['sbirthPlace'];
     $somysCard = $obj['somysCard'];
     $semail = $obj['semail'];
     $scontact = $obj['scontact'];
     $swhatsapp = $obj['swhatsapp'];   
     $sresidentialAddress = $obj['sresidentialAddress'];
     $sarea = $obj['sarea'];
     $smaritualStatus = $obj['smaritualStatus'];
     $stu_occupation = $obj['stu_occupation'];
     $sfatherHusbandName = $obj['sfatherHusbandName'];
     $sfatherHusbandCnic = $obj['sfatherHusbandCnic'];
     $sfatherHusbandContact = $obj['sfatherHusbandContact'];
     $sfather_occupation = $obj['sfather_occupation'];
     $sfatherHusbandOmjCard = $obj['sfatherHusbandOmjCard'];
     $smotherName = $obj['smotherName'];
     $smotherCnic = $obj['smotherCnic'];
     $smotherContact = $obj['smotherContact'];
     $smother_occupation = $obj['smother_occupation'];
     $sbirthPlace = $obj['sbirthPlace'];
     $sbloodGroup = $obj['sbloodGroup'];
     $sadditionalSkills = $obj['sadditionalSkills'];
     $sotherSkill = $obj['sotherSkill'];
     $sinstituteName = $obj['sinstituteName'];
     $spresentClass = $obj['spresentClass'];
    //  $slastAchievement = $obj['slastAchievement'];
     $sfutureInterest = $obj['sfutureInterest'];
     $scompanyName = $obj['scompanyName'];
     $sofficeAddress = $obj['sofficeAddress'];
     $scurrentDesignation = $obj['scurrentDesignation'];
    //  $slastAchievementemp = $obj['slastAchievementemp'];   
     $sfutureInterestemp = $obj['sfutureInterestemp'];
     $shobbies = $obj['shobbies'];
     $sprofessionalAchievement = $obj['sprofessionalAchievement'];
     $spersonalAchievement = $obj['spersonalAchievement'];
     $ssportInterest = $obj['ssportInterest'];
     $sifStudent = $obj['sifStudent'];
     $sotherReason = $obj['sotherReason'];
     $somysMember = $obj['somysMember'];
     $sfatherMember = $obj['sfatherMember'];
     $academicStr = $obj['academicStr'];
     $professionalStr = $obj['professionalStr'];
     $imgName=$obj['imgName'];
     $edit=$obj['edit'];
     $print=$obj['print'];


	// $result= $con->query("update purchase set name='$pname' where p_id='$p_id'");


    $result= $con->query("update census set name='$sname',dob='$updateDateOfBirth',gender='$sgender',cnic='$scnic',khundi='$skhundi',s_group='$sgroup',omj_card='$somjCard',birth_place='$sbirthPlace',omys_card='$somysCard',email='$semail',contact='$scontact',whatsapp='$swhatsapp',address='$sresidentialAddress',area='$sarea',status='$smaritualStatus',occupation='$stu_occupation',fh_name='$sfatherHusbandName',fh_cnic='$sfatherHusbandCnic',fh_contact='$sfatherHusbandContact',fh_occupation='$sfather_occupation',	fh_omjCard='$sfatherHusbandOmjCard',m_name='$smotherName',m_cnic='$smotherCnic',m_contact='$smotherContact',m_occupation='$smother_occupation',AQ='$academicStr',bloodGrp='$sbloodGroup',PQ='$professionalStr',addSkills='$sadditionalSkills',otherSkill='$sotherSkill',insName='$sinstituteName',presClass='$spresentClass',futInt='$sfutureInterest',cmpName='$scompanyName',offAdd='$sofficeAddress',currDesg='$scurrentDesignation',ebfutInt='$sfutureInterestemp',hobbies='$shobbies',profAch='$sprofessionalAchievement',persAch='$spersonalAchievement',sportsInt='$ssportInterest',leftEdu='$sifStudent',otherReason='$sotherReason',omysMember='$somysMember',fh_omysMember='$sfatherMember',imgName='$imgName', edit='$edit', print='$print' where s_id='$s_id'");
	
    if($result){
				echo json_encode("Success");
			}
			else{
			   echo json_encode(mysqli_error($con)); // our query fail 		

                echo "Failed";
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


