<h1>Import Datafeed</h1>

<?php

$file = "tele2-2000402-1910211.csv";

$row = 1;
if (($handle = fopen($file, "r")) !== FALSE) {

$linecount = count(file($file));
echo $linecount . " regels ingelezen";

    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
        $num = count($data);
        echo "<p> $num fields in line $row: <br /></p>\n";
        $row++;
        for ($c=0; $c < $num; $c++) {
            echo $data[$c] . "<br />\n";
        }
    }
    fclose($handle);
}
?>