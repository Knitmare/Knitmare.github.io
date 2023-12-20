<?php
    require_once "fpdf.php";
    $fpdf->SetXY(1,40);
    $fpdf->Cell($fpdf->GetPageWidth()-3,40,"",1,2,"L");
    $fpdf->SetXY(3,45);
    $fpdf->SetFontSize(12);
    $fpdf->Cell(0,5,"Senor/a: $_POST[nombre]",0,0,"L");
    $fpdf->SetXY(3,50);
    $fpdf->Cell(0,5,"Domicilio: $_POST[domicilio]",0,0,"L");
    $fpdf->SetXY(3,55);
    $fpdf->Cell(0,5,"Localidad: $_POST[localidad]",0,0,"L");
    $fpdf->SetXY(130,50);
    $fpdf->Cell(0,5,"Telefono: $_POST[telefono]",0,0,"L");
    $fpdf->SetXY(3,60);
    $fpdf->Cell(0,5,"I.V.A: $_POST[iva]",0,0,"L");
    $fpdf->SetXY(130,60);
    $fpdf->Cell(0,5,"C.U.I.T: $_POST[cuit]",0,0,"L");
?>