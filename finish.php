
<?php



session_start();

use Freshwork\Transbank\CertificationBagFactory;  
use Freshwork\Transbank\TransbankServiceFactory;  

include 'index.php';

include 'vendor/autoload.php';  

$bag = CertificationBagFactory::integrationWebpayNormal();  

$webpay = TransbankServiceFactory::normal($bag);


$returnURL ='https://musicpro.localhost/musicpro/response.php';
$finalUrl ='https://musicpro.localhost/musicpro/finish.php';


$response = $webpay->initTransaction($returnURL, $finalUrl);



if ($_SESSION['responseCode'] == 0) {
   echo \Freshwork\Transbank\RedirectorHelper::redirectHTML($response->url, $response->token);
    
    return;
}

//obtener la transaccion que tenga el token


?>