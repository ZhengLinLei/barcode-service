<?php
require_once "../../config.php";
require_once "../../model/model.php";
require_once "../../controller/controller.php";

$mvc = new MVCcontroller();

if(!isset($_GET['barcode']) || empty($_GET['barcode'])){
    $sapi_type = php_sapi_name();
    if (substr($sapi_type, 0, 3) == 'cgi')
        header("Status: 400 Bad Request");
    else
        header("HTTP/1.1 400 Bad Request");
};

header('Content-Type: application/json; charset=utf-8');

$data = $mvc->getProductByBarcode($_GET['barcode']);


// Return request
$mvc->formateResponse('200', 'ok', $data);
?>