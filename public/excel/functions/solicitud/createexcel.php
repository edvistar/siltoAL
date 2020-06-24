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

$objPHPExcel->getDefaultStyle()->getFont('A1:I1')->setName('Arial Narrow Bold')->setSize(15);  



$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A1', 'id_solicitud')
            ->setCellValue('B1', 'fecha_solicitud')
            ->setCellValue('C1', 'descripcion')
            ->setCellValue('D1', 'nombreCentro')
            ->setCellValue('E1', 'nombreUsuario');
 $informe = getsolicitud();
 $i = 2; 
   while($row = $informe->fetch_array(MYSQLI_ASSOC))
            {
                $objPHPExcel->setActiveSheetIndex(0)
                ->setCellValue("A$i", $row['id_solicitud'])
                ->setCellValue("B$i", $row['fecha_solicitud'])
                ->setCellValue("C$i", $row['descripcion'])
                ->setCellValue("D$i", $row['nombreCentro'])
                ->setCellValue("E$i", $row['nombreUsuario']);
              
    $i++;
            }
  $objPHPExcel->getActiveSheet()->setTitle('Informe de vehiculos');


            
$objPHPExcel->setActiveSheetIndex(0);

getHeaders();

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');
exit;