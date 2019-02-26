<?php
	include 'lib/bbdd_easy_interface.php';
    include 'plantilla.php';

    $link = bbdd_connection("localhost","root","asddsa","members");

    // echo $link;

	$query = "SELECT SURNAME FROM members";

	$resultado = mysqli_query($link, $query);

	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();


	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(70,6,'Nombre',1,0,'C',1);
	// $pdf->Cell(20,6,'Apellido',1,0,'C',1);
	// $pdf->Cell(70,6,'Grado',1,1,'C',1);

	$pdf->SetFont('Arial','',10);
    echo $resultado['SURNAME'];while($row = $resultado)
	{
		$pdf->Cell(70,6,utf8_decode($row['SURNAME']),1,0,'C');
		// $pdf->Cell(20,6,$row['SURNAME'],1,0,'C');
		// $pdf->Cell(70,6,utf8_decode($row['GRADO']),1,1,'C');
	}
	$pdf->Output();
?>
