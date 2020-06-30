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
            ->setCellValue('A1', 'id_centro')
            ->setCellValue('B1', 'nombrecentro')
            ->setCellValue('C1', 'email')
            ->setCellValue('D1', 'telefono')
            ->setCellValue('E1', 'whatsapp')
            ->setCellValue('F1', 'departamento')
            ->setCellValue('G1', 'ciudad')
            ->setCellValue('H1', 'nombreusuario')
            ->setCellValue('I1', 'tipo_centro')
            ->setCellValue('J1', 'direccion');
 
$informe = getcentro();
 $i = 2; 
   while($row = $informe->fetch_array(MYSQLI_ASSOC))
            {
                $objPHPExcel->setActiveSheetIndex(0)
                ->setCellValue("A$i", $row['id_centro'])
                ->setCellValue("B$i", $row['nombrecentro'])
                ->setCellValue("C$i", $row['email'])
                ->setCellValue("D$i", $row['telefono'])
                ->setCellValue("E$i", $row['whatsapp'])
                ->setCellValue("F$i", $row['departamento'])
                ->setCellValue("G$i", $row['ciudad'])
                ->setCellValue("H$i", $row['nombreusuario'])
                ->setCellValue("I$i", $row['tipo_centro'])
                ->setCellValue("J$i", $row['direccion']);

    $i++;
            }
  $objPHPExcel->getActiveSheet()->setTitle('Informe de producto');


            
$objPHPExcel->setActiveSheetIndex(0);

getHeaders();

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');
exit;