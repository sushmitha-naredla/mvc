<?php
ini_set("display_errors",1);
require_once "/var/www/mvc/models/model.php";
require_once "/var/www/mvc/views/view.php";
class Controller { 
    private $model; 

    public function __construct(Model $model) {
    	 
        $this->model = $model; 
    } 

    
	public function select()
	{
		$this->model->select();
	}
}
?>