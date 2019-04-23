<?php

 
error_reporting(0);


    if(isset($_POST['udpate'])){
       

        // echo "<script type='text/javascript'>console.log('under');</script>";

        $studentIdInput =  $_POST['studentIdInput'];
        $name =  $_POST['sname'];
        $dateOfBirth = $_POST['sday']."/". $_POST['smonth']."/".$_POST['syear'];
        $gender =  $_POST['sgender'];
        $cnic =  $_POST['scnic'];
        $khundi =  $_POST['skhundi'];
        $group =  $_POST['sgroup'];
        $age =  $_POST['sage'];
        $omjCard =  $_POST['somjCard'];
        $birthPlace =  $_POST['sbirthPlace'];
        $omysCard =  $_POST['somysCard'];
        $email =  $_POST['semail'];
        $contact =  $_POST['scontact'];
        $whatsapp =  $_POST['swhatsapp'];
        $residentialAddress =  $_POST['sresidentialAddress'];


        $maritualStatus =  $_POST['smaritualStatus'];
        $stu_occupation =  $_POST['sstu_occupation'];
        $fatherHusbandName =  $_POST['sfatherHusbandName'];
        $fatherHusbandCnic =  $_POST['sfatherHusbandCnic'];
        $fatherHusbandContact =  $_POST['sfatherHusbandContact'];
        $father_occupation =  $_POST['sfather_occupation'];

        $motherName =  $_POST['smotherName'];
        $motherdCnic =  $_POST['smotherdCnic'];
        $motherContact =  $_POST['smotherContact'];
        $mother_occupation =  $_POST['smother_occupation'];

        //aq
        $bloodGroup =  $_POST['sbloodGroup'];
        $father_occupation =  $_POST['sfather_occupation'];

        
       
        if( $_POST['sadditionalSkills'] !== null || $_POST['sadditionalSkills'] !=='')
        {
            
            $additionalSkills =  implode(',', $_POST['sadditionalSkills']);
        }
        $instituteName =  $_POST['sinstituteName'];
        
        $presentClass =  $_POST['spresentClass'];
        $lastAchievement =  $_POST['slastAchievement'];
        $futureInterest =  $_POST['sfutureInterest'];
        $companyName =  $_POST['scompanyName'];
        $officeAddress =  $_POST['sofficeAddress'];

        $currentDesignation =  $_POST['scurrentDesignation'];
        $lastAchievementemp =  $_POST['slastAchievementemp'];
        $futureInterestemp =  $_POST['sfutureInterestemp'];
        $hobbies =  $_POST['shobbies'];
        $professionalAchievement =  $_POST['sprofessionalAchievement'];

        $personalAchievement =  $_POST['spersonalAchievement'];
        $sportInterest =  $_POST['ssportInterest'];
        $ifStudent =  $_POST['sifStudent'];
        $otherReason =  $_POST['sotherReason'];
        $omysMember =  $_POST['somysMember'];
        $fatherMember =  $_POST['sfatherMember'];

    //    $filetmp = $_FILES["imageUpload"]["tmp_name"];
    //                 $filename = $_FILES["imageUpload"]["name"];
    //                 $filetype = $_FILES["imageUpload"]["type"];
    //                 $photoName=$name.rand(1000, 100000000);
    //                 $filepath = "photo/".$photoName.".jpg";
    //                 // rand(10, 30)
                    
    //                 move_uploaded_file($filetmp,$filepath);
                    
                    // $sql = "INSERT INTO upload_img (img_name,img_path,img_type) VALUES ('$filename','$filepath','$filetype')";
                    // $result = mysql_query($sql);




                    include 'DBConfig.php';
                 
                    $query="update census set name='$name',dob='$dateOfBirth',gender='$gender',cnic='$cnic',khundi='$khundi',s_group='$group',age='$age',omj_card='$omjCard',birth_place='$birthPlace',omys_card='$omysCard',email='$email',contact='$contact',whatsapp='$whatsapp',address='$residentialAddress',status='$maritualStatus',occupation='$stu_occupation',fh_name='$fatherHusbandName',fh_cnic='$fatherHusbandCnic',fh_contact='$fatherHusbandContact',fh_occupation='$father_occupation',m_name='$motherName',m_cnic='$motherdCnic',m_contact='$motherContact',m_occupation='$mother_occupation',bloodGrp='$bloodGroup',addSkills='$additionalSkills',insName='$instituteName',presClass='$presentClass',lastAch='$lastAchievement',futInt='$futureInterest',cmpName='$companyName',offAdd='$officeAddress',currDesg='$currentDesignation',ebLastAch='$lastAchievementemp',ebfutInt='$futureInterestemp',hobbies='$hobbies',profAch='$professionalAchievement',persAch='$personalAchievement',sportsInt='$sportInterest',leftEdu='$ifStudent',omysMember='$omysMember',fh_omysMember='$fatherMember' where s_id='$studentIdInput'";
            // }

           
        
       
        
        if(mysqli_query($con,$query)){
            // echo "Data inserted";
            // echo $floor;
            // $message="Successfully Inserted";
            // echo "<script type='text/javascript'>alert('Successfully Inserted');</script>";
            // echo "<script type='text/javascript'>console.log('Sucasdcessfully Inserted');</script>";
            // sleep(2);
            // $msg='Successfull';
            // header("Location:../domain.php?msg=".$msg);
            // header("Location:../index.php");
            // var url= "http://1sourceestate.com"; 
            // window.location = url; 

            // header("Location: http://1sourceestate.com");
            // die();
header("Location:../viewUser.php");
            // header("http://1sourceestate.com");
            // if(preg_match('/^[\w]+$/', $String)){
            //      header("Location:../domain.php");
            // }
            // else{
            //     $msg='Invalid Domainss';
            // header("Location:../domain.php?msg=".$msg);

            // }
           
            

        }
        else{
             echo "Data failed";
            //  header("Location: http://1sourceestate.com");
            // die();
            
            //  echo $floor;
            //   $msg='Invalid Domains';
        //    header("Location:../index.php");
// header("Location:../viewUser.php");
            // exit();
            //  $message="Data Failed to Insert";
            //  
            // echo "<script type='text/javascript'>alert('Data Failed to Insert');</script>";
            //
        }

    }



    if(isset($_POST['delete'])){

        $studentIdInput =  $_POST['studentIdInput'];

         include 'DBConfig.php';
                 
        $query2="delete from census where s_id='$studentIdInput'";


         if(mysqli_query($con,$query2)){
            // echo "Deleted";
            header("Location:../viewUser.php");
         }
         else{
             echo "Data failed";
            //  header("Location:../viewUser.php");
         }





    }



?>