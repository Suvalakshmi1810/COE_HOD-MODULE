<?php
class DBController {
	private $host = "localhost";
	private $user = "root";
	private $password = "";
	private $database = "module";  
	private $conn;
	public  $num;
	
    function __construct() {
        $this->conn = $this->connectDB();
	}	

	function connectDB() {
		$conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		return $conn;
	}

    function runQuery($query) {

		$result = mysqli_query($this->conn,$query);
		$this->num = mysqli_num_rows($result);
		while($row=mysqli_fetch_assoc($result)) {
		$resultset[] = $row;
		}		
		if(!empty($resultset))
		return $resultset;
		
	}
}
?>