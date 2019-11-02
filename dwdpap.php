<?php

	// require("utility.php");
		require("conn.php");
	$str="SELECT * from answer where question_id=$_GET[id]  ";
	$result=mysqli_query($db,$str);
	$row1=mysqli_fetch_array($result);

	$str1="SELECT * from question where question_id=$_GET[id]  ";
	$result1=mysqli_query($db,$str1);
	$row2=mysqli_fetch_array($result1);

	require("fpdf.php");

	class PDF extends FPDF {

		function Footer() {
		    $this->SetY(-15);
		    $this->SetFont('Arial','I',8);
			$this->Cell(190 - $this->GetStringWidth('Page '.$this->PageNo().'/{nb}'));
		    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
		}
	}

	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();

	$pdf->SetFont('Arial','B',16);
	$pdf->MultiCell(0,10,'Technical Discussion Forum','TB','C');

	$pdf->SetFont('Arial','B',14);
	$pdf->MultiCell(0,10, $row2['question_detail'],'TB','C');

	$pdf->SetFont('Arial','B',14);
	$pdf->MultiCell(0,10,$row1['answer_detail'],'TB','C');

	$pdf->SetFont('Arial','',12);

	$pdf->Output();


?>
