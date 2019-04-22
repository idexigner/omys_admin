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
      $obj_pdf->AddPage('L'); 
      $obj_pdf->setJPEGQuality(100);

      $imgdata = base64_decode('iVBORw0KGgoAAAANSUhEUgAAABwAAAASCAMAAAB/2U7WAAAABlBMVEUAAAD///+l2Z/dAAAASUlEQVR4XqWQUQoAIAxC2/0vXZDrEX4IJTRkb7lobNUStXsB0jIXIAMSsQnWlsV+wULF4Avk9fLq2r8a5HSE35Q3eO2XP1A1wQkZSgETvDtKdQAAAABJRU5ErkJggg==');

// The '@' character is used to indicate that follows an image data stream and not an image file name
     // $obj_pdf->Image('@'.$imgdata);


     $idText=$_POST["idText"];
 
      
      include 'backend/DBConfig.php';
      if($idText== ''){
        $sql = "SELECT * FROM census ";  

      }
      else{
        $sql = "SELECT * FROM census where s_id not in(".$idText.")";  
      }
     // $connect = mysqli_connect("localhost", "root", "", "testing");  
      
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
        $demo9=$row['imgName'];
        
        
       
        $obj_pdf->Image('images/front.jpg', 5,5+$x, 90, 53, 'JPG', '#', '', true, 150, '', false, false, 1, false, false, false);

        // $obj_pdf->Image('images/pic.jpg', 10, 24+$x, 20, 24, 'JPG', '#', '', true, 150, '', false, false, 1, false, false, false);
        $obj_pdf->Image('../omys_backend/uploads/images/'.$demo9.'.jpg', 108, 8+$x, 11, 14, 'JPG', '#', '', true, 150, '', false, false, 0, false, false, false);

        $obj_pdf->SetFont('helvetica', '', 7);

        $obj_pdf->SetXY(51, 24.5+$x);
        $obj_pdf->Cell(0, 0, $row['name'], 0, 1, 'L', 0, '', 1);
        $obj_pdf->SetXY(51, 28+$x);
        $obj_pdf->Cell(0, 0, $row['fh_name'], 0, 1, 'L', 0, '', 1);
        $obj_pdf->SetXY(51, 31.5+$x);
        $obj_pdf->Cell(0, 0, $row['khundi'], 0, 1, 'L', 0, '', 1);
        $obj_pdf->SetXY(51, 35+$x);
        $obj_pdf->Cell(0, 0, $demo3, 0, 1, 'L', 0, '', 1);
        $obj_pdf->SetXY(51, 38.5+$x);
        $obj_pdf->Cell(0, 0, $demo4, 0, 1, 'L', 0, '', 1);
        $obj_pdf->SetXY(51, 42+$x);
        $obj_pdf->Cell(0, 0, $demo5, 0, 1, 'L', 0, '', 1);
        // ';




        $obj_pdf->Image('images/back.jpg', 105, 5+$x, 90, 53, 'JPG', '#', '', true, 150, '', false, false, 1, false, false, false);

        // $obj_pdf->Image('images/pic.jpg', 108, 8+$x, 11, 14, 'JPG', '#', '', true, 150, '', false, false, 1, false, false, false);

        $obj_pdf->Image('../omys_backend/uploads/images/'.$demo9.'.jpg', 108, 8+$x, 11, 14, 'JPG', '#', '', true, 150, '', false, false, 0, false, false, false);
        // Sameer M Ashraf1281.134822173044
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
          $obj_pdf->AddPage('L'); 
          $x=0;
        }

        $obj_pdf->Image('images/front.jpg', 5,5+$x, 90, 53, 'JPG', '#', '', true, 150, '', false, false, 1, false, false, false);

        $obj_pdf->Image('images/pic.jpg', 10, 24+$x, 20, 24, 'JPG', '#', '', true, 150, '', false, false, 1, false, false, false);




        $obj_pdf->Image('images/back.jpg', 105, 5+$x, 90, 53, 'JPG', '#', '', true, 150, '', false, false, 1, false, false, false);

        $obj_pdf->Image('images/pic.jpg', 108, 8+$x, 11, 14, 'JPG', '#', '', true, 150, '', false, false, 1, false, false, false);


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
    ob_end_clean();
      $obj_pdf->Output('sample.pdf', 'I');  
 }  
 ?>  

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
    <style>
