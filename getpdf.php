<?php


require 'fpdf17/fpdf.php';
extract($_GET);
session_start();
$pdf = new FPDF('P', 'pt', 'A4');
$pdf->AddPage();

$pdf->SetFont('Times', 'B', 28);
$pdf->Cell(0,10,'', 0, 2, 'C');
$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();
$pdf->Cell(0,10,'My Business Model', 0, 2, 'C');
$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();
$pdf->SetFont('Times', 'B', 16);
$pdf->Cell(0,10,'Name: '.$_SESSION['name'], 0, 2, 'C');
$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();
$pdf->Cell(0,10,'Username: '.$_SESSION['username'], 0, 2, 'C');
$pdf->Image("img/pesitlogo.gif", 200, 450, 200,210);  
$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();
$pdf->Cell(0,10,'Dated: '.date("Y/m/d"), 0, 2, 'C');
$pdf->AddPage();

$disclaimer = "Thank you for using the Business Model Innovator. The report generated at the end of all the stages might not be 100% feasible. Thus the user must have an alternate business model in mind. We don't guarantee full success as the model has been generated at the behest of the user. The user should have some background knowledge regarding the idea he wants to proceed with. Although help has been provided the user can consult someone well versed in using business tactics who might have a fair idea as to what is going on in the market. There are stages which would require thorough research on the part of the user. For example if the user wants to create a business model based on some technology he has to do a proper survey of location of a particular area to know wether the technology will be feasible there or not.";
$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();
$pdf->SetFont( 'Arial', 'B', 24);
$pdf->Cell(0,10,'Disclaimer', 0, 2, 'C');
$pdf->Ln();$pdf->Ln();$pdf->Ln();
$pdf->SetFont( 'Times', '', 14 );
$pdf->MultiCell(0, 20, $disclaimer, 0, 'L');
$pdf->AddPage();

$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();
$image1="img/keypartnerships.jpg";
$pdf->Image($image1, 350, 400, 200,300);  
$pdf->SetFont( 'Arial', 'B', 24 );
$pdf->Cell(0,10,'Section 1', 0, 2, 'C');
$pdf->Ln();$pdf->Ln();$pdf->Ln();
$pdf->Cell(0,10,'Key Partners', 0, 2, 'C');
$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();
$pdf->SetFont( 'Times', '', 16 );
$pdf->MultiCell(0, 20, $kp, 0, 'L');
$pdf->Ln();
$pdf->AddPage();

$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();
$image2="img/keyactivities.jpg";
$pdf->Image($image2, 350, 400, 200,300);  
$pdf->SetFont( 'Arial', 'B', 24);
$pdf->Cell(0,10,'Section 2', 0, 2, 'C');
$pdf->Ln();$pdf->Ln();$pdf->Ln();
$pdf->Cell(0,10,'Key Activities', 0, 2, 'C');
$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();
$pdf->SetFont( 'Times', '', 16 );
$pdf->MultiCell(0, 20, $ka, 0, 'L');
$pdf->Ln();
$pdf->AddPage();


$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();
$image2="img/keyresources.jpg";
$pdf->Image($image2, 350, 400, 200,300);  
$pdf->SetFont( 'Arial', 'B', 24);
$pdf->Cell(0,10,'Section 3', 0, 2, 'C');
$pdf->Ln();$pdf->Ln();$pdf->Ln();
$pdf->Cell(0,10,'Key Resources', 0, 2, 'C');
$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();
$pdf->SetFont( 'Times', '', 16 );
$pdf->MultiCell(0, 20, $kr, 0, 'L');
$pdf->Ln();
$pdf->AddPage();


$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();
$image2="img/valuepropositions.jpg";
$pdf->Image($image2, 350, 400, 200,300);  
$pdf->SetFont( 'Arial', 'B', 24 );
$pdf->Cell(0,10,'Section 4', 0, 2, 'C');
$pdf->Ln();$pdf->Ln();$pdf->Ln();
$pdf->Cell(0,10,'Value Propositions', 0, 2, 'C');
$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();
$pdf->SetFont( 'Times', '', 16 );
$pdf->MultiCell(0, 20, $vp, 0, 'L');
$pdf->Ln();
$pdf->AddPage();


$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();
$image2="img/customerrelationships.jpg";
$pdf->Image($image2, 350, 400, 200,300);  
$pdf->SetFont( 'Arial', 'B', 24);
$pdf->Cell(0,10,'Section 5', 0, 2, 'C');
$pdf->Ln();$pdf->Ln();$pdf->Ln();
$pdf->Cell(0,10,'Customer Relationships', 0, 2, 'C');
$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();
$pdf->SetFont( 'Times', '', 16 );
$pdf->MultiCell(0, 20, $cr, 0, 'L');
$pdf->Ln();
$pdf->AddPage();

$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();
$image2="img/channels.jpg";
$pdf->Image($image2, 350, 400, 200,300);  
$pdf->SetFont( 'Arial', 'B', 24);
$pdf->Cell(0,10,'Section 6', 0, 2, 'C');
$pdf->Ln();$pdf->Ln();$pdf->Ln();
$pdf->Cell(0,10,'Channels', 0, 2, 'C');
$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();
$pdf->SetFont( 'Times', '', 16 );
$pdf->MultiCell(0, 20, $ch, 0, 'L');
$pdf->Ln();
$pdf->AddPage();

$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();
$image2="img/customersegment.jpg";
$pdf->Image($image2, 350, 400, 200,300);  
$pdf->SetFont( 'Arial', 'B', 24);
$pdf->Cell(0,10,'Section 7', 0, 2, 'C');
$pdf->Ln();$pdf->Ln();$pdf->Ln();
$pdf->Cell(0,10,'Customer Segment', 0, 2, 'C');
$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();
$pdf->SetFont( 'Times', '', 16 );
$pdf->MultiCell(0, 20, $cs, 0, 'L');
$pdf->Ln();
$pdf->AddPage();

$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();
$image2="img/coststructures.jpg";
$pdf->Image($image2, 350, 400, 200,300);  
$pdf->SetFont( 'Arial', 'B', 24);
$pdf->Cell(0,10,'Section 8', 0, 2, 'C');
$pdf->Ln();$pdf->Ln();$pdf->Ln();
$pdf->Cell(0,10,'Cost Structures', 0, 2, 'C');
$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();
$pdf->SetFont( 'Times', '', 16 );
$pdf->MultiCell(0, 20, $cst, 0, 'L');
$pdf->Ln();
$pdf->AddPage();

$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();
$image2="img/revenue.jpg";
$pdf->Image($image2, 350, 400, 200,300);  
$pdf->SetFont( 'Arial', 'B', 24);
$pdf->Cell(0,10,'Section 9', 0, 2, 'C');
$pdf->Ln();$pdf->Ln();$pdf->Ln();
$pdf->Cell(0,10,'Revenue Stream', 0, 2, 'C');
$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();
$pdf->SetFont( 'Times', '', 16 );
$pdf->MultiCell(0, 20, $rs, 0, 'L');
$pdf->Ln();


$pdf->Output();

?>