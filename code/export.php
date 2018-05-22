<?php

$IE = 0;
//$filename = "con.csv";
//$filename = '=?utf-8?b?5Lit5paHY29uLmNzdg==?=';
$filename = '=?utf-8?q?con=2Ecsv?=';
error_log("filename: (" . $filename . ")");

if ($IE) {
    header('Pragma: no-cache');
} else {
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Pragma: no-cache');
}

header('Expires: 0');
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename=' . $filename . ';');
header('Content-Transfer-Encoding: binary');

echo "col1,col2\r\n";
echo "value1,value2\r\n";
