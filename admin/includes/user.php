<?php 


class User extends Db_object {



    protected static $db_table = "users";
    protected static $db_table_fields = array('username','password', 'first_name', 'last_name');

	public $id;
	public $username;
	public $password;
	public $first_name;
	public $last_name;


     public static function verify_user($username, $password){
    global $database;
    $username = $database->escape_string($username);
    $password = $database->escape_string($password);
        
    $sql = "SELECT * FROM ".self::$db_table." WHERE ";
    $sql .= "username = '{$username}' ";
    $sql .= "AND ";
    $sql .= "password = '{$password}' ";
    $sql .= "LIMIT 1";
    $the_result_array = self::find_by_query($sql);
        
    return !empty($the_result_array) ? array_shift($the_result_array) : false;  
        
        
        
    }


// public static function find_all() {

// return self::find_this_query("SELECT * FROM " . self::$db_table ." ");


// global $database;

// $result_set = $database->query("SELECT * FROM users");
// return $result_set;








// public static function find_by_id($user_id) {
// global $database;

// $the_result_array = self::find_this_query("SELECT * FROM ". self::$db_table . " WHERE id = $user_id LIMIT 1");

// return !empty($the_result_array) ? array_shift($the_result_array) : false;



// if(!empty($the_result_array)){

// $first_item = array_shift($the_result_array);

// return $first_item;



// }
// else{
// 	return false;
// }






// public static function find_this_query($sql) {
// global $database;

// $result_set = $database->query($sql);
// $the_object_array = array();

// while($row = mysqli_fetch_array($result_set)){

// 	$the_object_array[] = self::instantation($row);

// }

// return $the_object_array;

// }




// public static function instantation($the_record) {


// 							$the_object = new self;

                          


//                             foreach ($the_record as $the_attribute => $value) {
//                             if($the_object->has_the_attribute($the_attribute)){
//                             $the_object->$the_attribute = $value;

// 							}

                            
//                             }

//      return $the_object;



// }

  // $the_object->id = $found_user['id'];
                            // $the_object->username = $found_user['username'];
                            // $the_object->password = $found_user['password'];
                            // $the_object->first_name = $found_user['first_name'];
                            // $the_object->last_name = $found_user['last_name'];

// private function has_the_attribute($the_attribute) {

// $object_properties = get_object_vars($this);

// return array_key_exists($the_attribute, $object_properties);

// }









}


  ?>



  