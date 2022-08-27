<?php
//Class Start
class database{
	private $servername = "localhost";
	private $username = "root";
	private $password = "";
	private $dbname = "exam_system";
	
	private $mysqli = "";
	private $reasult = array();
	private $conn = false;
	
	//Constructor to execute autometically
	public function __construct(){
		if(!$this->conn){
			$this->mysqli = new mysqli($this->servername,$this->username,$this->password,$this->dbname);
			
			if($this->mysqli->connect_error){
				array_push($this->reasult,$this->mysqli->connect_error);
				return false;
			}
		}
		else{
			return true;
		}
	}
	
	//Function to insert into the database
	public function insert(){
		
	}
	
	//Function to update row in database
	public function update(){
		
	}
	
	//Function to delete table or row(s) in database
	public function delete(){
		
	}
	
	//Function to SELECT from the database
	public function select(){
		
	}
	
	//Close connection
	public function __destruct(){
		if($this->conn){
			if($this->mysqli->close()){
				$this->conn = false;
				return true;
			}
		}else{
			return false;
		}
	}
}
//Class Close
?>