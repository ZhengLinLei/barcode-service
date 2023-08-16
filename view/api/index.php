<?php
require_once "../../model/model.php";
require_once "../../controller/controller.php";

$mvc = new MVCcontroller();

if(isset($_GET['barcode'])){
    $mvc->getArticuloByBarcode($_GET['barcode']);
};
?>