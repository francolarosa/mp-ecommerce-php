<?php

// SDK de Mercado Pago
require 'vendor/autoload.php';

// Agrega credenciales
MercadoPago\SDK::setAccessToken('APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398');
MercadoPago\SDK::setIntegratorId("dev_24c65fb163bf11ea96500242ac130004");





function getURL(){
  $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
  $url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
  return str_replace("detail.php","",$url);
}





// Crea un objeto de preferencia, el item de compra y el comprador
$preference = new MercadoPago\Preference();



// Especificaciones del item
$item = new MercadoPago\Item();
$item->id = "1234";
$item->title = $_POST['title'];
$item->description = "Dispositivo móvil de Tienda e-commerce";
$item->picture_url = getURL() . str_replace("./","",$_POST['img']);
$item->quantity = 1;
$item->unit_price = $_POST['price'];




// Especificaciones de la preferecia
$preference->payment_methods = array(
  "excluded_payment_methods" => array(
    array("id" => "amex")
  ),
  "excluded_payment_types" => array(
    array("id" => "atm")
  ),
  "installments" => 6
);
$preference->external_reference = "franco.hugo.larosa@gmail.com";
$preference->back_urls = array(
    "success" => getUrl() . "backend/status/success.php",
    "failure" => getUrl() . "backend/status/failure.php",
    "pending" => getUrl() . "backend/status/pending.php"
);
$preference->auto_return = "approved";
$preference->notification_url = getURL() . "backend/notification/";

// Datos del comprador
$payer = new MercadoPago\Payer();
$payer->name = "Lalo";
$payer->surname = "Landa";
$payer->email = "test_user_63274575@testuser.com";
$payer->phone = array(
    "area_code" => "11",
    "number" => "22223333"
  );
$payer->address = array(
    "street_name" => "False",
    "street_number" => 123,
    "zip_code" => "1111"
  );



// Se Crea un ítem en la preferencia
$preference->items = array($item);
$preference->save();







?>
