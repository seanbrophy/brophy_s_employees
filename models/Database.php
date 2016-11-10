<?php

require_once("./includes/config.php");

class Database {

	private $connection;
	

	public function __construct() {
		$this->connection = new mysqli(SERVER,USER,PASSWORD,DATABASE);
		if($this->connection->connect_errno) {
			die("Database connection failed: ".mysqli_error());
		}
	}
	

	public function getAll() {
		$sql = "SELECT emp_id,emp_lname,emp_fname,emp_thumb FROM tbl_employees ORDER BY emp_lname ASC";
		$results = mysqli_query($this->connection, $sql);
		return $results;
	}
	

	public function getOne($id) {
		// beacause there is no tbl_jobs the following breaks
		//$sql = "SELECT * FROM tbl_employees,tbl_jobs WHERE tbl_jobs.job_id = tbl_employees.emp_job AND emp_id=".$id;
		$sql = "SELECT * FROM tbl_employees WHERE emp_id=".$id;
		$result = mysqli_query($this->connection, $sql);
		return $result;
	}
	
	public function searchEmployees($str){
		//SQL for search
		$sql = "SELECT * FROM tbl_employees WHERE emp_lname LIKE '%$str%' || emp_fname LIKE '%$str%' ORDER BY emp_lname ASC";
		$result = mysqli_query($this->connection, $sql);
		return $result;
	}
}