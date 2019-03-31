<?php
require('../fpdf17/fpdf.php');

//db connection
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'omys');

//get invoices data
$query = mysqli_query($con,"select * from census where s_id = '".$_GET['s_id']."'");
$invoice = mysqli_fetch_array($query);

//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm

$pdf = new FPDF('P','mm','A4');

$pdf->AddPage();

//set font to arial, bold, 14pt
$pdf->SetFont('Arial','B',14);

//Cell(width , height , text , border , end line , [align] )


$pdf->Cell(130	,5,'OMYS STUDENT CENSUS',0,0);
$pdf->Cell(59	,5,'DETAILS',0,1);//end of line

//set font to arial, regular, 12pt
$pdf->SetFont('Arial','',12);

$address = "Address: ".$invoice['address'];
$pdf->Cell(130	,5,$address,0,0);
$pdf->Cell(59	,5,'',0,1);//end of line

$birth_place = "Birth Place: ".$invoice['birth_place'];
$pdf->Cell(130	,5,$birth_place,0,0);
$pdf->Cell(25	,5,'Name: ',0,0);
$pdf->Cell(34	,5,$invoice['name'],0,1);//end of line

$contact = "Phone: ".$invoice['contact'];
$pdf->Cell(130	,5,$contact,0,0);
$pdf->Cell(25	,5,'Invoice #: ',0,0);
$pdf->Cell(34	,5,$invoice['s_id'],0,1);//end of line

$cnic = "CNIC: ".$invoice['cnic'];
$pdf->Cell(130	,5,$cnic,0,0);
$pdf->Cell(25	,5,'Gender: ',0,0);
$pdf->Cell(34	,5,$invoice['gender'],0,1);//end of line

//make a dummy empty cell as a vertical spacer
$pdf->Cell(189	,10,'',0,1);//end of line

$pdf->SetFont('Arial','B',14);
//billing address
$pdf->Cell(100	,5,'Academic Qualifications',0,1);//end of line
$pdf->SetFont('Arial','',12);


// while($item = mysqli_fetch_array($query)){
//         //add dummy cell at beginning of each line for indentation
//         $pdf->Cell(10	,5,'-',0,0);
//         $pdf->Cell(90	,5,'AQ',0,1);

//         $pdf->Cell(10	,5,'',0,0);
//         $pdf->Cell(90	,5,'Start Date',0,1);

//         $pdf->Cell(10	,5,'',0,0);
//         $pdf->Cell(90	,5,'End Date',0,1);
//     }

$AQ = (array) json_decode($invoice['AQ']);

if(is_array($AQ)){
    foreach($AQ as $bar) {      
        // echo $bar->{'aq'};
        $AQval = "Name - ".$bar->{'aq'};
        $AQstart = "Admission Year - ".$bar->{'admYear'};
        $AQend = "Completion Year -  ".$bar->{'comYear'};

        $pdf->Cell(10	,5,'-',0,0);
        $pdf->Cell(90	,5,$AQval,0,1);

        $pdf->Cell(10	,5,'',0,0);
        $pdf->Cell(90	,5,$AQstart,0,1);

        $pdf->Cell(10	,5,'',0,0);
        $pdf->Cell(90	,5,$AQend,0,1);
      }
} 








//make a dummy empty cell as a vertical spacer
$pdf->Cell(189	,10,'',0,1);//end of line

//invoice contents
$pdf->SetFont('Arial','B',12);

$pdf->Cell(94.5	,5,'Description',1,0);
$pdf->Cell(94.5	,5,'Details',1,1);

$pdf->SetFont('Arial','',12);

$pdf->Cell(94.5	,5,'S Group',1,0);
$pdf->Cell(94.5	,5,$invoice['s_group'],1,1);

$pdf->Cell(94.5	,5,'Omj Card',1,0);
$pdf->Cell(94.5	,5,$invoice['omj_card'],1,1);

$pdf->Cell(94.5	,5,'Omys Card',1,0);
$pdf->Cell(94.5	,5,$invoice['omys_card'],1,1);

$pdf->Cell(94.5	,5,'Status',1,0);
$pdf->Cell(94.5	,5,$invoice['status'],1,1);

$pdf->Cell(94.5	,5,'Occupation',1,0);
$pdf->Cell(94.5	,5,$invoice['occupation'],1,1);

$pdf->Cell(94.5	,5,'Father/Husband Name',1,0);
$pdf->Cell(94.5	,5,$invoice['fh_name'],1,1);

$pdf->Cell(94.5	,5,'Father/Husband Occupation',1,0);
$pdf->Cell(94.5	,5,$invoice['fh_occupation'],1,1);

$pdf->Cell(94.5	,5,'Mother Name',1,0);
$pdf->Cell(94.5	,5,$invoice['m_name'],1,1);

$pdf->Cell(94.5	,5,'Mother Occupation',1,0);
$pdf->Cell(94.5	,5,$invoice['m_occupation'],1,1);

$pdf->Cell(94.5	,5,'Blood Group',1,0);
$pdf->Cell(94.5	,5,$invoice['bloodGrp'],1,1);




// //Numbers are right-aligned so we give 'R' after new line parameter

// //items
// $query = mysqli_query($con,"select * from item where invoiceID = '".$invoice['invoiceID']."'");
// $tax = 0; //total tax
// $amount = 0; //total amount

// //display the items
// while($item = mysqli_fetch_array($query)){
// 	$pdf->Cell(130	,5,$item['itemName'],1,0);
// 	//add thousand separator using number_format function
// 	$pdf->Cell(25	,5,number_format($item['tax']),1,0);
// 	$pdf->Cell(34	,5,number_format($item['amount']),1,1,'R');//end of line
// 	//accumulate tax and amount
// 	$tax += $item['tax'];
// 	$amount += $item['amount'];
// }

// //summary
// $pdf->Cell(130	,5,'',0,0);
// $pdf->Cell(25	,5,'Subtotal',0,0);
// $pdf->Cell(4	,5,'$',1,0);
// $pdf->Cell(30	,5,number_format($amount),1,1,'R');//end of line

// $pdf->Cell(130	,5,'',0,0);
// $pdf->Cell(25	,5,'Taxable',0,0);
// $pdf->Cell(4	,5,'$',1,0);
// $pdf->Cell(30	,5,number_format($tax),1,1,'R');//end of line

// $pdf->Cell(130	,5,'',0,0);
// $pdf->Cell(25	,5,'Tax Rate',0,0);
// $pdf->Cell(4	,5,'$',1,0);
// $pdf->Cell(30	,5,'10%',1,1,'R');//end of line

// $pdf->Cell(130	,5,'',0,0);
// $pdf->Cell(25	,5,'Total Due',0,0);
// $pdf->Cell(4	,5,'$',1,0);
// $pdf->Cell(30	,5,number_format($amount + $tax),1,1,'R');//end of line





















$pdf->Output();
?>