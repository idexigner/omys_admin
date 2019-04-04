<?php  
 //pagination.php  
 include 'DBConfig.php';
//  $Api="http://omysstudent.com/omys_admin/";
 $Api = "http://localhost/omys_admin/";



if($_POST['receive'] == 'pagin'){
            //$record_per_page = 150;
        $record_per_page =$_POST['record'];
        
        $page = '';  
        $output = '';  
        if(isset($_POST["page"]))  
        {  
            $page = $_POST["page"];  
        }  
        else  
        {  
            $page = 1;  
        }  
        $start_from = ($page - 1)*$record_per_page;  

        // $column=$_POST['column'];
        // $search='%'.$_POST['search'].'%';
        //  echo $search;
         $start_from = $_POST['start'];
        //
        // $query = "SELECT * FROM census where s_id between $start_from and $record_per_page ORDER BY s_id "; 
         $query = "SELECT * FROM census where s_id between $start_from and $record_per_page ORDER BY edit desc,s_id "; 
         //$query = "SELECT * FROM census ORDER BY s_id desc LIMIT $start_from, $record_per_page"; 
        // $query = "SELECT * FROM census ORDER BY s_id DESC LIMIT 1,326";  
}
else{
            $record_per_page = 400;
            //  $record_per_page =$_POST['record'];
            
            $page = '';  
            $output = '';  
            if(isset($_POST["page"]))  
            {  
                $page = $_POST["page"];  
            }  
            else  
            {  
                $page = 1;  
            }  
            $start_from = ($page - 1)*$record_per_page;  
            
            $column=$_POST['column'];
            $search='%'.$_POST['search'].'%';
            //  echo $search;
            //  $start_from = $_POST['start'];
            if($column == 'name'){
            
            $query = "SELECT * FROM census where name like '$search' ORDER BY edit desc,s_id"; 
            }
            else if ($column == 'khundi'){
                $query = "SELECT * FROM census where khundi like '$search' ORDER BY edit desc,s_id"; 
            }
            else if ($column == 'contact'){
                $query = "SELECT * FROM census where contact like '$search' ORDER BY edit desc,s_id"; 
            }
            else if ($column == 'fh_name'){
                $query = "SELECT * FROM census where fh_name like '$search' ORDER BY edit desc,s_id"; 
            }
            else if ($column == 'address'){
                $query = "SELECT * FROM census where address like '$search' ORDER BY edit desc,s_id"; 
            }
            else if ($column == 'area'){
                $query = "SELECT * FROM census where area like '$search' ORDER BY edit desc,s_id"; 
            }
            
            //  $query = "SELECT * FROM census ORDER BY s_id  LIMIT $start_from, $record_per_page"; 
            // $query = "SELECT * FROM census ORDER BY s_id DESC LIMIT 1,326";   

}
// id='tablePhp'
 $result = mysqli_query($con, $query);  
 $output .= "  <div class='table-responsive' >
      <table class='table table-border table-striped table-earning' id='tableStu'>  
           <tr>  
           th>Stu ID</th>
           <th>Name</th>
           <th>Dob</th>
           <th>Gender</th>
           <th>Cnic</th>
           <th>Khundi</th>
           <th>Group</th>
           
           <th>Omj_Card</th>
           <th>Birth Place</th>
           <th>Omys_Card</th>
           <th>Email</th>
           <th>Contact</th>
           <th>Whatsapp</th>
           <th>Address</th>
           <th>Area</th>
           <th>Maritual Status</th>
           <th>Student Occupation</th>
           <th>Father Name</th>
           <th>Father CNIC</th>
           <th>Father Contact</th>
           <th>Father OMJ Card No</th>
           <th>Father Occupation</th>
           <th>Mother Name</th>
           <th>Mother CNIC</th>
           <th>Mother Contact</th>
           <th>Mother Occupation</th>
           <th>Academic Qualification</th>
           <th>Starting Year AQ</th>
           <th>Ending Year AQ</th>
           <th>Blood group</th>
           <th>Professional Qualification</th>
           <th>Starting Year PQ</th>
           <th>Ending Year PQ</th>
           <th>Additional Skill</th>
           <th>Other Additional Skill</th>
           <th>Institute Name</th>
           <th>Present Class</th>
          
           <th>Future Interest</th>
           <th>Company Name</th>
           <th>Office Address</th>
           <th>Current Designation</th>
           
           <th>Future Interest</th>
           <th>Hobbies</th>
           <th>Professional Acievement</th>
           <th>Personal Achievement</th>
           <th>Sports Interest</th>
           <th>Left Education</th>
           <th>Other Reason</th>
           <th>OMYS Member</th>
           <th>Father OMYS Member</th>
           <th>cardNumber</th> 
        
           </tr>  
          
 ";  
