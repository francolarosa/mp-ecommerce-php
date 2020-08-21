<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">

      body{
        background: #239c23;
        color:white;
        font-family: Helvetica;
      }
      a{
        color:white;
      }
      .titulo{
        font-size: 4vw;
      }
    </style>
  </head>
  <body>
    <p class="titulo">La compra fue aprobada!! :D</p>
    <div class="">
      <p>Respuesta</p>
      <p>
        <?php
        $access_token = "APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398";
        if(isset($_GET['collection_id'])){
          echo "collection_id => " . $_GET['collection_id'] . "<br>";
          echo "collection_status => " . $_GET['collection_status'] . "<br>";
          echo "external_reference => " . $_GET['external_reference'] . "<br>";
          echo "payment_type => " . $_GET['payment_type'] . "<br>";
          echo "merchant_order_id => " . $_GET['merchant_order_id'] . "<br>";
          echo "preference_id => " . $_GET['preference_id'] . "<br>";
          echo "processing_mode => " . $_GET['processing_mode'] . "<br>";
          echo "merchant_account_id => " . $_GET['merchant_account_id'] . "<br>";
        }
        ?>
     </p>

    </div>
    <a href="../../index.php">Volver a la pagina principal</a>

  </body>
</html>
