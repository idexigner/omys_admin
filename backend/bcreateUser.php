<?php
error_reporting(0);
 
echo "<script type='text/javascript'>console.log('bahir');</script>";


    // if(isset($_POST['submit'])){
        //  echo "reached";


        
       






        $aqDummyCount =  $_POST['aqDummyCount'];
        if($aqDummyCount !== '0')
        {
        $academicStr='[';

// $_POST['day']."/". $_POST['month']."/".$_POST['year'];

        for($i=0; $i<$aqDummyCount;$i++){
            $s1='aq'.($i+1);
            $s2='admYear'.($i+1);
            $s3='comYear'.($i+1);

            $aq=$_POST[$s1];
            $admYear=$_POST[$s2];
            $comYear=$_POST[$s3];


            // \" [{"aq":"Primary","admYear":"2012","comYear":"In progress"}]


            // [{"aq":"Matric","admYear":"2010","comYear":"2012"},{"aq":"Intermediate","admYear":"2012","comYear":"2014"}]

            // $academicStr=$academicStr."{".$aq.",".$admYear.",".$comYear."}";  

             $academicStr=$academicStr."{\"aq\":\"".$aq."\",\"admYear\":\"".$admYear."\",\"comYear\":\"".$comYear."\"}";  

            if($aqDummyCount>=2){
                $academicStr=$academicStr.",";
            }

            // echo "<script type='text/javascript'>console.log($s2);</script>";          

        }

        $academicStr=$academicStr."]";

        }
        else{
            $academicStr="";
        }







        $pqDummyCount =  $_POST['pqDummyCount'];

        if($pqDummyCount !== '0')
        {
        $professionalStr='[';

// $_POST['day']."/". $_POST['month']."/".$_POST['year'];

        for($i=0; $i<$aqDummyCount;$i++){
            $s1p='pq'.($i+1);
            $s2p='admYearpq'.($i+1);
            $s3p='comYearpq'.($i+1);

            $pq=$_POST[$s1p];
            $admYearp=$_POST[$s2p];
            $comYearp=$_POST[$s3p];


            // \" [{"aq":"Primary","admYear":"2012","comYear":"In progress"}]

            // [{"pq":"Engineer","admYear":"In future","comYear":"Air Force"}]
            // [{"aq":"Matric","admYear":"2010","comYear":"2012"},{"aq":"Intermediate","admYear":"2012","comYear":"2014"}]

            // $academicStr=$academicStr."{".$aq.",".$admYear.",".$comYear."}";  

             $professionalStr=$professionalStr."{\"pq\":\"".$pq."\",\"admYear\":\"".$admYearp."\",\"comYear\":\"".$comYearp."\"}";  

            if($pqDummyCount>=2){
                $professionalStr=$professionalStr.",";
            }

            // echo "<script type='text/javascript'>console.log($s2);</script>";          

        }

        $professionalStr=$professionalStr."]";

        }else{
             $professionalStr='';
        }

        // echo $academicStr;

        
        //  echo "<script type='text/javascript'>console.log('Hello');</script>";
        //  echo "<script type='text/javascript'>console.log($academicStr);</script>";
         
        //  echo "<script type='text/javascript'>alert($academicStr);</script>";

    //     $myArrayaq = []; 

    //     class Aq
    //     {
    //         public $aq;
    //         public $admYear;
    //         public $comYear;
    //     }


    //     $aq1=$_POST['aq1'];
    //     $admYear1=$_POST['admYear1'];
    //    $comYear1=$_POST['comYear1'];

    //     $obj=new Aq();

    //         $obj->aq=$aq1;
    //         $obj->admYear=$admYear1;
    //         $obj->comYear=$comYear1;

    //         $myArrayaq[]=$obj;



    //          $aq2=$_POST['aq2'];
    //     $admYear2=$_POST['admYear2'];
    //    $comYear2=$_POST['comYear2'];

    //     $obj2=new Aq();

    //         $obj2->aq=$aq2;
    //         $obj2->admYear=$admYear2;
    //         $obj2->comYear=$comYear2;

    //         $myArrayaq[]=$obj2;





        // for($i=0;$i<$aqDummyCount;$i++){
        //     $aql=$_POST['aq'.$i+1];
        //     $admYearl=$_POST['admYear'.$i+1];
        //     $comYearl=$_POST['comYear'.$i+1];

        //     $obj=new Aq();

        //     $obj->aq=$aql;
        //     $obj->admYear=$admYearl;
        //     $obj->comYear=$comYearl;

        //     $myArrayaq[]=$obj;
        // }

        // $str =  implode(',', $myArrayaq);

        // $str=json_encode($myArrayaq);
        // $str2= strin(',', $str);




