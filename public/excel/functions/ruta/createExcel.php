<?php
require_once '../excel.php';

activeErrorReporting(); 

noCli();

require_once '../../Classes/PHPExcel.php';
require '../conexion.php';
require '../modulos.php';

$objPHPExcel = new PHPExcel();


$objPHPExcel->getProperties()->setCreator("SILTO")
               ->setLastModifiedBy("Maarten Balliauw")
               ->setTitle("Office 2007 XLSX Test Document")
               ->setSubject("Office 2007 XLSX Test Document")
               ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
               ->setKeywords("office 2007 openxml php")
               ->setCategory("Test result file");

$objPHPExcel->getDefaultStyle()->getFont()->setName('Arial Narrow Bold')->setSize(15);  



$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A1', 'id_ruta')
            ->setCellValue('B1', 'fecha_ruta')
            ->setCellValue('C1', 'hora_salida')
            ->setCellValue('D1', 'hora_llegada')
            ->setCellValue('E1', 'tipo_ruta')
            ->setCellValue('F1', 'precinto')
            ->setCellValue('G1', 'nombreConductor')
            ->setCellValue('H1', 'placa')
            ->setCellValue('I1', 'nombreCentro')
            ->setCellValue('J1', 'variedad_productos')
            ->setCellValue('K1', 'id_solicitud')
            ->setCellValue('L1', 'observaciones');

 $informe = getruta();
 $i = 2; 
   while($row = $informe->fetch_array(MYSQLI_ASSOC))
            {
                $objPHPExcel->setActiveSheetIndex(0)
                ->setCellValue("A$i", $row['id_ruta'])
                ->setCellValue("B$i", $row['fecha_ruta'])
                ->setCellValue("C$i", $row['hora_salida'])
                ->setCellValue("D$i", $row['hora_llegada'])
                ->setCellValue("E$i", $row['tipo_ruta'])
                ->setCellValue("F$i", $row['precinto'])
                ->setCellValue("G$i", $row['nombreConductor'])
                ->setCellValue("H$i", $row['placa'])
                ->setCellValue("I$i", $row['nombreCentro'])
                ->setCellValue("J$i", $row['variedad_productos'])
                ->setCellValue("K$i", $row['id_solicitud'])
                ->setCellValue("L$i", $row['observaciones']);
               

    $i++;
            }
  $objPHPExcel->getActiveSheet()->setTitle('Informe de producto');


            
$objPHPExcel->setActiveSheetIndex(0);

getHeaders();

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');
exit;