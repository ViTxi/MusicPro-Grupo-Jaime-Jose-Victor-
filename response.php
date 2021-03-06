<?php
session_start();

use Freshwork\Transbank\CertificationBagFactory;  
use Freshwork\Transbank\RedirectorHelper;  
use Freshwork\Transbank\TransbankServiceFactory;  


include 'vendor/autoload.php';  

$bag = CertificationBagFactory::integrationWebpayNormal();  
$webpay = TransbankServiceFactory::normal($bag);

//resultado de la transaccion
$result = $webpay->getTransactionResult();

$_SESSION['responseCode'] = $result->detailOutput->responseCode;

if($result->detailOutput->responseCode == 0){
    //guardemos resultados en base de datos

} else{
    // marcar orden en base de datos como rechazada
}

//aca toma el dinero
$webpay->acknowledgeTransaction(); 

echo  RedirectorHelper::redirectBackNormal($result->urlRedirection);