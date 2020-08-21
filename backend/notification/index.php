<?php

// $access_token = "APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398";
$json = file_get_contents('php://input', true);

$registro_de_pagos = fopen("pagos.json", "w");

fwrite($registro_de_pagos,$json . '\n');

?>
