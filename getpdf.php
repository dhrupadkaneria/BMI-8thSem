<?php

	require 'fpdf17/fpdf.php';
	extract($_GET);

	session_start();
	$name = $_SESSION['name'];
	
	$pdf = new FPDF('P', 'pt', 'A4');
	$pdf->AddPage();

	$pdf->SetFont('Times', 'B', 16);
	$pdf->Cell(0,10,'My Business Model', 0, 2, 'C');
	$pdf->Ln();
	$pdf->Cell(0,10,'By '.$name, 0, 2, 'C');

	$pdf->SetFont('Times', '', 12);
	
	$pdf->Ln();
	$pdf->MultiCell(0, 20, "Key Partners: ".$kp, 0, 'L');
	$pdf->Ln();
	$pdf->MultiCell(0, 20, "Key Activities: ".$ka, 0, 'L');
	$pdf->Ln();
	$pdf->MultiCell(0, 20, "Key Resources: ".$kr, 0, 'L');
	$pdf->Ln();
	$pdf->MultiCell(0, 20, "Value Propositions: ".$vp, 0, 'L');
	$pdf->Ln();
	$pdf->MultiCell(0, 20, "Customer Relationships: ".$cr, 0, 'L');
	$pdf->Ln();
	$pdf->MultiCell(0, 20, "Channels: ".$ch, 0, 'L');
	$pdf->Ln();
	$pdf->MultiCell(0, 20, "Customer Segments: ".$cs, 0, 'L');
	$pdf->Ln();
	$pdf->MultiCell(0, 20, "Cost Structure: ".$cst, 0, 'L');
	$pdf->Ln();
	$pdf->MultiCell(0, 20, "Revenue Streams: ".$rs, 0, 'L');
	$pdf->Ln();
	
	$pdf->Output();
?>