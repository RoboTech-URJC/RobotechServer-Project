<?php
	include 'lib/bbdd_easy_interface.php';
    include 'plantilla.php';

    $link = bbdd_connection("localhost","root","asddsa","members");
	$query = "SELECT * FROM members";
	
	$rs =mysqli_query($link,$query);

	$query = mysqli_fetch_row($rs);
	$value_output = $query[1];

	genpdf($value_output);

	function genpdf($val){
		$pdf = new PDF();
		$pdf->AliasNbPages();
		$pdf->AddPage();

		$pdf->SetFillColor(232,232,232);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(70,6,'Nombre',1,0,'C',1);
		// $pdf->Cell(20,6,'Apellido',1,0,'C',1);
		// $pdf->Cell(70,6,'Grado',1,1,'C',1);

		$pdf->SetFont('Arial','',10);

		$pdf->Cell(70,6,$val,1,0,'C');

		// while($row = mysqli_fetch_array($rs)){
		// 	$pdf->Cell(70,6,utf8_decode('pepe'),1,0,'C');
		// 	// $pdf->Cell(20,6,$row['SURNAME'],1,0,'C');
		// 	// $pdf->Cell(70,6,utf8_decode($row['GRADO']),1,1,'C');
		// }
		$pdf->Output();
	}
?>
