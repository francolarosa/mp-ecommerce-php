<?php


    $json_event = file_get_contents('php://input', true);
    $json_file = fopen("pago.json","w");
    fwrite($json_file,json_encode($json_event));


?>
