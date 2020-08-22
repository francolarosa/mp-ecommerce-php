<?php


    $json_event = stream_get_contents(STDIN);
    $json_file = fopen("pago.json","w");
    fwrite($json_file,$json_event);


?>