// echo "<script type='text/javascript'>console.log('Hello');</script>";
        // echo "<script type='text/javascript'>console.log($str);</script>";


        // echo "<script type='text/javascript'>console.log('Hello2');</script>";

        // echo "<script type='text/javascript'>console.log($str2);</script>";
        

        // $myCar = new Aq();
        // $myCar->color = 'red';
        // $myCar->type = 'sedan';

        // $yourCar = new Car();
        // $yourCar->color = 'blue';
        // $yourCar->type = 'suv';

        // $cars = array($myCar, $yourCar);

        // foreach ($cars as $car) {
        //     echo 'This car is a ' . $car->color . ' ' . $car->type . "\n";
        // }


        echo "<script type='text/javascript'>console.log('under');</script>";


        $name =  $_POST['name'];
        $dateOfBirth = $_POST['day']."/". $_POST['month']."/".$_POST['year'];
        $gender =  $_POST['gender'];
        $cnic =  $_POST['cnic'];
        $khundi =  $_POST['khundi'];
        $group =  $_POST['group'];
        $age =  $_POST['age'];
        $omjCard =  $_POST['omjCard'];
        $birthPlace =  $_POST['birthPlace'];
        $omysCard =  $_POST['omysCard'];
        $email =  $_POST['email'];
        $contact =  $_POST['contact'];
        $whatsapp =  $_POST['whatsapp'];
        $residentialAddress =  $_POST['residentialAddress'];


        $maritualStatus =  $_POST['maritualStatus'];
        $stu_occupation =  $_POST['stu_occupation'];
        $fatherHusbandName =  $_POST['fatherHusbandName'];
        $fatherHusbandCnic =  $_POST['fatherHusbandCnic'];
        $fatherHusbandContact =  $_POST['fatherHusbandContact'];
        $father_occupation =  $_POST['father_occupation'];

        $motherName =  $_POST['motherName'];
        $motherdCnic =  $_POST['motherdCnic'];
        $motherContact =  $_POST['motherContact'];
        $mother_occupation =  $_POST['mother_occupation'];

        //aq
        $bloodGroup =  $_POST['bloodGroup'];
        $father_occupation =  $_POST['father_occupation'];

        
        // if($_POST['floor']===null){
        //         $floor =  mysql_real_escape_string(implode(',', $_POST['floor']));
        // }else{
        //     $floor='nu';
        // }

        if( $_POST['additionalSkills'] !== null || $_POST['additionalSkills'] !=='')
        {
            echo "<script type='text/javascript'>console.log('Check box k under');</script>";
            $additionalSkills =  implode(',', $_POST['additionalSkills']);
        }
        $instituteName =  $_POST['instituteName'];
        
        $presentClass =  $_POST['presentClass'];
        $lastAchievement =  $_POST['lastAchievement'];
        $futureInterest =  $_POST['futureInterest'];
        $companyName =  $_POST['companyName'];
        $officeAddress =  $_POST['officeAddress'];

        $currentDesignation =  $_POST['currentDesignation'];
        $lastAchievementemp =  $_POST['lastAchievementemp'];
        $futureInterestemp =  $_POST['futureInterestemp'];
        $hobbies =  $_POST['hobbies'];
        $professionalAchievement =  $_POST['professionalAchievement'];

        $personalAchievement =  $_POST['personalAchievement'];
        $sportInterest =  $_POST['sportInterest'];
        $ifStudent =  $_POST['ifStudent'];
        $otherReason =  $_POST['otherReason'];
        $omysMember =  $_POST['omysMember'];
        $fatherMember =  $_POST['fatherMember'];



        // $pages_array = array(
        //     array(
        //         'slug' => 'index',
        //         'title' => 'Site Index',
        //         'template' => 'interior'
        //     ),

        //     array(
        //         'slug' => 'a',
        //         'title' => '100% Wide (Layout A)',
        //         'template' => 'interior'
        //     ),

        //     array(
        //         'slug' => 'homepage',
        //         'title' => 'Homepage',
        //         'template' => 'homepage'
        //     )
        // );

