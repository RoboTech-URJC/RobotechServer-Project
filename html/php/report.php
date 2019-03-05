<?php
	include 'lib/bbdd_easy_interface.php';
    include 'plantilla.php';
    $link = bbdd_connection("localhost","root","asddsa","members");
	$query = "SELECT * FROM members";

	$rs =mysqli_query($link,$query);

	$rows = mysqli_num_rows($rs);
	membersinfo($rows,$rs);

	function membersinfo($rows,$rs){
		$pdf = new PDF();
		$pdf->AliasNbPages();
		$pdf->AddPage();
		$pdf->Header('Listado de miembros a fecha de: '.date('l jS \of F Y'));
		$pdf->SetFillColor(232,232,232);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(30,6,'Nombre',1,0,'C',1);
		$pdf->Cell(30,6,'Apellido',1,0,'C',1);
		$pdf->Cell(30,6,'DNI',1,0,'C',1);
		$pdf->Cell(70,6,'URJC mail',1,0,'C',1);
		$pdf->Cell(30,6,'Grado',1,0,'C',1);
		$pdf->Ln();
		$pdf->SetFont('Arial','',10);
		for ($i = 0; $i < $rows; $i++) {
			$arr = mysqli_fetch_row($rs);
			$pdf->Cell(30,6,$arr[1],1,0,'C',1);
			$pdf->Cell(30,6,$arr[2],1,0,'C',1);
			$pdf->Cell(30,6,$arr[3],1,0,'C',1);
			$pdf->Cell(70,6,$arr[4],1,0,'C',1);
			$pdf->Cell(30,6,$arr[5],1,0,'C',1);
			$pdf->Ln();
		}
		$pdf->Output('',$name='memberlist.pdf');

	}
?>
