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
            ->setCellValue('A1', 'Identificacion')
            ->setCellValue('B1', 'Nombre')
            ->setCellValue('C1', 'Apellido')
            ->setCellValue('D1', 'Email')
            ->setCellValue('E1', 'telefono')
            ->setCellValue('F1', 'whatsapp')
            ->setCellValue('G1', 'cargo')
            ->setCellValue('H1', 'estado')
            ->setCellValue('I1', 'Fecha de ingreso');

 $informe = getusuario();
 $i = 2; 
   while($row = $informe->fetch_array(MYSQLI_ASSOC))
            {
                $objPHPExcel->setActiveSheetIndex(0)
                ->setCellValue("A$i", $row['identificacion'])
                ->setCellValue("B$i", $row['nombre'])
                ->setCellValue("C$i", $row['apellido'])
                ->setCellValue("D$i", $row['email'])
                ->setCellValue("E$i", $row['telefono'])
                ->setCellValue("F$i", $row['whatsapp'])
                ->setCellValue("G$i", $row['cargo'])
                ->setCellValue("H$i", $row['estado'])
                ->setCellValue("I$i", $row['fecha_ingreso']);
               

    $i++;
            }
  $objPHPExcel->getActiveSheet()->setTitle('Informe de usuario');


            
$objPHPExcel->setActiveSheetIndex(0);

getHeaders();

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');
exit;