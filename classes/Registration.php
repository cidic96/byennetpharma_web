<?php
/*
*
*Class registration
*Handles the registration part
*
*/

class Registration 
{

	/**
   * @var object $db_connection The database connection
   */
  private $db_connection = null;
  /**
   * @var array $errors Collection of error messages
   */
  public $errors = array();
  /**
   * @var array $messages Collection of success / neutral messages
   */
  public $messages = array();

	/**
	 * the function "__construct()" automatically starts whenever an object of this class is created,
	 * you know, when you do "$registration = new Registration();"
	 */
	function __construct()
	{
    error_reporting(0);
		if (isset($_POST["register"])) {
			$this->registerNewUser();
		}
		
	}
 /**
   * handles the entire registration process. checks all error possibilities
   * and creates a new user in the database if everything is fine
   */

  private function registerNewUser()
  {
    if ((empty($_POST['firstName'])
          && empty($_POST['lastName'])
          && empty($_POST['userEmail']) 
          && empty($_POST['createPassword'])
          && empty($_POST['confirmPassword'])
          && empty($_POST['type'])
          && empty($_POST['place'])
          && empty($_POST['phoneNo'])) 
    ){
      $this->errors[] = "Fill the Registration Form";
    }
  	elseif (empty($_POST['firstName'])) {
   			$this->errors[] = "Empty First Name";	
   	}elseif (empty($_POST['lastName'])) {
   		$this->errors[] = " Empty Last Name";
   	}elseif (empty($_POST['userEmail'])) {
   			$this->errors[] = "Email cannot be empty";
   	}elseif (empty($_POST['place'])) {
        $this->errors[] = "Enter the Place";
    }elseif (empty($_POST['phoneNo'])) {
        $this->errors[] = "Enter the PhoneNo";
    }elseif (empty($_POST['createPassword'])||empty($_POST['confirmPassword'])) {
   			$this->errors[] = "Empty Password";
   	}elseif ($_POST['createPassword'] !== $_POST['confirmPassword']) {
   			$this->errors[] = "Password are not same";
   	}elseif (strlen($_POST['createPassword'])<6) {
   			$this->errors[] = "Password has a minimum length of 6 characters";
   	}elseif (strlen($_POST['userEmail'])>64) {
   			$this->errors[] = "Email does not contain more than 64 characters";
   	}elseif (!empty($_POST['firstName'])
   				&& !empty($_POST['lastName'])
   				&& !empty($_POST['userEmail'])
   				&& strlen($_POST['userEmail']) <= 64 
   				&& !empty($_POST['createPassword'])
   				&& !empty($_POST['confirmPassword'])
   				&& ($_POST['createPassword'] === $_POST['confirmPassword'])
   				&& !empty($_POST['type'])
   	) {

   			// create a database connection, using the constants from config/db.php (which we loaded in index.php)
        $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        // change character set to utf8 and check it
        if (!$this->db_connection->set_charset("utf8")) {
            $this->errorss[] = $this->db_connection->errors;
        }
        // if no connection errorss (= working database connection)
        if (!$this->db_connection->connect_errno) {

        	$first_name = htmlspecialchars($_POST['firstName']);
        	$last_name = htmlspecialchars($_POST['lastName']);
        	$user_email = htmlspecialchars($_POST['userEmail']);
        	$create_password = md5($_POST['createPassword']);
          $place = htmlspecialchars($_POST['place']);
          $phone_no = htmlspecialchars($_POST['phoneNo']);
        	$type = $_POST['type'];

        	$sql = "SELECT *
                  FROM user_detail
                  WHERE userEmail = '" . $user_email . "'";
        	$result_of_login_check = $this->db_connection->query($sql);

        	if ($result_of_login_check->num_rows == 1) {
        		$this->errors[] = "Sorry, email address is already registered";
        	}else{
        			// write new user's data into database
              $sql = "INSERT INTO user_detail(firstName,lastName,userEmail,userPassword,type,place,phoneNo)
                      VALUES('" . $first_name . "', '" . $last_name . "', '" . $user_email . "', '" . $create_password . "', '" . $type . "', '" . $place . "', '" . $phone_no . "')";
              $query_new_user_insert = $this->db_connection->query($sql);

              if ($query_new_user_insert) {
              		$this->messages[] = "!!! Registered";
              }else{
              	$this->errors[] = "Sorry, your registration failed. Please go back and try again.";
              }
        	}
        }else{
        	$this->errors[] = "Database connection problem.";
        }
   	}else{
   		$this->errors[] = "Please try again";
   	}





   }
  

}