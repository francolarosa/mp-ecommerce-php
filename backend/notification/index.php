<?php


    $json_event = file_get_contents('php://input', true);
    $json_file = fopen("pago.json","w");
    if(isset($_POST)){
      if(isset($_POST['type'])){
        fwrite($json_file,$_POST['type']);
      }
      else{
        fwrite($json_file,"no hay post type");
      }
    }

    if(isset($_GET)){
      if(isset($_GET['topic'])){
        fwrite($json_file,"topic => ".$_GET['topic']);
      }
      else{
        fwrite($json_file,"no hay get topic");
      }

      if(isset($_GET['id'])){
        fwrite($json_file,"id => ".$_GET['id']);
      }
      else{
        fwrite($json_file,"no hay get id");
      }
    }



?>
