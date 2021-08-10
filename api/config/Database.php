<?php
class Database{
	
	private $host  = 'webserverdb.cwfba2uvlasf.ap-south-1.rds.amazonaws.com';
    private $user  = 'admin';
    private $password   = "admin*123";
    private $database  = "phpzag_demo"; 
    
    public function getConnection(){		
		$conn = new mysqli($this->host, $this->user, $this->password, $this->database);
		if($conn->connect_error){
			die("Error failed to connect to MySQL: " . $conn->connect_error);
		} else {
			return $conn;
		}
    }
}
?>
