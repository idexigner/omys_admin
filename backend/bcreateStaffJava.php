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
    
     

	// $result= $con->query("update purchase set name='$pname' where p_id='$p_id'");

    $result = $con->query("insert into census_users(name,khundi,contact,username,pass,role) values('$name','$khundi','$contact','$username','$password','$sroleDropValue')");
    //$result= $con->query("insert into census (name,dob,gender,cnic,khundi,s_group,age,omj_card,birth_place,omys_card,email,contact,whatsapp,address,status,occupation,fh_name,fh_cnic,fh_contact,fh_occupation,m_name,m_cnic,m_contact,m_occupation,AQ,bloodGrp,PQ,addSkills,insName,presClass,lastAch,futInt,cmpName,offAdd,currDesg,ebLastAch,ebfutInt,hobbies,profAch,persAch,sportsInt,leftEdu,omysMember,fh_omysMember) values ('$name','$dateOfBirth','$gender','$cnic','$khundi','$group','$age','$omjCard','$birthPlace','$omysCard','$email','$contact','$whatsapp','$residentialAddress','$maritualStatus','$stu_occupation','$fatherHusbandName','$fatherHusbandCnic','$fatherHusbandContact','$father_occupation','$motherName','$motherCnic','$motherContact','$mother_occupation','$academicStr','$bloodGroup','$professionalStr','$additionalSkills','$instituteName','$presentClass','$lastAchievement','$futureInterest','$companyName','$officeAddress','$currentDesignation','$lastAchievementemp','$futureInterestemp',$hobbies','$professionalAchievement','$personalAchievement','$sportInterest','$ifStudent','$omysMember','$fatherMember')");
	
    if($result){
				echo json_encode($pass);
			}
			else{
			   echo json_encode(mysqli_error($con)); // our query fail 		

                echo "Failed";
			}



?>


