<?php

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://api.mercadopago.com/v1/payments/'.$_GET["collection_id"].'?access_token=APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);


echo 'FALLO tu pago<br>';
           print_r($result);

           return 200;
           echo "<a href='/index.php'>VOLVER AL INICIO</a>";






?>