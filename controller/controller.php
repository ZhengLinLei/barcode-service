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
}