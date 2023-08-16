<?php
require_once "../model/model.php";
require_once "../controller/controller.php";

$mvc = new MVCcontroller();

$data = $mvc->getVersion();

echo $data;