<?php


    $body = file_get_contents('php://input', true);
    $json_file = fopen("pago.json","w");

    fwrite($json_file,$body);

    // if(isset($_POST)){
    //
    //   fwrite($json_file,"Hay POST"."\n");
    //
    //   if(isset($_POST['type']) && isset($_POST['id'])){
    //     fwrite($json_file,"type => " . $_POST['type'] . "\n");
    //     fwrite($json_file,"id => " . $_POST['id'] . "\n");
    //   }
    //   else{
    //     fwrite($json_file,"no hay post type ni id" . "\n");
    //   }
    //
    // }
    //
    // if(isset($_GET)){
    //
    //   fwrite($json_file,"Hay GET"."\n");
    //
    //   if(isset($_GET['topic'])){
    //     fwrite($json_file,"topic => ".$_GET['topic'] . "\n");
    //   }
    //   else{
    //     fwrite($json_file,"no hay get topic". "\n");
    //   }
    //
    //   if(isset($_GET['id'])){
    //     fwrite($json_file,"id => ".$_GET['id'] . "\n");
    //   }
    //   else{
    //     fwrite($json_file,"no hay get id" . "\n");
    //   }
    // }
    //


?>
