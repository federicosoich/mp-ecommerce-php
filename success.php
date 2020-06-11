<?php
 require_once 'vendor/autoload.php';
  
 MercadoPago\SDK::setAccessToken("APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398");
 MercadoPago\SDK::setIntegratorId("dev_24c65fb163bf11ea96500242ac130004");

           $payment = MercadoPago\Payment.find_by_id($_POST["id"]);
           print_r($payment);
           return 200;

?>