//  $row["s_id"]   <th>Image</th>
$asd='123123123132';
$countLoop = 0;
 while($row = mysqli_fetch_array($result))  
 {  
     
    if($row["imgName"] != ''){
        $img=$Api.'../omys_backend/uploads/images/'.rawurlencode($row["imgName"]).'.jpeg';
        $imgName=$row["s_id"]."-".$row["name"];
   }else{
        $img ='';
        $imgName='';
   }



    $stu_occ= substr($row["occupation"],2,strlen($row["occupation"])-4);
      $aq=$row["AQ"];
      $pq=$row["PQ"];
      $addSkill=$row["addSkills"];
      $aqTable = substr($aq,6,strpos($aq,'admYear')-strpos($aq,'aq')-6);
      $aqTable = str_replace("\"","",$aqTable);
      $aqTable = str_replace(":","",$aqTable);
      $aqStrtYr = substr($aq,strpos($aq,'admYear')+9,strpos($aq,'comYear')-strpos($aq,'admYear')-11);
      $aqStrtYr = str_replace("\"","",$aqStrtYr);
      $aqEndYr = substr($aq,strpos($aq,'comYear')+9,strlen($aq)-strpos($aq,'comYear')-12);
      $aqEndYr = str_replace("\"","",$aqEndYr);

      $pqTable = substr($pq,6,strpos($pq,'admYear')-strpos($pq,'pq')-6);
      $pqTable = str_replace("\"","",$pqTable);
      $pqTable = str_replace(":","",$pqTable);
      $pqStrtYr = substr($pq,strpos($pq,'admYear')+9,strpos($pq,'comYear')-strpos($pq,'admYear')-11);
      $pqStrtYr = str_replace("\"","",$pqStrtYr);
      $pqEndYr = substr($pq,strpos($pq,'comYear')+9,strlen($pq)-strpos($pq,'comYear')-12);
      $pqEndYr = str_replace("\"","",$pqEndYr);


      if($addSkill === '[]'){
           $addSkill='';
      }
      else{
           $addSkill = substr($addSkill,2,strlen($addSkill)-3);
           $addSkill = str_replace("\"","",$addSkill);
      }







      $editColor='';

      if($row["edit"]==='edited'){
          
          $editColor='#69FF7E';
      }
      else{
          $editColor='#FFFFFF';
      }
      $output .= '  
      
      <tr onClick="loadStudentMod('.$row["s_id"].')" style="background-color:'.$editColor.'" >
      <td>'.$row["s_id"].'</td>
      <td>'.$row["name"].'</td>
      <td>'.$row["dob"].'</td>
      <td>'.$row["gender"].'</td>
      <td>'.$row["cnic"].'</td>
      <td>'.$row["khundi"].'</td>
      <td>'.$row["s_group"].'</td>
      
      <td>'.$row["omj_card"].'</td>
      <td>'.$row["birth_place"].'</td>
      <td>'.$row["omys_card"].'</td>
      <td>'.$row["email"].'</td>
      <td>'.$row["contact"].'</td>
      <td>'.$row["whatsapp"].'</td>
      <td>'.$row["address"].'</td>
      <td>'.$row["area"].'</td>
      <td>'.$row["status"].'</td>
      <td>'.str_replace("\"","",$stu_occ).'</td>
      <td>'.$row["fh_name"].'</td>
      <td>'.$row["fh_cnic"].'</td>
      <td>'.$row["fh_contact"].'</td>
      <td>'.$row["fh_omjCard"].'</td>
      <td>'.$row["fh_occupation"].'</td>
      <td>'.$row["m_name"].'</td>
      <td>'.$row["m_cnic"].'</td>
      <td>'.$row["m_contact"].'</td>
      <td>'.$row["m_occupation"].'</td>
      <td>'.$aqTable.'</td>
      <td>'.$aqStrtYr.'</td>
      <td>'.$aqEndYr.'</td>
      <td>'.$row["bloodGrp"].'</td>
      <td>'.$pqTable.'</td>
      <td>'.$pqStrtYr.'</td>
      <td>'.$pqEndYr.'</td>
      <td>'.$addSkill.'</td>
      <td>'.$row["otherSkill"].'</td>
      <td>'.$row["insName"].'</td>
      <td>'.$row["presClass"].'</td>
      
      <td>'.$row["futInt"].'</td>
      <td>'.$row["cmpName"].'</td>
      <td>'.$row["offAdd"].'</td>
      <td>'.$row["currDesg"].'</td>
      
      <td>'.$row["ebfutInt"].'</td>
      <td>'.$row["hobbies"].'</td>
      <td>'.$row["profAch"].'</td>
      <td>'.$row["persAch"].'</td>
      <td>'.$row["sportsInt"].'</td>
      <td>'.$row["leftEdu"].'</td>
      <td>'.$row["otherReason"].'</td>
      <td>'.$row["omysMember"].'</td>
      <td>'.$row["fh_omysMember"].'</td>
      <td>'.$row["cardNumber"].'</td>
      <input type="text" id="imgLink'.$countLoop.'" value="'.$img.'"  style="display:none;"/>
      <input type="text" id="imgName'.$countLoop.'" value="'.$imgName.'"  style="display:none;"/>  

  </tr>

           
      ';  
      $countLoop++;
 }  
 $output .= '</table></div><br /><div align="center">';  
 $output .= '<input type="text" id="countLoop" value="'.$countLoop.'" style="display:none;">';
 $page_query = "SELECT * FROM census ORDER BY s_id DESC";  
 $page_result = mysqli_query($con, $page_query);  
 $total_records = mysqli_num_rows($page_result);  
 $total_pages = ceil($total_records/$record_per_page);  
 for($i=1; $i<=$total_pages; $i++)  
 {  
      $output .= "<span class='pagination_link' style='cursor:pointer; padding:6px; border:1px solid #ccc;' id='".$i."'>".$i."</span>";  
 }  
 $output .= '</div><br /><br />';  
 echo $output;  
 ?>  