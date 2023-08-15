<?php
// Create MVC Controller Class
class MVCcontroller {
    // Create MVC Model Class
    public $MVCmodel;
    // Create Constructor
    function __construct(){
        $this->MVCmodel = new MVCmodelDB();
    }
    public function getVersion() {
        return phpversion();
    }
    // ... Add custom methods

    public function getArticuloByBarcode($barcode = null){
        $barcode = '%'.$barcode.'%';
        $data = $this->MVCmodel->runQuerySQL("SELECT * FROM articulo WHERE ConsultaParcial LIKE :barcode;", [":barcode" => "$barcode"], true);
        echo json_encode($data);
    }
}