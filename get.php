<?php

header("Content-type: application/json");
$test_array = array (
 'tip' => 'mlaznjak',
 'brAviona' => 'JA7874',
 'brSedista' => '45',
 'maxBrzina' => '1000km/h',
 'duzinaAviona' => '20m',
);

echo json_encode($test_array);
?>