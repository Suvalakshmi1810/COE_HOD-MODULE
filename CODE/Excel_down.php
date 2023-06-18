<?php

include 'DBController.php';

$conn = new DBController();

$productResult = $conn->runQuery("SELECT * FROM `ptudbtab_nominalroll`;");



$filename = "Export_excel.xls";
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=\"$filename\"");

$isPrintHeader = false;
if (! empty($productResult)) {
    foreach ($productResult as $row) {
        if (! $isPrintHeader) {
            echo implode("\t", array_keys($row)) . "\n";
            $isPrintHeader = true;
        }
        echo implode("\t", array_values($row)) . "\n";
    }
}
exit();



?>