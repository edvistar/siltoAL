<?php

include_once "dompdf/autoload.inc.php";
use Dompdf\Dompdf;
$pdf = new Dompdf();

ob_start();
include_once "../views/admin/productopdf.php";
$html = ob_get_clean();

$pdf->loadHtml("$html");
$pdf->setPaper("A4"."landscape"); //tamaño y forma de la hoja
$pdf->render();
$pdf->stream("productos.pdf");
?>