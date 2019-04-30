<?php 
error_reporting(0);
include 'DBConfig.php';
    
                        $photoName =  $_POST['imageAddNameUpload'];

                        $filetmp = $_FILES["imageAddUpload"]["tmp_name"];
                        $filename = $_FILES["imageAddUpload"]["name"];
                        $filetype = $_FILES["imageAddUpload"]["type"];
                       // $photoName=$name.rand(1000, 100000000);
                        $filepath = "../../omys_backend/advertise/".$photoName.".jpeg";
                        
                         move_uploaded_file($filetmp,$filepath);




?>
