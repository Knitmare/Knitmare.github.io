<?php
    $formatterES = new NumberFormatter("es", NumberFormatter::SPELLOUT);
    require_once "cliente.php";
    $fpdf->SetFontSize(16);
    $fpdf->SetXY(3,82);
    $izq=intval(floor($_POST["monto"]));
    $der=intval(($_POST["monto"]-floor($_POST["monto"]))*100);
    $fpdf->MultiCell(0,5,"Recibi(mos) la suma de Pesos : ".iconv('UTF-8', 'windows-1252',$formatterES->format($izq))." con ".iconv('UTF-8', 'windows-1252',$formatterES->format($der)),0,"L");
    $fpdf->SetXY(3,150);
    $fpdf->MultiCell(0,5,"En concepto de de: ".iconv('UTF-8', 'windows-1252',$_POST["concepto"]),0,"L");
    $fpdf->SetXY(3,250);
    $fpdf->Cell(60,10,"Son: ". $_POST["monto"],1,0,"C");
    $fpdf->SetXY(150,250);
    $fpdf->Cell(40,10,"Firma:",0,1,"L");
    $fpdf->Image("firma.png",165,240,45,45);
    //$fpdf->line(170,257,210,257);
   // $fpdf->SetXY(140,265);
    //$fpdf->Cell(40,10,"aclaracion:",0,1,"L");
    //$fpdf->line(170,272,210,272);
    $fpdf->Output();
    $handle=fopen("recibo.txt","w");
    fwrite($handle,$numero+1);
    fclose($handle);
?>