.pagination li:hover{
    cursor: pointer;
}


.pagination{display:inline-block;padding-left:0;margin:20px 0;border-radius:4px}.pagination>li{display:inline}.pagination>li>a,.pagination>li>span{position:relative;float:left;padding:6px 12px;margin-left:-1px;line-height:1.42857143;color:#337ab7;text-decoration:none;background-color:#fff;border:1px solid #ddd}.pagination>li:first-child>a,.pagination>li:first-child>span{margin-left:0;border-top-left-radius:4px;border-bottom-left-radius:4px}.pagination>li:last-child>a,.pagination>li:last-child>span{border-top-right-radius:4px;border-bottom-right-radius:4px}.pagination>li>a:focus,.pagination>li>a:hover,.pagination>li>span:focus,.pagination>li>span:hover{z-index:2;color:#23527c;background-color:#eee;border-color:#ddd}.pagination>.active>a,.pagination>.active>a:focus,.pagination>.active>a:hover,.pagination>.active>span,.pagination>.active>span:focus,.pagination>.active>span:hover{z-index:3;color:#fff;cursor:default;background-color:#337ab7;border-color:#337ab7}.pagination>.disabled>a,.pagination>.disabled>a:focus,.pagination>.disabled>a:hover,.pagination>.disabled>span,.pagination>.disabled>span:focus,.pagination>.disabled>span:hover{color:#777;cursor:not-allowed;background-color:#fff;border-color:#ddd}.pagination-lg>li>a,.pagination-lg>li>span{padding:10px 16px;font-size:18px;line-height:1.3333333}.pagination-lg>li:first-child>a,.pagination-lg>li:first-child>span{border-top-left-radius:6px;border-bottom-left-radius:6px}.pagination-lg>li:last-child>a,.pagination-lg>li:last-child>span{border-top-right-radius:6px;border-bottom-right-radius:6px}.pagination-sm>li>a,.pagination-sm>li>span{padding:5px 10px;font-size:12px;line-height:1.5}.pagination-sm>li:first-child>a,.pagination-sm>li:first-child>span{border-top-left-radius:3px;border-bottom-left-radius:3px}.pagination-sm>li:last-child>a,.pagination-sm>li:last-child>span{border-top-right-radius:3px;border-bottom-right-radius:3px}




</style>
    <style>
#camera {
  width: 100%;
  height: 550px;
}

</style>

</head>

<body class="animsition" >
    <div class="page-wrapper">
          <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo2.png" alt="Omys Admin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <?php include 'menuPrimary.php'?>
                       
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo2.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                    <?php include 'menuSecondary.php'?>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div id="reportPersonSelection">

                            </div><!--reportPersonSelection-->

                        </div><!-- row -->
                        <div class="row">
                           
                            
                        <form method="post">  
                        <input type="hidden" name="idText" id="idText"/>
                        <button type="button" class="btn btn-primary"  onclick="finalizeStudent();">Create Card</button>
                        <div id="createPdfSubmit" style="display:none;">
                          <input type="submit" name="create_pdf" id="create_pdf" class="btn btn-danger" value="Create PDF" />  
                        </div>
                        
                     </form>  
                     
                           
                            
                        </div>

                        <div  class="row">
                     <div class="col-md-5"></div>
                     <div class="col-md-5"></div>
                     <div class="col-md-2"><button type="button" class="btn btn-success"  onclick="checkUncheckAll();">Uncheck All</button></div>
                            
                        </div>




                   

                           
                          
                            





                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 OMYS. All rights reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div>
            
            </div><!-- main contetnt-->
           
        </div>

    </div>





  
			</div>













            <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
            <!-- <script src="js/webcam.min.js"></script> -->
            <script language="JavaScript">
   
        </script>
 

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
    <script src="js/app.js"></script>
    <script>
    window.onload=onLoadFunction('reportPrctc');
    </script>

</body>

</html>
<!-- end document-->
