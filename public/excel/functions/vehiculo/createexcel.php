<?php
require_once '../excel.php';

activeErrorReporting(); 

noCli();

require_once '../../Classes/PHPExcel.php';
require '../conexion.php';
require '..//modulos.php';

$objPHPExcel = new PHPExcel();


$objPHPExcel->getProperties()->setCreator("SILTO")
               ->setLastModifiedBy("Maarten Balliauw")
               ->setTitle("Office 2007 XLSX Test Document")
               ->setSubject("Office 2007 XLSX Test Document")
               ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
               ->setKeywords("office 2007 openxml php")
               ->setCategory("Test result file");

$objPHPExcel->getDefaultStyle()->getFont('A1:I1')->setName('Arial Narrow Bold')->setSize(15);  



$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A1', 'Placa')
            ->setCellValue('B1', 'Capacidad')
            ->setCellValue('C1', 'Seguridad')
            ->setCellValue('D1', 'Tecnomecanica')
            ->setCellValue('E1', 'Tipo de vehiculo')
            ->setCellValue('F1', 'Gps')
            ->setCellValue('G1', 'Estados')
            ->setCellValue('H1', 'Conductor')
            ->setCellValue('I1', 'Fecha de registro');

 $informe = getvehiculos();
 $i = 2; 
   while($row = $informe->fetch_array(MYSQLI_ASSOC))
            {
                $objPHPExcel->setActiveSheetIndex(0)
                ->setCellValue("A$i", $row['placa'])
                ->setCellValue("B$i", $row['capacidad'])
                ->setCellValue("C$i", $row['seguro'])
                ->setCellValue("D$i", $row['tecnomecanica'])
                ->setCellValue("E$i", $row['tipo_vehiculo'])
                ->setCellValue("F$i", $row['gps'])
                ->setCellValue("G$i", $row['estado'])
                ->setCellValue("H$i", $row['nombreconductor'])
                ->setCellValue("I$i", $row['fecha_registro']);
               

    $i++;
            }
  $objPHPExcel->getActiveSheet()->setTitle('Informe de vehiculos');


            
$objPHPExcel->setActiveSheetIndex(0);

getHeaders();

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');
exit;