<?php


$tip = $_POST['tip'];
$brA = $_POST['brA'];
$brS = $_POST['brS'];
$maxB = $_POST['maxB'];
$duzinaA = $_POST['duzinaA'];

header("Content-type: application/json");
$test_array = array (
 'tip' => $tip,
 'brAviona' => $brA,
 'brSedista' => $brS,
 'maxBrzina' => $maxB,
 'duzinaAviona' => $duzinaA,
);
echo json_encode($test_array);
?>
