<?php

include '../../config/Conexion.php';
require '../../lib/composer/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\SpreadSheet;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Color;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Style\Alignment;

$spreadsheet = new SpreadSheet();

$spreadsheet->getProperties()->setCreator("Equipo K-LIFICAME")->setTitle("Reporte Calificaciónes");

$spreadsheet->setActiveSheetIndex(0);
$hojaActiva = $spreadsheet->getActiveSheet();
$hojaActiva->setTitle("Calificaciones");

$hojaActiva->getColumnDimension('B')->setWidth(8);
$hojaActiva->setCellValue('B2', 'ID');

$hojaActiva->getColumnDimension('C')->setWidth(20);
$hojaActiva->setCellValue('C2', 'CALIFICACIÓN');

$hojaActiva->getColumnDimension('D')->setWidth(20);
$hojaActiva->setCellValue('D2', 'FECHA Y HORA');

// Estilo para los encabezados
$headerStyle = [
    'font' => [
        'bold' => true,
        'color' => ['argb' => Color::COLOR_WHITE]
    ],
    'alignment' => [
        'horizontal' => Alignment::HORIZONTAL_CENTER,
        'vertical' => Alignment::VERTICAL_CENTER,
    ],
    'fill' => [
        'fillType' => Fill::FILL_SOLID,
        'startColor' => ['argb' => 'FF4CAF50'], // Color verde
    ]
];

$hojaActiva->getStyle('B2:D2')->applyFromArray($headerStyle);

// Estilo para bordes de todas las celdas de la tabla
$borderStyle = [
    'borders' => [
        'allBorders' => [
            'borderStyle' => Border::BORDER_THIN,
            'color' => ['argb' => 'FF000000'],
        ],
    ],
    'alignment' => [
        'horizontal' => Alignment::HORIZONTAL_CENTER,
        'vertical' => Alignment::VERTICAL_CENTER,
    ],
];

$entidad = 1;
$mes = 9;
$anio = 2023;

$sql = "SELECT
            id, 
            id_escala,
            fecha_sys
        FROM
            calificaciones AS c
        WHERE MONTH(fecha_sys)=? AND YEAR(fecha_sys)=?
            order by id_escala;";
$stmt = $dbh->prepare($sql);
// Asignar parámetros y ejecutar
$stmt->bind_param("ss", $mes, $anio);
$stmt->execute();

// Vincular resultados de la consulta
$result = $stmt->get_result();

$posicion = 3;

// Recorrer resultados y guardar en arreglos
while ($row = $result->fetch_assoc()) {
    $hojaActiva->setCellValue('B' . $posicion, $row['id']);
    $hojaActiva->setCellValue('C' . $posicion, $row['id_escala']);
    $hojaActiva->setCellValue('D' . $posicion, $row['fecha_sys']);

    $posicion++;
}
// Aplicar estilos de bordes a todas las filas llenadas
$hojaActiva->getStyle('B2:D' . ($posicion - 1))->applyFromArray($borderStyle);

// Cerrar declaración
$stmt->close();

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Reporte.xlsx"');
header('Cache-Control: max-age=0');

$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
$writer->save('php://output');

/*
$writer = new Xlsx($spreadsheet);
$writer->save('Reporte Calificaciónes.xlsx');
*/

echo "    
    <script>
        // Redirige a la página anterior
        window.history.back();
    </script>
";

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>excel composer</title>
</head>

<body>

</body>

</html>