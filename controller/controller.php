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

    public function getProductByBarcode($barcode = null){
        $barcode = '%'.$barcode.'%';
        
        return $this->MVCmodel->runQuerySQL("SELECT * FROM $config['table_name'] WHERE $config['column_name'] LIKE :barcode;", [":barcode" => "$barcode"], true);
        
    }
    public function formateResponse($status, $text, $content) {
        die('{"client": {"POST": '.json_encode($_POST).', "GET": '.json_encode($_GET).'}, "server": {"status": '.$status.', "response": "'.$text.'", "content": '.$content.'}}');
    }
    public function scanDir($dir) {
        $result = array();
        $cdir = scandir($dir);
         
        foreach ($cdir as $key => $value) {
            if (!in_array($value,array(".","..", "README.md"))) {
                if (is_dir($dir . DIRECTORY_SEPARATOR . $value)) {
                    $result[$value] = dirToArray($dir . DIRECTORY_SEPARATOR . $value);
                } else {
                    $result[] = $value;
                }  
            }
        }
     
        return $result;
    }
}