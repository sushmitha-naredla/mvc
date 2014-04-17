
<?php
ini_set("display_errors",1);
include("db.php");
$databasee = new database('localhost', 'root', 'vsspl');
$databasee->connectdb();
$databasee->select('bug_tracker');
		
class Model { 
    public $text; 
     public $id;
    public function __construct() {
    	 
        $this->text = 'Hello world!'; 
    }
	public function select()
	{
		
		$result = mysql_query('SELECT * FROM bugs where ID=11');

    while($row = mysql_fetch_assoc($result))
    {
  
     echo $row['ID'];
   
    }	
		
	}         
} 









?>