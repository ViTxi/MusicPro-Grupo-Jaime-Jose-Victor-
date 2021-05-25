<?php

use Freshwork\Transbank\CertificationBagFactory;  
use Freshwork\Transbank\TransbankServiceFactory;  

include 'index.php';

include 'vendor/autoload.php';  

$bag = CertificationBagFactory::integrationWebpayNormal();  

$webpay = TransbankServiceFactory::normal($bag);

// $webpay->addTransactionDetail( amount: 1000, buyOrder: 'prueba'.rand(1,100000));
// $webpay->initTransaction(returnURL: 'https://webpay.dev/response', finalUrl: 'https://webpay.dev/finish.php');
// print_r($response);
$totalpagar=$_POST['totalapagar'];
$buy_order=rand();
$session_id=rand();

//debemos implementar la importacion del archivo 'tienda.js' que seria el total a pagar
$amount= $totalpagar;

$returnURL ='https://musicpro.localhost/musicpro/response.php';
$finalUrl ='https://musicpro.localhost/musicpro/finish.php';


$webpay->addTransactionDetail($amount, $buy_order );
$response = $webpay->initTransaction($returnURL, $finalUrl);

//guardar la transaccion del token

echo \Freshwork\Transbank\RedirectorHelper::redirectHTML($response->url, $response->token);
?>



