<?php
    require('fpdf/fpdf.php');

    include('connect.php');

    $pdf = new FPDF();

    $pdf->AddPage();

    $pdf->SetFont('Times', 'B', 20);

    $pdf->Cell(176, 5, 'INVOICE', 0, 0, 'C');

    $pdf->Ln();

    $pdf->SetFont('Times', 'B', 12);

    $pdf->Cell(176, 10, 'Thanks for shopping with us!', 0, 0, 'C');

    $pdf->Output();
?>