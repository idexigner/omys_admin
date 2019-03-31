<?php  
 function fetch_data()  
 {  
      $output = '';  
      include 'backend/DBConfig.php';
     // $connect = mysqli_connect("localhost", "root", "", "testing");  
      $sql = "SELECT * FROM census ";  
      $result = mysqli_query($con, $sql);  
      while($row = mysqli_fetch_array($result))  
      {       
        $output .= '<tr>  
                            <td>'.$row["s_id"].'</td>  
                            <td>'.$row["name"].'</td>  
                            <td>'.$row["gender"].'</td>  
                            <td>'.$row["khundi"].'</td>  
                            <td>'.$row["age"].'</td>  
                    </tr>  
                            ';  
      }  
      return $output;  
 }  
 if(isset($_POST["create_pdf"]))  
 {  
      require_once('TCPDF-master/tcpdf.php');  
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("Export HTML Table data to PDjF using TCPDF in PHP");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
     // $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
    //  $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '2', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '', 8);  
      $obj_pdf->AddPage(); 
      $obj_pdf->setJPEGQuality(100);

      $imgdata = base64_decode('iVBORw0KGgoAAAANSUhEUgAAABwAAAASCAMAAAB/2U7WAAAABlBMVEUAAAD///+l2Z/dAAAASUlEQVR4XqWQUQoAIAxC2/0vXZDrEX4IJTRkb7lobNUStXsB0jIXIAMSsQnWlsV+wULF4Avk9fLq2r8a5HSE35Q3eO2XP1A1wQkZSgETvDtKdQAAAABJRU5ErkJggg==');

// The '@' character is used to indicate that follows an image data stream and not an image file name
     // $obj_pdf->Image('@'.$imgdata);


     
 
      
      include 'backend/DBConfig.php';
     // $connect = mysqli_connect("localhost", "root", "", "testing");  
      $sql = "SELECT * FROM census ";  
      $result = mysqli_query($con, $sql); 
      $x=0;
      $count=0;
      while($row = mysqli_fetch_array($result))  
      { 
        $demo=$row['name'];
        $demo1=$row['fh_name'];
        $demo2=$row['khundi'];
        $demo3=$row['cnic'];
        $demo4=$row['dob'];
        $demo5=$row['bloodGrp'];
        $demo6=$row['address'];
        $demo7=$row['contact'];
        $demo8=$row['fh_contact'];
        
        
       
        $obj_pdf->Image('images/front.jpg', 5,5+$x, 90, 53, 'JPG', '#', '', true, 150, '', false, false, 1, false, false, false);

        $obj_pdf->Image('images/pic.jpg', 10, 24+$x, 20, 24, 'JPG', '#', '', true, 150, '', false, false, 1, false, false, false);

        $obj_pdf->SetFont('helvetica', '', 7);

        $obj_pdf->SetXY(51, 24.5+$x);
        $obj_pdf->Cell(0, 0, $demo, 0, 1, 'L', 0, '', 1);
        $obj_pdf->SetXY(51, 28+$x);
        $obj_pdf->Cell(0, 0, $demo1, 0, 1, 'L', 0, '', 1);
        $obj_pdf->SetXY(51, 31.5+$x);
        $obj_pdf->Cell(0, 0, $demo2, 0, 1, 'L', 0, '', 1);
        $obj_pdf->SetXY(51, 35+$x);
        $obj_pdf->Cell(0, 0, $demo3, 0, 1, 'L', 0, '', 1);
        $obj_pdf->SetXY(51, 38.5+$x);
        $obj_pdf->Cell(0, 0, $demo4, 0, 1, 'L', 0, '', 1);
        $obj_pdf->SetXY(51, 42+$x);
        $obj_pdf->Cell(0, 0, $demo5, 0, 1, 'L', 0, '', 1);
        // ';




        $obj_pdf->Image('images/back.jpg', 105, 5+$x, 90, 53, 'JPG', '#', '', true, 150, '', false, false, 1, false, false, false);

        $obj_pdf->Image('images/pic.jpg', 108, 8+$x, 11, 14, 'JPG', '#', '', true, 150, '', false, false, 1, false, false, false);

        $obj_pdf->SetXY(143, 7.5+$x);
        $obj_pdf->Cell(0, 0, $demo6, 0, 1, 'L', 0, '', 1);
        $obj_pdf->SetXY(143, 14.5+$x);
        $obj_pdf->Cell(0, 0, $demo7, 0, 1, 'L', 0, '', 1);
        $obj_pdf->SetXY(143, 18+$x);
        $obj_pdf->Cell(0, 0, $demo8, 0, 1, 'L', 0, '', 1);

        $count++;
        $x+=55;
        if(($count%5)===0)
        {
          $obj_pdf->AddPage(); 
          $x=0;
        }
      }
              $txt = 'Example of Text Annotation. Move your mouse overannotation text.';
      //$obj_pdf->Write(0, $txt, '', 0, 'L', true, 0, false, false, 0);

      //obj_pdf->centreImage('')
      $demo="check";
      $content = '';  
      $content .= '  
      <h3 align="center">Export HTML Table data to PDF using TCPDF in PHP</h3><br /><br />  
      <table  cellspacing="0" cellpadding="5">  
           <tr>  
                <th width="5%">ID</th>  
                <th width="30%">Name</th>  
                <th width="10%">Gender</th>  
                <th width="45%">Type</th>  
                <th width="10%">Age</th>  
           </tr>  
      ';  
      $content .= fetch_data();  
      $content .= '</table>';  
    $content2="<h3 style='margin:20 20 20 20'>My Name here</h3>
        <br>
        <p style='margin:20 30 30 30'>$demo</p>
    ";
    //$obj_pdf->writeHTML($content);  
    //$obj_pdf->writeHTML($content2); 
      $obj_pdf->Output('sample.pdf', 'I');  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Export HTML Table data to PDF using TCPDF in PHP</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />            
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:700px;">  
                <h3 align="center">Export HTML Table data to PDF using TCPDF in PHP</h3><br />  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="5%">ID</th>  
                               <th width="30%">Name</th>  
                               <th width="10%">Gender</th>  
                               <th width="45%">Designation</th>  
                               <th width="10%">Age</th>  
                          </tr>  
                     <?php  
                     echo fetch_data();  
                     ?>  
                     </table>  
                     <br />  
                     <form method="post">  
                          <input type="submit" name="create_pdf" class="btn btn-danger" value="Create PDF" />  
                     </form>  
                </div>  
           </div>  
      </body>  
 </html>  