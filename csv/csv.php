<?php

function readCSV($csvFile){
   $file_handle = fopen($csvFile, 'r');
   while (!feof($file_handle) ) {
     $line_of_text[] = fgetcsv($file_handle, 1024);
   }
   fclose($file_handle);
   return $line_of_text;
 }
$csvFile = 'test.csv';

$csv = readCSV($csvFile);

function html_table($data = array())
{
    $rows = array();
    foreach ($data as $row) {
        $cells = array();
        foreach ($row as $cell) {
            $cells[] = "<td>{$cell}</td>";
        }
        $rows[] = "<tr>" . implode('', $cells) . "</tr>";
     }
     return "<table class='hci-table'>"  . implode('', $rows) . "</table>";
}

echo html_table($csv);
?>
