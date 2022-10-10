<?php
class establishConnection {
	var $host = 'localhost';
	var $username = 'root';
	var $password = '';
	var $db = 'unilia';
	var $myConn;
	
	function connect(){
		$con = mysqli_connect ($this->host, $this->username, $this->password, $this->db);
		
		if(!$con){
			die ('Could not connect to the database');
		}else{
			$this->myConn = $con;
		}
		return $this->myConn;
	}
	
	function close() {
		mysqli_close ($myConn);
			echo "Connection closed" ;
	}
}

?>