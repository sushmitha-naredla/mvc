<?php
ini_set("display_errors",1);
require_once "/var/www/mvc/models/model.php";
require_once "/var/www/mvc/controllers/controller.php";

class View { 
    private $model; 
    private $controller; 
     
    public function __construct(Controller $controller, Model $model) { 
        $this->controller = $controller; 
        $this->model = $model; 
		
    } 
     
    public function output() {
    	
		echo '<a href="index.php?action=select"><h3>select<h3></a><br>';
       
    } 
	
}
?>