// echo "<script type='text/javascript'>console.log('$pages_array');</script>";




    //    if($type==='other'){
    //         $type =  $_POST['typeOther'];         
    //     }


    //   echo trim($domain);
    //    $run=true;
                // if(empty($domain)){
                //     $run=false;
                //     $msg='Empty';

                // }else if(preg_match('/[#!@%12345678890$%^&*()+=\-\[\]\';,.\/{}|":<>?~\\\\]/', $domain) ){
                //     // /\\d/
                //     //'/^[\w]+$/'
                //     // [#!@%12345678890$%^&*()+=\-\[\]\';,.\/{}|":<>?~\\\\]
                //     $run=false;
                //     $msg='Invalid';
                // }   
                    
            //         if(empty($domain)){
                    
            // }
            // else{
                // if($run === true){

                    // session_start();
                    if($_POST['imageChecking']==='1'){
                        $filetmp = $_FILES["imageUpload"]["tmp_name"];
                        $filename = $_FILES["imageUpload"]["name"];
                        $filetype = $_FILES["imageUpload"]["type"];
                        $photoName=$name.rand(1000, 100000000);
                        $filepath = "photo/".$photoName.".jpg";
                        // rand(10, 30)
                        
                        move_uploaded_file($filetmp,$filepath);
                       
                    }
                    else if($_POST['imageChecking']==='2'){

                        $img = $_POST['image'];
                        $folderPath = "photo/";
                    
                        $image_parts = explode(";base64,", $img);
                        $image_type_aux = explode("image/", $image_parts[0]);
                        $image_type = $image_type_aux[1];
                    
                        $image_base64 = base64_decode($image_parts[1]);
                        $photoName = $name.rand(1000, 100000000). '.jpg';
                        // $fileName = uniqid() . '.jpg';
                    
                        $file = $folderPath . $photoName;
                        file_put_contents($file, $image_base64);
                    
                        //print_r($fileName);
                    
                    }else{
                        $photoName = '';
                    }
                  //  echo $photoName;
                    // print_r($photoName); 
                    // $sql = "INSERT INTO upload_img (img_name,img_path,img_type) VALUES ('$filename','$filepath','$filetype')";
                    // $result = mysql_query($sql);




                    include 'DBConfig.php';
                    // $con = mysqli_connect("localhost","root","","crime_management_system");
                    // $query= "insert into purchase(name , phone , careOf , ranges , societyName , type , nature , area , areaUnit , payment , downPayment , schedulePayment , monthlyPayment , floor , floorOther , room , roomOther , otherDetail , nearby , otherFacilities , healthFacilities) values('$name','$phoneNumber','$careOf','$range',' $societyName','$type','$nature','$area','$areaDrop','$payment',' $down','$schedulePeriod','$monthly','$floor','$floorOther',' $room','$roomOther','$oherDetails','$nearby','$otherFacilites','$healthFacilites')";

                     $query = "insert into census (name,dob,gender,cnic,khundi,s_group,age,omj_card,birth_place,omys_card,email,contact,whatsapp,address,status,occupation,fh_name,fh_cnic,fh_contact,fh_occupation,m_name,m_cnic,m_contact,m_occupation,AQ,bloodGrp,PQ,addSkills,insName,presClass,lastAch,futInt,cmpName,offAdd,currDesg,ebLastAch,ebfutInt,hobbies,profAch,persAch,sportsInt,leftEdu,omysMember,fh_omysMember,imgName) values ('$name','$dateOfBirth','$gender','$cnic','$khundi','$group','$age','$omjCard','$birthPlace','$omysCard','$email','$contact','$whatsapp','$residentialAddress','$maritualStatus','$stu_occupation','$fatherHusbandName','$fatherHusbandCnic','$fatherHusbandContact','$father_occupation','$motherName','$motherdCnic','$motherContact','$mother_occupation','$academicStr','$bloodGroup','$professionalStr','$additionalSkills','$instituteName','$presentClass','$lastAchievement','$futureInterest','$companyName','$officeAddress','$currentDesignation','$lastAchievementemp','$futureInterestemp','$hobbies','$professionalAchievement','$personalAchievement','$sportInterest','$ifStudent','$omysMember','$fatherMember','$photoName')";
            // }

           
        
       
        
        if(mysqli_query($con,$query)){
            echo "Data inserted";
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
            
            // header("Location:../domain.php");
            // exit();
            //  $message="Data Failed to Insert";
            //  
            // echo "<script type='text/javascript'>alert('Data Failed to Insert');</script>";
            //
        }

        // mysql_query("");


// create TABLE tbl_create_emergency(id int primary key AUTO_INCREMENT, locationTitle varchar(255), locationAddress varchar(255),
// locationType varchar(255),severity varchar(255), landlordName varchar(255), landlordContact varchar(255), latitude varchar(255), 
// longitude varchar(255))

    // }


    // function ContainsNumbers($String){
    // return preg_match('/^[\w]+$/', $String) > 0;


   


?>