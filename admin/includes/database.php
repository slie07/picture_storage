<?php 

require_once("config.php");



class Database {


		public $connection;


		function __construct(){

		$this->open_db_connection();


		}


		public function open_db_connection(){

		$this->connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

		if(mysqli_connect_errno()){
			die("Database connection failed" . mysqli_error());


		}


}

	public function query($sql) {

		$result = msqli_query($this->connection, $sql);
		if(!result){
			die("Query Failed");

		}

		return $result;


	}



}




$database = new Database();
// $database->open_db_connection();







  ?>