<?php 

include 'DBConfig.php';
    
                        $photoName =  $_POST['imageNameUpload'];

                        $filetmp = $_FILES["imageUpload"]["tmp_name"];
                        $filename = $_FILES["imageUpload"]["name"];
                        $filetype = $_FILES["imageUpload"]["type"];
                       // $photoName=$name.rand(1000, 100000000);
                        $filepath = "../../omys_backend/uploads/images/".$photoName.".jpeg";
                        //$filepath = "photo/".$photoName.".jpg";
                        // rand(10, 30)
                        
                         move_uploaded_file($filetmp,$filepath);



                        
                        
                   

// include 'DBConfig.php';
// // Create connection

// $photoName =  $_POST['imageNameUpload'];
// $target_dir = "../../omys_backend/uploads/images/".$photoName.".jpeg";

// // $json = file_get_contents('php://input');
// // $obj = json_decode($json,true);
// // $rand = $obj['rand'];

// // if(file_exists($target_dir))
// // {
// //     mkdir($target_dir, 7777, true);
// // }
// // $imgName = rand() . '_' . time();
// //$imgName = $_GET["img"];
// // $imgName = $_POST['imageNameUpload'];

// // $target_dir = $target_dir . "/" .rand() . '_' . time() . ".jpeg";
// // $target_dir = $target_dir . "/" .$imgName. ".jpeg";
// move_uploaded_file($_FILES["imageUpload"]["tmp_name"], $target_dir);
// if(move_uploaded_file($_FILES["imageUpload"]["tmp_name"], $target_dir)){
//     echo json_encode([
//         "Message" => 1,
//         "Status" => "OK"
//     ]);

// } else {
//     echo json_encode([
//         "Message" => "Error uploading image because " + $_FILES["image"]["error"],
//         "Status" => "Error"
//     ]);
// }

// $upload_dir = "uploads/images/";

// if (is_dir($upload_dir) && is_writable($upload_dir)) {
//     // do upload logic here
// } else {
//     echo json_encode('Upload directory is not writable, or does not exist');
// }

?>
